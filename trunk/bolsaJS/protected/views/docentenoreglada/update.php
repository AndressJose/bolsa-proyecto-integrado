<?php
/* @var $this DocentenoregladaController */
/* @var $model Docentenoreglada */

$this->breadcrumbs=array(
	'Docentenoregladas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Docentenoreglada', 'url'=>array('index')),
	array('label'=>'Create Docentenoreglada', 'url'=>array('create')),
	array('label'=>'View Docentenoreglada', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Docentenoreglada', 'url'=>array('admin')),
);
?>

<h1>Update Docentenoreglada <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>