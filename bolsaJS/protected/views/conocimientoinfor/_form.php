<?php
/* @var $this ConocimientoinforController */
/* @var $model Conocimientoinfor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'conocimientoinfor-form',
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
		<?php echo $form->labelEx($model,'programa'); ?>
		<?php echo $form->textField($model,'programa',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'programa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivel'); ?>
		<?php echo $form->dropDownList($model, 'nivel', CHtml::listData(Niveles::model()->findAll(array('order'=>'niveles')), 'id','niveles'), array('empty'=>'Seleccionar..')); ?>
		<?php /*echo $form->checkBoxList($model,'nivel',array(1=>'basico',2=>'avanzado'));*/ ?>
		<?php echo $form->error($model,'nivel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->