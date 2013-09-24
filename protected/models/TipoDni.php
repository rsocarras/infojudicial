<?php

/**
 * This is the model class for table "tipo_dni".
 *
 * The followings are the available columns in table 'tipo_dni':
 * @property integer $id
 * @property string $tipos
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Abogados[] $abogadoses
 * @property Cliente[] $clientes
 * @property Dependientejudicial[] $dependientejudicials
 * @property Entity[] $entities
 */
class TipoDni extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TipoDni the static model class
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
		return 'tipo_dni';
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
			array('id', 'numerical', 'integerOnly'=>true),
			array('tipos', 'length', 'max'=>45),
			array('descripcion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tipos, descripcion', 'safe', 'on'=>'search'),
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
			'abogadoses' => array(self::HAS_MANY, 'Abogados', 'tipo_dni_id'),
			'clientes' => array(self::HAS_MANY, 'Cliente', 'tipo_dni_id'),
			'dependientejudicials' => array(self::HAS_MANY, 'Dependientejudicial', 'tipo_dni_id'),
			'entities' => array(self::HAS_MANY, 'Entity', 'tipo_dni_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tipos' => 'Tipos',
			'descripcion' => 'Descripcion',
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
		$criteria->compare('tipos',$this->tipos,true);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}