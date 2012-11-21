<?php

/**
 * This is the model class for table "autoevaluacion".
 *
 * The followings are the available columns in table 'autoevaluacion':
 * @property integer $id
 * @property integer $idUsuario
 * @property integer $capacidadEquipo
 * @property integer $relacionesPersonales
 * @property integer $aptitudesSituaciones
 * @property integer $gradoPrepProf
 * @property integer $capacidadPlanif
 * @property integer $aptitudeRelacio
 * @property integer $aperturaTrans
 * @property string $perteneceFS
 * @property string $perteneceGE
 *
 * The followings are the available model relations:
 * @property Usuario $idUsuario0
 */
class Autoevaluacion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Autoevaluacion the static model class
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
		return 'autoevaluacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idUsuario, capacidadEquipo, relacionesPersonales, aptitudesSituaciones, gradoPrepProf, capacidadPlanif, aptitudeRelacio, aperturaTrans, perteneceFS, perteneceGE', 'required'),
			array('idUsuario, capacidadEquipo, relacionesPersonales, aptitudesSituaciones, gradoPrepProf, capacidadPlanif, aptitudeRelacio, aperturaTrans', 'numerical', 'integerOnly'=>true),
			array('perteneceFS, perteneceGE', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idUsuario, capacidadEquipo, relacionesPersonales, aptitudesSituaciones, gradoPrepProf, capacidadPlanif, aptitudeRelacio, aperturaTrans, perteneceFS, perteneceGE', 'safe', 'on'=>'search'),
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
			'idUsuario0' => array(self::BELONGS_TO, 'Usuario', 'idUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idUsuario' => 'Id Usuario',
			'capacidadEquipo' => 'Capacidad de Trabajar en Equipo',
			'relacionesPersonales' => 'Relaciones Personales Equilibradas y Talante de Diálogo',
			'aptitudesSituaciones' => 'Aptitudes Para Controlar Situaciones Dificiles',
			'gradoPrepProf' => 'Grado Prepreracion Profesional para el Puesto de Trabajo ',
			'capacidadPlanif' => 'Capacidad para Planificar y Realizar las Tareas de Forma Ordenada',
			'aptitudeRelacio' => 'Aptitudes para la Relacion Educativa con Jóvenes',
			'aperturaTrans' => 'Apertura a la Trascendencia y Sentido Religioso de la Vida',
			'perteneceFS' => '¿Pertenece o ha pertenicido a algun movimiento y/o grupo de la Familia Salesiana?(¿Cual es?,¿Cuanto tiempo?,Fecha)',
			'perteneceGE' => '¿Pertenece o ha pertenicido a algun movimiento y/o grupo eclesial?(¿Cual es?,¿Cuanto tiempo?,Fechas)',
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
		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('capacidadEquipo',$this->capacidadEquipo);
		$criteria->compare('relacionesPersonales',$this->relacionesPersonales);
		$criteria->compare('aptitudesSituaciones',$this->aptitudesSituaciones);
		$criteria->compare('gradoPrepProf',$this->gradoPrepProf);
		$criteria->compare('capacidadPlanif',$this->capacidadPlanif);
		$criteria->compare('aptitudeRelacio',$this->aptitudeRelacio);
		$criteria->compare('aperturaTrans',$this->aperturaTrans);
		$criteria->compare('perteneceFS',$this->perteneceFS,true);
		$criteria->compare('perteneceGE',$this->perteneceGE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}