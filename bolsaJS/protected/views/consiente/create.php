<?php
/* @var $this ConsienteController */
/* @var $model Consiente */

$this->breadcrumbs=array(
	'Consientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Consiente', 'url'=>array('index')),
	array('label'=>'Manage Consiente', 'url'=>array('admin')),
);
?>

<h1>Create Consiente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>