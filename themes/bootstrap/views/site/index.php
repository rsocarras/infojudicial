<?php
/* @var $this SiteController */
echo date('Y-m-d H:i:s');
$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'- '.CHtml::encode(Yii::app()->name),
)); ?>

<p></p>

<?php $this->endWidget(); ?>





