<?php
/* @var $this IdiomasController */
/* @var $model Idiomas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'idiomas-form',
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
		<?php echo $form->labelEx($model,'idioma'); ?>
		<?php echo $form->textField($model,'idioma',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'idioma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivel'); ?>
		<?php echo $form->textField($model,'nivel',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nivel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->