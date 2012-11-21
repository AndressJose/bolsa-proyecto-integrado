<?php
/* @var $this FullController */
/* @var $model Full */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'full-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
	</div>
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Paso 1</a></li>
                 <li><a href="#tabs-2">Paso 2</a></li>
                  <li><a href="#tabs-3">Paso 3</a></li>
                  <li><a href="#tabs-4">Paso 4</a></li>
            </ul>
            
            <div id="tabs-1">
       <div class="row">
		<?php echo $form->labelEx($model,'consiente'); ?>
		<?php echo $form->RadioButtonList($model,'consiente',array(1=>'Si',2=>'No'),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'consiente'); ?>
	</div>
         
        
         
        
        
        <h4>Titulo de Secundaria</h4>
        
		<div class="row">
		<?php echo $form->labelEx($model,'afirmacion_sec'); ?>
		<?php echo $form->RadioButtonList($model,'afirmacion_sec',array(1=>'Si',2=>'No'),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'afirmacion_sec'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'centro_sec'); ?>
		<?php echo $form->textField($model,'centro_sec',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'centro_sec'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'fecha_sec'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	array(
 	// you must specify name or model/attribute
		'model'=>$model,
		'attribute'=>'fecha_sec',
		'name'=>'fecha_sec',
		//'name'=>'Project[projectDateStart]',

		// optional: what's the initial value/date?
		//'value' => $model->projectDateStart
	

		// optional: change the language
		//'language' => 'de',
		//'language' => 'fr',
		 'language'=>'es',
            
            'options' => array(
                
            'showAnim' => 'slide',
           // show to user format
            'dateFormat' => 'yy/mm/dd', // save to db format
            'yearRange'=>'1970:2013',
             

			// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
			

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
			
		),


		// optional: html options will affect the input element, not the datepicker widget itself
		'htmlOptions'=>array(
		'style'=>'height:20px;
			background:#FFFFFF;
			color:#00000;
			
			font-size:0.9em;
			
			padding-left: 4px;'
		)
	)
); ?>
        

		<?php echo $form->error($model,'fecha_sec'); ?>
	</div>

        <h4>Titulo de Bachillerato</h4>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_bach'); ?>
		<?php echo $form->textField($model,'tipo_bach',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipo_bach'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'centro_bach'); ?>
		<?php echo $form->textField($model,'centro_bach',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'centro_bach'); ?>
	</div>
<div class="row">
		<?php echo $form->labelEx($model,'fecha_bach'); ?>
		<?php //echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha_bach'); ?>
	
	<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	array(
		// you must specify name or model/attribute
		'model'=>$model,
		'attribute'=>'fecha_bach',
		'name'=>'fecha_bach',
		//'name'=>'Project[projectDateStart]',

		// optional: what's the initial value/date?
		//'value' => $model->projectDateStart
		

		// optional: change the language
		//'language' => 'de',
		//'language' => 'fr',
		 'language'=>'es',
            
            'options' => array(
                'altField'=>'#alt-date',
            'showAnim' => 'slide',
            'altFormat' => 'dd-mm-yy',// show to user format
            'dateFormat' => 'yy/mm/dd', // save to db format
            'yearRange'=>'1970:2013',
             

			// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
			

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
			
		),


		// optional: html options will affect the input element, not the datepicker widget itself
		'htmlOptions'=>array(
		'style'=>'height:20px;
			background:#FFFFFF;
			color:#00000;
			
			font-size:0.9em;
			
			padding-left: 4px;'
		)
	)
); ?>
        
</div>
       
        <h4>Titulo Universitario</h4>
	
      <div class="row">
		<?php echo $form->labelEx($model,'nombre_tituniv'); ?>
		<?php echo $form->dropDownList($model, 'nombre_tituniv', CHtml::listData(Titulos::model()->findAll(array('order'=>'nombre')), 'nombre','nombre'), array('empty'=>'Seleccionar..')); ?>
		<?php echo $form->error($model,'nombre_tituniv'); ?>
	</div>
	
