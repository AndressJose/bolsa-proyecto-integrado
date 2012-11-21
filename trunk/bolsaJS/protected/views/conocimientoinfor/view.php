<?php
/* @var $this ConocimientoinforController */
/* @var $model Conocimientoinfor */

$this->breadcrumbs=array(
	'Conocimientoinfors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Conocimientoinfor', 'url'=>array('index')),
	array('label'=>'Create Conocimientoinfor', 'url'=>array('create')),
	array('label'=>'Update Conocimientoinfor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Conocimientoinfor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Conocimientoinfor', 'url'=>array('admin')),
);
?>

<h1>View Conocimientoinfor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUsuario',
		'programa',
		'nivel',
	),
)); ?>
