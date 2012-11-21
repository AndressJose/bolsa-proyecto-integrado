<?php
/* @var $this SecundariaController */
/* @var $data Secundaria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('centro')); ?>:</b>
	<?php echo CHtml::encode($data->centro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afirmacion')); ?>:</b>
	<?php echo CHtml::encode($data->afirmacion); ?>
	<br />


</div>