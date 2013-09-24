<?php
$this->breadcrumbs=array(
	'Dependiente Judicials',
);

$this->menu=array(
array('label'=>'Create DependienteJudicial','url'=>array('create')),
array('label'=>'Manage DependienteJudicial','url'=>array('admin')),
);
?>

<h1>Dependiente Judicials</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
