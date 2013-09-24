<?php
$this->breadcrumbs=array(
	'Estado Casos'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List EstadoCaso','url'=>array('index')),
array('label'=>'Manage EstadoCaso','url'=>array('admin')),
);
?>

<h1>Create EstadoCaso</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>