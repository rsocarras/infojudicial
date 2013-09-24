<?php
$this->breadcrumbs=array(
	'Casos Actualizaciones',
);

$this->menu=array(
array('label'=>'Create CasosActualizaciones','url'=>array('create')),
array('label'=>'Manage CasosActualizaciones','url'=>array('admin')),
);
?>

<h1>Casos Actualizaciones</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
