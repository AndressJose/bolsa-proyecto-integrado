<?php
/* @var $this TitulounivController */
/* @var $model Titulouniv */

$this->breadcrumbs=array(
	'Titulounivs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Titulouniv', 'url'=>array('index')),
	array('label'=>'Create Titulouniv', 'url'=>array('create')),
	array('label'=>'View Titulouniv', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Titulouniv', 'url'=>array('admin')),
);
?>

<h1>Update Titulouniv <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>