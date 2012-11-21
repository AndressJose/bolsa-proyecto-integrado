<?php
/* @var $this ExperienciandController */
/* @var $model Experienciand */

$this->breadcrumbs=array(
	'Experienciands'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Experienciand', 'url'=>array('index')),
	array('label'=>'Manage Experienciand', 'url'=>array('admin')),
);
?>

<h1>Create Experienciand</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>