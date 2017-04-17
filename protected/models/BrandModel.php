<?php

/**
 * This is the model class for table "brand_model".
 *
 * The followings are the available columns in table 'brand_model':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $brand_id
 * @property integer $category_id
 * @property string $price
 * @property integer $stock_quantity
 * @property string $image_name
 * @property integer $brand_model_status_id
 */
class BrandModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BrandModel the static model class
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
		return 'brand_model';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id, brand_id, category_id, stock_quantity, brand_model_status_id', 'numerical', 'integerOnly'=>true),
			array('name, price, image_name', 'length', 'max'=>255),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, description, brand_id, category_id, price, stock_quantity, image_name, brand_model_status_id', 'safe', 'on'=>'search'),
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
			'brand'=>array(self::BELONGS_TO, 'Brand', 'brand_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'description' => 'Description',
			'brand_id' => 'Brand',
			'category_id' => 'Category',
			'price' => 'Price',
			'stock_quantity' => 'Stock Quantity',
			'image_name' => 'Image Name',
			'brand_model_status_id' => 'Brand Model Status',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('brand_id',$this->brand_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('stock_quantity',$this->stock_quantity);
		$criteria->compare('image_name',$this->image_name,true);
		$criteria->compare('brand_model_status_id',$this->brand_model_status_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}