<?php
/* @var $this SecundariaController */
/* @var $model Secundaria */

$this->breadcrumbs=array(
	'Secundarias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Secundaria', 'url'=>array('index')),
	array('label'=>'Create Secundaria', 'url'=>array('create')),
	array('label'=>'View Secundaria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Secundaria', 'url'=>array('admin')),
);
?>

<h1>Update Secundaria <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>