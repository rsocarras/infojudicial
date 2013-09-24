<?php
$this->breadcrumbs=array(
	'Casos Actualizaciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List CasosActualizaciones','url'=>array('index')),
	array('label'=>'Create CasosActualizaciones','url'=>array('create')),
	array('label'=>'View CasosActualizaciones','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CasosActualizaciones','url'=>array('admin')),
	);
	?>

	<h1>Update CasosActualizaciones <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>