<?php
/* @var $this CapController */
/* @var $model Cap */

$this->breadcrumbs=array(
	'Caps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cap', 'url'=>array('index')),
	array('label'=>'Manage Cap', 'url'=>array('admin')),
);
?>

<h1>Create Cap</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>