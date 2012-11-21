<?php
/* @var $this SingularidadController */
/* @var $model Singularidad */

$this->breadcrumbs=array(
	'Singularidads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Singularidad', 'url'=>array('index')),
	array('label'=>'Create Singularidad', 'url'=>array('create')),
	array('label'=>'Update Singularidad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Singularidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Singularidad', 'url'=>array('admin')),
);
?>

<h1>View Singularidad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUsuario',
		'tema1',
		'tema2',
		'asistirCursos',
		'limitacionHorario',
	),
)); ?>
