<?php
/* @var $this AutoevaluacionController */
/* @var $model Autoevaluacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'capacidadEquipo'); ?>
		<?php echo $form->textField($model,'capacidadEquipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'relacionesPersonales'); ?>
		<?php echo $form->textField($model,'relacionesPersonales'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aptitudesSituaciones'); ?>
		<?php echo $form->textField($model,'aptitudesSituaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gradoPrepProf'); ?>
		<?php echo $form->textField($model,'gradoPrepProf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'capacidadPlanif'); ?>
		<?php echo $form->textField($model,'capacidadPlanif'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aptitudeRelacio'); ?>
		<?php echo $form->textField($model,'aptitudeRelacio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aperturaTrans'); ?>
		<?php echo $form->textField($model,'aperturaTrans'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perteneceFS'); ?>
		<?php echo $form->textField($model,'perteneceFS',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perteneceGE'); ?>
		<?php echo $form->textField($model,'perteneceGE',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->