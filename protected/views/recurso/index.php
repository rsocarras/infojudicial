<?php
$this->breadcrumbs=array(
	'Recursos',
);

$this->menu=array(
array('label'=>'Create Recurso','url'=>array('create')),
array('label'=>'Manage Recurso','url'=>array('admin')),
);
?>

<h1>Recursos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
