<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullname')); ?>:</b>
	<?php echo CHtml::encode($data->fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('axles_2')); ?>:</b>
	<?php echo CHtml::encode($data->axles_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('axles_3')); ?>:</b>
	<?php echo CHtml::encode($data->axles_3); ?>
	<br />


</div>