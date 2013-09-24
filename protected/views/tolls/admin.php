<?php
$this->breadcrumbs=array(
	'Tolls'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'Listado','url'=>array('index')),
array('label'=>'Nuevo Peaje','url'=>array('create')),
);

?>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'tolls-grid',
'type'=>'striped bordered condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'fullname',
		'location',
		'axles_2',
		'axles_3',
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
