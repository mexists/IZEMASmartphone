<?php

/**
 * This is the model class for table "application".
 *
 * The followings are the available columns in table 'application':
 * @property integer $id
 * @property string $application_no
 * @property integer $user_id
 * @property string $payment_method
 * @property string $subtotal
 * @property integer $shipping_charge
 * @property string $total
 * @property string $receipt_file
 * @property string $shipping_first_name
 * @property string $shipping_last_name
 * @property string $shipping_company
 * @property string $shipping_address_1
 * @property string $shipping_address_2
 * @property string $shipping_city
 * @property string $shipping_state
 * @property string $shipping_country
 * @property string $shipping_postcode
 * @property string $shipping_method
 * @property string $order_comments
 * @property string $ship_datetime
 * @property string $ship_within
 * @property integer $application_status_id
 * @property string $created
 * @property string $modified
 */
class Application extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Application the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'application';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, shipping_charge, application_status_id', 'numerical', 'integerOnly'=>true),
			array('application_no, payment_method, subtotal, total, receipt_file, shipping_first_name, shipping_last_name, shipping_company, shipping_address_1, shipping_address_2, shipping_city, shipping_state, shipping_country, shipping_postcode, shipping_method', 'length', 'max'=>255),
			array('order_comments, ship_datetime, ship_within, created, modified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, application_no, user_id, payment_method, subtotal, shipping_charge, total, receipt_file, shipping_first_name, shipping_last_name, shipping_company, shipping_address_1, shipping_address_2, shipping_city, shipping_state, shipping_country, shipping_postcode, shipping_method, order_comments, application_status_id, created, modified', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'application_status' => array(self::BELONGS_TO, 'ApplicationStatus', 'application_status_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id')
		);
	}

	public function afterFind(){
		$this->payment_method = "Direct Bank Transfer";
		$this->shipping_method = "Free Shipping";
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'application_no' => 'Application No',
			'user_id' => 'User',
			'payment_method' => 'Payment Method',
			'subtotal' => 'Subtotal',
			'shipping_charge' => 'Shipping Charge',
			'total' => 'Total',
			'receipt_file' => 'Receipt File',
			'shipping_first_name' => 'Shipping First Name',
			'shipping_last_name' => 'Shipping Last Name',
			'shipping_company' => 'Shipping Company',
			'shipping_address_1' => 'Shipping Address 1',
			'shipping_address_2' => 'Shipping Address 2',
			'shipping_city' => 'Shipping City',
			'shipping_state' => 'Shipping State',
			'shipping_country' => 'Shipping Country',
			'shipping_postcode' => 'Shipping Postcode',
			'shipping_method' => 'Shipping Method',
			'order_comments' => 'Order Comments',
			'application_status_id' => 'Application Status',
			'created' => 'Created',
			'modified' => 'Modified',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('application_no',$this->application_no,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('payment_method',$this->payment_method,true);
		$criteria->compare('subtotal',$this->subtotal,true);
		$criteria->compare('shipping_charge',$this->shipping_charge);
		$criteria->compare('total',$this->total,true);
		$criteria->compare('receipt_file',$this->receipt_file,true);
		$criteria->compare('shipping_first_name',$this->shipping_first_name,true);
		$criteria->compare('shipping_last_name',$this->shipping_last_name,true);
		$criteria->compare('shipping_company',$this->shipping_company,true);
		$criteria->compare('shipping_address_1',$this->shipping_address_1,true);
		$criteria->compare('shipping_address_2',$this->shipping_address_2,true);
		$criteria->compare('shipping_city',$this->shipping_city,true);
		$criteria->compare('shipping_state',$this->shipping_state,true);
		$criteria->compare('shipping_country',$this->shipping_country,true);
		$criteria->compare('shipping_postcode',$this->shipping_postcode,true);
		$criteria->compare('shipping_method',$this->shipping_method,true);
		$criteria->compare('order_comments',$this->order_comments,true);
		$criteria->compare('application_status_id',$this->application_status_id);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified',$this->modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}