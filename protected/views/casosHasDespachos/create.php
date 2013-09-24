<?php
$this->breadcrumbs=array(
	'Casos Has Despachoses'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List CasosHasDespachos','url'=>array('index')),
array('label'=>'Manage CasosHasDespachos','url'=>array('admin')),
);
?>

<h1>Create CasosHasDespachos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>