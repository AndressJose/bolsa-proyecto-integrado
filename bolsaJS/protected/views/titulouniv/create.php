<?php
/* @var $this TitulounivController */
/* @var $model Titulouniv */

$this->breadcrumbs=array(
	'Titulounivs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Titulouniv', 'url'=>array('index')),
	array('label'=>'Manage Titulouniv', 'url'=>array('admin')),
);
?>

<h1>Create Titulouniv</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>