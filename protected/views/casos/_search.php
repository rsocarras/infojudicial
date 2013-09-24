<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

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
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
