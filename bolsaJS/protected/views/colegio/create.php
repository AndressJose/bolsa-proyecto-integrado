<?php
/* @var $this ColegioController */
/* @var $model Colegio */

$this->breadcrumbs=array(
	'Colegios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Colegio', 'url'=>array('index')),
	array('label'=>'Manage Colegio', 'url'=>array('admin')),
);
?>

<h1>Create Colegio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>