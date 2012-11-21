<?php
/* @var $this FullController */
/* @var $model Full */

$this->breadcrumbs=array(
	'Fulls'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Full', 'url'=>array('index')),
	array('label'=>'Create Full', 'url'=>array('create')),
	array('label'=>'View Full', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Full', 'url'=>array('admin')),
);
?>

<h1>Update CV <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>