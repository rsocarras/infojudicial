<?php
$this->breadcrumbs=array(
	'Casoses',
);

$this->menu=array(
array('label'=>'Create Casos','url'=>array('create')),
array('label'=>'Manage Casos','url'=>array('admin')),
);
?>

<h1>Casoses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
