<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('casos_id')); ?>:</b>
	<?php echo CHtml::encode($data->casos_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('despachos_id')); ?>:</b>
	<?php echo CHtml::encode($data->despachos_id); ?>
	<br />


</div>