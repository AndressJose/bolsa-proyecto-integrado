<?php

/**
 * This is the model class for table "full".
 *
 * The followings are the available columns in table 'full':
 * @property integer $id
 * @property integer $idUsuario
 * @property string $consiente
 * @property string $afirmacion_sec
 * @property string $fecha_sec
 * @property string $centro_sec
 * @property string $tipo_bach
 * @property string $fecha_bach
 * @property string $centro_bach
 * @property string $nombre_tituniv
 * @property string $fecha_tituniv
 * @property string $universidad_tituniv
 * @property string $nombre_mast
 * @property string $fecha_mast
 * @property string $universidad_mast
 * @property string $afirmacion_cap
 * @property string $afirmacion_dei
 * @property string $titulo_dei
 * @property string $nivelIngles_idio
 * @property string $nivelFrances_idio
 * @property string $nivelAleman_idio
 * @property string $idiomaOtros_idio
 * @property string $nivelOtros_idio
 * @property string $titulo_titidio
 * @property string $entidad_titidio
 * @property string $from_titidio
 * @property string $to_titidio
 * @property string $programa_ci
 * @property string $nivel_ci
 * @property string $funcion_exnd
 * @property string $time_exnd
 * @property string $from_exnd
 * @property string $to_exnd
 * @property string $funcion_dr
 * @property string $materia_dr
 * @property string $nombreCentro_dr
 * @property string $time_dr
 * @property string $from_dr
 * @property string $to_dr
 * @property string $descripcion_excul
 * @property string $localidad_excul
 * @property string $entidad_excul
 * @property string $from_excul
 * @property string $to_excul
 * @property string $descripcion_exrel
 * @property string $localidad_exrel
 * @property string $entidad_exrel
 * @property string $from_exrel
 * @property string $to_exrel
 * @property string $descripcion_exvol
 * @property string $localidad_exvol
 * @property string $entidad_exvol
 * @property string $from_exvol
 * @property string $to_exvol
 * @property string $tema1_sing
 * @property string $tema2_sing
 * @property string $asistirCursos_sing
 * @property string $limitacionHorario_sing
 * @property integer $capacidadEquipo_aut
 * @property integer $relacionesPersonales_aut
 * @property integer $aptitudesSituaciones_aut
 * @property integer $gradoPrepProf_aut
 * @property integer $capacidadPlanif_aut
 * @property integer $aptitudeRelacio_aut
 * @property integer $aperturaTrans_aut
 * @property string $perteneceFS_aut
 * @property string $perteneceGE_aut
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
class Full extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Full the static model class
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
		return 'full';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idUsuario, consiente, afirmacion_sec, afirmacion_cap, afirmacion_dei, nivelIngles_idio, nivelFrances_idio, nivelAleman_idio, idiomaOtros_idio, nivelOtros_idio, tema1_sing, tema2_sing, asistirCursos_sing, limitacionHorario_sing, capacidadEquipo_aut, relacionesPersonales_aut, aptitudesSituaciones_aut, gradoPrepProf_aut, capacidadPlanif_aut, aptitudeRelacio_aut, aperturaTrans_aut, perteneceFS_aut, perteneceGE_aut', 'required'),
			array('idUsuario, capacidadEquipo_aut, relacionesPersonales_aut, aptitudesSituaciones_aut, gradoPrepProf_aut, capacidadPlanif_aut, aptitudeRelacio_aut, aperturaTrans_aut', 'numerical', 'integerOnly'=>true),
			array('consiente, afirmacion_sec, afirmacion_cap, afirmacion_dei, asistirCursos_sing, limitacionHorario_sing, preparacionAcad, experienciaDocent, habilidadesPers, gustoJovenes, estiloSalesiano, ilusionVocacion', 'length', 'max'=>2),
			array('centro_sec, tipo_bach, centro_bach, nombre_tituniv, universidad_tituniv, nombre_mast, universidad_mast, titulo_dei, nivelIngles_idio, nivelFrances_idio, nivelAleman_idio, idiomaOtros_idio, nivelOtros_idio, titulo_titidio, entidad_titidio, programa_ci, nivel_ci, funcion_exnd, time_exnd, funcion_dr, materia_dr, nombreCentro_dr, time_dr, descripcion_excul, localidad_excul, entidad_excul, descripcion_exrel, localidad_exrel, entidad_exrel, descripcion_exvol, localidad_exvol, entidad_exvol', 'length', 'max'=>45),
			array('tema1_sing, tema2_sing, perteneceFS_aut, perteneceGE_aut', 'length', 'max'=>250),
			array('fecha_sec, fecha_bach, fecha_tituniv, fecha_mast, from_titidio, to_titidio, from_exnd, to_exnd, from_dr, to_dr, from_excul, to_excul, from_exrel, to_exrel, from_exvol, to_exvol', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idUsuario, consiente, afirmacion_sec, fecha_sec, centro_sec, tipo_bach, fecha_bach, centro_bach, nombre_tituniv, fecha_tituniv, universidad_tituniv, nombre_mast, fecha_mast, universidad_mast, afirmacion_cap, afirmacion_dei, titulo_dei, nivelIngles_idio, nivelFrances_idio, nivelAleman_idio, idiomaOtros_idio, nivelOtros_idio, titulo_titidio, entidad_titidio, from_titidio, to_titidio, programa_ci, nivel_ci, funcion_exnd, time_exnd, from_exnd, to_exnd, funcion_dr, materia_dr, nombreCentro_dr, time_dr, from_dr, to_dr, descripcion_excul, localidad_excul, entidad_excul, from_excul, to_excul, descripcion_exrel, localidad_exrel, entidad_exrel, from_exrel, to_exrel, descripcion_exvol, localidad_exvol, entidad_exvol, from_exvol, to_exvol, tema1_sing, tema2_sing, asistirCursos_sing, limitacionHorario_sing, capacidadEquipo_aut, relacionesPersonales_aut, aptitudesSituaciones_aut, gradoPrepProf_aut, capacidadPlanif_aut, aptitudeRelacio_aut, aperturaTrans_aut, perteneceFS_aut, perteneceGE_aut, preparacionAcad, experienciaDocent, habilidadesPers, gustoJovenes, estiloSalesiano, ilusionVocacion', 'safe', 'on'=>'search'),
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
			'programa_ci' => 'Programa',
			'nivel_ci' => 'Nivel',
                        'id' => 'ID',
			'idUsuario' => 'Id Usuario',
			'consiente' => '¿Consiente la consulta de datos de referencia a dichas personas?',
			'afirmacion_sec' => 'Cursado',
			'fecha_sec' => 'Fecha',
			'centro_sec' => 'Centro',
			'tipo_bach' => 'Tipo o Rama',
			'fecha_bach' => 'Fecha',
			'centro_bach' => 'Centro',
			'nombre_tituniv' => 'Nombre',
			'fecha_tituniv' => 'Fecha',
			'universidad_tituniv' => 'Universidad',
			'nombre_mast' => 'Nombre',
			'fecha_mast' => 'Fecha',
			'universidad_mast' => 'Universidad',
			'afirmacion_cap' => 'Posee Cap',
			'afirmacion_dei' => 'Posee Dei/Deca',
			'titulo_dei' => 'Titulo Dei/Deca',
			'nivelIngles_idio' => 'Nivel Ingles',
			'nivelFrances_idio' => 'Nivel Frances',
			'nivelAleman_idio' => 'Nivel Aleman',
			'idiomaOtros_idio' => 'Otro Idioma',
			'nivelOtros_idio' => 'Nivel',
			'titulo_titidio' => 'Titulo Idioma',
			'entidad_titidio' => 'Entidad Expedicion',
			'from_titidio' => 'Desde',
			'to_titidio' => 'Hasta',
			'funcion_exnd' => 'Funcion(Experiencia No Docente)',
			'time_exnd' => 'Tiempo',
			'from_exnd' => 'Desde',
			'to_exnd' => 'Hasta',
			'funcion_dr' => 'Funcion(Experiencia Docente Reglada)',
			'materia_dr' => 'Materia',
			'nombreCentro_dr' => 'Nombre Centro',
			'time_dr' => 'Tiempo',
			'from_dr' => 'Desde',
			'to_dr' => 'Hasta',
			'descripcion_excul' => 'Descripcion(Exp.Cultural)',
			'localidad_excul' => 'Localidad',
			'entidad_excul' => 'Entidad',
			'from_excul' => 'Desde',
			'to_excul' => 'Hasta',
			'descripcion_exrel' => 'Descripcion(Exp.Religiosa)',
			'localidad_exrel' => 'Localidad',
			'entidad_exrel' => 'Entidad',
			'from_exrel' => 'Desde',
			'to_exrel' => 'Hasta',
			'descripcion_exvol' => 'Descripcion(Exp.Voluntariado)',
			'localidad_exvol' => 'Localidad',
			'entidad_exvol' => 'Entidad',
			'from_exvol' => 'Desde',
			'to_exvol' => 'Hasta',
			'tema1_sing' => 'El centro en el que solicita plaza es de las Hijas de Maria Auxiliadora (Inspectoria Maria Auxiliadora FMA-Sevilla), que pretende realizar el proyecto educativo salesiano, segun el estilo D. Bosco y de Madre Mazzarello. Concrete si ha tenido relacion con la Familia Salesiana, o tiene algun conocimiento de D. Bosco y M. Mazzarello y de su estilo de educacion, o alguna experiencia de vida o actividad en una casa salesiana...',
			'tema2_sing' => 'Ademas, este centro es una institucion de la Iglesia Católica, que se rige por los principios del Evangelio y de la fe en Jesucristo, de donde deriva un conjunto de valores humanos, sociales y religiosos, que los educadores han de vivir con coherencia. ¿Que juicio le merece este planteamiento educativo?¿Y que repercusiones puede tener en su tarea de docente y educador?',
			'asistirCursos_sing' => 'Indique si tendrá dificultades para hacer cursos en formación,incluso en fines de semana',
			'limitacionHorario_sing' => '¿Considera que podrá tener alguna limitación horaria?',
			'capacidadEquipo_aut' => 'Capacidad de Trabajar en Equipo',
			'relacionesPersonales_aut' => 'Relaciones Personales Equilibradas y Talante de Diálogo',
			'aptitudesSituaciones_aut' => 'Aptitudes Para Controlar Situaciones Dificiles',
			'gradoPrepProf_aut' => 'Grado Prepreracion Profesional para el Puesto de Trabajo ',
			'capacidadPlanif_aut' => 'Capacidad para Planificar y Realizar las Tareas de Forma Ordenada',
			'aptitudeRelacio_aut' => 'Aptitudes para la Relacion Educativa con Jóvenes',
			'aperturaTrans_aut' => 'Apertura a la Trascendencia y Sentido Religioso de la Vida',
			'perteneceFS_aut' => '¿Pertenece o ha pertenicido a algun movimiento y/o grupo de la Familia Salesiana?(¿Cual es?,¿Cuanto tiempo?,Fecha)',
			'perteneceGE_aut' => '¿Pertenece o ha pertenicido a algun movimiento y/o grupo eclesial?(¿Cual es?,¿Cuanto tiempo?,Fechas)',
                        'preparacionAcad' => 'Preparacion Acadademica',
			'experienciaDocent' => 'Experiencia profesional como Docente',
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
		$criteria->compare('consiente',$this->consiente,true);
		$criteria->compare('afirmacion_sec',$this->afirmacion_sec,true);
		$criteria->compare('fecha_sec',$this->fecha_sec,true);
		$criteria->compare('centro_sec',$this->centro_sec,true);
		$criteria->compare('tipo_bach',$this->tipo_bach,true);
		$criteria->compare('fecha_bach',$this->fecha_bach,true);
		$criteria->compare('centro_bach',$this->centro_bach,true);
		$criteria->compare('nombre_tituniv',$this->nombre_tituniv,true);
		$criteria->compare('fecha_tituniv',$this->fecha_tituniv,true);
		$criteria->compare('universidad_tituniv',$this->universidad_tituniv,true);
		$criteria->compare('nombre_mast',$this->nombre_mast,true);
		$criteria->compare('fecha_mast',$this->fecha_mast,true);
		$criteria->compare('universidad_mast',$this->universidad_mast,true);
		$criteria->compare('afirmacion_cap',$this->afirmacion_cap,true);
		$criteria->compare('afirmacion_dei',$this->afirmacion_dei,true);
		$criteria->compare('titulo_dei',$this->titulo_dei,true);
		$criteria->compare('nivelIngles_idio',$this->nivelIngles_idio,true);
		$criteria->compare('nivelFrances_idio',$this->nivelFrances_idio,true);
		$criteria->compare('nivelAleman_idio',$this->nivelAleman_idio,true);
		$criteria->compare('idiomaOtros_idio',$this->idiomaOtros_idio,true);
		$criteria->compare('nivelOtros_idio',$this->nivelOtros_idio,true);
		$criteria->compare('titulo_titidio',$this->titulo_titidio,true);
		$criteria->compare('entidad_titidio',$this->entidad_titidio,true);
		$criteria->compare('from_titidio',$this->from_titidio,true);
		$criteria->compare('to_titidio',$this->to_titidio,true);
		$criteria->compare('programa_ci',$this->programa_ci,true);
		$criteria->compare('nivel_ci',$this->nivel_ci,true);
		$criteria->compare('funcion_exnd',$this->funcion_exnd,true);
		$criteria->compare('time_exnd',$this->time_exnd,true);
		$criteria->compare('from_exnd',$this->from_exnd,true);
		$criteria->compare('to_exnd',$this->to_exnd,true);
		$criteria->compare('funcion_dr',$this->funcion_dr,true);
		$criteria->compare('materia_dr',$this->materia_dr,true);
		$criteria->compare('nombreCentro_dr',$this->nombreCentro_dr,true);
		$criteria->compare('time_dr',$this->time_dr,true);
		$criteria->compare('from_dr',$this->from_dr,true);
		$criteria->compare('to_dr',$this->to_dr,true);
		$criteria->compare('descripcion_excul',$this->descripcion_excul,true);
		$criteria->compare('localidad_excul',$this->localidad_excul,true);
		$criteria->compare('entidad_excul',$this->entidad_excul,true);
		$criteria->compare('from_excul',$this->from_excul,true);
		$criteria->compare('to_excul',$this->to_excul,true);
		$criteria->compare('descripcion_exrel',$this->descripcion_exrel,true);
		$criteria->compare('localidad_exrel',$this->localidad_exrel,true);
		$criteria->compare('entidad_exrel',$this->entidad_exrel,true);
		$criteria->compare('from_exrel',$this->from_exrel,true);
		$criteria->compare('to_exrel',$this->to_exrel,true);
		$criteria->compare('descripcion_exvol',$this->descripcion_exvol,true);
		$criteria->compare('localidad_exvol',$this->localidad_exvol,true);
		$criteria->compare('entidad_exvol',$this->entidad_exvol,true);
		$criteria->compare('from_exvol',$this->from_exvol,true);
		$criteria->compare('to_exvol',$this->to_exvol,true);
		$criteria->compare('tema1_sing',$this->tema1_sing,true);
		$criteria->compare('tema2_sing',$this->tema2_sing,true);
		$criteria->compare('asistirCursos_sing',$this->asistirCursos_sing,true);
		$criteria->compare('limitacionHorario_sing',$this->limitacionHorario_sing,true);
		$criteria->compare('capacidadEquipo_aut',$this->capacidadEquipo_aut);
		$criteria->compare('relacionesPersonales_aut',$this->relacionesPersonales_aut);
		$criteria->compare('aptitudesSituaciones_aut',$this->aptitudesSituaciones_aut);
		$criteria->compare('gradoPrepProf_aut',$this->gradoPrepProf_aut);
		$criteria->compare('capacidadPlanif_aut',$this->capacidadPlanif_aut);
		$criteria->compare('aptitudeRelacio_aut',$this->aptitudeRelacio_aut);
		$criteria->compare('aperturaTrans_aut',$this->aperturaTrans_aut);
		$criteria->compare('perteneceFS_aut',$this->perteneceFS_aut,true);
		$criteria->compare('perteneceGE_aut',$this->perteneceGE_aut,true);
		$criteria->compare('preparacionAcad',$this->preparacionAcad,true);
		$criteria->compare('experienciaDocent',$this->experienciaDocent,true);
		$criteria->compare('habilidadesPers',$this->habilidadesPers,true);
		$criteria->compare('gustoJovenes',$this->gustoJovenes,true);
		$criteria->compare('estiloSalesiano',$this->estiloSalesiano,true);
		$criteria->compare('ilusionVocacion',$this->ilusionVocacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}