<?php

/**
 * This is the model class for table "idiomas".
 *
 * The followings are the available columns in table 'idiomas':
 * @property integer $id
 * @property integer $idUsuario
 * @property string $idioma
 * @property string $nivel
 *
 * The followings are the available model relations:
 * @property Usuario $idUsuario0
 */
class Idiomas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Idiomas the static model class
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
		return 'idiomas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idUsuario, idioma, nivel', 'required'),
			array('idUsuario', 'numerical', 'integerOnly'=>true),
			array('idioma, nivel', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idUsuario, idioma, nivel', 'safe', 'on'=>'search'),
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
			'idioma' => 'Idioma',
			'nivel' => 'Nivel',
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
		$criteria->compare('idioma',$this->idioma,true);
		$criteria->compare('nivel',$this->nivel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}