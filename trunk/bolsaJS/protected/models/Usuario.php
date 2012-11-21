<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id
 * @property string $nif
 * @property string $password
 * @property string $nombre
 * @property string $apellidos
 * @property string $fechaNac
 * @property string $direccion
 * @property string $provincia
 * @property string $localidad
 * @property integer $codigoPostal
 * @property string $email
 * @property integer $telefono
 * @property string $estadoCivil
 *
 * The followings are the available model relations:
 * @property Autoevaluacion[] $autoevaluacions
 * @property Bachilllerato[] $bachillleratos
 * @property Cap[] $caps
 * @property Colegio[] $colegios
 * @property Competencia[] $competencias
 * @property Conocimientoinfor[] $conocimientoinfors
 * @property Consiente[] $consientes
 * @property Dei[] $deis
 * @property Docentenoreglada[] $docentenoregladas
 * @property Docentereglada[] $docenteregladas
 * @property Experienciacultural[] $experienciaculturals
 * @property Experienciand[] $experienciands
 * @property Experienciareligiosas[] $experienciareligiosases
 * @property Experienciavoluntariado[] $experienciavoluntariados
 * @property Idiomas[] $idiomases
 * @property Master[] $masters
 * @property Secundaria[] $secundarias
 * @property Singularidad[] $singularidads
 * @property Tituloidioma[] $tituloidiomas
 * @property Titulouniv[] $titulounivs
 */
class Usuario extends CActiveRecord
{

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nif, password, nombre, apellidos, fechaNac, direccion, provincia, localidad, codigoPostal, email, telefono, estadoCivil', 'required'),
			array('codigoPostal, telefono', 'numerical', 'integerOnly'=>true),
			array('nif', 'length', 'max'=>11),
			array('password', 'length', 'max'=>25),
			array('nombre, direccion, provincia, localidad, email, estadoCivil', 'length', 'max'=>45),
			array('apellidos', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nif, password, nombre, apellidos, fechaNac, direccion, provincia, localidad, codigoPostal, email, telefono, estadoCivil', 'safe', 'on'=>'search'),// verifyCode needs to be entered correctly
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
			'autoevaluacions' => array(self::HAS_MANY, 'Autoevaluacion', 'idUsuario'),
			'bachillleratos' => array(self::HAS_MANY, 'Bachilllerato', 'idUsuario'),
			'caps' => array(self::HAS_MANY, 'Cap', 'IdUsuario'),
			'colegios' => array(self::HAS_MANY, 'Colegio', 'idUsuario'),
			'competencias' => array(self::HAS_MANY, 'Competencia', 'idUsuario'),
			'conocimientoinfors' => array(self::HAS_MANY, 'Conocimientoinfor', 'idUsuario'),
			'consientes' => array(self::HAS_MANY, 'Consiente', 'idUsuario'),
			'deis' => array(self::HAS_MANY, 'Dei', 'idUsuario'),
			'docentenoregladas' => array(self::HAS_MANY, 'Docentenoreglada', 'idUsuario'),
			'docenteregladas' => array(self::HAS_MANY, 'Docentereglada', 'idUsuario'),
			'experienciaculturals' => array(self::HAS_MANY, 'Experienciacultural', 'idUsuario'),
			'experienciands' => array(self::HAS_MANY, 'Experienciand', 'idUsuario'),
			'experienciareligiosases' => array(self::HAS_MANY, 'Experienciareligiosas', 'idUsuario'),
			'experienciavoluntariados' => array(self::HAS_MANY, 'Experienciavoluntariado', 'idUsuario'),
			'idiomases' => array(self::HAS_MANY, 'Idiomas', 'idUsuario'),
			'masters' => array(self::HAS_MANY, 'Master', 'idUsuario'),
			'secundarias' => array(self::HAS_MANY, 'Secundaria', 'idUsuario'),
			'singularidads' => array(self::HAS_MANY, 'Singularidad', 'idUsuario'),
			'tituloidiomas' => array(self::HAS_MANY, 'Tituloidioma', 'idUsuario'),
			'titulounivs' => array(self::HAS_MANY, 'Titulouniv', 'idUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nif' => 'Nif',
			'password' => 'Contraseña',
			'nombre' => 'Nombre',
			'apellidos' => 'Apellidos',
			'fechaNac' => 'Fecha Nac',
			'direccion' => 'Direccion',
			'provincia' => 'Provincia',
			'localidad' => 'Localidad',
			'codigoPostal' => 'Codigo Postal',
			'email' => 'Email',
			'telefono' => 'Telefono',
			'estadoCivil' => 'Estado Civil',
			
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
		$criteria->compare('nif',$this->nif,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('fechaNac',$this->fechaNac,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('provincia',$this->provincia,true);
		$criteria->compare('localidad',$this->localidad,true);
		$criteria->compare('codigoPostal',$this->codigoPostal);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('estadoCivil',$this->estadoCivil,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}