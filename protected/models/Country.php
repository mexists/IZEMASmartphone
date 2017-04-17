<?php

/**
 * This is the model class for table "country".
 *
 * The followings are the available columns in table 'country':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $continent
 * @property string $region
 * @property double $surface_area
 * @property integer $indep_year
 * @property integer $population
 * @property double $life_expectancy
 * @property double $GNP
 * @property double $GNP_old
 * @property string $local_name
 * @property string $government_form
 * @property string $head_of_state
 * @property string $capital
 * @property string $code2
 * @property string $modified
 */
class Country extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Country the static model class
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
		return 'country';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('indep_year, population', 'numerical', 'integerOnly'=>true),
			array('surface_area, life_expectancy, GNP, GNP_old', 'numerical'),
			array('code', 'length', 'max'=>3),
			array('name', 'length', 'max'=>52),
			array('continent', 'length', 'max'=>13),
			array('region', 'length', 'max'=>26),
			array('local_name, government_form', 'length', 'max'=>45),
			array('head_of_state', 'length', 'max'=>60),
			array('capital', 'length', 'max'=>11),
			array('code2', 'length', 'max'=>2),
			array('modified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, name, continent, region, surface_area, indep_year, population, life_expectancy, GNP, GNP_old, local_name, government_form, head_of_state, capital, code2, modified', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code' => 'Code',
			'name' => 'Name',
			'continent' => 'Continent',
			'region' => 'Region',
			'surface_area' => 'Surface Area',
			'indep_year' => 'Indep Year',
			'population' => 'Population',
			'life_expectancy' => 'Life Expectancy',
			'GNP' => 'Gnp',
			'GNP_old' => 'Gnp Old',
			'local_name' => 'Local Name',
			'government_form' => 'Government Form',
			'head_of_state' => 'Head Of State',
			'capital' => 'Capital',
			'code2' => 'Code2',
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
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('continent',$this->continent,true);
		$criteria->compare('region',$this->region,true);
		$criteria->compare('surface_area',$this->surface_area);
		$criteria->compare('indep_year',$this->indep_year);
		$criteria->compare('population',$this->population);
		$criteria->compare('life_expectancy',$this->life_expectancy);
		$criteria->compare('GNP',$this->GNP);
		$criteria->compare('GNP_old',$this->GNP_old);
		$criteria->compare('local_name',$this->local_name,true);
		$criteria->compare('government_form',$this->government_form,true);
		$criteria->compare('head_of_state',$this->head_of_state,true);
		$criteria->compare('capital',$this->capital,true);
		$criteria->compare('code2',$this->code2,true);
		$criteria->compare('modified',$this->modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}