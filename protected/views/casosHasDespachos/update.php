<?php
$this->breadcrumbs=array(
	'Casos Has Despachoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List CasosHasDespachos','url'=>array('index')),
	array('label'=>'Create CasosHasDespachos','url'=>array('create')),
	array('label'=>'View CasosHasDespachos','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CasosHasDespachos','url'=>array('admin')),
	);
	?>

	<h1>Update CasosHasDespachos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>