<?php
$this->breadcrumbs=array(
	'Tipo Dnis',
);

$this->menu=array(
array('label'=>'Create TipoDni','url'=>array('create')),
array('label'=>'Manage TipoDni','url'=>array('admin')),
);
?>

<h1>Tipo Dnis</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
