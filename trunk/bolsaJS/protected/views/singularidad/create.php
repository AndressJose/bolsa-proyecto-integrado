<?php
/* @var $this SingularidadController */
/* @var $model Singularidad */

$this->breadcrumbs=array(
	'Singularidads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Singularidad', 'url'=>array('index')),
	array('label'=>'Manage Singularidad', 'url'=>array('admin')),
);
?>

<h1>Create Singularidad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>