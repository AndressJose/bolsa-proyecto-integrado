<?php
/* @var $this SecundariaController */
/* @var $model Secundaria */

$this->breadcrumbs=array(
	'Secundarias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Secundaria', 'url'=>array('index')),
	array('label'=>'Manage Secundaria', 'url'=>array('admin')),
);
?>

<h1>Create Secundaria</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>