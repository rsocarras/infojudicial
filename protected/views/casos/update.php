<?php
$this->breadcrumbs=array(
	'Casoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Casos','url'=>array('index')),
	array('label'=>'Create Casos','url'=>array('create')),
	array('label'=>'View Casos','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Casos','url'=>array('admin')),
	);
	?>

	<h1>Update Casos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>