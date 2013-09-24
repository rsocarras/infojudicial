<?php
$this->breadcrumbs=array(
	'Ubicacion Expedientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List UbicacionExpediente','url'=>array('index')),
	array('label'=>'Create UbicacionExpediente','url'=>array('create')),
	array('label'=>'View UbicacionExpediente','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage UbicacionExpediente','url'=>array('admin')),
	);
	?>

	<h1>Update UbicacionExpediente <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>