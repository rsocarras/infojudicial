<?php
$this->breadcrumbs=array(
	'Despachoses'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Despachos','url'=>array('index')),
array('label'=>'Manage Despachos','url'=>array('admin')),
);
?>

<h1>Create Despachos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>