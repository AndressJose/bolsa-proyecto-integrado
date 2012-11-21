<?php
/* @var $this DeiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Deis',
);

$this->menu=array(
	array('label'=>'Create Dei', 'url'=>array('create')),
	array('label'=>'Manage Dei', 'url'=>array('admin')),
);
?>

<h1>Deis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
