<?php
/* @var $this ExperienciaculturalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Experienciaculturals',
);

$this->menu=array(
	array('label'=>'Create Experienciacultural', 'url'=>array('create')),
	array('label'=>'Manage Experienciacultural', 'url'=>array('admin')),
);
?>

<h1>Experienciaculturals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
