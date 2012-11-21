<?php
/* @var $this ExperienciandController */
/* @var $model Experienciand */

$this->breadcrumbs=array(
	'Experienciands'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Experienciand', 'url'=>array('index')),
	array('label'=>'Create Experienciand', 'url'=>array('create')),
	array('label'=>'Update Experienciand', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Experienciand', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Experienciand', 'url'=>array('admin')),
);
?>

<h1>View Experienciand #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUsuario',
		'funcion',
		'time',
		'from',
		'to',
	),
)); ?>
