<?php
$this->breadcrumbs=array(
	'Tipo Dnis'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List TipoDni','url'=>array('index')),
array('label'=>'Manage TipoDni','url'=>array('admin')),
);
?>

<h1>Create TipoDni</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>