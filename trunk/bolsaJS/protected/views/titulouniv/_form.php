<?php
/* @var $this TitulounivController */
/* @var $model Titulouniv */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'titulouniv-form',
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
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->dropDownList($model, 'nombre', CHtml::listData(Titulos::model()->findAll(array('order'=>'nombre')), 'id','nombre'), array('empty'=>'Seleccionar..')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
	
<div class="row">
		<?php echo $form->labelEx($model,'universidad'); ?>
		<?php echo $form->dropDownList($model, 'universidad', CHtml::listData(Universidades::model()->findAll(array('order'=>'nombre')), 'id','nombre'), array('empty'=>'Seleccionar..')); ?>
		<?php echo $form->error($model,'universidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	array(
		// you must specify name or model/attribute
		'model'=>$model,
		//'attribute'=>'fecha',
		'name'=>'fecha',
		//'name'=>'Project[projectDateStart]',

		// optional: what's the initial value/date?
		//'value' => $model->projectDateStart
		'value' => '08/20/2010',

		// optional: change the language
		//'language' => 'de',
		//'language' => 'fr',
		'language' => 'es',
		//'language' => 'pt-BR',

		/* optional: change visual
		 * themeUrl: "where the themes for this widget are located?"
		 * theme: theme name. Note that there must be a folder under themeUrl with the theme name
		 * cssFile: specifies the css file name under the theme folder. You may specify a
		 *          single filename or an array of filenames
		 * try http://jqueryui.com/themeroller/
		*/
		'themeUrl' => Yii::app()->baseUrl.'/css/jui' ,
		'theme'=>'pool',	//try 'bee' also to see the changes
		'cssFile'=>array('jquery-ui.css' /*,anotherfile.css, etc.css*/),


		//  optional: jquery Datepicker options
		'options' => array(
			// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
			'dateFormat'=>'yy/mm/dd',

			// user will be able to change month and year
			'changeMonth' => 'true',
			'changeYear' => 'true',

			// shows the button panel under the calendar (buttons like "today" and "done")
			'showButtonPanel' => 'true',

			// this is useful to allow only valid chars in the input field, according to dateFormat
			'constrainInput' => 'false',

			// speed at which the datepicker appears, time in ms or "slow", "normal" or "fast"
			'duration'=>'fast',

			// animation effect, see http://docs.jquery.com/UI/Effects
			'showAnim' =>'slide',
		),


		// optional: html options will affect the input element, not the datepicker widget itself
		'htmlOptions'=>array(
		'style'=>'height:20px;
			background:#fffff;
			color:#00000;
			font-weight:bold;
			font-size:0.9em;
			
			padding-left: 4px;'
		)
	)
); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->