<?php
/* @var $this FullController */
/* @var $model Full */

$this->breadcrumbs=array(
	'Fulls'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Full', 'url'=>array('index')),
	array('label'=>'Create Full', 'url'=>array('create')),
	array('label'=>'Update Full', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Full', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Full', 'url'=>array('admin')),
);
?>

<h1>View Full #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUsuario',
		'consiente',
		'afirmacion_sec',
		'fecha_sec',
		'centro_sec',
		'tipo_bach',
		'fecha_bach',
		'centro_bach',
		'nombre_tituniv',
		'fecha_tituniv',
		'universidad_tituniv',
		'nombre_mast',
		'fecha_mast',
		'universidad_mast',
		'afirmacion_cap',
		'afirmacion_dei',
		'titulo_dei',
		'nivelIngles_idio',
		'nivelFrances_idio',
		'nivelAleman_idio',
		'idiomaOtros_idio',
		'nivelOtros_idio',
		'titulo_titidio',
		'entidad_titidio',
		'from_titidio',
		'to_titidio',
		'programa_ci',
		'nivel_ci',
		'funcion_exnd',
		'time_exnd',
		'from_exnd',
		'to_exnd',
		'funcion_dr',
		'materia_dr',
		'nombreCentro_dr',
		'time_dr',
		'from_dr',
		'to_dr',
		'descripcion_excul',
		'localidad_excul',
		'entidad_excul',
		'from_excul',
		'to_excul',
		'descripcion_exrel',
		'localidad_exrel',
		'entidad_exrel',
		'from_exrel',
		'to_exrel',
		'descripcion_exvol',
		'localidad_exvol',
		'entidad_exvol',
		'from_exvol',
		'to_exvol',
		'tema1_sing',
		'tema2_sing',
		'asistirCursos_sing',
		'limitacionHorario_sing',
		'capacidadEquipo_aut',
		'relacionesPersonales_aut',
		'aptitudesSituaciones_aut',
		'gradoPrepProf_aut',
		'capacidadPlanif_aut',
		'aptitudeRelacio_aut',
		'aperturaTrans_aut',
		'perteneceFS_aut',
		'perteneceGE_aut',
		'preparacionAcad',
		'experienciaDocent',
		'habilidadesPers',
		'gustoJovenes',
		'estiloSalesiano',
		'ilusionVocacion',
	),
)); ?>
