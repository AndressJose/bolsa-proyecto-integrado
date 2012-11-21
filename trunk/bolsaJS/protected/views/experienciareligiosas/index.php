<?php
/* @var $this ExperienciareligiosasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Experienciareligiosases',
);

$this->menu=array(
	array('label'=>'Create Experienciareligiosas', 'url'=>array('create')),
	array('label'=>'Manage Experienciareligiosas', 'url'=>array('admin')),
);
?>

<h1>Experienciareligiosases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
