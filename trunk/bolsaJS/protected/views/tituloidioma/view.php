<?php
/* @var $this TituloidiomaController */
/* @var $model Tituloidioma */

$this->breadcrumbs=array(
	'Tituloidiomas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tituloidioma', 'url'=>array('index')),
	array('label'=>'Create Tituloidioma', 'url'=>array('create')),
	array('label'=>'Update Tituloidioma', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tituloidioma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tituloidioma', 'url'=>array('admin')),
);
?>

<h1>View Tituloidioma #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUsuario',
		'titulo',
		'entidad',
		'from',
		'to',
	),
)); ?>
