<?php
$this->breadcrumbs=array(
	'Ubicacion Expedientes'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List UbicacionExpediente','url'=>array('index')),
array('label'=>'Create UbicacionExpediente','url'=>array('create')),
array('label'=>'Update UbicacionExpediente','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete UbicacionExpediente','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage UbicacionExpediente','url'=>array('admin')),
);
?>

<h1>View UbicacionExpediente #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
		'ciudades_id',
),
)); ?>
