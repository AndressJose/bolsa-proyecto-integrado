<?php
/* @var $this ColegioController */
/* @var $model Colegio */

$this->breadcrumbs=array(
	'Colegios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Colegio', 'url'=>array('index')),
	array('label'=>'Create Colegio', 'url'=>array('create')),
	array('label'=>'View Colegio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Colegio', 'url'=>array('admin')),
);
?>

<h1>Update Colegio <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>