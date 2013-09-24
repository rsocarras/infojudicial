<?php
$this->breadcrumbs=array(
	'Ubicacion Expedientes'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List UbicacionExpediente','url'=>array('index')),
array('label'=>'Manage UbicacionExpediente','url'=>array('admin')),
);
?>

<h1>Create UbicacionExpediente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>