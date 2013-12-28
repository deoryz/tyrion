<div class="wfull content-full">
	<div class="container">
		<div class="content-left">
			<div class="text-content">
				<div class="height-40"></div>
				<h1 class="main-title"><?php echo $data['title'] ?></h1>
				<div class="fcs-line"></div>
				<div class="height-10"></div>
				<?php echo $data['content'] ?>
				<?php if (count($konten)==0): ?>
					<p>There are no contents at the moment, please check back later</p>
				<?php endif ?>
				<div class="content-list-container">
					<?php foreach ($konten as $key => $value): ?>
					<div class="content-list askus">
						<div class="height-20"></div>
						<div class="content-list-desc ">
							<h3 class="content-list-title"><a href="<?php echo CHtml::normalizeUrl(array('/askus/view', 'id'=>$value['id'], 'url'=>Slug::create($value['masalah']), 'lang'=>Yii::app()->language)); ?>"><?php echo $value['masalah'] ?></a></h3>
							<p><b>Pertanyaan:</b> <?php echo substr(strip_tags($value['content']),0,320) ?>....</p>
							<div class="link"><a href="<?php echo CHtml::normalizeUrl(array('/askus/view', 'id'=>$value['id'], 'url'=>Slug::create($value['masalah']), 'lang'=>Yii::app()->language)); ?>"><i class="icon-panah"></i> <?php echo Yii::t('main', 'Read More') ?></a></div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
				<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
				    'buttons'=>$pagination,
				)); ?>
			</div>
		</div>
		<div class="text-content menu-left-container">
			<div class="menu-left-shad-l"></div>
			<div class="menu-left-shad-r"></div>
			<div class="padding-20">
				<div class="height-35"></div>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'askus-form',
    // 'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array(
		'enctype' => 'multipart/form-data',
		'class' => 'form-frontend'
	),
)); ?>

	<h6><?php echo Yii::t('main', 'Ingin bertanya kepada forum tanya kami') ?></h6>
	<div class="height-10"></div>
	<?php echo $form->errorSummary($model); ?>
	<?php if(Yii::app()->user->hasFlash('success')): ?>
	
	    <?php $this->widget('bootstrap.widgets.TbAlert', array(
	        'alerts'=>array('success'),
	    )); ?>
	
	<?php endif; ?>

	<?php echo $form->textFieldRow($model,'name'); ?>

	<?php echo $form->textFieldRow($model,'email'); ?>
	
	<?php echo $form->textFieldRow($model,'telp'); ?>
	
	 <?php echo $form->radioButtonListRow($model, 'jeniskelamin', array(
        Yii::t('main','Laki-laki'),
        Yii::t('main','Perempuan'),
    )); ?>

	<?php echo $form->textFieldRow($model,'umur',array('append'=>'tahun', 'style'=>'width: 155px;') ); ?>

	<?php echo $form->textFieldRow($model,'subject'); ?>

	<?php echo $form->textAreaRow($model,'ask'); ?>
	<div class="control-group ">
		<label for="ContactForm_verifyCode" class="control-label">&nbsp;</label>
		<div class="controls">
			<?php $this->widget('CCaptcha', array(
				'imageOptions'=>array(
					'style'=>'margin-bottom: 0px; margin-right: 10px;',
				),
			)); ?>
		</div>
	</div>
	<?php echo $form->textFieldRow($model,'verifyCode'); ?>

	<div class="control-group ">
		<label for="ContactForm_subject" class="control-label">&nbsp;</label>
		<div class="controls">
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'buttonType'=>'submit',
				// 'type'=>'primary',
				'label'=>Yii::t('main','Send Question'),
			)); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>