<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="<?php echo Yii::app()->language ?>" />

	<meta name="keywords" content="<?php echo CHtml::encode($this->metaKey); ?>">
	<meta name="description" content="<?php echo CHtml::encode($this->metaDesc); ?>">

	<?php Yii::app()->bootstrap->registerCoreCss(); ?>
	<?php Yii::app()->bootstrap->registerCoreScripts(); ?>
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/asset/css/normalize.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/asset/css/screen.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/asset/css/comon.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/asset/css/fonts.css" />
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/asset/css/styles.css" />
	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<?php $this->widget('application.extensions.fancyapps.EFancyApps', array(
    'target'=>'',
    'config'=>array(),
    )
); ?>
</head>

<body>
	<div class="wfull header">
		<div class="container">
			<div class="logo-top">
				<a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>"><img src="<?php echo Yii::app()->baseUrl ?>/asset/images/logo-bethesda.png" alt=""></a>
			</div>
			<div class="tagline">
				<a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>"><img src="<?php echo Yii::app()->baseUrl ?>/asset/images/tagline-bethesda.png" alt=""></a>
			</div>
			<div class="select-language">
				Language:  
				<?php
				$urlSekarang = $_GET; 
				$urlSekarang['lang']='en';
				?>
				<?php echo CHtml::link('English',$this->createUrl($this->route,$urlSekarang), array('class'=>(Yii::app()->language=='en')?'active':'')); ?>  |  
				<?php $urlSekarang['lang']='id'; ?>
				<?php echo CHtml::link('Bahasa',$this->createUrl($this->route,$urlSekarang), array('class'=>(Yii::app()->language=='id')?'active':'')); ?>
			</div>
			<div class="form-search">
				<form action="<?php echo CHtml::normalizeUrl(array('/search/index', 'lang'=>Yii::app()->language)); ?>" method="post">
					<input type="text" name="search" placeholder="Search . . ." value="<?php echo $_GET['search'] ?>">
				</form>
			</div>
		</div>
	</div>
	<div class="wfull menu-top-container">
		<div class="container">
			<div class="menu-top-front"></div>
			<div class="menu-top">
				<?php $this->widget('zii.widgets.CMenu', array(
				    'items'=>Page::model()->createMenu(0,$this->languageID,$this->idController),
				    // array(
				    //     array('label'=>'<i class="icon-home"></i>', 'icon'=>'home', 'url'=>array('/home/index')),
				    //     array('label'=>'ABOUT US', 'url'=>array('/home/about')),
				    //     array('label'=>'OUR SERVICES', 'url'=>array('/home/service')),
				    //     array('label'=>'NEWS & ARTICLES', 'url'=>array('/home/news')),
				    //     array('label'=>'MAKE AN APPOINTMENT', 'url'=>array('/home/appointment')),
				    //     array('label'=>'CONTACT US', 'url'=>array('/home/contact')),
				    // ),
				    'encodeLabel'=>false,
					// 'submenuHtmlOptions'=>array(
					// 	'class'=>'submenu'
					// ),
					// 'lastItemCssClass'=>'last',
				)); ?>				
			</div>
		</div>
	</div>
<?php echo $content ?>
</body>
</html>
