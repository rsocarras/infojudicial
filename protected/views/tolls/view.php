<?php
$this->breadcrumbs=array(
	'Tolls'=>array('index'),
	$model->fullname,
);

$this->menu=array(
array('label'=>'Listar Peajes','url'=>array('index')),
array('label'=>'Nuevo Peaje','url'=>array('create')),
array('label'=>'Actualizar','url'=>array('update','id'=>$model->id)),
//array('label'=>'','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Administrar peajes','url'=>array('admin')),
);
?>

<h1></h1>


<blockquote>
  <p>Peaje <?php echo $model->fullname; ?></p>
  <small></small>
</blockquote>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'type'=>'striped bordered condensed',
'data'=>$model,
'attributes'=>array(
		'fullname',
		'location',
		'axles_2',
		'axles_3',
),
)); ?>
