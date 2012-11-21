<?php
/* @var $this ConocimientoinforController */
/* @var $model Conocimientoinfor */

$this->breadcrumbs=array(
	'Conocimientoinfors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Conocimientoinfor', 'url'=>array('index')),
	array('label'=>'Manage Conocimientoinfor', 'url'=>array('admin')),
);
?>

<h1>Create Conocimientoinfor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>