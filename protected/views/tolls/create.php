<?php
$this->breadcrumbs=array(
	'Tolls'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Tolls','url'=>array('index')),
array('label'=>'Manage Tolls','url'=>array('admin')),
);
?>

<blockquote>
  <p>Nuevo Peaje</p>
  <small>Ingrese los datos. Los campos con * son obligatorios</small>
</blockquote>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>