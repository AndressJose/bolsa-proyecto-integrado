<?php
/* @var $this DeiController */
/* @var $model Dei */

$this->breadcrumbs=array(
	'Deis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dei', 'url'=>array('index')),
	array('label'=>'Create Dei', 'url'=>array('create')),
	array('label'=>'View Dei', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dei', 'url'=>array('admin')),
);
?>

<h1>Update Dei <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>