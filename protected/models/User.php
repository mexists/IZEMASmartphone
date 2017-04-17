<?php

	/**
	 * This is the model class for table "user".
	 *
	 * The followings are the available columns in table 'user':
	 * @property integer $id
	 * @property string  $username
	 * @property string  $email
	 * @property string  $password
	 * @property string  $first_name
	 * @property string  $last_name
	 * @property string  $gender
	 * @property string  $address
	 * @property integer $user_status_id
	 * @property string  $created
	 * @property string  $modified
	 */
	class User extends CActiveRecord {
		/**
		 * Returns the static model of the specified AR class.
		 * @return User the static model class
		 */
		public static function model($className = __CLASS__) {
			return parent::model($className);
		}

		/**
		 * @return string the associated database table name
		 */
		public function tableName() {
			return 'user';
		}

		/**
		 * @return array validation rules for model attributes.
		 */
		public function rules() {
			// NOTE: you should only define rules for those attributes that
			// will receive user inputs.
			return array(
				array('user_status_id', 'numerical', 'integerOnly' => TRUE),
				array('gender', 'length', 'max' => 255),
				array('first_name, last_name, address, created, modified', 'safe'),
				array('username, email, password', 'required'),
				array('username', 'length', 'max' => 12),
//				array('password', 'length', 'max' => 12),
				array('password', 'match', 'pattern'=>'/\d/', 'message'=>'Password must contain at least one numeric digit.'),
				array('password', 'match', 'pattern'=>'/\w/', 'message'=>'Password must contain at least one alphabetical character.'),
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array(
					'id, username, email, password, first_name, last_name, gender, address, user_status_id, created, modified',
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
				'address' => array(self::BELONGS_TO, 'Address', 'address_id')
			);
		}

		/**
		 * @return array customized attribute labels (name=>label)
		 */
		public function attributeLabels() {
			return array(
				'id' => 'ID',
				'username' => 'Username',
				'email' => 'Email',
				'password' => 'Password',
				'first_name' => 'First Name',
				'last_name' => 'Last Name',
				'gender' => 'Gender',
				'address' => 'Address',
				'user_status_id' => 'User Status',
				'created' => 'Created',
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

			$criteria->compare('id', $this->id);
			$criteria->compare('username', $this->username, TRUE);
			$criteria->compare('email', $this->email, TRUE);
			$criteria->compare('password', $this->password, TRUE);
			$criteria->compare('first_name', $this->first_name, TRUE);
			$criteria->compare('last_name', $this->last_name, TRUE);
			$criteria->compare('gender', $this->gender, TRUE);
			$criteria->compare('address', $this->address, TRUE);
			$criteria->compare('user_status_id', $this->user_status_id);
			$criteria->compare('created', $this->created, TRUE);
			$criteria->compare('modified', $this->modified, TRUE);

			return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
			));
		}
	}