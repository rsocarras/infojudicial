<?php
$this->breadcrumbs=array(
	'Casos Actualizaciones'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List CasosActualizaciones','url'=>array('index')),
array('label'=>'Manage CasosActualizaciones','url'=>array('admin')),
);
?>

<h1>Create CasosActualizaciones</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>