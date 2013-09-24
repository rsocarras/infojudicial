<?php
$this->breadcrumbs=array(
	'Estado Casos'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List EstadoCaso','url'=>array('index')),
array('label'=>'Create EstadoCaso','url'=>array('create')),
array('label'=>'Update EstadoCaso','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete EstadoCaso','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage EstadoCaso','url'=>array('admin')),
);
?>

<h1>View EstadoCaso #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
),
)); ?>
