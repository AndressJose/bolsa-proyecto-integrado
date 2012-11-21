<?php
/* @var $this BachillleratoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bachillleratos',
);

$this->menu=array(
	array('label'=>'Create Bachilllerato', 'url'=>array('create')),
	array('label'=>'Manage Bachilllerato', 'url'=>array('admin')),
);
?>

<h1>Bachillleratos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
