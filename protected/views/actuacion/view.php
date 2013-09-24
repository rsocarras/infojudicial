<?php
$this->breadcrumbs=array(
	'Actuacions'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Actuacion','url'=>array('index')),
array('label'=>'Create Actuacion','url'=>array('create')),
array('label'=>'Update Actuacion','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Actuacion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Actuacion','url'=>array('admin')),
);
?>

<h1>View Actuacion #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
),
)); ?>
