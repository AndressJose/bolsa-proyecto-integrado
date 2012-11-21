<?php
/* @var $this TitulounivController */
/* @var $model Titulouniv */

$this->breadcrumbs=array(
	'Titulounivs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Titulouniv', 'url'=>array('index')),
	array('label'=>'Create Titulouniv', 'url'=>array('create')),
	array('label'=>'Update Titulouniv', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Titulouniv', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Titulouniv', 'url'=>array('admin')),
);
?>

<h1>View Titulouniv #<?php echo $model->id; ?></h1>

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
