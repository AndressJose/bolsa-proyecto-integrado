<?php
/* @var $this BachillleratoController */
/* @var $model Bachilllerato */

$this->breadcrumbs=array(
	'Bachillleratos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bachilllerato', 'url'=>array('index')),
	array('label'=>'Manage Bachilllerato', 'url'=>array('admin')),
);
?>

<h1>Create Bachilllerato</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>