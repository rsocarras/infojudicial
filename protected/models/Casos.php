<?php

/**
 * This is the model class for table "casos".
 *
 * The followings are the available columns in table 'casos':
 * @property integer $id
 * @property integer $numero
 * @property string $casoscol
 * @property integer $abogados_id
 * @property integer $entity_id
 * @property integer $cliente_id
 * @property integer $tipo_caso_id
 * @property integer $clase_caso_id
 * @property integer $ubicacion_expediente_id
 * @property integer $recurso_id
 * @property integer $estado_caso_id
 *
 * The followings are the available model relations:
 * @property Abogados $abogados
 * @property ClaseCaso $claseCaso
 * @property Cliente $cliente
 * @property Entity $entity
 * @property EstadoCaso $estadoCaso
 * @property Recurso $recurso
 * @property TipoCaso $tipoCaso
 * @property UbicacionExpediente $ubicacionExpediente
 * @property CasosActualizaciones[] $casosActualizaciones
 * @property CasosHasDespachos[] $casosHasDespachoses
 * @property LogCasosEstados[] $logCasosEstadoses
 */
class Casos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Casos the static model class
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
		return 'casos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero, abogados_id, cliente_id, estado_caso_id', 'required'),
			array('numero, abogados_id, entity_id, cliente_id, tipo_caso_id, clase_caso_id, ubicacion_expediente_id, recurso_id, estado_caso_id', 'numerical', 'integerOnly'=>true),
			array('casoscol', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, numero, casoscol, abogados_id, entity_id, cliente_id, tipo_caso_id, clase_caso_id, ubicacion_expediente_id, recurso_id, estado_caso_id', 'safe', 'on'=>'search'),
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
			'abogados' => array(self::BELONGS_TO, 'Abogados', 'abogados_id'),
			'claseCaso' => array(self::BELONGS_TO, 'ClaseCaso', 'clase_caso_id'),
			'cliente' => array(self::BELONGS_TO, 'Cliente', 'cliente_id'),
			'entity' => array(self::BELONGS_TO, 'Entity', 'entity_id'),
			'estadoCaso' => array(self::BELONGS_TO, 'EstadoCaso', 'estado_caso_id'),
			'recurso' => array(self::BELONGS_TO, 'Recurso', 'recurso_id'),
			'tipoCaso' => array(self::BELONGS_TO, 'TipoCaso', 'tipo_caso_id'),
			'ubicacionExpediente' => array(self::BELONGS_TO, 'UbicacionExpediente', 'ubicacion_expediente_id'),
			'casosActualizaciones' => array(self::HAS_MANY, 'CasosActualizaciones', 'casos_id'),
			'casosHasDespachoses' => array(self::HAS_MANY, 'CasosHasDespachos', 'casos_id'),
			'logCasosEstadoses' => array(self::HAS_MANY, 'LogCasosEstados', 'casos_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'numero' => 'Numero',
			'casoscol' => 'Casoscol',
			'abogados_id' => 'Abogados',
			'entity_id' => 'Entity',
			'cliente_id' => 'Cliente',
			'tipo_caso_id' => 'Tipo Caso',
			'clase_caso_id' => 'Clase Caso',
			'ubicacion_expediente_id' => 'Ubicacion Expediente',
			'recurso_id' => 'Recurso',
			'estado_caso_id' => 'Estado Caso',
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
		$criteria->compare('numero',$this->numero);
		$criteria->compare('casoscol',$this->casoscol,true);
		$criteria->compare('abogados_id',$this->abogados_id);
		$criteria->compare('entity_id',$this->entity_id);
		$criteria->compare('cliente_id',$this->cliente_id);
		$criteria->compare('tipo_caso_id',$this->tipo_caso_id);
		$criteria->compare('clase_caso_id',$this->clase_caso_id);
		$criteria->compare('ubicacion_expediente_id',$this->ubicacion_expediente_id);
		$criteria->compare('recurso_id',$this->recurso_id);
		$criteria->compare('estado_caso_id',$this->estado_caso_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}