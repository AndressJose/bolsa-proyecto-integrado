<?php
/* @var $this ExperienciareligiosasController */
/* @var $model Experienciareligiosas */

$this->breadcrumbs=array(
	'Experienciareligiosases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Experienciareligiosas', 'url'=>array('index')),
	array('label'=>'Manage Experienciareligiosas', 'url'=>array('admin')),
);
?>

<h1>Create Experienciareligiosas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>