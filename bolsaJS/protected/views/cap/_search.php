<?php
/* @var $this CapController */
/* @var $model Cap */
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
		<?php echo $form->label($model,'IdUsuario'); ?>
		<?php echo $form->textField($model,'IdUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Afirmacion'); ?>
		<?php echo $form->textField($model,'Afirmacion',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->