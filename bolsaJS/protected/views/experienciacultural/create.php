<?php
/* @var $this ExperienciaculturalController */
/* @var $model Experienciacultural */

$this->breadcrumbs=array(
	'Experienciaculturals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Experienciacultural', 'url'=>array('index')),
	array('label'=>'Manage Experienciacultural', 'url'=>array('admin')),
);
?>

<h1>Create Experienciacultural</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>