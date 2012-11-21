<?php
/* @var $this ExperienciavoluntariadoController */
/* @var $model Experienciavoluntariado */

$this->breadcrumbs=array(
	'Experienciavoluntariados'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Experienciavoluntariado', 'url'=>array('index')),
	array('label'=>'Create Experienciavoluntariado', 'url'=>array('create')),
	array('label'=>'Update Experienciavoluntariado', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Experienciavoluntariado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Experienciavoluntariado', 'url'=>array('admin')),
);
?>

<h1>View Experienciavoluntariado #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUsuario',
		'descripcion',
		'localidad',
		'entidad',
		'from',
		'to',
	),
)); ?>
