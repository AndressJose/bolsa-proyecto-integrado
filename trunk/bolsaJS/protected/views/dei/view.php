<?php
/* @var $this DeiController */
/* @var $model Dei */

$this->breadcrumbs=array(
	'Deis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Dei', 'url'=>array('index')),
	array('label'=>'Create Dei', 'url'=>array('create')),
	array('label'=>'Update Dei', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dei', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dei', 'url'=>array('admin')),
);
?>

<h1>View Dei #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUsuario',
		'titulo',
		'afirmacion',
	),
)); ?>
