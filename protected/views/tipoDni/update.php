<?php
$this->breadcrumbs=array(
	'Tipo Dnis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List TipoDni','url'=>array('index')),
	array('label'=>'Create TipoDni','url'=>array('create')),
	array('label'=>'View TipoDni','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TipoDni','url'=>array('admin')),
	);
	?>

	<h1>Update TipoDni <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>