<?php
/* @var $this AutoevaluacionController */
/* @var $model Autoevaluacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'autoevaluacion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
	<div style=display:none>
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
	</div>
	</div>
	


	<div class="row">
		<?php echo $form->labelEx($model,'capacidadEquipo'); ?>
		<?php echo $form->radioButtonList($model,'capacidadEquipo',array(1=>1,2=>2,3=>3,4=>4,5=>5),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'capacidadEquipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'relacionesPersonales'); ?>
		<?php echo $form->radioButtonList($model,'relacionesPersonales',array(1=>1,2=>2,3=>3,4=>4,5=>5),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'relacionesPersonales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aptitudesSituaciones'); ?>
		<?php echo $form->radioButtonList($model,'aptitudesSituaciones',array(1=>1,2=>2,3=>3,4=>4,5=>5),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'aptitudesSituaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gradoPrepProf'); ?>
		<?php echo $form->radioButtonList($model,'gradoPrepProf',array(1=>1,2=>2,3=>3,4=>4,5=>5),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'gradoPrepProf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'capacidadPlanif'); ?>
		<?php echo $form->radioButtonList($model,'capacidadPlanif',array(1=>1,2=>2,3=>3,4=>4,5=>5),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'capacidadPlanif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aptitudeRelacio'); ?>
		<?php echo $form->radioButtonList($model,'aptitudeRelacio',array(1=>1,2=>2,3=>3,4=>4,5=>5),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'aptitudeRelacio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aperturaTrans'); ?>
		<?php echo $form->radioButtonList($model,'aperturaTrans',array(1=>1,2=>2,3=>3,4=>4,5=>5),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'aperturaTrans'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perteneceFS'); ?>
		<?php echo $form->textArea($model,'perteneceFS',array('rows'=>10,'cols'=>'50','maxlength'=>250)); ?>
		<?php echo $form->error($model,'perteneceFS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perteneceGE'); ?>
		<?php echo $form->textArea($model,'perteneceGE',array('rows'=>10,'cols'=>'50','maxlength'=>250)); ?>
		<?php echo $form->error($model,'perteneceGE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->