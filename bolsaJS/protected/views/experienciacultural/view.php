<?php
/* @var $this ExperienciaculturalController */
/* @var $model Experienciacultural */

$this->breadcrumbs=array(
	'Experienciaculturals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Experienciacultural', 'url'=>array('index')),
	array('label'=>'Create Experienciacultural', 'url'=>array('create')),
	array('label'=>'Update Experienciacultural', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Experienciacultural', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Experienciacultural', 'url'=>array('admin')),
);
?>

<h1>View Experienciacultural #<?php echo $model->id; ?></h1>

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
