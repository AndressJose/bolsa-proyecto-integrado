<?php
/* @var $this FullController */
/* @var $model Full */

$this->breadcrumbs=array(
	'Fulls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Full', 'url'=>array('index')),
	array('label'=>'Manage Full', 'url'=>array('admin')),
);
?>

<h1>Formulario Curriculum Vitae</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>