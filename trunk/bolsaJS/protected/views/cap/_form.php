<?php
/* @var $this CapController */
/* @var $model Cap */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cap-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
	<div style=display:none>
		<?php echo $form->labelEx($model,'IdUsuario'); ?>
		<?php echo $form->textField($model,'IdUsuario'); ?>
		<?php echo $form->error($model,'IdUsuario'); ?>
	</div></div>

	<div class="row">
		<?php echo $form->labelEx($model,'Afirmacion'); ?>
		<?php echo $form->RadioButtonList($model,'Afirmacion',array('1'=>'Si','2'=>'No'),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'Afirmacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->