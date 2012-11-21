<?php
/* @var $this ColegioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Colegios',
);

$this->menu=array(
	array('label'=>'Create Colegio', 'url'=>array('create')),
	array('label'=>'Manage Colegio', 'url'=>array('admin')),
);
?>

<h1>Colegios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
