<?php

/**
 * This is the model class for table "experienciand".
 *
 * The followings are the available columns in table 'experienciand':
 * @property integer $id
 * @property integer $idUsuario
 * @property string $funcion
 * @property string $time
 * @property string $from
 * @property string $to
 *
 * The followings are the available model relations:
 * @property Usuario $idUsuario0
 */
class Experienciand extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Experienciand the static model class
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
		return 'experienciand';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idUsuario, funcion, time, from, to', 'required'),
			array('idUsuario', 'numerical', 'integerOnly'=>true),
			array('funcion, time', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idUsuario, funcion, time, from, to', 'safe', 'on'=>'search'),
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
			'funcion' => 'Funcion',
			'time' => 'Tiempo',
			'from' => 'Desde',
			'to' => 'Hasta',
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
		$criteria->compare('funcion',$this->funcion,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('from',$this->from,true);
		$criteria->compare('to',$this->to,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}