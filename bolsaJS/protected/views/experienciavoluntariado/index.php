<?php
/* @var $this ExperienciavoluntariadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Experienciavoluntariados',
);

$this->menu=array(
	array('label'=>'Create Experienciavoluntariado', 'url'=>array('create')),
	array('label'=>'Manage Experienciavoluntariado', 'url'=>array('admin')),
);
?>

<h1>Experienciavoluntariados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
