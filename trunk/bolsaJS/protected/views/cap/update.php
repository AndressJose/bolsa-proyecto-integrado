<?php
/* @var $this CapController */
/* @var $model Cap */

$this->breadcrumbs=array(
	'Caps'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cap', 'url'=>array('index')),
	array('label'=>'Create Cap', 'url'=>array('create')),
	array('label'=>'View Cap', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cap', 'url'=>array('admin')),
);
?>

<h1>Update Cap <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>