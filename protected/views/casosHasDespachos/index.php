<?php
$this->breadcrumbs=array(
	'Casos Has Despachoses',
);

$this->menu=array(
array('label'=>'Create CasosHasDespachos','url'=>array('create')),
array('label'=>'Manage CasosHasDespachos','url'=>array('admin')),
);
?>

<h1>Casos Has Despachoses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
