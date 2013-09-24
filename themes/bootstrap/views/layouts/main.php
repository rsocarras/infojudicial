<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<?php //Yii::app()->timeZone='America/Bogota'; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
	<?php // Yii::app()->chartjs->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
	'collapse'=>true, // requires bootstrap-responsive.css
	'htmlOptions' => array('style' => 'position:absolute'),
	'type'=>'inverse', // null or 'inverse'
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'CRM', 'icon'=>'icon-user','url'=>'#', 
			            'visible'=>!Yii::app()->user->isGuest,
			            'items'=>array( 
			                array('label'=>'Clientes', 'icon'=>'icon-user','url'=>array('/clients')),
			                array('label'=>'Propietarios', 'icon'=>'icon-user','url'=>array('/vehiclesowner')),
			                array('label'=>'Conductores', 'icon'=>'icon-user','url'=>array('/drivers')),
			    )),                
                
                array('label'=>'Vehiculos', 'url'=>array('/vehicles')),
                array('label'=>'Trailers', 'url'=>array('/trailers')),
                array('label'=>'Negocios', 'url'=>array('/business')),
                
      
             

                array('label'=>'Viajes', 'icon'=>'icon','url'=>'#', 
			            'visible'=>!Yii::app()->user->isGuest,
			            'items'=>array( 
			                array('label'=>'Peajes',  'icon'=>'icon-user','url'=>array('/tolls/admin')),
			                array('label'=>'Lugares',  'icon'=>'icon-certificate','url'=>array('/places')),
			                array('label'=>'Ruta',  'icon'=>'icon-th','url'=>array('/route')),
			                array('label'=>'Ciruito',  'icon'=>'icon-calendar','url'=>array('/circuit')),
			    )),
            ),
        ),
		array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right '),
            'items'=>array(

               array('label'=>'Configuración', 'icon'=>'icon','url'=>'#', 
			            'visible'=>!Yii::app()->user->isGuest,
			            'items'=>array( 
			                array('label'=>'Tipos de Carga',  'icon'=>'icon-user','url'=>array('/typeload')),
			                array('label'=>'Tipos de Productos',  'icon'=>'icon-certificate','url'=>array('/typeproduct')),
			                array('label'=>'Tipos de Tanque',  'icon'=>'icon-th','url'=>array('/typetanks')),
			                array('label'=>'Crear Usuarios',  'icon'=>'icon-th','url'=>array('/users/create')),
			    )), 
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
            ),
        ),    
    ),
)); ?>

<div class="container" id="page">


	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer" class="navbar navbar-bottom">
		<div class="container" id="page">
			Copyright &copy; <?php echo date('Y'); ?> by Rafael Socarras.
			All Rights Reserved.<br/>
		</div>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
