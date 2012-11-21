<?php
/* @var $this BachillleratoController */
/* @var $model Bachilllerato */

$this->breadcrumbs=array(
	'Bachillleratos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bachilllerato', 'url'=>array('index')),
	array('label'=>'Create Bachilllerato', 'url'=>array('create')),
	array('label'=>'View Bachilllerato', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Bachilllerato', 'url'=>array('admin')),
);
?>

<h1>Update Bachilllerato <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>