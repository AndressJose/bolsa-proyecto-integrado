<?php
/* @var $this DocentenoregladaController */
/* @var $model Docentenoreglada */

$this->breadcrumbs=array(
	'Docentenoregladas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Docentenoreglada', 'url'=>array('index')),
	array('label'=>'Create Docentenoreglada', 'url'=>array('create')),
	array('label'=>'Update Docentenoreglada', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Docentenoreglada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Docentenoreglada', 'url'=>array('admin')),
);
?>

<h1>View Docentenoreglada #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUsuario',
		'funcion',
		'entidad',
		'time',
		'from',
		'to',
	),
)); ?>
