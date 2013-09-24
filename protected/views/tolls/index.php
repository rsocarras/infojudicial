<?php
$this->breadcrumbs=array(
	'Tolls',
);

$this->menu=array(
array('label'=>'Create Tolls','url'=>array('create')),
array('label'=>'Manage Tolls','url'=>array('admin')),
);
?>

<h1>Tolls</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
