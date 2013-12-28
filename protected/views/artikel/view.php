<?php
$this->pageTitle = $konten['title'].' - '.$this->pageTitle;
$konten['image'] = json_decode($konten['image']);
?>
<div class="wfull content-full">
	<div class="container">
		<div class="content-left">
			<div class="text-content">
				<div class="height-40"></div>
				<h1 class="main-title"><?php echo $data['title'] ?></h1>
				<h3 style="text-align: right; margin-top: -35px; margin-bottom: 10px;"><a href="<?php echo CHtml::normalizeUrl(array('/artikel/index', 'lang'=>Yii::app()->language)); ?>"><?php echo Yii::t('main', 'Back') ?></a></h3>
				<div class="fcs-line"></div>
				<div class="height-15"></div>
				<img class="image-news" align="right" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(250,5000, '/images/artikel/large/'.$konten['image']->image , array('method' => 'resize', 'quality' => '90')) ?>" alt="">
				<h3><?php echo $konten['title'] ?></h3>
				<p class="less"><?php echo date('d F Y',strtotime($konten['date_input'])) ?> <span>by <?php echo $konten['writer'] ?></span></p>
				<?php echo $konten['content'] ?>
				<div class="clear"></div>
				<div class="height-15"></div>
				<div class="fcs-line"></div>
				<div class="height-15"></div>
			</div>
		</div>
		<div class="text-content menu-left-container">
			<div class="menu-left-shad-l"></div>
			<div class="menu-left-shad-r"></div>
			<div class="padding-20 padding-right-5">
				<div class="height-35"></div>
				<h6><?php echo Yii::t('main', 'Archive News & Articles') ?></h6>
				<div class="menu-left-line"></div>
				<div class="height-15"></div>
				<?php $this->widget('zii.widgets.CMenu', array(
				    'items'=>$menu,
				    'encodeLabel'=>false,
					'htmlOptions'=>array(
						'class'=>'menu-artikel',
					),
				)); ?>				
				<div class="height-20"></div>
				<?php echo $this->renderPartial('//layouts/_contact') ?>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>