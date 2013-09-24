<?php
$this->breadcrumbs=array(
	'Tolls'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Tolls','url'=>array('index')),
	array('label'=>'Create Tolls','url'=>array('create')),
	array('label'=>'View Tolls','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Tolls','url'=>array('admin')),
	);
	?>

	<h1>Update Tolls <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>