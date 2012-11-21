<?php
/* @var $this ConsienteController */
/* @var $model Consiente */

$this->breadcrumbs=array(
	'Consientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Consiente', 'url'=>array('index')),
	array('label'=>'Create Consiente', 'url'=>array('create')),
	array('label'=>'View Consiente', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Consiente', 'url'=>array('admin')),
);
?>

<h1>Update Consiente <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>