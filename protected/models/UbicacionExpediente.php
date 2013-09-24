<?php

/**
 * This is the model class for table "ubicacion_expediente".
 *
 * The followings are the available columns in table 'ubicacion_expediente':
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property integer $ciudades_id
 *
 * The followings are the available model relations:
 * @property Casos[] $casoses
 * @property Ciudades $ciudades
 */
class UbicacionExpediente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UbicacionExpediente the static model class
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
		return 'ubicacion_expediente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, ciudades_id', 'required'),
			array('id, ciudades_id', 'numerical', 'integerOnly'=>true),
			array('nombre, descripcion', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, descripcion, ciudades_id', 'safe', 'on'=>'search'),
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
			'casoses' => array(self::HAS_MANY, 'Casos', 'ubicacion_expediente_id'),
			'ciudades' => array(self::BELONGS_TO, 'Ciudades', 'ciudades_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'ciudades_id' => 'Ciudades',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('ciudades_id',$this->ciudades_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}