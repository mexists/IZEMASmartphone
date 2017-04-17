<?php

class ApplicationController extends Controller {
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 *
	 * public function filters()
	 * {
	 * return array(
	 * 'accessControl', // perform access control for CRUD operations
	 * );
	 * }
	 *
	 * /**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 *
	 * public static function accessRules()
	 * {
	 * return array(
	 * array('allow',  // allow all users to perform 'index' and 'view' actions
	 * 'actions'=>array('index','view'),
	 * 'users'=>array('*'),
	 * ),
	 * array('allow', // allow authenticated user to perform 'create' and 'update' actions
	 * 'actions'=>array('create','update'),
	 * 'users'=>array('@'),
	 * ),
	 * array('allow', // allow admin user to perform 'admin' and 'delete' actions
	 * 'actions'=>array('admin','delete'),
	 * 'users'=>array('admin'),
	 * ),
	 * array('deny',  // deny all users
	 * 'users'=>array('*'),
	 * ),
	 * );
	 * }
	 *
	 * /**
	 * Displays a particular model.
	 *
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id) {

		$ApplicationsModels = Applications::model()->findAll('application_id=:application_id',
			[':application_id' => $id]);

		$this->render('view', [
			'model' => $this->loadModel($id),
			'ApplicationsModels' => $ApplicationsModels
		]);
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate() {
		$this->redirect(['shop/history/']);
		$model = new Application;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Application'])) {
			$model->attributes = $_POST['Application'];
			if ($model->save())
				$this->redirect(['view', 'id' => $model->id]);
		}

		$this->render('create', [
			'model' => $model,
		]);
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 *
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id) {
		$model = $this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Application'])) {

			$model->receipt_file = $this->uploadFile($_FILES['receipt'], "images/receipts");
			$model->application_status_id = 2;
			//$model->attributes = $_POST['Application'];
			if ($model->save(false))
				$this->redirect(['view', 'id' => $model->id]);
		}

		$this->render('update', [
			'model' => $model,
		]);
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 *
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id) {
		//if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : ['admin']);
		}
		//else
		//	throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex() {
		$this->redirect(['shop/history/']);
		$dataProvider = new CActiveDataProvider('Application');
		$this->render('index', [
			'dataProvider' => $dataProvider,
		]);
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin() {
		$this->redirect(['shop/history/']);

		$model = new Application('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['Application']))
			$model->attributes = $_GET['Application'];

		$this->render('admin', [
			'model' => $model,
		]);
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 *
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id) {
		$model = Application::model()->findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');

		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 *
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model) {
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'application-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionPurchaseReport($id) {
		$ApplicationsModel = Application::model()->findByPk($id);
		$ApplicationsModels = Applications::model()->findAll('application_id=:application_id',
			[':application_id' => $id]);

		$apps_html = "<table border='1' style='border:1px solid black; width: 100%;'>
<tr>
<th>Phone Brand & Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th>
</tr>";
		foreach ($ApplicationsModels as $i => $AppsModel):
			$apps_html .= "<tr>
<td>{$AppsModel->brand_model->brand->name} {$AppsModel->brand_model->name}</td>
<td><span>RM" . number_format($AppsModel->price, 2) . "</span></td>
<td style='text-align:center'>{$AppsModel->quantity}</td>
<td>RM" . number_format($AppsModel->total, 2) . "</td>
</tr>";
		endforeach;
		$apps_html .= "</table>";

		$title = "Order Information - " . Yii::app()->name;

		$html_pdf = "
<html>
	<head>
		<title>$title</title>
	</head>
	<body>
		<p style='text-align: right'>{$this->toDateTime(date('d-m-Y'), 'd/m/Y')}</p>
		<h1>$title</h1>

		<hr/>

		<h2>Order Details</h2>
		<table>
			<tr>
				<td><b>Order No:</b></td>
				<td>{$ApplicationsModel->application_no}</td>
			</tr>
			<tr>
				<td><b>Payment Method:</b></td>
				<td>Direct Bank Transfer</td>
			</tr>
			<tr>
				<td><b>Shipping Charge:</b></td>
				<td>RM" . number_format($ApplicationsModel->shipping_charge, 2) . "</td>
			</tr>
			<tr>
				<td><b>Total:</b></td>
				<td>RM" . number_format($ApplicationsModel->total, 2) . "</td>
			</tr>
			<tr>
				<td><b>Order Date:</b></td>
				<td>{$this->toDateTime($ApplicationsModel->created, "d/m/Y")}</td>
			</tr>
		</table>

		<hr/>

		<h2>Order item(s)</h2>
		$apps_html

		<br/><hr/>
	</body>
</html>
			";


		# mPDF
		$mPDF1 = Yii::app()->ePdf->mpdf();

		# You can easily override default constructor's params
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A5');

		# render (full page)
		$mPDF1->WriteHTML($html_pdf);

		# Outputs ready PDF
		$mPDF1->Output();
	}

	public function actionRepairReport($ticket) {
		$tickets_no = $this->getQuery('ticket');
		$Repair = Repair::model()->find('tickets_no=:tickets_no', [':tickets_no' => $tickets_no]);

		$title = "Repair Request Information - " . Yii::app()->name;

		$html_pdf = "
<html>
	<head>
		<title>$title</title>
	</head>
	<body>
		<p style='text-align: right'>{$this->toDateTime(date('d-m-Y'), 'd/m/Y')}</p>
		<h1>$title</h1>

		<hr/>
<form>
	<h3>Your Repair Request </h3>
	<table>
		<thead>
			<tr></tr>
		</thead>
		<tbody>
			<tr>
				<td><b>Tickets Number:</b></td>
				<td>{$Repair->tickets_no}</td>
			</tr>
			<tr>
				<td><b>Status:</b></td>
				<td>{$Repair->status->name}</td>
			</tr>
			<tr>
				<td><b>Request Date:</b></td>
				<td>" . date('l', strtotime($Repair->created)) . " " . $this->toDateTime($Repair->created, 'd/m/Y h:i a') . "</td>
			</tr>
			<tr>
				<td><b>Your Name:</b></td>
				<td>{$Repair->customer_name}</td>
			</tr>
			<tr>
				<td><b>Your E-mail:</b></td>
				<td>{$Repair->email}</td>
			</tr>
			<tr>
				<td><b>Your Phone:</b></td>
				<td>{$Repair->phone_no}</td>
			</tr>
			<tr>
				<td><b>Device:</b></td>
				<td>{$Repair->brand->name}</td>
			</tr>
			<tr>
				<td><b>Model:</b></td>
				<td>{$Repair->model_name}</td>
			</tr>
			<tr>
				<td><b>Color:</b></td>
				<td>{$Repair->color_name}</td>
			</tr>
			<tr>
				<td><b>Issue:</b></td>
				<td>
					<h5>{$Repair->issue_title}</h5>
					Details:-
					<p>{$Repair->issue_desc}</p>
				</td>
			</tr>
			<tr>
				<td><b>Repair Charge:</b></td>
				<td>RM" . number_format($Repair->charge, 2) . "</td>
			</tr>
			<tr>
				<td><b>Staff Feedback:</b></td>
				<td>
					<textarea>{$Repair->staff_msg}</textarea>
				</td>
			</tr>

			</tbody>
		</table>
</form>
</body>
</html>";

		# mPDF
		$mPDF1 = Yii::app()->ePdf->mpdf();

		# You can easily override default constructor's params
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A5');

		# render (full page)
		$mPDF1->WriteHTML($html_pdf);

		# Outputs ready PDF
		$mPDF1->Output();
	}
}
