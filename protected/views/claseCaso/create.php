<?php
$this->breadcrumbs=array(
	'Clase Casos'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List ClaseCaso','url'=>array('index')),
array('label'=>'Manage ClaseCaso','url'=>array('admin')),
);
?>

<h1>Create ClaseCaso</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>