<?php
/* @var $this SecundariaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Secundarias',
);

$this->menu=array(
	array('label'=>'Create Secundaria', 'url'=>array('create')),
	array('label'=>'Manage Secundaria', 'url'=>array('admin')),
);
?>

<h1>Secundarias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
