<?php
/* @var $this TitulounivController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Titulounivs',
);

$this->menu=array(
	array('label'=>'Create Titulouniv', 'url'=>array('create')),
	array('label'=>'Manage Titulouniv', 'url'=>array('admin')),
);
?>

<h1>Titulounivs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
