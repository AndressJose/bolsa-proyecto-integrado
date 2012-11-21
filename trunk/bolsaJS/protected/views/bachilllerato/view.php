<?php
/* @var $this BachillleratoController */
/* @var $model Bachilllerato */

$this->breadcrumbs=array(
	'Bachillleratos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Bachilllerato', 'url'=>array('index')),
	array('label'=>'Create Bachilllerato', 'url'=>array('create')),
	array('label'=>'Update Bachilllerato', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Bachilllerato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bachilllerato', 'url'=>array('admin')),
);
?>

<h1>View Bachilllerato #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUsuario',
		'tipo',
		'fecha',
		'centro',
	),
)); ?>
