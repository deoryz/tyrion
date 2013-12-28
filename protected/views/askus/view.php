<?php
$this->pageTitle = $konten['masalah'].' - '.$this->pageTitle;
$konten['image'] = json_decode($konten['image']);
?>
<div class="wfull content-full">
	<div class="container">
		<div class="content-left">
			<div class="text-content">
				<div class="height-40"></div>
				<h1 class="main-title"><?php echo $data['title'] ?></h1>
				<h3 style="text-align: right; margin-top: -35px; margin-bottom: 10px;"><a href="<?php echo CHtml::normalizeUrl(array('/askus/index', 'lang'=>Yii::app()->language)); ?>"><?php echo Yii::t('main', 'Back') ?></a></h3>
				<div class="fcs-line"></div>
				<div class="height-15"></div>
				<h3><?php echo $konten['masalah'] ?></h3>
				<p class="less"><?php echo date('d F Y',strtotime($konten['date_input'])) ?> <span>by <?php echo $konten['nama'] ?></span></p>
				<p style="margin-bottom: 5px;"><b><?php echo Yii::t('main', 'Pertanyaan:') ?></b></p>
				<?php echo $konten['cuplikan_masalah'] ?>
				<p style="margin-bottom: 5px;"><b><?php echo Yii::t('main', 'Jawaban Bethesda Spine Clinic:') ?></b></p>
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

	<h6>Ingin bertanya kepada forum tanya kami</h6>
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