<?php
/* @var $this ExperienciavoluntariadoController */
/* @var $model Experienciavoluntariado */

$this->breadcrumbs=array(
	'Experienciavoluntariados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Experienciavoluntariado', 'url'=>array('index')),
	array('label'=>'Manage Experienciavoluntariado', 'url'=>array('admin')),
);
?>

<h1>Create Experienciavoluntariado</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>