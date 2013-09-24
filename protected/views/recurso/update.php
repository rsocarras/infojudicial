<?php
$this->breadcrumbs=array(
	'Recursos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Recurso','url'=>array('index')),
	array('label'=>'Create Recurso','url'=>array('create')),
	array('label'=>'View Recurso','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Recurso','url'=>array('admin')),
	);
	?>

	<h1>Update Recurso <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>