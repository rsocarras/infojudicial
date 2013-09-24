<?php
$this->breadcrumbs=array(
	'Dependiente Judicials'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List DependienteJudicial','url'=>array('index')),
array('label'=>'Create DependienteJudicial','url'=>array('create')),
array('label'=>'Update DependienteJudicial','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete DependienteJudicial','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage DependienteJudicial','url'=>array('admin')),
);
?>

<h1>View DependienteJudicial #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
		'dni',
		'tipo_dni_id',
		'celular',
		'telefono',
		'email',
		'direccion',
),
)); ?>
