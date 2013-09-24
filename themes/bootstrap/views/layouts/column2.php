<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
    <div class="span9">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
    <div class="span3">
        <div id="sidebar">
            <div class="well" style="max-width: 340px; padding: 8px 0;">
            <?php $this->widget('bootstrap.widgets.TbMenu', array(
                'type'=>'list',
                'items'=>$this->menu,

            )); ?>
            </div>
        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>


