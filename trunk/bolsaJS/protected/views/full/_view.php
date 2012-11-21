<?php
/* @var $this FullController */
/* @var $data Full */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consiente')); ?>:</b>
	<?php echo CHtml::encode($data->consiente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afirmacion_sec')); ?>:</b>
	<?php echo CHtml::encode($data->afirmacion_sec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_sec')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_sec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('centro_sec')); ?>:</b>
	<?php echo CHtml::encode($data->centro_sec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_bach')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_bach); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_bach')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_bach); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('centro_bach')); ?>:</b>
	<?php echo CHtml::encode($data->centro_bach); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_tituniv')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_tituniv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_tituniv')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_tituniv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('universidad_tituniv')); ?>:</b>
	<?php echo CHtml::encode($data->universidad_tituniv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_mast')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_mast); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_mast')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_mast); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('universidad_mast')); ?>:</b>
	<?php echo CHtml::encode($data->universidad_mast); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afirmacion_cap')); ?>:</b>
	<?php echo CHtml::encode($data->afirmacion_cap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afirmacion_dei')); ?>:</b>
	<?php echo CHtml::encode($data->afirmacion_dei); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo_dei')); ?>:</b>
	<?php echo CHtml::encode($data->titulo_dei); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelIngles_idio')); ?>:</b>
	<?php echo CHtml::encode($data->nivelIngles_idio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelFrances_idio')); ?>:</b>
	<?php echo CHtml::encode($data->nivelFrances_idio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelAleman_idio')); ?>:</b>
	<?php echo CHtml::encode($data->nivelAleman_idio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idiomaOtros_idio')); ?>:</b>
	<?php echo CHtml::encode($data->idiomaOtros_idio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelOtros_idio')); ?>:</b>
	<?php echo CHtml::encode($data->nivelOtros_idio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo_titidio')); ?>:</b>
	<?php echo CHtml::encode($data->titulo_titidio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidad_titidio')); ?>:</b>
	<?php echo CHtml::encode($data->entidad_titidio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_titidio')); ?>:</b>
	<?php echo CHtml::encode($data->from_titidio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to_titidio')); ?>:</b>
	<?php echo CHtml::encode($data->to_titidio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('programa_ci')); ?>:</b>
	<?php echo CHtml::encode($data->programa_ci); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel_ci')); ?>:</b>
	<?php echo CHtml::encode($data->nivel_ci); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('funcion_exnd')); ?>:</b>
	<?php echo CHtml::encode($data->funcion_exnd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_exnd')); ?>:</b>
	<?php echo CHtml::encode($data->time_exnd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_exnd')); ?>:</b>
	<?php echo CHtml::encode($data->from_exnd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to_exnd')); ?>:</b>
	<?php echo CHtml::encode($data->to_exnd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('funcion_dr')); ?>:</b>
	<?php echo CHtml::encode($data->funcion_dr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materia_dr')); ?>:</b>
	<?php echo CHtml::encode($data->materia_dr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreCentro_dr')); ?>:</b>
	<?php echo CHtml::encode($data->nombreCentro_dr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_dr')); ?>:</b>
	<?php echo CHtml::encode($data->time_dr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_dr')); ?>:</b>
	<?php echo CHtml::encode($data->from_dr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to_dr')); ?>:</b>
	<?php echo CHtml::encode($data->to_dr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_excul')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_excul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('localidad_excul')); ?>:</b>
	<?php echo CHtml::encode($data->localidad_excul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidad_excul')); ?>:</b>
	<?php echo CHtml::encode($data->entidad_excul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_excul')); ?>:</b>
	<?php echo CHtml::encode($data->from_excul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to_excul')); ?>:</b>
	<?php echo CHtml::encode($data->to_excul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_exrel')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_exrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('localidad_exrel')); ?>:</b>
	<?php echo CHtml::encode($data->localidad_exrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidad_exrel')); ?>:</b>
	<?php echo CHtml::encode($data->entidad_exrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_exrel')); ?>:</b>
	<?php echo CHtml::encode($data->from_exrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to_exrel')); ?>:</b>
	<?php echo CHtml::encode($data->to_exrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_exvol')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_exvol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('localidad_exvol')); ?>:</b>
	<?php echo CHtml::encode($data->localidad_exvol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidad_exvol')); ?>:</b>
	<?php echo CHtml::encode($data->entidad_exvol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_exvol')); ?>:</b>
	<?php echo CHtml::encode($data->from_exvol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to_exvol')); ?>:</b>
	<?php echo CHtml::encode($data->to_exvol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tema1_sing')); ?>:</b>
	<?php echo CHtml::encode($data->tema1_sing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tema2_sing')); ?>:</b>
	<?php echo CHtml::encode($data->tema2_sing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asistirCursos_sing')); ?>:</b>
	<?php echo CHtml::encode($data->asistirCursos_sing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('limitacionHorario_sing')); ?>:</b>
	<?php echo CHtml::encode($data->limitacionHorario_sing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capacidadEquipo_aut')); ?>:</b>
	<?php echo CHtml::encode($data->capacidadEquipo_aut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('relacionesPersonales_aut')); ?>:</b>
	<?php echo CHtml::encode($data->relacionesPersonales_aut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aptitudesSituaciones_aut')); ?>:</b>
	<?php echo CHtml::encode($data->aptitudesSituaciones_aut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gradoPrepProf_aut')); ?>:</b>
	<?php echo CHtml::encode($data->gradoPrepProf_aut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capacidadPlanif_aut')); ?>:</b>
	<?php echo CHtml::encode($data->capacidadPlanif_aut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aptitudeRelacio_aut')); ?>:</b>
	<?php echo CHtml::encode($data->aptitudeRelacio_aut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aperturaTrans_aut')); ?>:</b>
	<?php echo CHtml::encode($data->aperturaTrans_aut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perteneceFS_aut')); ?>:</b>
	<?php echo CHtml::encode($data->perteneceFS_aut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perteneceGE_aut')); ?>:</b>
	<?php echo CHtml::encode($data->perteneceGE_aut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preparacionAcad')); ?>:</b>
	<?php echo CHtml::encode($data->preparacionAcad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('experienciaDocent')); ?>:</b>
	<?php echo CHtml::encode($data->experienciaDocent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('habilidadesPers')); ?>:</b>
	<?php echo CHtml::encode($data->habilidadesPers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gustoJovenes')); ?>:</b>
	<?php echo CHtml::encode($data->gustoJovenes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estiloSalesiano')); ?>:</b>
	<?php echo CHtml::encode($data->estiloSalesiano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ilusionVocacion')); ?>:</b>
	<?php echo CHtml::encode($data->ilusionVocacion); ?>
	<br />

	 

</div>