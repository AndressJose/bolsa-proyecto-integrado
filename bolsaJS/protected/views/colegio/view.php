<?php
/* @var $this ColegioController */
/* @var $model Colegio */

$this->breadcrumbs=array(
	'Colegios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Colegio', 'url'=>array('index')),
	array('label'=>'Create Colegio', 'url'=>array('create')),
	array('label'=>'Update Colegio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Colegio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Colegio', 'url'=>array('admin')),
);
?>

<h1>View Colegio #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUsuario',
		'nombre',
	),
)); ?>
