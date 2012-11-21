<?php
/* @var $this TituloidiomaController */
/* @var $model Tituloidioma */

$this->breadcrumbs=array(
	'Tituloidiomas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tituloidioma', 'url'=>array('index')),
	array('label'=>'Create Tituloidioma', 'url'=>array('create')),
	array('label'=>'View Tituloidioma', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tituloidioma', 'url'=>array('admin')),
);
?>

<h1>Update Tituloidioma <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>