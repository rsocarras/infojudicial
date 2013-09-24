<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('casoscol')); ?>:</b>
	<?php echo CHtml::encode($data->casoscol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('abogados_id')); ?>:</b>
	<?php echo CHtml::encode($data->abogados_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entity_id')); ?>:</b>
	<?php echo CHtml::encode($data->entity_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_caso_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_caso_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('clase_caso_id')); ?>:</b>
	<?php echo CHtml::encode($data->clase_caso_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ubicacion_expediente_id')); ?>:</b>
	<?php echo CHtml::encode($data->ubicacion_expediente_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recurso_id')); ?>:</b>
	<?php echo CHtml::encode($data->recurso_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_caso_id')); ?>:</b>
	<?php echo CHtml::encode($data->estado_caso_id); ?>
	<br />

	*/ ?>

</div>