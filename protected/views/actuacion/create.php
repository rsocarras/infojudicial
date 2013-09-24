<?php
$this->breadcrumbs=array(
	'Actuacions'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Actuacion','url'=>array('index')),
array('label'=>'Manage Actuacion','url'=>array('admin')),
);
?>

<h1>Create Actuacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>