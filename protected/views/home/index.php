	<div class="wfull fcs-full">
		<div class="container">
			<div class="fcs-text">
				<div class="fcs-text-title"><?php echo $this->setting['welcome'] ?></div>
				<div class="height-10"></div>
				<div class="fcs-line"></div>
				<?php echo $data['content']; ?>
				<div class="height-10"></div>
				<p class="link"><a href="<?php echo CHtml::normalizeUrl(array('/about/index', 'url'=>'about-us', 'lang'=>Yii::app()->language)); ?>"><i class="icon-panah"></i> <?php echo Yii::t('main', 'Read More') ?></a></p>
			</div>
			<div class="fcs-container">
				<div class="fcs-shadow-l"></div>
				<div class="fcs">
<?php
$slide = Slide::model()->findAll();
$images = array();
foreach ($slide as $key => $value) {
	$value->image = json_decode($value->image);
	$images[]=array('src'=>Yii::app()->baseUrl.ImageHelper::thumb(850,507,'/images/slide/'.$value->image->image,array('method'=>'adaptiveResize','quality'=>'90')));
}
$this->pageTitle = $this->pageTitle;
?>
<div class="theme-default">
<?php 
$this->widget('application.extensions.nivoslider.ENivoSlider', array(
    'images'=>$images,
    'cssFile'=>Yii::app()->baseUrl.'/asset/js/nivo/themes/default/default.css',
    'htmlOptions'=>array(
		//'class'=>'theme-default',
	),
	'config'=>array(
		'directionNav'=>FALSE,
		'effect'=> 'fade',
	),
));
?>
</div>

					<!-- <img src="<?php echo Yii::app()->baseUrl ?>/images/fcs-2.jpg" alt=""> -->
				</div>
				<div class="fcs-shadow-r"></div>
			</div>
		</div>
	</div>
