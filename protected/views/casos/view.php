<?php
$this->breadcrumbs=array(
	'Casoses'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Casos','url'=>array('index')),
array('label'=>'Create Casos','url'=>array('create')),
array('label'=>'Update Casos','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Casos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Casos','url'=>array('admin')),
);
?>

<h1>View Casos #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'numero',
		'casoscol',
		'abogados_id',
		'entity_id',
		'cliente_id',
		'tipo_caso_id',
		'clase_caso_id',
		'ubicacion_expediente_id',
		'recurso_id',
		'estado_caso_id',
),
)); ?>
