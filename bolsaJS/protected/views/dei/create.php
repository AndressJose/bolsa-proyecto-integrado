<?php
/* @var $this DeiController */
/* @var $model Dei */

$this->breadcrumbs=array(
	'Deis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dei', 'url'=>array('index')),
	array('label'=>'Manage Dei', 'url'=>array('admin')),
);
?>

<h1>Create Dei</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>