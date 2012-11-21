<?php
/* @var $this ConocimientoinforController */
/* @var $model Conocimientoinfor */

$this->breadcrumbs=array(
	'Conocimientoinfors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Conocimientoinfor', 'url'=>array('index')),
	array('label'=>'Create Conocimientoinfor', 'url'=>array('create')),
	array('label'=>'View Conocimientoinfor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Conocimientoinfor', 'url'=>array('admin')),
);
?>

<h1>Update Conocimientoinfor <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>