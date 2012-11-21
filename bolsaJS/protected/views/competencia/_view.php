<?php
/* @var $this CompetenciaController */
/* @var $data Competencia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preparacionAcad')); ?>:</b>
	<?php echo CHtml::encode($data->preparacionAcad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('experienciaDocente')); ?>:</b>
	<?php echo CHtml::encode($data->experienciaDocente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('habilidadesPers')); ?>:</b>
	<?php echo CHtml::encode($data->habilidadesPers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gustoJovenes')); ?>:</b>
	<?php echo CHtml::encode($data->gustoJovenes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estiloSalesiano')); ?>:</b>
	<?php echo CHtml::encode($data->estiloSalesiano); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ilusionVocacion')); ?>:</b>
	<?php echo CHtml::encode($data->ilusionVocacion); ?>
	<br />

	*/ ?>

</div>