<?php
/* @var $this ConocimientoinforController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conocimientoinfors',
);

$this->menu=array(
	array('label'=>'Create Conocimientoinfor', 'url'=>array('create')),
	array('label'=>'Manage Conocimientoinfor', 'url'=>array('admin')),
);
?>

<h1>Conocimientoinfors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
