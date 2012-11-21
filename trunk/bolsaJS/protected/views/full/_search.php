<?php
/* @var $this FullController */
/* @var $model Full */
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
		<?php echo $form->label($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consiente'); ?>
		<?php echo $form->textField($model,'consiente',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'afirmacion_sec'); ?>
		<?php echo $form->textField($model,'afirmacion_sec',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_sec'); ?>
		<?php echo $form->textField($model,'fecha_sec'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'centro_sec'); ?>
		<?php echo $form->textField($model,'centro_sec',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_bach'); ?>
		<?php echo $form->textField($model,'tipo_bach',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_bach'); ?>
		<?php echo $form->textField($model,'fecha_bach'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'centro_bach'); ?>
		<?php echo $form->textField($model,'centro_bach',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_tituniv'); ?>
		<?php echo $form->textField($model,'nombre_tituniv',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_tituniv'); ?>
		<?php echo $form->textField($model,'fecha_tituniv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'universidad_tituniv'); ?>
		<?php echo $form->textField($model,'universidad_tituniv',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_mast'); ?>
		<?php echo $form->textField($model,'nombre_mast',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_mast'); ?>
		<?php echo $form->textField($model,'fecha_mast'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'universidad_mast'); ?>
		<?php echo $form->textField($model,'universidad_mast',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'afirmacion_cap'); ?>
		<?php echo $form->textField($model,'afirmacion_cap',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'afirmacion_dei'); ?>
		<?php echo $form->textField($model,'afirmacion_dei',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo_dei'); ?>
		<?php echo $form->textField($model,'titulo_dei',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivelIngles_idio'); ?>
		<?php echo $form->textField($model,'nivelIngles_idio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivelFrances_idio'); ?>
		<?php echo $form->textField($model,'nivelFrances_idio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivelAleman_idio'); ?>
		<?php echo $form->textField($model,'nivelAleman_idio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idiomaOtros_idio'); ?>
		<?php echo $form->textField($model,'idiomaOtros_idio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivelOtros_idio'); ?>
		<?php echo $form->textField($model,'nivelOtros_idio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo_titidio'); ?>
		<?php echo $form->textField($model,'titulo_titidio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entidad_titidio'); ?>
		<?php echo $form->textField($model,'entidad_titidio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'from_titidio'); ?>
		<?php echo $form->textField($model,'from_titidio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'to_titidio'); ?>
		<?php echo $form->textField($model,'to_titidio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'programa_ci'); ?>
		<?php echo $form->textField($model,'programa_ci',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivel_ci'); ?>
		<?php echo $form->textField($model,'nivel_ci',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'funcion_exnd'); ?>
		<?php echo $form->textField($model,'funcion_exnd',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_exnd'); ?>
		<?php echo $form->textField($model,'time_exnd',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'from_exnd'); ?>
		<?php echo $form->textField($model,'from_exnd'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'to_exnd'); ?>
		<?php echo $form->textField($model,'to_exnd'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'funcion_dr'); ?>
		<?php echo $form->textField($model,'funcion_dr',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'materia_dr'); ?>
		<?php echo $form->textField($model,'materia_dr',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreCentro_dr'); ?>
		<?php echo $form->textField($model,'nombreCentro_dr',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_dr'); ?>
		<?php echo $form->textField($model,'time_dr',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'from_dr'); ?>
		<?php echo $form->textField($model,'from_dr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'to_dr'); ?>
		<?php echo $form->textField($model,'to_dr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_excul'); ?>
		<?php echo $form->textField($model,'descripcion_excul',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'localidad_excul'); ?>
		<?php echo $form->textField($model,'localidad_excul',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entidad_excul'); ?>
		<?php echo $form->textField($model,'entidad_excul',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'from_excul'); ?>
		<?php echo $form->textField($model,'from_excul'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'to_excul'); ?>
		<?php echo $form->textField($model,'to_excul'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_exrel'); ?>
		<?php echo $form->textField($model,'descripcion_exrel',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'localidad_exrel'); ?>
		<?php echo $form->textField($model,'localidad_exrel',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entidad_exrel'); ?>
		<?php echo $form->textField($model,'entidad_exrel',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'from_exrel'); ?>
		<?php echo $form->textField($model,'from_exrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'to_exrel'); ?>
		<?php echo $form->textField($model,'to_exrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_exvol'); ?>
		<?php echo $form->textField($model,'descripcion_exvol',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'localidad_exvol'); ?>
		<?php echo $form->textField($model,'localidad_exvol',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entidad_exvol'); ?>
		<?php echo $form->textField($model,'entidad_exvol',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'from_exvol'); ?>
		<?php echo $form->textField($model,'from_exvol'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'to_exvol'); ?>
		<?php echo $form->textField($model,'to_exvol'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tema1_sing'); ?>
		<?php echo $form->textField($model,'tema1_sing',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tema2_sing'); ?>
		<?php echo $form->textField($model,'tema2_sing',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asistirCursos_sing'); ?>
		<?php echo $form->textField($model,'asistirCursos_sing',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'limitacionHorario_sing'); ?>
		<?php echo $form->textField($model,'limitacionHorario_sing',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'capacidadEquipo_aut'); ?>
		<?php echo $form->textField($model,'capacidadEquipo_aut'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'relacionesPersonales_aut'); ?>
		<?php echo $form->textField($model,'relacionesPersonales_aut'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aptitudesSituaciones_aut'); ?>
		<?php echo $form->textField($model,'aptitudesSituaciones_aut'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gradoPrepProf_aut'); ?>
		<?php echo $form->textField($model,'gradoPrepProf_aut'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'capacidadPlanif_aut'); ?>
		<?php echo $form->textField($model,'capacidadPlanif_aut'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aptitudeRelacio_aut'); ?>
		<?php echo $form->textField($model,'aptitudeRelacio_aut'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aperturaTrans_aut'); ?>
		<?php echo $form->textField($model,'aperturaTrans_aut'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perteneceFS_aut'); ?>
		<?php echo $form->textField($model,'perteneceFS_aut',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perteneceGE_aut'); ?>
		<?php echo $form->textField($model,'perteneceGE_aut',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preparacionAcad'); ?>
		<?php echo $form->textField($model,'preparacionAcad',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'experienciaDocent'); ?>
		<?php echo $form->textField($model,'experienciaDocent',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'habilidadesPers'); ?>
		<?php echo $form->textField($model,'habilidadesPers',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gustoJovenes'); ?>
		<?php echo $form->textField($model,'gustoJovenes',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estiloSalesiano'); ?>
		<?php echo $form->textField($model,'estiloSalesiano',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ilusionVocacion'); ?>
		<?php echo $form->textField($model,'ilusionVocacion',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('id'=>'button')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->