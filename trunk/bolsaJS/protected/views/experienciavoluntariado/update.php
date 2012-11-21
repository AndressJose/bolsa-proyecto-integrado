<?php
/* @var $this ExperienciavoluntariadoController */
/* @var $model Experienciavoluntariado */

$this->breadcrumbs=array(
	'Experienciavoluntariados'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Experienciavoluntariado', 'url'=>array('index')),
	array('label'=>'Create Experienciavoluntariado', 'url'=>array('create')),
	array('label'=>'View Experienciavoluntariado', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Experienciavoluntariado', 'url'=>array('admin')),
);
?>

<h1>Update Experienciavoluntariado <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>