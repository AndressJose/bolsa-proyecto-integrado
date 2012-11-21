<?php
/* @var $this ConocimientoinforController */
/* @var $data Conocimientoinfor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('programa')); ?>:</b>
	<?php echo CHtml::encode($data->programa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel')); ?>:</b>
	<?php echo CHtml::encode($data->nivel); ?>
	<br />


</div>