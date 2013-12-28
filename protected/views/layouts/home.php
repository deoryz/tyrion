<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<?php echo $content ?>
<div class="wfull footer">
	<div class="container">
		<div class="banner-container">
			<div class="banner banner-1">
				<div class="height-15"></div>
				<div class="banner-title"><?php echo Yii::t('main', 'Our Services...') ?></div>
				<div class="banner-line"></div>
				<div>
					<div class="banner-image">
						<img src="<?php echo Yii::app()->baseUrl ?>/images/ill-banner.jpg" alt="">
					</div>
					<div class="banner-layanan-list">
						<ul>
							<?php
							$layanan = Layanan::model()->getLayananBy('', 'LIMIT 0,3');
							?>
							<?php foreach ($layanan as $key => $value): ?>
							<li><a href="<?php echo CHtml::normalizeUrl(array('/layanan/view', 'id'=>$value['id'], 'url'=>Slug::create($value['name']), 'lang'=>Yii::app()->language)); ?>"><?php echo $value['name'] ?></a></li>
							<?php endforeach ?>
						</ul>
						<div class="link">
							<a href="<?php echo CHtml::normalizeUrl(array('/layanan/index', 'url'=>'our-service', 'lang'=>Yii::app()->language)); ?>">lebih lanjut...</a>
						</div>
					</div>
				</div>
			</div>
			<div class="banner banner-2">
				<div class="height-15"></div>
				<div class="banner-title"><?php echo Yii::t('main', 'News & Articles') ?></div>
				<div class="banner-line"></div>
				<div class="banner-layanan-list">
					<ul>
						<?php
						$artikel = Artikel::model()->getArtikelBy('', 'LIMIT 0,2', 2);
						?>
						<?php foreach ($artikel as $key => $value): ?>
						<li>
							<a href="<?php echo CHtml::normalizeUrl(array('/artikel/view', 'id'=>$value['id'], 'url'=>Slug::create($value['title']), 'lang'=>Yii::app()->language)); ?>"><b><?php echo $value['title'] ?></b><br>
							<?php echo substr(strip_tags($value['content']), 0, 45) ?>...</a>
						</li>
						<?php endforeach ?>
					</ul>
				</div>
			</div>
			<div class="banner banner-3">
				<div class="height-15"></div>
				<div class="banner-title blue"><?php echo Yii::t('main', 'Do you need help?') ?></div>
				<div class="banner-line"></div>
				<div class="height-10"></div>
			    <dl class="dl-horizontal">
				    <dt><i class="icon-telp"></i></dt>
				    <dd class="big"><?php echo $this->setting['phone'] ?></dd>
				    <dt><i class="icon-mail"></i></dt>
				    <dd><a href="mailto:<?php echo $this->setting['email'] ?>"><?php echo $this->setting['email'] ?></a></dd>
				    <dt><i class="icon-flag"></i></dt>
				    <dd class="last"><?php echo $this->setting['address1'] ?></dd>
			    </dl>
			</div>
		</div>
		<div class="clear"></div>
		<div class="height-25"></div>
		<?php echo $this->renderPartial('//layouts/_footer') ?>
	</div>
</div>
<?php $this->endContent(); ?>