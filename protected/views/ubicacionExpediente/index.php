<?php
$this->breadcrumbs=array(
	'Ubicacion Expedientes',
);

$this->menu=array(
array('label'=>'Create UbicacionExpediente','url'=>array('create')),
array('label'=>'Manage UbicacionExpediente','url'=>array('admin')),
);
?>

<h1>Ubicacion Expedientes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
