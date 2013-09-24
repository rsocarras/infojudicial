<?php

/**
 * This is the model class for table "casos_has_despachos".
 *
 * The followings are the available columns in table 'casos_has_despachos':
 * @property integer $id
 * @property integer $casos_id
 * @property integer $despachos_id
 *
 * The followings are the available model relations:
 * @property Casos $casos
 * @property Despachos $despachos
 */
class CasosHasDespachos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CasosHasDespachos the static model class
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
		return 'casos_has_despachos';
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
			array('id, casos_id, despachos_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, casos_id, despachos_id', 'safe', 'on'=>'search'),
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
			'casos' => array(self::BELONGS_TO, 'Casos', 'casos_id'),
			'despachos' => array(self::BELONGS_TO, 'Despachos', 'despachos_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'casos_id' => 'Casos',
			'despachos_id' => 'Despachos',
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
		$criteria->compare('casos_id',$this->casos_id);
		$criteria->compare('despachos_id',$this->despachos_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}