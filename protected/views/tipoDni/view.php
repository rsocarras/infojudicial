<?php
$this->breadcrumbs=array(
	'Tipo Dnis'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List TipoDni','url'=>array('index')),
array('label'=>'Create TipoDni','url'=>array('create')),
array('label'=>'Update TipoDni','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete TipoDni','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage TipoDni','url'=>array('admin')),
);
?>

<h1>View TipoDni #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'tipos',
		'descripcion',
),
)); ?>
