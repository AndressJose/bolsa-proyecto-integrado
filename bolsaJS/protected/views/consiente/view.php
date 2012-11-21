<?php
/* @var $this ConsienteController */
/* @var $model Consiente */

$this->breadcrumbs=array(
	'Consientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Consiente', 'url'=>array('index')),
	array('label'=>'Create Consiente', 'url'=>array('create')),
	array('label'=>'Update Consiente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Consiente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Consiente', 'url'=>array('admin')),
);
?>

<h1>View Consiente #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUsuario',
		'consiente',
	),
)); ?>
