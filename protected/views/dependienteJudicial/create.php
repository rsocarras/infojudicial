<?php
$this->breadcrumbs=array(
	'Dependiente Judicials'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List DependienteJudicial','url'=>array('index')),
array('label'=>'Manage DependienteJudicial','url'=>array('admin')),
);
?>

<h1>Create DependienteJudicial</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>