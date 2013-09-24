<?php
$this->breadcrumbs=array(
	'Casos Has Despachoses'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List CasosHasDespachos','url'=>array('index')),
array('label'=>'Create CasosHasDespachos','url'=>array('create')),
array('label'=>'Update CasosHasDespachos','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete CasosHasDespachos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage CasosHasDespachos','url'=>array('admin')),
);
?>

<h1>View CasosHasDespachos #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'casos_id',
		'despachos_id',
),
)); ?>
