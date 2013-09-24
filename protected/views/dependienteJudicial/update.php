<?php
$this->breadcrumbs=array(
	'Dependiente Judicials'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List DependienteJudicial','url'=>array('index')),
	array('label'=>'Create DependienteJudicial','url'=>array('create')),
	array('label'=>'View DependienteJudicial','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage DependienteJudicial','url'=>array('admin')),
	);
	?>

	<h1>Update DependienteJudicial <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>