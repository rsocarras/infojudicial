<?php
$this->breadcrumbs=array(
	'Clase Casos'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List ClaseCaso','url'=>array('index')),
array('label'=>'Create ClaseCaso','url'=>array('create')),
array('label'=>'Update ClaseCaso','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete ClaseCaso','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage ClaseCaso','url'=>array('admin')),
);
?>

<h1>View ClaseCaso #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
		'clase_casocol',
),
)); ?>
