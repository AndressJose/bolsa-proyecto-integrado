<?php
/* @var $this SingularidadController */
/* @var $model Singularidad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'singularidad-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row" style=display:none>
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tema1'); ?>
		<?php echo $form->textArea($model,'tema1',array('rows'=>15,'cols'=>100,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'tema1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tema2'); ?>
		<?php echo $form->textArea($model,'tema2',array('rows'=>15,'cols'=>100,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'tema2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asistirCursos'); ?>
		<?php echo $form->RadioButtonList($model,'asistirCursos',array(1=>'Si',2=>'No'),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'asistirCursos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'limitacionHorario'); ?>
		<?php echo $form->RadioButtonList($model,'limitacionHorario',array(1=>'Si',2=>'No'),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'limitacionHorario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->