<div class="row">
		<?php echo $form->labelEx($model,'universidad_tituniv'); ?>
		<?php echo $form->dropDownList($model, 'universidad_tituniv', CHtml::listData(Universidades::model()->findAll(array('order'=>'nombre')), 'nombre','nombre'), array('empty'=>'Seleccionar..')); ?>
		<?php echo $form->error($model,'universidad_tituniv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_tituniv'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	array(
		// you must specify name or model/attribute
		'model'=>$model,
		'attribute'=>'fecha_tituniv',
		'name'=>'fecha_tituniv',
		//'name'=>'Project[projectDateStart]',

		// optional: what's the initial value/date?
		//'value' => $model->projectDateStart
		

		// optional: change the language
		//'language' => 'de',
		//'language' => 'fr',
		 'language'=>'es',
            
            'options' => array(
                'altField'=>'#alt-date',
            'showAnim' => 'slide',
            'altFormat' => 'dd-mm-yy',// show to user format
            'dateFormat' => 'yy/mm/dd', // save to db format
            'yearRange'=>'1970:2013',
             

			// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
			

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
			
		),


		// optional: html options will affect the input element, not the datepicker widget itself
		'htmlOptions'=>array(
		'style'=>'height:20px;
			background:#FFFFFF;
			color:#00000;
			
			font-size:0.9em;
			
			padding-left: 4px;'
		)
	)
); ?>

		<?php echo $form->error($model,'fecha_tituniv'); ?>
	</div>
        <h4>Master</h4>
	<div class="row">
		<?php echo $form->labelEx($model,'nombre_mast'); ?>
		<?php echo $form->textField($model,'nombre_mast',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre_mast'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'universidad_mast'); ?>
		<?php echo $form->dropDownList($model, 'universidad_mast', CHtml::listData(Universidades::model()->findAll(array('order'=>'nombre')), 'nombre','nombre'), array('empty'=>'Seleccionar..')); ?>
		<?php echo $form->error($model,'universidad_mast'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_mast'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	array(
		// you must specify name or model/attribute
		'model'=>$model,
		'attribute'=>'fecha_mast',
		'name'=>'fecha_mast',
		//'name'=>'Project[projectDateStart]',

		// optional: what's the initial value/date?
		//'value' => $model->projectDateStart
	

		// optional: change the language
		//'language' => 'de',
		//'language' => 'fr',
		 'language'=>'es',
            
            'options' => array(
                'altField'=>'#alt-date',
            'showAnim' => 'slide',
            'altFormat' => 'dd-mm-yy',// show to user format
            'dateFormat' => 'yy/mm/dd', // save to db format
            'yearRange'=>'1970:2013',
             

			// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
			

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
			
		),


		// optional: html options will affect the input element, not the datepicker widget itself
		'htmlOptions'=>array(
		'style'=>'height:20px;
			background:#FFFFFF;
			color:#00000;
			
			font-size:0.9em;
			
			padding-left: 4px;'
		)
	)
); ?>

		<?php echo $form->error($model,'fecha_mast'); ?>
	</div>

            </div>
            <div id="tabs-2">
        <h4>Cap o equivalente</h4>

	<div class="row">
		<?php echo $form->labelEx($model,'afirmacion_cap'); ?>
		<?php echo $form->RadioButtonList($model,'afirmacion_cap',array('1'=>'Si','2'=>'No'),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'afirmacion_cap'); ?>
	</div>
        <h4>Dei/Deca</h4>
	<div class="row">
		<?php echo $form->labelEx($model,'afirmacion_dei'); ?>
		<?php echo $form->RadioButtonList($model,'afirmacion_dei',array('1'=>'Si','2'=>'No'),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'afirmacion_dei'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo_dei'); ?>
		<?php echo $form->textField($model,'titulo_dei',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'titulo_dei'); ?>
	</div>
        
        	

        <h4>Idiomas</h4>

	<div class="row">
		<?php echo $form->labelEx($model,'nivelIngles_idio'); ?>
		<?php echo $form->dropDownList($model,'nivelIngles_idio',CHtml::listData(Niveles::model()->findAll(array('order'=>'niveles')), 'niveles','niveles'), array('empty'=>'Seleccionar..')); ?>
		<?php echo $form->error($model,'nivelIngles_idio'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'nivelFrances_idio'); ?>
		<?php echo $form->dropDownList($model,'nivelFrances_idio',CHtml::listData(Niveles::model()->findAll(array('order'=>'niveles')), 'niveles','niveles'), array('empty'=>'Seleccionar..')); ?>
		<?php echo $form->error($model,'nivelFrances_idio'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'nivelAleman_idio'); ?>
		<?php echo $form->dropDownList($model,'nivelAleman_idio',CHtml::listData(Niveles::model()->findAll(array('order'=>'niveles')), 'niveles','niveles'), array('empty'=>'Seleccionar..')); ?>
		<?php echo $form->error($model,'nivelAleman_idio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idiomaOtros_idio'); ?>
		<?php echo $form->textField($model,'idiomaOtros_idio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'idiomaOtros_idio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivelOtros_idio'); ?>
		<?php echo $form->dropDownList($model,'nivelOtros_idio',CHtml::listData(Niveles::model()->findAll(array('order'=>'niveles')), 'niveles','niveles'), array('empty'=>'Seleccionar..')); ?>
		<?php echo $form->error($model,'nivelOtros_idio'); ?>
	</div>

        <h4>Titulos de Idiomas</h4>
	<div class="row">
		<?php echo $form->labelEx($model,'titulo_titidio'); ?>
		<?php echo $form->textField($model,'titulo_titidio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'titulo_titidio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad_titidio'); ?>
		<?php echo $form->textField($model,'entidad_titidio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'entidad_titidio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'from_titidio'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	array(
		// you must specify name or model/attribute
		'model'=>$model,
		'attribute'=>'from_titidio',
		'name'=>'from_titidio',
		//'name'=>'Project[projectDateStart]',

		// optional: what's the initial value/date?
		//'value' => $model->projectDateStart
		

		// optional: change the language
		//'language' => 'de',
		//'language' => 'fr',
		 'language'=>'es',
            
            'options' => array(
                'altField'=>'#alt-date',
            'showAnim' => 'slide',
            'altFormat' => 'dd-mm-yy',// show to user format
            'dateFormat' => 'yy/mm/dd', // save to db format
            'yearRange'=>'1970:2013',
             

			// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
			

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
			
		),


		// optional: html options will affect the input element, not the datepicker widget itself
		'htmlOptions'=>array(
		'style'=>'height:20px;
			background:#FFFFFF;
			color:#00000;
			
			font-size:0.9em;
			
			padding-left: 4px;'
		)
	)
); ?>
		<?php echo $form->error($model,'from_titidio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to_titidio'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	array(
		// you must specify name or model/attribute
		'model'=>$model,
		'attribute'=>'to_titidio',
		'name'=>'to_titidio',
		//'name'=>'Project[projectDateStart]',

		// optional: what's the initial value/date?
		//'value' => $model->projectDateStart
		'value' => '20/08/2010',

		// optional: change the language
		//'language' => 'de',
		//'language' => 'fr',
		 'language'=>'es',
            
            'options' => array(
                'altField'=>'#alt-date',
            'showAnim' => 'slide',
            'altFormat' => 'dd-mm-yy',// show to user format
            'dateFormat' => 'yy/mm/dd', // save to db format
            'yearRange'=>'1970:2013',
             

			// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
			

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
			
		),


		// optional: html options will affect the input element, not the datepicker widget itself
		'htmlOptions'=>array(
		'style'=>'height:20px;
			background:#FFFFFF;
			color:#00000;
			
			font-size:0.9em;
			
			padding-left: 4px;'
		)
	)
); ?>
		<?php echo $form->error($model,'to_titidio'); ?>
	</div>
        
        <h4>Conocimientos de Informatica</h4>
        
        <div class="row">
		<?php echo $form->labelEx($model,'programa_ci'); ?>
		<?php echo $form->textField($model,'programa_ci',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'programa_ci'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivel_ci'); ?>
		<?php echo $form->dropDownList($model, 'nivel_ci', CHtml::listData(Niveles::model()->findAll(array('order'=>'niveles')), 'niveles','niveles'), array('empty'=>'Seleccionar..')); ?>
		<?php echo $form->error($model,'nivel_ci'); ?>
	</div>
            </div>
            <div id="tabs-3">
        <h4>Experiencia no docente</h4>
	<div class="row">
		<?php echo $form->labelEx($model,'funcion_exnd'); ?>
		<?php echo $form->textField($model,'funcion_exnd',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'funcion_exnd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_exnd'); ?>
		<?php echo $form->textField($model,'time_exnd',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'time_exnd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'from_exnd'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	array(
		// you must specify name or model/attribute
		'model'=>$model,
		'attribute'=>'from_exnd',
		'name'=>'from_exnd',
		//'name'=>'Project[projectDateStart]',

		// optional: what's the initial value/date?
		//'value' => $model->projectDateStart
	

		// optional: change the language
		//'language' => 'de',
		//'language' => 'fr',
		 'language'=>'es',
            
            'options' => array(
                'altField'=>'#alt-date',
            'showAnim' => 'slide',
            'altFormat' => 'dd-mm-yy',// show to user format
            'dateFormat' => 'yy/mm/dd', // save to db format
            'yearRange'=>'1970:2013',
             

			// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
			

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
			
		),


		// optional: html options will affect the input element, not the datepicker widget itself
		'htmlOptions'=>array(
		'style'=>'height:20px;
			background:#FFFFFF;
			color:#00000;
			
			font-size:0.9em;
			
			padding-left: 4px;'
		)
	)
); ?>
		<?php echo $form->error($model,'from_exnd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to_exnd'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	array(
		// you must specify name or model/attribute
		'model'=>$model,
		'attribute'=>'to_exnd',
		'name'=>'to_exnd',
		//'name'=>'Project[projectDateStart]',

		// optional: what's the initial value/date?
		//'value' => $model->projectDateStart
		

		// optional: change the language
		//'language' => 'de',
		//'language' => 'fr',
		 'language'=>'es',
            
            'options' => array(
                'altField'=>'#alt-date',
            'showAnim' => 'slide',
            'altFormat' => 'dd-mm-yy',// show to user format
            'dateFormat' => 'yy/mm/dd', // save to db format
            'yearRange'=>'1970:2013',
             

			// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
			

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
			
		),


		// optional: html options will affect the input element, not the datepicker widget itself
		'htmlOptions'=>array(
		'style'=>'height:20px;
			background:#FFFFFF;
			color:#00000;
			
			font-size:0.9em;
			
			padding-left: 4px;'
		)
	)
); ?>
		<?php echo $form->error($model,'to_exnd'); ?>
	</div>
        <h4>Experiencia Docente en Enseñanza Reglada</h4>

	<div class="row">
		<?php echo $form->labelEx($model,'funcion_dr'); ?>
		<?php echo $form->textField($model,'funcion_dr',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'funcion_dr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'materia_dr'); ?>
		<?php echo $form->textField($model,'materia_dr',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'materia_dr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreCentro_dr'); ?>
		<?php echo $form->textField($model,'nombreCentro_dr',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombreCentro_dr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_dr'); ?>
		<?php echo $form->textField($model,'time_dr',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'time_dr'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'from_dr'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	array(
		// you must specify name or model/attribute
		'model'=>$model,
		'attribute'=>'from_dr',
		'name'=>'from_dr',
		//'name'=>'Project[projectDateStart]',

		// optional: what's the initial value/date?
		//'value' => $model->projectDateStart
		
		// optional: change the language
		//'language' => 'de',
		//'language' => 'fr',
		 'language'=>'es',
            
            'options' => array(
                'altField'=>'#alt-date',
            'showAnim' => 'slide',
            'altFormat' => 'dd-mm-yy',// show to user format
            'dateFormat' => 'yy/mm/dd', // save to db format
            'yearRange'=>'1970:2013',
             

			// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
			

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
			
		),


		// optional: html options will affect the input element, not the datepicker widget itself
		'htmlOptions'=>array(
		'style'=>'height:20px;
			background:#FFFFFF;
			color:#00000;
			
			font-size:0.9em;
			
			padding-left: 4px;'
		)
	)
); ?>
		<?php echo $form->error($model,'from_dr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to_dr'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	array(
		// you must specify name or model/attribute
		'model'=>$model,
		'attribute'=>'to_dr',
		'name'=>'to_dr',
		//'name'=>'Project[projectDateStart]',

		// optional: what's the initial value/date?
		//'value' => $model->projectDateStart
		

		// optional: change the language
		//'language' => 'de',
		//'language' => 'fr',
		 'language'=>'es',
            
            'options' => array(
                'altField'=>'#alt-date',
            'showAnim' => 'slide',
            'altFormat' => 'dd-mm-yy',// show to user format
            'dateFormat' => 'yy/mm/dd', // save to db format
            'yearRange'=>'1970:2013',
             

			// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
			

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
			
		),


		// optional: html options will affect the input element, not the datepicker widget itself
		'htmlOptions'=>array(
		'style'=>'height:20px;
			background:#FFFFFF;
			color:#00000;
			
			font-size:0.9em;
			
			padding-left: 4px;'
		)
	)
); ?>
		<?php echo $form->error($model,'to_dr'); ?>
	</div>
        <h4>Experiencia Cultural</h4>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_excul'); ?>
		<?php echo $form->textArea($model,'descripcion_excul',array('rows'=>10,'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion_excul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'localidad_excul'); ?>
		<?php echo $form->dropDownList($model,'localidad_excul',CHtml::listData(Municipios::model()->findAll(array('order'=>'municipio')), 'municipio','municipio'), array('empty'=>'Seleccionar..')); ?>
		<?php echo $form->error($model,'localidad_excul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad_excul'); ?>
		<?php echo $form->textField($model,'entidad_excul',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'entidad_excul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'from_excul'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	array(
		// you must specify name or model/attribute
		'model'=>$model,
		'attribute'=>'from_excul',
		'name'=>'from_excul',
		//'name'=>'Project[projectDateStart]',

		// optional: what's the initial value/date?
		//'value' => $model->projectDateStart
		

		// optional: change the language
		//'language' => 'de',
		//'language' => 'fr',
		 'language'=>'es',
            
            'options' => array(
                'altField'=>'#alt-date',
            'showAnim' => 'slide',
            'altFormat' => 'dd-mm-yy',// show to user format
            'dateFormat' => 'yy/mm/dd', // save to db format
            'yearRange'=>'1970:2013',
             

			// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
			

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
			
		),


		// optional: html options will affect the input element, not the datepicker widget itself
		'htmlOptions'=>array(
		'style'=>'height:20px;
			background:#FFFFFF;
			color:#00000;
			
			font-size:0.9em;
			
			padding-left: 4px;'
		)
	)
); ?>
		<?php echo $form->error($model,'from_excul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to_excul'); ?>
	<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	array(
		// you must specify name or model/attribute
		'model'=>$model,
		'attribute'=>'to_excul',
		'name'=>'to_excul',
		//'name'=>'Project[projectDateStart]',

		// optional: what's the initial value/date?
		//'value' => $model->projectDateStart
		

		// optional: change the language
		//'language' => 'de',
		//'language' => 'fr',
		 'language'=>'es',
            
            'options' => array(
                'altField'=>'#alt-date',
            'showAnim' => 'slide',
            'altFormat' => 'dd-mm-yy',// show to user format
            'dateFormat' => 'yy/mm/dd', // save to db format
            'yearRange'=>'1970:2013',
             

			// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
			

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
			
		),


		// optional: html options will affect the input element, not the datepicker widget itself
		'htmlOptions'=>array(
		'style'=>'height:20px;
			background:#FFFFFF;
			color:#00000;
			
			font-size:0.9em;
			
			padding-left: 4px;'
		)
	)
); ?>
		<?php echo $form->error($model,'to_excul'); ?>
	</div>
        
        <h4>Experiencia Religiosa</h4>
	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_exrel'); ?>
		<?php echo $form->textArea($model,'descripcion_exrel',array('rows'=>10,'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion_exrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'localidad_exrel'); ?>
		<?php echo $form->dropDownList($model,'localidad_exrel',CHtml::listData(Municipios::model()->findAll(array('order'=>'municipio')), 'municipio','municipio'), array('empty'=>'Seleccionar..')); ?>
		<?php echo $form->error($model,'localidad_exrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad_exrel'); ?>
		<?php echo $form->textField($model,'entidad_exrel',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'entidad_exrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'from_exrel'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	array(
		// you must specify name or model/attribute
		'model'=>$model,
		'attribute'=>'from_exrel',
		'name'=>'from_exrel',
		//'name'=>'Project[projectDateStart]',

		// optional: what's the initial value/date?
		//'value' => $model->projectDateStart
		

		// optional: change the language
		//'language' => 'de',
		//'language' => 'fr',
		 'language'=>'es',
            
            'options' => array(
                'altField'=>'#alt-date',
            'showAnim' => 'slide',
            'altFormat' => 'dd-mm-yy',// show to user format
            'dateFormat' => 'yy/mm/dd', // save to db format
            'yearRange'=>'1970:2013',
             

			// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
			

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
			
		),


		// optional: html options will affect the input element, not the datepicker widget itself
		'htmlOptions'=>array(
		'style'=>'height:20px;
			background:#FFFFFF;
			color:#00000;
			
			font-size:0.9em;
			
			padding-left: 4px;'
		)
	)
); ?>

		<?php echo $form->error($model,'from_exrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to_exrel'); ?>
	<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	array(
		// you must specify name or model/attribute
		'model'=>$model,
		'attribute'=>'to_exrel',
		'name'=>'to_exrel',
		//'name'=>'Project[projectDateStart]',

		// optional: what's the initial value/date?
		//'value' => $model->projectDateStart
		

		// optional: change the language
		//'language' => 'de',
		//'language' => 'fr',
		 'language'=>'es',
            
            'options' => array(
                'altField'=>'#alt-date',
            'showAnim' => 'slide',
            'altFormat' => 'dd-mm-yy',// show to user format
            'dateFormat' => 'yy/mm/dd', // save to db format
            'yearRange'=>'1970:2013',
             

			// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
			

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
			
		),


		// optional: html options will affect the input element, not the datepicker widget itself
		'htmlOptions'=>array(
		'style'=>'height:20px;
			background:#FFFFFF;
			color:#00000;
			
			font-size:0.9em;
			
			padding-left: 4px;'
		)
	)
); ?>

		<?php echo $form->error($model,'to_exrel'); ?>
	</div>
        
        <h4>Experiencia Voluntariado</h4>
	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_exvol'); ?>
		<?php echo $form->textArea($model,'descripcion_exvol',array('rows'=>10,'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion_exvol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'localidad_exvol'); ?>
		<?php echo $form->dropDownList($model,'localidad_exvol',CHtml::listData(Municipios::model()->findAll(array('order'=>'municipio')), 'municipio','municipio'), array('empty'=>'Seleccionar..')); ?>
		<?php echo $form->error($model,'localidad_exvol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad_exvol'); ?>
		<?php echo $form->textField($model,'entidad_exvol',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'entidad_exvol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'from_exvol'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	array(
		// you must specify name or model/attribute
		'model'=>$model,
		'attribute'=>'from_exvol',
		'name'=>'from_exvol',
		//'name'=>'Project[projectDateStart]',

		// optional: what's the initial value/date?
		//'value' => $model->projectDateStart
		

		// optional: change the language
		//'language' => 'de',
		//'language' => 'fr',
		 'language'=>'es',
            
            'options' => array(
                'altField'=>'#alt-date',
            'showAnim' => 'slide',
            'altFormat' => 'dd-mm-yy',// show to user format
            'dateFormat' => 'yy/mm/dd', // save to db format
            'yearRange'=>'1970:2013',
             

			// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
			

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
			
		),


		// optional: html options will affect the input element, not the datepicker widget itself
		'htmlOptions'=>array(
		'style'=>'height:20px;
			background:#FFFFFF;
			color:#00000;
			
			font-size:0.9em;
			
			padding-left: 4px;'
		)
	)
); ?>
		<?php echo $form->error($model,'from_exvol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to_exvol'); ?>
	<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
	array(
		// you must specify name or model/attribute
		'model'=>$model,
		'attribute'=>'to_exvol',
		'name'=>'to_exvol',
		//'name'=>'Project[projectDateStart]',

		// optional: what's the initial value/date?
		//'value' => $model->projectDateStart
		

		// optional: change the language
		//'language' => 'de',
		//'language' => 'fr',
		 'language'=>'es',
            
            'options' => array(
                'altField'=>'#alt-date',
            'showAnim' => 'slide',
            'altFormat' => 'dd-mm-yy',// show to user format
            'dateFormat' => 'yy/mm/dd', // save to db format
            'yearRange'=>'1970:2013',
             

			// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
			

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
			
		),


		// optional: html options will affect the input element, not the datepicker widget itself
		'htmlOptions'=>array(
		'style'=>'height:20px;
			background:#FFFFFF;
			color:#00000;
			
			font-size:0.9em;
			
			padding-left: 4px;'
		)
	)
); ?>
		<?php echo $form->error($model,'to_exvol'); ?>
	</div>
            </div>
            <div id="tabs-4">
        <h4>Singularidad del puesto de Trabajo</h4>
	<div class="row">
		<?php echo $form->labelEx($model,'tema1_sing'); ?>
		<?php echo $form->textArea($model,'tema1_sing',array('rows'=>15,'cols'=>100,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'tema1_sing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tema2_sing'); ?>
		<?php echo $form->textArea($model,'tema2_sing',array('rows'=>15,'cols'=>100,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'tema2_sing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asistirCursos_sing'); ?>
		<?php echo $form->RadioButtonList($model,'asistirCursos_sing',array(1=>'Si',2=>'No'),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'asistirCursos_sing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'limitacionHorario_sing'); ?>
		<?php echo $form->RadioButtonList($model,'limitacionHorario_sing',array(1=>'Si',2=>'No'),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'limitacionHorario_sing'); ?>
	</div>

        <h4>Autoevaluacion</h4>
	<div class="row">
		<?php echo $form->labelEx($model,'capacidadEquipo_aut'); ?>
		<?php echo $form->radioButtonList($model,'capacidadEquipo_aut',array(1=>1,2=>2,3=>3,4=>4,5=>5),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'capacidadEquipo_aut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'relacionesPersonales_aut'); ?>
		<?php echo $form->radioButtonList($model,'relacionesPersonales_aut',array(1=>1,2=>2,3=>3,4=>4,5=>5),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'relacionesPersonales_aut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aptitudesSituaciones_aut'); ?>
		<?php echo $form->radioButtonList($model,'aptitudesSituaciones_aut',array(1=>1,2=>2,3=>3,4=>4,5=>5),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'aptitudesSituaciones_aut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gradoPrepProf_aut'); ?>
		<?php echo $form->radioButtonList($model,'gradoPrepProf_aut',array(1=>1,2=>2,3=>3,4=>4,5=>5),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'gradoPrepProf_aut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'capacidadPlanif_aut'); ?>
		<?php echo $form->radioButtonList($model,'capacidadPlanif_aut',array(1=>1,2=>2,3=>3,4=>4,5=>5),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'capacidadPlanif_aut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aptitudeRelacio_aut'); ?>
		<?php echo $form->radioButtonList($model,'aptitudeRelacio_aut',array(1=>1,2=>2,3=>3,4=>4,5=>5),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'aptitudeRelacio_aut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aperturaTrans_aut'); ?>
		<?php echo $form->radioButtonList($model,'aperturaTrans_aut',array(1=>1,2=>2,3=>3,4=>4,5=>5),array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'aperturaTrans_aut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perteneceFS_aut'); ?>
		<?php echo $form->textArea($model,'perteneceFS_aut',array('rows'=>10,'cols'=>'50','maxlength'=>250)); ?>
		<?php echo $form->error($model,'perteneceFS_aut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perteneceGE_aut'); ?>
		<?php echo $form->textArea($model,'perteneceGE_aut',array('rows'=>10,'cols'=>'50','maxlength'=>250)); ?>
		<?php echo $form->error($model,'perteneceGE_aut'); ?>
	</div>
        
         <h4>Competencia Profesional</h4>
        <div class="row">
		<?php echo $form->labelEx($model,'preparacionAcad'); ?>
		<?php echo $form->checkBox($model,'preparacionAcad'); ?>
                    <?php echo $form->error($model,'preparacionAcad'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'experienciaDocent'); ?>
		<?php echo $form->checkBox($model,'experienciaDocent'); ?>
                    <?php echo $form->error($model,'experienciaDocent'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'habilidadesPers'); ?>
		<?php echo $form->checkBox($model,'habilidadesPers'); ?>
                    <?php echo $form->error($model,'habilidadesPers'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'gustoJovenes'); ?>
		<?php echo $form->checkBox($model,'gustoJovenes'); ?>
                    <?php echo $form->error($model,'gustoJovenes'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'estiloSalesiano'); ?>
		<?php echo $form->checkBox($model,'estiloSalesiano'); ?>
                    <?php echo $form->error($model,'estiloSalesiano'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'ilusionVocacion'); ?>
		<?php echo $form->checkBox($model,'ilusionVocacion'); ?>
                    <?php echo $form->error($model,'ilusionVocacion'); ?>
	</div>

            </div>
        
        
        
        </div>
        
        
        

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('id'=>'button')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->