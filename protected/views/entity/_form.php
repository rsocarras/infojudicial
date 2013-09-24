<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'entity-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'tipo_entity',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nombre',array('class'=>'span5','maxlength'=>245)); ?>

	<?php echo $form->textFieldRow($model,'dni',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'direccion',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'telefono',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'tipo_dni_id',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
