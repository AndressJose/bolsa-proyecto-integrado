<?php
/* @var $this ExperienciandController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Experienciands',
);

$this->menu=array(
	array('label'=>'Create Experienciand', 'url'=>array('create')),
	array('label'=>'Manage Experienciand', 'url'=>array('admin')),
);
?>

<h1>Experienciands</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
