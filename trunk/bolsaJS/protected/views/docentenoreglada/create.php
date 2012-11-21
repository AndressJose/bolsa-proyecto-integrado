<?php
/* @var $this DocentenoregladaController */
/* @var $model Docentenoreglada */

$this->breadcrumbs=array(
	'Docentenoregladas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Docentenoreglada', 'url'=>array('index')),
	array('label'=>'Manage Docentenoreglada', 'url'=>array('admin')),
);
?>

<h1>Create Docentenoreglada</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>