<?php

	/**
	 * This is the model class for table "address".
	 *
	 * The followings are the available columns in table 'address':
	 * @property string $id
	 * @property string $address
	 * @property string $address2
	 * @property string $district
	 * @property string $city_id
	 * @property string $postal_code
	 * @property string $phone
	 * @property string $modified
	 */
	class Address extends CActiveRecord {
		/**
		 * Returns the static model of the specified AR class.
		 *
		 * @param string $className active record class name.
		 *
		 * @return Address the static model class
		 */
		public static function model($className = __CLASS__) {
			return parent::model($className);
		}

		/**
		 * @return string the associated database table name
		 */
		public function tableName() {
			return 'address';
		}

		/**
		 * @return array validation rules for model attributes.
		 */
		public function rules() {
			// NOTE: you should only define rules for those attributes that
			// will receive user inputs.
			return array(
				array('address, address2, district, postal_code, phone', 'length', 'max' => 255),
				array('city_id', 'length', 'max' => 11),
				array('modified', 'safe'),
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array(
					'id, address, address2, district, city_id, postal_code, phone, modified',
					'safe',
					'on' => 'search'
				),
			);
		}

		/**
		 * @return array relational rules.
		 */
		public function relations() {
			// NOTE: you may need to adjust the relation name and the related
			// class name for the relations automatically generated below.
			return array(
				'city' => array(self::BELONGS_TO, 'City', 'city_id')
			);
		}

		/**
		 * @return array customized attribute labels (name=>label)
		 */
		public function attributeLabels() {
			return array(
				'id' => 'ID',
				'address' => 'Address',
				'address2' => 'Address2',
				'district' => 'District',
				'city_id' => 'City',
				'postal_code' => 'Postal Code',
				'phone' => 'Phone',
				'modified' => 'Modified',
			);
		}

		/**
		 * Retrieves a list of models based on the current search/filter conditions.
		 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
		 */
		public function search() {
			// Warning: Please modify the following code to remove attributes that
			// should not be searched.

			$criteria = new CDbCriteria;

			$criteria->compare('id', $this->id, TRUE);
			$criteria->compare('address', $this->address, TRUE);
			$criteria->compare('address2', $this->address2, TRUE);
			$criteria->compare('district', $this->district, TRUE);
			$criteria->compare('city_id', $this->city_id, TRUE);
			$criteria->compare('postal_code', $this->postal_code, TRUE);
			$criteria->compare('phone', $this->phone, TRUE);
			$criteria->compare('modified', $this->modified, TRUE);

			return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
			));
		}
	}