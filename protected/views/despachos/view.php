<?php
$this->breadcrumbs=array(
	'Despachoses'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Despachos','url'=>array('index')),
array('label'=>'Create Despachos','url'=>array('create')),
array('label'=>'Update Despachos','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Despachos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Despachos','url'=>array('admin')),
);
?>

<h1>View Despachos #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
		'direccion',
		'ciudad',
		'ciudades_id',
),
)); ?>
