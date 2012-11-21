<?php
/* @var $this DocenteregladaController */
/* @var $model Docentereglada */

$this->breadcrumbs=array(
	'Docenteregladas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Docentereglada', 'url'=>array('index')),
	array('label'=>'Create Docentereglada', 'url'=>array('create')),
	array('label'=>'Update Docentereglada', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Docentereglada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Docentereglada', 'url'=>array('admin')),
);
?>

<h1>View Docentereglada #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUsuario',
		'funcion',
		'materia',
		'nombreCentro',
		'time',
		'from',
		'to',
	),
)); ?>
