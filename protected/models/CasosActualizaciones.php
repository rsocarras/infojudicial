<?php

/**
 * This is the model class for table "casos_actualizaciones".
 *
 * The followings are the available columns in table 'casos_actualizaciones':
 * @property integer $id
 * @property integer $casos_id
 * @property integer $actuacion_id
 * @property string $fecha_actualizaicon
 * @property string $anotacion
 * @property string $fecha_inicia_termino
 * @property string $fecha_finaliza_termino
 * @property string $fecha_registro
 * @property string $datecreate
 *
 * The followings are the available model relations:
 * @property Actuacion $actuacion
 * @property Casos $casos
 */
class CasosActualizaciones extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CasosActualizaciones the static model class
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
		return 'casos_actualizaciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('casos_id, actuacion_id, datecreate', 'required'),
			array('casos_id, actuacion_id', 'numerical', 'integerOnly'=>true),
			array('anotacion', 'length', 'max'=>45),
			array('fecha_actualizaicon, fecha_inicia_termino, fecha_finaliza_termino, fecha_registro', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, casos_id, actuacion_id, fecha_actualizaicon, anotacion, fecha_inicia_termino, fecha_finaliza_termino, fecha_registro, datecreate', 'safe', 'on'=>'search'),
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
			'actuacion' => array(self::BELONGS_TO, 'Actuacion', 'actuacion_id'),
			'casos' => array(self::BELONGS_TO, 'Casos', 'casos_id'),
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
			'actuacion_id' => 'Actuacion',
			'fecha_actualizaicon' => 'Fecha Actualizaicon',
			'anotacion' => 'Anotacion',
			'fecha_inicia_termino' => 'Fecha Inicia Termino',
			'fecha_finaliza_termino' => 'Fecha Finaliza Termino',
			'fecha_registro' => 'Fecha Registro',
			'datecreate' => 'Datecreate',
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
		$criteria->compare('actuacion_id',$this->actuacion_id);
		$criteria->compare('fecha_actualizaicon',$this->fecha_actualizaicon,true);
		$criteria->compare('anotacion',$this->anotacion,true);
		$criteria->compare('fecha_inicia_termino',$this->fecha_inicia_termino,true);
		$criteria->compare('fecha_finaliza_termino',$this->fecha_finaliza_termino,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('datecreate',$this->datecreate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}