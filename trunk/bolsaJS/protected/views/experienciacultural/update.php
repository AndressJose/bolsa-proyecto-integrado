<?php
/* @var $this ExperienciaculturalController */
/* @var $model Experienciacultural */

$this->breadcrumbs=array(
	'Experienciaculturals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Experienciacultural', 'url'=>array('index')),
	array('label'=>'Create Experienciacultural', 'url'=>array('create')),
	array('label'=>'View Experienciacultural', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Experienciacultural', 'url'=>array('admin')),
);
?>

<h1>Update Experienciacultural <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>