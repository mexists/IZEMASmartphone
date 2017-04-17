<?php

/**
 * This is the model class for table "repair".
 *
 * The followings are the available columns in table 'repair':
 * @property integer $id
 * @property integer $user_id
 * @property string $customer_name
 * @property string $email
 * @property string $phone_no
 * @property integer $brand_id
 * @property string $model_name
 * @property string $color_name
 * @property string $issue_title
 * @property string $issue_desc
 * @property string $repair_file
 * @property string $tickets_no
 * @property string $charge
 * @property string $staff_msg
 * @property integer $repair_status
 * @property string $created
 * @property string $modified
 */
class Repair extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Repair the static model class
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
		return 'repair';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, brand_id, repair_status', 'numerical', 'integerOnly'=>true),
			array('customer_name, email, phone_no, model_name, color_name, issue_title, repair_file, tickets_no, charge', 'length', 'max'=>255),
			array('issue_desc, staff_msg, created, modified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, customer_name, email, phone_no, brand_id, model_name, color_name, issue_title, issue_desc, repair_file, tickets_no, charge, staff_msg, repair_status, created, modified', 'safe', 'on'=>'search'),
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
			'brand' => array(self::BELONGS_TO, 'brand', 'brand_id'),
			'status' => array(self::BELONGS_TO, 'RepairStatus', 'repair_status')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'customer_name' => 'Customer Name',
			'email' => 'Email',
			'phone_no' => 'Phone No',
			'brand_id' => 'Brand',
			'model_name' => 'Model Name',
			'color_name' => 'Color Name',
			'issue_title' => 'Issue Title',
			'issue_desc' => 'Issue Desc',
			'repair_file' => 'Repair File',
			'tickets_no' => 'Tickets No',
			'charge' => 'Charge',
			'staff_msg' => 'Staff Message',
			'repair_status' => 'Repair Status',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('customer_name',$this->customer_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone_no',$this->phone_no,true);
		$criteria->compare('brand_id',$this->brand_id);
		$criteria->compare('model_name',$this->model_name,true);
		$criteria->compare('color_name',$this->color_name,true);
		$criteria->compare('issue_title',$this->issue_title,true);
		$criteria->compare('issue_desc',$this->issue_desc,true);
		$criteria->compare('repair_file',$this->repair_file,true);
		$criteria->compare('tickets_no',$this->tickets_no,true);
		$criteria->compare('charge',$this->charge,true);
		$criteria->compare('staff_msg',$this->staff_msg,true);
		$criteria->compare('repair_status',$this->repair_status);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified',$this->modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}