<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'nombre',array('class'=>'span5','maxlength'=>245)); ?>

		<?php echo $form->textFieldRow($model,'dni',array('class'=>'span5','maxlength'=>20)); ?>

		<?php echo $form->textFieldRow($model,'address',array('class'=>'span5','maxlength'=>45)); ?>

		<?php echo $form->textFieldRow($model,'celular',array('class'=>'span5','maxlength'=>45)); ?>

		<?php echo $form->textFieldRow($model,'telefono',array('class'=>'span5','maxlength'=>45)); ?>

		<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>45)); ?>

		<?php echo $form->textFieldRow($model,'tipo_dni_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
