<?php
/* @var $this ExperienciareligiosasController */
/* @var $model Experienciareligiosas */

$this->breadcrumbs=array(
	'Experienciareligiosases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Experienciareligiosas', 'url'=>array('index')),
	array('label'=>'Create Experienciareligiosas', 'url'=>array('create')),
	array('label'=>'Update Experienciareligiosas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Experienciareligiosas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Experienciareligiosas', 'url'=>array('admin')),
);
?>

<h1>View Experienciareligiosas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUsuario',
		'descripcion',
		'localidad',
		'entidad',
		'from',
		'to',
	),
)); ?>
