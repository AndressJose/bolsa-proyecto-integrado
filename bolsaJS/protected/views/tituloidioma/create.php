<?php
/* @var $this TituloidiomaController */
/* @var $model Tituloidioma */

$this->breadcrumbs=array(
	'Tituloidiomas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tituloidioma', 'url'=>array('index')),
	array('label'=>'Manage Tituloidioma', 'url'=>array('admin')),
);
?>

<h1>Create Tituloidioma</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>