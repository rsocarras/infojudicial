<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>245)); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>245)); ?>

	<?php //echo $form->textFieldRow($model,'session',array('class'=>'span5','maxlength'=>245)); ?>

	<?php //echo $form->textFieldRow($model,'datecreate',array('class'=>'span5')); ?>

	<?php // echo $form->textFieldRow($model,'datemodify',array('class'=>'span5')); 
	echo $form->hiddenField($model,'datemodify',array('class'=>'span5','value'=>date('Y-m-d H:i:s'))); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
