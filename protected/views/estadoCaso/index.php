<?php
$this->breadcrumbs=array(
	'Estado Casos',
);

$this->menu=array(
array('label'=>'Create EstadoCaso','url'=>array('create')),
array('label'=>'Manage EstadoCaso','url'=>array('admin')),
);
?>

<h1>Estado Casos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
