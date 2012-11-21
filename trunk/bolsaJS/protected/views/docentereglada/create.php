<?php
/* @var $this DocenteregladaController */
/* @var $model Docentereglada */

$this->breadcrumbs=array(
	'Docenteregladas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Docentereglada', 'url'=>array('index')),
	array('label'=>'Manage Docentereglada', 'url'=>array('admin')),
);
?>

<h1>Create Docentereglada</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>