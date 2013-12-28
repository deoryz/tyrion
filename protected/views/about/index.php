<?php
$this->pageTitle = $data['title'].' - '.$this->pageTitle;
?>
<div class="wfull content-full">
	<div class="container">
		<div class="content-left">
			<div class="text-content">
				<div class="height-40"></div>
				<h1 class="main-title"><?php echo $data['title'] ?></h1>
				<div class="fcs-line"></div>
				<div class="height-10"></div>
				<?php echo $data['content'] ?>
				<?php /* foreach ($about as $key => $value): ?>
				<h3 id="about-<?php echo $value['id'] ?>"><?php echo $value['name'] ?></h3>
				<?php echo $value['content'] ?>
				<div class="fcs-line"></div>
				<div class="height-10"></div>
				<?php endforeach */ ?>

			</div>
		</div>
		<div class="text-content menu-left-container">
			<div class="menu-left-shad-l"></div>
			<div class="menu-left-shad-r"></div>
			<div class="padding-20">
				<div class="height-35"></div>
				<h6><?php echo Yii::t('main', 'Our Services:') ?></h6>
				<div class="menu-left-line"></div>
				<div class="height-15"></div>
				<?php $this->widget('zii.widgets.CMenu', array(
				    'items'=>$menu,
				    'encodeLabel'=>false,
				)); ?>				
				<!-- <ul>
					<li><a href="<?php echo CHtml::normalizeUrl(array('')); ?>">Introduction of Bethesda Clinic</a></li>
					<li><a href="<?php echo CHtml::normalizeUrl(array('')); ?>">Are back pain and neck pain treatable conditions?</a></li>
					<li><a href="<?php echo CHtml::normalizeUrl(array('')); ?>">When do I need to see a doctor for my back pain and neck pain?</a></li>
					<li><a href="<?php echo CHtml::normalizeUrl(array('')); ?>">When do you need to have physiotherapy treatment?</a></li>
					<li><a href="<?php echo CHtml::normalizeUrl(array('')); ?>">What to expect after physiotherapy treatment?</a></li>
					<li><a href="<?php echo CHtml::normalizeUrl(array('')); ?>">What other treatments can I have for my back and neck pain?</a></li>
					<li><a href="<?php echo CHtml::normalizeUrl(array('')); ?>">Why does our clinic treat only spine problems?</a></li>
				</ul> -->
				<div class="height-20"></div>
				<?php echo $this->renderPartial('//layouts/_contact') ?>
				<h6><?php echo Yii::t('main', 'Opening Hours') ?></h6>
				<div class="menu-left-line"></div>
				<div class="height-10"></div>
				<?php echo ($this->setting['open']) ?>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>