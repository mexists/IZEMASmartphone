<?php

	class ShopController extends Controller {
		public function actionIndex() {
			//$this->render('index');
			if (Yii::app()->request->isAjaxRequest == Yii::app()->getRequest()->getIsAjaxRequest())
				;
			$this->redirect($this->createUrl('/main/deviceForSale/'));
		}

		public function actionBrand($id) {

			if (isset($_GET['model'])) {
				$model_id = $this->getQuery('model');
				$BrandModel = BrandModel::model()->find('id=:id AND brand_id=:brand_id',
					array(':id' => $model_id, ':brand_id' => $id));

				$RelatedBrandModels = BrandModel::model()->findAll(array(
					'condition' => 'brand_id=:brand_id AND image_name IS NOT NULL',
					'params' => array(':brand_id' => $id),
					'order' => 'RAND()',
					'limit' => 6
				));

				//products
				$brand_ids = array();
				foreach (Brand::model()->findAll((new CDbCriteria())->addInCondition("name", Yii::app()->params->brands,
					'OR')) as $Brand)
					$brand_ids[$Brand->id] = $Brand->id;

				$ProductBrandModels = BrandModel::model()->findAll(array(
					//'select' => 'DISTINCT (brand_id) *',
					'condition' => 'image_name IS NOT NULL AND brand_id IN(' . implode(',', $brand_ids) . ')',
					'order' => 'RAND()',
					'group' => 'brand_id',
					'limit' => 4
				));

				$this->render('model', compact('ProductBrandModels', 'BrandModel', 'RelatedBrandModels'));
				Yii::app()->end();
			}

			$BrandModels = BrandModel::model()->findAll('brand_id=:brand_id AND image_name IS NOT NULL',
				array(':brand_id' => $id));
			/*foreach($BrandModels as $BrandModel){
				echo json_decode(file_get_contents("http://ajax.googleapis.com/ajax/services/search/images?v=1.0&rsz=1&as_sitesearch=gsmarena.com&q=$BrandModel->name"));
			}*/

			$this->render('brand', compact('BrandModels'));
		}

		public function actionAddToCart() {
			if (Yii::app()->request->isAjaxRequest) {

				//$carts = array($this->getPost('model-id')=>$this->getPost('quantity'));
				$id = $this->getPost('model-id');
				$quantity = $this->getPost('quantity');

				//push to yii session
				$session = Yii::app()->session;
				if (!isset($session['carts']) || count($session['carts']) == 0)
					$session['carts'] = array($id => $quantity);
				else {
					$carts = $session['carts'];
					$carts[$id] = $quantity;
					$session['carts'] = $carts;
				}

				echo json_encode(Yii::app()->session['carts']);
				Yii::app()->end();
			}
		}

		public function actionRemoveFromCart() {
			if (Yii::app()->request->isAjaxRequest) {

				//$carts = array($this->getPost('model-id')=>$this->getPost('quantity'));
				$id = $this->getPost('model-id');
				//$quantity = $this->getPost('quantity');

				//pop from yii session
				$session = Yii::app()->session;
				if (!isset($session['carts']) || count($session['carts']) == 0)
					;//$session['carts'] = array($id => $quantity);
				else {
					$carts = $session['carts'];
					unset($carts[$id]);//$carts[$id] = $quantity;
					$session['carts'] = $carts;
				}

				echo json_encode(Yii::app()->session['carts']);
				Yii::app()->end();
			}
		}

		public function actionCart() {

			if (!count(Yii::app()->session['carts']))
				$this->redirect(array('main/'));

			//products
			$brand_ids = array();
			foreach (Brand::model()->findAll((new CDbCriteria())->addInCondition("name", Yii::app()->params->brands,
				'OR')) as $Brand)
				$brand_ids[$Brand->id] = $Brand->id;

			$ProductBrandModels = BrandModel::model()->findAll(array(
				'condition' => 'image_name IS NOT NULL AND brand_id IN(' . implode(',', $brand_ids) . ')',
				'order' => 'RAND()',
				'group' => 'brand_id',
				'limit' => 4
			));

			//interested
			$InterestedBrandModels = BrandModel::model()->findAll(array(
				'condition' => 'image_name IS NOT NULL AND brand_id IN(' . implode(',', $brand_ids) . ')',
				'order' => 'RAND()',
				'group' => 'brand_id',
				'limit' => 2
			));

			$this->render('cart', compact('ProductBrandModels', 'InterestedBrandModels'));

		}

		public function actionCheckout() {
			if (!count(Yii::app()->session['carts']))
				$this->redirect(array('main/'));

			$User = NULL;

			//products
			$brand_ids = array();
			foreach (Brand::model()->findAll((new CDbCriteria())->addInCondition("name", Yii::app()->params->brands,
				'OR')) as $Brand)
				$brand_ids[$Brand->id] = $Brand->id;

			$ProductBrandModels = BrandModel::model()->findAll(array(
				'condition' => 'image_name IS NOT NULL AND brand_id IN(' . implode(',', $brand_ids) . ')',
				'order' => 'RAND()',
				'group' => 'brand_id',
				'limit' => 4
			));

			if (!Yii::app()->user->isGuest)
				$User = User::model()->findByPk(Yii::app()->user->id);

			$this->render('checkout', compact('User', 'ProductBrandModels'));
		}

		public function actionCreateApplication() {

			if (isset($_POST['Application'])) {

				$Application = new Application();
				$Application->attributes = $this->getPost('Application');
				$Application->user_id = Yii::app()->user->id;
				$Application->shipping_method = $this->getPost('Application')['shipping_method'][0];
				$Application->application_status_id = 1;
				$Application->save(FALSE);

				//reload application
				$Application = Application::model()->findByPk($Application->id);

				$subtotal = $shipping = 0;
				foreach (Yii::app()->session['carts'] as $model_id => $quantity) {
					$BrandModel = BrandModel::model()->findByPk($model_id);
					$subtotal += floatval($BrandModel->price) * floatval($quantity);

					$ApplicationsModel = new Applications();
					$ApplicationsModel->application_id = $Application->id;
					$ApplicationsModel->brand_id = $BrandModel->brand_id;
					$ApplicationsModel->brand_model_id = $BrandModel->id;
					$ApplicationsModel->quantity = $quantity;
					$ApplicationsModel->price = $BrandModel->price;
					$ApplicationsModel->total = doubleval($BrandModel->price) * intval($quantity);
					$ApplicationsModel->save(FALSE);
				}

				$Application->subtotal = $subtotal;
				$Application->shipping_charge = $shipping;
				$Application->total = $subtotal + $shipping;

				//generate application order number
				$salt = $Application->id . Yii::app()->user->id . intval($this->toDateTime($Application->created, 'Y'));
				$Application->application_no = $this->alphaID($salt);
				$Application->save(FALSE);

				$this->redirect('history');
			}

		}

		public function actionHistory() {
			//products
			$brand_ids = array();
			foreach (Brand::model()->findAll((new CDbCriteria())->addInCondition("name", Yii::app()->params->brands,
				'OR')) as $Brand)
				$brand_ids[$Brand->id] = $Brand->id;

			$ProductBrandModels = BrandModel::model()->findAll(array(
				'condition' => 'image_name IS NOT NULL AND brand_id IN(' . implode(',', $brand_ids) . ')',
				'order' => 'RAND()',
				'group' => 'brand_id',
				'limit' => 4
			));

			$ApplicationModels = Application::model()->findAll(array(
				'condition' => 'user_id=:user_id',
				'params' => array(':user_id' => Yii::app()->user->id),
				'order' => 't.id DESC'
			));
			$this->render('history', compact('ProductBrandModels', 'ApplicationModels'));

		}

		public function actionWishList() {

		}

	}