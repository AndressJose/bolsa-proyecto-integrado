<?php
/* @var $this FullController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fulls',
);

$this->menu=array(
	array('label'=>'Create Full', 'url'=>array('create')),
	array('label'=>'Manage Full', 'url'=>array('admin')),
);
?>

<h1>Fulls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
