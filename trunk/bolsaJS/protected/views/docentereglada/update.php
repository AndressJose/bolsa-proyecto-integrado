<?php
/* @var $this DocenteregladaController */
/* @var $model Docentereglada */

$this->breadcrumbs=array(
	'Docenteregladas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Docentereglada', 'url'=>array('index')),
	array('label'=>'Create Docentereglada', 'url'=>array('create')),
	array('label'=>'View Docentereglada', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Docentereglada', 'url'=>array('admin')),
);
?>

<h1>Update Docentereglada <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>