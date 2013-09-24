<?php
$this->breadcrumbs=array(
	'Recursos'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Recurso','url'=>array('index')),
array('label'=>'Create Recurso','url'=>array('create')),
array('label'=>'Update Recurso','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Recurso','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Recurso','url'=>array('admin')),
);
?>

<h1>View Recurso #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
),
)); ?>
