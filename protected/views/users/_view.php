<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('session')); ?>:</b>
	<?php echo CHtml::encode($data->session); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datecreate')); ?>:</b>
	<?php echo CHtml::encode($data->datecreate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datemodify')); ?>:</b>
	<?php echo CHtml::encode($data->datemodify); ?>
	<br />


</div>