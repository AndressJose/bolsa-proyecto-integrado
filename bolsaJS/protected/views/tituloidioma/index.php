<?php
/* @var $this TituloidiomaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tituloidiomas',
);

$this->menu=array(
	array('label'=>'Create Tituloidioma', 'url'=>array('create')),
	array('label'=>'Manage Tituloidioma', 'url'=>array('admin')),
);
?>

<h1>Tituloidiomas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
