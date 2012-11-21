<?php
/* @var $this CompetenciaController */
/* @var $model Competencia */

$this->breadcrumbs=array(
	'Competencias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Competencia', 'url'=>array('index')),
	array('label'=>'Create Competencia', 'url'=>array('create')),
	array('label'=>'Update Competencia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Competencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Competencia', 'url'=>array('admin')),
);
?>

<h1>View Competencia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUsuario',
		'preparacionAcad',
		'experienciaDocente',
		'habilidadesPers',
		'gustoJovenes',
		'estiloSalesiano',
		'ilusionVocacion',
	),
)); ?>
