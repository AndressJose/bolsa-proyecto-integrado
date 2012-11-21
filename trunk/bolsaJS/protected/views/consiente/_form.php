<?php
/* @var $this ConsienteController */
/* @var $model Consiente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'consiente-form',
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
		<?php echo $form->labelEx($model,'consiente'); ?>
		<?php echo $form->RadioButtonList($model,'consiente',array(1=>'Si',2=>'No'),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'consiente'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->