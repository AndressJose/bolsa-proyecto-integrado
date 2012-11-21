<?php
/* @var $this ExperienciareligiosasController */
/* @var $model Experienciareligiosas */

$this->breadcrumbs=array(
	'Experienciareligiosases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Experienciareligiosas', 'url'=>array('index')),
	array('label'=>'Create Experienciareligiosas', 'url'=>array('create')),
	array('label'=>'View Experienciareligiosas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Experienciareligiosas', 'url'=>array('admin')),
);
?>

<h1>Update Experienciareligiosas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>