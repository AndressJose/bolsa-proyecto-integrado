<?php
/* @var $this ExperienciandController */
/* @var $model Experienciand */

$this->breadcrumbs=array(
	'Experienciands'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Experienciand', 'url'=>array('index')),
	array('label'=>'Create Experienciand', 'url'=>array('create')),
	array('label'=>'View Experienciand', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Experienciand', 'url'=>array('admin')),
);
?>

<h1>Update Experienciand <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>