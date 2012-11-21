<?php

/**
 * This is the model class for table "competencia".
 *
 * The followings are the available columns in table 'competencia':
 * @property integer $id
 * @property integer $idUsuario
 * @property string $preparacionAcad
 * @property string $experienciaDocente
 * @property string $habilidadesPers
 * @property string $gustoJovenes
 * @property string $estiloSalesiano
 * @property string $ilusionVocacion
 *
 * The followings are the available model relations:
 * @property Usuario $idUsuario0
 */
class Competencia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Competencia the static model class
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
		return 'competencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idUsuario, preparacionAcad, experienciaDocente, habilidadesPers, gustoJovenes, estiloSalesiano, ilusionVocacion', 'required'),
			array('idUsuario', 'numerical', 'integerOnly'=>true),
			array('preparacionAcad, experienciaDocente, habilidadesPers, gustoJovenes, estiloSalesiano', 'length', 'max'=>2),
			array('ilusionVocacion', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idUsuario, preparacionAcad, experienciaDocente, habilidadesPers, gustoJovenes, estiloSalesiano, ilusionVocacion', 'safe', 'on'=>'search'),
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
			'preparacionAcad' => 'Preparacion Acadademica',
			'experienciaDocente' => 'Experiencia profesional como Docente',
			'habilidadesPers' => 'Habilidades Personales',
			'gustoJovenes' => 'Gusto por trabajar con Jovenes y Niños',
			'estiloSalesiano' => 'Identificacion con el Estilo Educativo Salesiano',
			'ilusionVocacion' => 'Ilusion o Vocacion docente',
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
		$criteria->compare('preparacionAcad',$this->preparacionAcad,true);
		$criteria->compare('experienciaDocente',$this->experienciaDocente,true);
		$criteria->compare('habilidadesPers',$this->habilidadesPers,true);
		$criteria->compare('gustoJovenes',$this->gustoJovenes,true);
		$criteria->compare('estiloSalesiano',$this->estiloSalesiano,true);
		$criteria->compare('ilusionVocacion',$this->ilusionVocacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}