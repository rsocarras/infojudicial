<?php
$this->breadcrumbs=array(
	'Actuacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Actuacion','url'=>array('index')),
	array('label'=>'Create Actuacion','url'=>array('create')),
	array('label'=>'View Actuacion','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Actuacion','url'=>array('admin')),
	);
	?>

	<h1>Update Actuacion <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>