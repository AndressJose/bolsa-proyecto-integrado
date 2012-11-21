<?php
/* @var $this DocentenoregladaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Docentenoregladas',
);

$this->menu=array(
	array('label'=>'Create Docentenoreglada', 'url'=>array('create')),
	array('label'=>'Manage Docentenoreglada', 'url'=>array('admin')),
);
?>

<h1>Docentenoregladas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
