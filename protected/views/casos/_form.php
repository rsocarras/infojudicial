<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'casos-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'numero',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'casoscol',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'abogados_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'entity_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cliente_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tipo_caso_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'clase_caso_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ubicacion_expediente_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'recurso_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'estado_caso_id',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
