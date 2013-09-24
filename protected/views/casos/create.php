<?php
$this->breadcrumbs=array(
	'Casoses'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Casos','url'=>array('index')),
array('label'=>'Manage Casos','url'=>array('admin')),
);
?>

<h1>Create Casos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>