<?php

/**
 * This is the model class for table "singularidad".
 *
 * The followings are the available columns in table 'singularidad':
 * @property integer $id
 * @property integer $idUsuario
 * @property string $tema1
 * @property string $tema2
 * @property string $asistirCursos
 * @property string $limitacionHorario
 *
 * The followings are the available model relations:
 * @property Usuario $idUsuario0
 */
class Singularidad extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Singularidad the static model class
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
		return 'singularidad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idUsuario, tema1, tema2, asistirCursos, limitacionHorario', 'required'),
			array('idUsuario', 'numerical', 'integerOnly'=>true),
			array('tema1, tema2', 'length', 'max'=>250),
			array('asistirCursos, limitacionHorario', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idUsuario, tema1, tema2, asistirCursos, limitacionHorario', 'safe', 'on'=>'search'),
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
			'tema1' => 'El centro en el que solicita plaza es de las Hijas de Maria Auxiliadora (Inspectoria Maria Auxiliadora FMA-Sevilla), que pretende realizar el proyecto educativo salesiano, segun el estilo D. Bosco y de Madre Mazzarello. Concrete si ha tenido relacion con la Familia Salesiana, o tiene algun conocimiento de D. Bosco y M. Mazzarello y de su estilo de educacion, o alguna experiencia de vida o actividad en una casa salesiana...',
			'tema2' => 'Ademas, este centro es una institucion de la Iglesia Católica, que se rige por los principios del Evangelio y de la fe en Jesucristo, de donde deriva un conjunto de valores humanos, sociales y religiosos, que los educadores han de vivir con coherencia. ¿Que juicio le merece este planteamiento educativo?¿Y que repercusiones puede tener en su tarea de docente y educador?',
			'asistirCursos' => 'Indique si tendrá dificultades para hacer cursos en formación,incluso en fines de semana',
			'limitacionHorario' => '¿Considera que podrá tener alguna limitación horaria?',
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
		$criteria->compare('tema1',$this->tema1,true);
		$criteria->compare('tema2',$this->tema2,true);
		$criteria->compare('asistirCursos',$this->asistirCursos,true);
		$criteria->compare('limitacionHorario',$this->limitacionHorario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}