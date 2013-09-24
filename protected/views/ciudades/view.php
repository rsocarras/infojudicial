<?php
$this->breadcrumbs=array(
	'Ciudades'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Ciudades','url'=>array('index')),
array('label'=>'Create Ciudades','url'=>array('create')),
array('label'=>'Update Ciudades','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Ciudades','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Ciudades','url'=>array('admin')),
);
?>

<h1>View Ciudades #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
),
)); ?>
