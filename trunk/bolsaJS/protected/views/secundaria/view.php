<?php
/* @var $this SecundariaController */
/* @var $model Secundaria */

$this->breadcrumbs=array(
	'Secundarias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Secundaria', 'url'=>array('index')),
	array('label'=>'Create Secundaria', 'url'=>array('create')),
	array('label'=>'Update Secundaria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Secundaria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Secundaria', 'url'=>array('admin')),
);
?>

<h1>View Secundaria #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUsuario',
		'fecha',
		'centro',
		'afirmacion',
	),
)); ?>
