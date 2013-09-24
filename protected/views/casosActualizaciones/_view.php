<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('casos_id')); ?>:</b>
	<?php echo CHtml::encode($data->casos_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actuacion_id')); ?>:</b>
	<?php echo CHtml::encode($data->actuacion_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_actualizaicon')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_actualizaicon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anotacion')); ?>:</b>
	<?php echo CHtml::encode($data->anotacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicia_termino')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicia_termino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_finaliza_termino')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_finaliza_termino); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_registro')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_registro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datecreate')); ?>:</b>
	<?php echo CHtml::encode($data->datecreate); ?>
	<br />

	*/ ?>

</div>