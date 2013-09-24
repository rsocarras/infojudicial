<?php
$this->breadcrumbs=array(
	'Casoses'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Casos','url'=>array('index')),
array('label'=>'Create Casos','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('casos-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Casoses</h1>

<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'casos-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'numero',
		'casoscol',
		'abogados_id',
		'entity_id',
		'cliente_id',
		/*
		'tipo_caso_id',
		'clase_caso_id',
		'ubicacion_expediente_id',
		'recurso_id',
		'estado_caso_id',
		*/
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
