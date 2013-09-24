<?php
$this->breadcrumbs=array(
	'Despachoses',
);

$this->menu=array(
array('label'=>'Create Despachos','url'=>array('create')),
array('label'=>'Manage Despachos','url'=>array('admin')),
);
?>

<h1>Despachoses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
