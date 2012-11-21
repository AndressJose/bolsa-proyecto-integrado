<?php
/* @var $this CompetenciaController */
/* @var $model Competencia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'competencia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
	<div style=display:none>
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
	</div></div>

	<div class="row">
		<?php echo $form->labelEx($model,'preparacionAcad'); ?>
		<?php echo $form->checkBox($model,'preparacionAcad',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'preparacionAcad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'experienciaDocente'); ?>
		<?php echo $form->checkBox($model,'experienciaDocente',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'experienciaDocente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'habilidadesPers'); ?>
		<?php echo $form->checkBox($model,'habilidadesPers',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'habilidadesPers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gustoJovenes'); ?>
		<?php echo $form->checkBox($model,'gustoJovenes',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'gustoJovenes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estiloSalesiano'); ?>
		<?php echo $form->checkBox($model,'estiloSalesiano',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'estiloSalesiano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ilusionVocacion'); ?>
		<?php echo $form->checkBox($model,'ilusionVocacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ilusionVocacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->