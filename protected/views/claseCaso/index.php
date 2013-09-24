<?php
$this->breadcrumbs=array(
	'Clase Casos',
);

$this->menu=array(
array('label'=>'Create ClaseCaso','url'=>array('create')),
array('label'=>'Manage ClaseCaso','url'=>array('admin')),
);
?>

<h1>Clase Casos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
