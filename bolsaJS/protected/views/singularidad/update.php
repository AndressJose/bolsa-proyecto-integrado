<?php
/* @var $this SingularidadController */
/* @var $model Singularidad */

$this->breadcrumbs=array(
	'Singularidads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Singularidad', 'url'=>array('index')),
	array('label'=>'Create Singularidad', 'url'=>array('create')),
	array('label'=>'View Singularidad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Singularidad', 'url'=>array('admin')),
);
?>

<h1>Update Singularidad <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>