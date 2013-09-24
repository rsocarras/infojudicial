<?php
$this->breadcrumbs=array(
	'Clase Casos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List ClaseCaso','url'=>array('index')),
	array('label'=>'Create ClaseCaso','url'=>array('create')),
	array('label'=>'View ClaseCaso','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage ClaseCaso','url'=>array('admin')),
	);
	?>

	<h1>Update ClaseCaso <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>