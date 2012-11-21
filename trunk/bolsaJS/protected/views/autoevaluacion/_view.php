<?php
/* @var $this AutoevaluacionController */
/* @var $data Autoevaluacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capacidadEquipo')); ?>:</b>
	<?php echo CHtml::encode($data->capacidadEquipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('relacionesPersonales')); ?>:</b>
	<?php echo CHtml::encode($data->relacionesPersonales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aptitudesSituaciones')); ?>:</b>
	<?php echo CHtml::encode($data->aptitudesSituaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gradoPrepProf')); ?>:</b>
	<?php echo CHtml::encode($data->gradoPrepProf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capacidadPlanif')); ?>:</b>
	<?php echo CHtml::encode($data->capacidadPlanif); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('aptitudeRelacio')); ?>:</b>
	<?php echo CHtml::encode($data->aptitudeRelacio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aperturaTrans')); ?>:</b>
	<?php echo CHtml::encode($data->aperturaTrans); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perteneceFS')); ?>:</b>
	<?php echo CHtml::encode($data->perteneceFS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perteneceGE')); ?>:</b>
	<?php echo CHtml::encode($data->perteneceGE); ?>
	<br />

	*/ ?>

</div>