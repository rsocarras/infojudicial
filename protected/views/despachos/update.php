<?php
$this->breadcrumbs=array(
	'Despachoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Despachos','url'=>array('index')),
	array('label'=>'Create Despachos','url'=>array('create')),
	array('label'=>'View Despachos','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Despachos','url'=>array('admin')),
	);
	?>

	<h1>Update Despachos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>