<?php
$this->breadcrumbs=array(
	'Casos Actualizaciones'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List CasosActualizaciones','url'=>array('index')),
array('label'=>'Create CasosActualizaciones','url'=>array('create')),
array('label'=>'Update CasosActualizaciones','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete CasosActualizaciones','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage CasosActualizaciones','url'=>array('admin')),
);
?>

<h1>View CasosActualizaciones #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'casos_id',
		'actuacion_id',
		'fecha_actualizaicon',
		'anotacion',
		'fecha_inicia_termino',
		'fecha_finaliza_termino',
		'fecha_registro',
		'datecreate',
),
)); ?>
