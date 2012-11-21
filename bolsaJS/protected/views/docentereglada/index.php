<?php
/* @var $this DocenteregladaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Docenteregladas',
);

$this->menu=array(
	array('label'=>'Create Docentereglada', 'url'=>array('create')),
	array('label'=>'Manage Docentereglada', 'url'=>array('admin')),
);
?>

<h1>Docenteregladas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
