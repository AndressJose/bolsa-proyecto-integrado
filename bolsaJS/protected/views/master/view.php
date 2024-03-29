<?php
/* @var $this MasterController */
/* @var $model Master */

$this->breadcrumbs=array(
	'Masters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Master', 'url'=>array('index')),
	array('label'=>'Create Master', 'url'=>array('create')),
	array('label'=>'Update Master', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Master', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Master', 'url'=>array('admin')),
);
?>

<h1>View Master #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUsuario',
		'nombre',
		'fecha',
		'universidad',
	),
)); ?>
