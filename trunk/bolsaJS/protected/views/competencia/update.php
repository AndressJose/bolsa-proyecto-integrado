<?php
/* @var $this CompetenciaController */
/* @var $model Competencia */

$this->breadcrumbs=array(
	'Competencias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Competencia', 'url'=>array('index')),
	array('label'=>'Create Competencia', 'url'=>array('create')),
	array('label'=>'View Competencia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Competencia', 'url'=>array('admin')),
);
?>

<h1>Update Competencia <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>