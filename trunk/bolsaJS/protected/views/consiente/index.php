<?php
/* @var $this ConsienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Consientes',
);

$this->menu=array(
	array('label'=>'Create Consiente', 'url'=>array('create')),
	array('label'=>'Manage Consiente', 'url'=>array('admin')),
);
?>

<h1>Consientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
