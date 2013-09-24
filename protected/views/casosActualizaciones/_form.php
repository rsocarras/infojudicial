<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'casos-actualizaciones-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'casos_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'actuacion_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fecha_actualizaicon',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'anotacion',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'fecha_inicia_termino',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fecha_finaliza_termino',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fecha_registro',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'datecreate',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
