<?php
/* @var $this DocenteregladaController */
/* @var $data Docentereglada */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('funcion')); ?>:</b>
	<?php echo CHtml::encode($data->funcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materia')); ?>:</b>
	<?php echo CHtml::encode($data->materia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreCentro')); ?>:</b>
	<?php echo CHtml::encode($data->nombreCentro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from')); ?>:</b>
	<?php echo CHtml::encode($data->from); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('to')); ?>:</b>
	<?php echo CHtml::encode($data->to); ?>
	<br />

	*/ ?>

</div>