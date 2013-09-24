<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'tolls-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
    'enableClientValidation'=>true,
	'clientOptions'=>array(
						'validateOnSubmit'=>true,
    ),
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'fullname',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'location',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'axles_2',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'axles_3',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
