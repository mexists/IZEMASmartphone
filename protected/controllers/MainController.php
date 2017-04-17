<?php

class MainController extends Controller {
	public function actionIndex() {
		//$this->render('index');
		if (Yii::app()->request->isAjaxRequest == Yii::app()->getRequest()->getIsAjaxRequest())
			;
		$this->redirect($this->createUrl('home'));
	}

	public function actionHome() {
		$LatestBrandModels = BrandModel::model()->findAll([
				'condition' => 'image_name IS NOT NULL',
				'order' => 'RAND()',
				'limit' => 6
		]);

		$TopBrandModels = BrandModel::model()->findAll([
				'condition' => 'image_name IS NOT NULL',
				'order' => 'RAND()',
				'limit' => 3
		]);

		$RecentBrandModels = BrandModel::model()->findAll([
				'condition' => 'image_name IS NOT NULL',
				'order' => 'RAND()',
				'limit' => 3
		]);

		$NewBrandModels = BrandModel::model()->findAll([
				'condition' => 'image_name IS NOT NULL',
				'order' => 'RAND()',
				'limit' => 3
		]);
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index',
				compact('LatestBrandModels', 'TopBrandModels', 'RecentBrandModels', 'NewBrandModels'));
	}

	public function actionShop() {
		$this->redirect('deviceForSale');
		$this->render('shop');
	}

	public function actionProduct() {
		$this->render('product');
	}

	public function actionDeviceForSale() {
		$criteria = new CDbCriteria();
		$Brands = Brand::model()->findAll($criteria->addInCondition("name", Yii::app()->params->brands,
				'OR'));
		$brand_ids = [];
		foreach ($Brands as $Brand)
			$brand_ids[$Brand->id] = $Brand->id;

		$BrandModels = BrandModel::model()->findAll([
			//'select' => 'DISTINCT (brand_id) *',
				'condition' => 'image_name IS NOT NULL AND brand_id IN(' . implode(',', $brand_ids) . ')',
				'order' => 'id',
				'group' => 'brand_id'
		]);

		$this->render('deviceforsale', compact('BrandModels'));
	}

	public function actionCart() {
		$this->render('cart');
	}

	public function actionCheckout() {
		$User = null;

		$Brands = Brand::model()->findAll((new CDbCriteria())->addInCondition("name", Yii::app()->params->brands,
				'OR'));
		$brand_ids = [];
		foreach ($Brands as $Brand)
			$brand_ids[$Brand->id] = $Brand->id;
		$BrandModels = BrandModel::model()->findAll([
				'condition' => 'brand_id IN(' . implode(',', $brand_ids) . ')',
				'order' => 'RAND()',
				'limit' => '4'
		]);

		if (!Yii::app()->user->isGuest)
			$User = User::model()->findByPk(Yii::app()->user->id);

		$this->render('checkout', compact('User', 'BrandModels'));
	}

	public function actionRepair() {
		$Brands = Brand::model()->findAll((new CDbCriteria())->addInCondition("name", Yii::app()->params->brands,
				'OR'));

		$User = null;
		if (!Yii::app()->user->isGuest) {
			$User = User::model()->findByPk(Yii::app()->user->id);
		}

		$Repair = new Repair();
		if (isset($_POST['submit'])) {
			$Repair->attributes = $_POST['Repair'];
			$Repair->repair_status = 1;
			if (!Yii::app()->user->isGuest) {
				$Repair->user_id = Yii::app()->user->id;
				$Repair->customer_name = Yii::app()->user->name;
			}

			$Repair->repair_file = $this->uploadFile($_FILES['repair'], "images/repairs");
			$Repair->save(false);

			//generate repair token
			$Repair->tickets_no = $this->alphaID($Repair->id . preg_replace("/\D*/i", "", $Repair->phone_no));
			$Repair->save(false);

			if (true) {
				$this->mailsend($Repair->email, Yii::app()->params['adminEmail'], 'IZEMASmartphone Repair Request',
						"Your tickets number is: <strong id='ticket'>{$Repair->tickets_no}</strong>");
			}

			Yii::app()->user->setFlash('success',
					'Thank you for contacting us. We will respond to you as soon as possible.');
			Yii::app()->user->setFlash('info',
					"Your tickets number is: <strong id='ticket'>{$Repair->tickets_no}</strong>");


			$this->redirect(Yii::app()->homeUrl);
		}

		$this->render('repair', compact("Brands", "User"));
	}

	public function actionTickets() {
		//products
		$brand_ids = [];
		foreach (Brand::model()->findAll((new CDbCriteria())->addInCondition("name", Yii::app()->params->brands,
				'OR')) as $Brand)
			$brand_ids[$Brand->id] = $Brand->id;

		$ProductBrandModels = BrandModel::model()->findAll([
				'condition' => 'image_name IS NOT NULL AND brand_id IN(' . implode(',', $brand_ids) . ')',
				'order' => 'RAND()',
				'group' => 'brand_id',
				'limit' => 4
		]);

		if (isset($_GET['ticket'])) {
			$tickets_no = $this->getQuery('ticket');
			$Repair = Repair::model()->find('tickets_no=:tickets_no', [':tickets_no' => $tickets_no]);
		} else
			$this->redirect(Yii::app()->user->returnUrl);

		$this->render('tickets', compact('Repair', 'ProductBrandModels'));
	}

	public function actionGetModel() {
		$data = null;
		$criteria = new CDbCriteria();

		if (isset($_GET['brand_id']) && isset($_GET['model_name'])) {
			$criteria->condition = "t.brand_id=:brand_id AND t.name LIKE '%{$this->getQuery('model_name')}%'";
			$criteria->params = [':brand_id' => $this->getQuery('brand_id')];
		}

		$BrandModels = BrandModel::model()->findAll($criteria);

		foreach ($BrandModels as $Model)
			$data[$Model->id] = $Model->name;

		if (Yii::app()->request->isAjaxRequest)
			echo json_encode($data);
		else
			return $data;
	}

	public function actionGetColor() {
		$data = null;
		$criteria = new CDbCriteria();

		if (isset($_GET['color'])) {
			$criteria->condition = "t.hex LIKE '%{$this->getQuery('color')}%' OR t.name LIKE '%{$this->getQuery('color')}%'";
		}

		$ColorModels = Color::model()->findAll($criteria);

		foreach ($ColorModels as $color)
			$data[$color->id] = $color->name;

		if (Yii::app()->request->isAjaxRequest)
			echo json_encode($data);
		else
			return $data;
	}

	public function actionCORS() {//cross origin resource sharing
		$url = $this->getQuery('url') . "?";
		$params = $this->getQuery('params');
		foreach ($params as $key => $val)
			$url .= "&$key=$val";

		echo file_get_contents(urldecode($url));
		//$this->CORS($url);
	}

	public function actionCategory() {
		$this->render('category');
	}

	public function actionOthers() {
		$this->render('others');
	}

	public function actionContact() {
		$this->render('contact');
	}

	public function actionParts() {
		$this->render('parts');
	}

	/* Mac*/
	public function actionPartsMac() {
		$this->render('partsMac');
	}

	public function actionMacbook() {
		$this->render('Mac/Macbook');
	}

	public function actionModelA1181() {
		$this->render('Mac/Macbook/ModelA1181');
	}

	public function actionModelA1278() {
		$this->render('Mac/Macbook/ModelA1278');
	}

	public function actionModelA1342() {
		$this->render('Mac/Macbook/ModelA1342');
	}

	public function actionRetina2015() {
		$this->render('Mac/Macbook/Retina2015');
	}

	public function actionMacbookAir() {
		$this->render('Mac/MacbookAir');
	}

	public function actionMacbookAir11() {
		$this->render('Mac/MacbookAir/MacbookAir11');
	}

	public function actionMacbookAir13() {
		$this->render('Mac/MacbookAir/MacbookAir13');
	}

	public function actionMacbookPro() {
		$this->render('Mac/MacbookPro');
	}

	public function actionMacbookPro13() {
		$this->render('Mac/MacbookPro/MacBookPro13');
	}

	public function actionMacbookPro15() {
		$this->render('Mac/MacbookPro/MacBookPro15');
	}

	public function actionMacbookPro17() {
		$this->render('Mac/MacbookPro/MacBookPro17');
	}

	/*END Mac*/

	/*IPhone*/

	public function actionPartsIPhone() {
		$this->render('partsIPhone');
	}

	public function actionIPhone3Gs() {
		$this->render('IPhone/IPhone3GS');
	}

	public function actionIPhone4() {
		$this->render('IPhone/IPhone4');
	}

	public function actionIPhone4S() {
		$this->render('IPhone/IPhone4S');
	}

	public function actionIPhone5() {
		$this->render('IPhone/IPhone5');
	}

	public function actionIPhone5C() {
		$this->render('IPhone/IPhone5C');
	}

	public function actionIPhone5S() {
		$this->render('IPhone/IPhone5S');
	}

	public function actionIPhone6() {
		$this->render('IPhone/IPhone6');
	}

	public function actionIPhone6Plus() {
		$this->render('IPhone/IPhone6Plus');
	}

	/*END IPhone*/

	/*IPad*/

	public function actionPartsIPad() {
		$this->render('partsIPad');
	}

	public function actionIPad1() {
		$this->render('IPad/IPad1');
	}

	public function actionIPad2() {
		$this->render('IPad/IPad2');
	}

	public function actionIPad3() {
		$this->render('IPad/IPad3');
	}

	public function actionIPad4() {
		$this->render('IPad/IPad4');
	}

	public function actionIPadAir1() {
		$this->render('IPad/IPadAir1');
	}

	public function actionIPadAir2() {
		$this->render('IPad/IPadAir2');
	}

	public function actionIPadMini1() {
		$this->render('IPad/IPadMini1');
	}

	public function actionIPadMini3() {
		$this->render('IPad/IPadMini3');
	}

	public function actionIPadMiniRetina() {
		$this->render('IPad/IPadMiniRetina');
	}

	/*END IPad*/

	/*IPod*/

	public function actionPartsIPod() {
		$this->render('partsIPod');
	}

	public function actionIPodMini() {
		$this->render('IPod/IPodMini');
	}

	public function actionIPodNano() {
		$this->render('IPod/IPodNano');
	}

	public function actionIPodShuffle() {
		$this->render('IPod/IPodShuffle');
	}

	public function actionIPodTouch() {
		$this->render('IPod/IPodTouch');
	}

	/*END IPod*/

	/*Android*/

	public function actionPartsAndroid() {
		$this->render('partsAndroid');
	}

	public function actionSamsungGalaxyS2() {
		$this->render('Android/SamsungGalaxyS2');
	}

	public function actionSamsungGalaxyS3() {
		$this->render('Android/SamsungGalaxyS3');
	}

	public function actionSamsungGalaxyS3Mini() {
		$this->render('Android/SamsungGalaxyS3Mini');
	}

	public function actionSamsungGalaxyS4() {
		$this->render('Android/SamsungGalaxyS4');
	}

	public function actionSamsungGalaxyS5() {
		$this->render('Android/SamsungGalaxyS5');
	}

	public function actionSamsungGalaxyNote() {
		$this->render('Android/SamsungGalaxyNote');
	}

	public function actionSamsungGalaxyNote2() {
		$this->render('Android/SamsungGalaxyNote2');
	}

	public function actionSamsungGalaxyNote3() {
		$this->render('Android/SamsungGalaxyNote3');
	}

	/*END Android*/

	/* Game Console*/
	public function actionPartsConsole() {
		$this->render('partsConsole');
	}

	public function actionMicrosoft() {
		$this->render('Console/Microsoft');
	}

	public function actionxboxOri() {
		$this->render('Console/Microsoft/xboxOri');
	}

	public function actionxbox360() {
		$this->render('Console/Microsoft/xbox360');
	}

	public function actionxbox360S() {
		$this->render('Console/Microsoft/xbox360S');
	}

	public function actionxboxOne() {
		$this->render('Console/Microsoft/xboxOne');
	}

	public function actionNintendo() {
		$this->render('Console/Nintendo');
	}

	public function actionWii() {
		$this->render('Console/Nintendo/Wii');
	}

	public function actionDS() {
		$this->render('Console/Nintendo/DS');
	}

	public function actionDSlite() {
		$this->render('Console/Nintendo/DSlite');
	}

	public function actionDSi() {
		$this->render('Console/Nintendo/DSi');
	}

	public function actionDSiXL() {
		$this->render('Console/Nintendo/DSiXL');
	}

	public function action3DS() {
		$this->render('Console/Nintendo/3DS');
	}

	public function action3DSXL() {
		$this->render('Console/Nintendo/3DSXL');
	}

	public function action2DS() {
		$this->render('Console/Nintendo/2DS');
	}

	public function actionSony() {
		$this->render('Console/Sony');
	}

	public function actionPS3() {
		$this->render('Console/Sony/PS3');
	}

	public function actionPS3Slim() {
		$this->render('Console/Sony/PS3Slim');
	}

	public function actionPS3SuperSlim() {
		$this->render('Console/Sony/PS3SuperSlim');
	}

	public function actionPS4() {
		$this->render('Console/Sony/PS4');
	}

	public function actionPSP2000() {
		$this->render('Console/Sony/PSP2000');
	}

	public function actionPSP3000() {
		$this->render('Console/Sony/PSP3000');
	}

	public function actionPSPGo() {
		$this->render('Console/Sony/PSPGo');
	}

	public function actionPSVita() {
		$this->render('Console/Sony/PSVita');
	}
	/*END Game Console*/
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/


}