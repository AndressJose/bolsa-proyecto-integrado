<?php
/* @var $this SingularidadController */
/* @var $data Singularidad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tema1')); ?>:</b>
	<?php echo CHtml::encode($data->tema1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tema2')); ?>:</b>
	<?php echo CHtml::encode($data->tema2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asistirCursos')); ?>:</b>
	<?php echo CHtml::encode($data->asistirCursos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('limitacionHorario')); ?>:</b>
	<?php echo CHtml::encode($data->limitacionHorario); ?>
	<br />


</div>