<?php
$this->breadcrumbs=array(
	'Abogadoses'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Abogados','url'=>array('index')),
array('label'=>'Create Abogados','url'=>array('create')),
array('label'=>'Update Abogados','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Abogados','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Abogados','url'=>array('admin')),
);
?>

<h1>View Abogados #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
		'dni',
		'address',
		'celular',
		'telefono',
		'email',
		'tipo_dni_id',
),
)); ?>
