<?php
/* @var $this CapController */
/* @var $data Cap */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->IdUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Afirmacion')); ?>:</b>
	<?php echo CHtml::encode($data->Afirmacion); ?>
	<br />


</div>