<?php

/**
 * This is the model class for table "secundaria".
 *
 * The followings are the available columns in table 'secundaria':
 * @property integer $id
 * @property integer $idUsuario
 * @property string $fecha
 * @property string $centro
 * @property string $afirmacion
 *
 * The followings are the available model relations:
 * @property Usuario $idUsuario0
 */
class Secundaria extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Secundaria the static model class
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
		return 'secundaria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idUsuario, fecha, centro, afirmacion', 'required'),
			array('idUsuario', 'numerical', 'integerOnly'=>true),
			array('centro', 'length', 'max'=>45),
			array('afirmacion', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idUsuario, fecha, centro, afirmacion', 'safe', 'on'=>'search'),
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
			'fecha' => 'Fecha',
			'centro' => 'Centro',
			'afirmacion' => 'Cursado',
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
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('centro',$this->centro,true);
		$criteria->compare('afirmacion',$this->afirmacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}