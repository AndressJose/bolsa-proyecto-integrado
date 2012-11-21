<?php
/* @var $this SingularidadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Singularidads',
);

$this->menu=array(
	array('label'=>'Create Singularidad', 'url'=>array('create')),
	array('label'=>'Manage Singularidad', 'url'=>array('admin')),
);
?>

<h1>Singularidads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
