<?php

/**
 * This is the model class for table "entity".
 *
 * The followings are the available columns in table 'entity':
 * @property integer $id
 * @property integer $tipo_entity
 * @property string $nombre
 * @property string $dni
 * @property string $direccion
 * @property string $telefono
 * @property integer $tipo_dni_id
 *
 * The followings are the available model relations:
 * @property Casos[] $casoses
 * @property TipoDni $tipoDni
 */
class Entity extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Entity the static model class
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
		return 'entity';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_entity, nombre, dni, telefono, tipo_dni_id', 'required'),
			array('tipo_entity, tipo_dni_id', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>245),
			array('dni, direccion, telefono', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tipo_entity, nombre, dni, direccion, telefono, tipo_dni_id', 'safe', 'on'=>'search'),
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
			'casoses' => array(self::HAS_MANY, 'Casos', 'entity_id'),
			'tipoDni' => array(self::BELONGS_TO, 'TipoDni', 'tipo_dni_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tipo_entity' => 'Tipo Entity',
			'nombre' => 'Nombre',
			'dni' => 'Dni',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'tipo_dni_id' => 'Tipo Dni',
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
		$criteria->compare('tipo_entity',$this->tipo_entity);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('dni',$this->dni,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('tipo_dni_id',$this->tipo_dni_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}