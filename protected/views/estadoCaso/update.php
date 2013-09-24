<?php
$this->breadcrumbs=array(
	'Estado Casos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List EstadoCaso','url'=>array('index')),
	array('label'=>'Create EstadoCaso','url'=>array('create')),
	array('label'=>'View EstadoCaso','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage EstadoCaso','url'=>array('admin')),
	);
	?>

	<h1>Update EstadoCaso <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>