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
				<div class="height-10"></div>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'artikel-form',
    'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array(
		'enctype' => 'multipart/form-data',
		'class' => 'form-frontend'
	),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
	<div class="height-10"></div>
	<?php echo $form->errorSummary($model); ?>
	<?php if(Yii::app()->user->hasFlash('success')): ?>
	
	    <?php $this->widget('bootstrap.widgets.TbAlert', array(
	        'alerts'=>array('success'),
	    )); ?>
	
	<?php endif; ?>
	
	<?php echo $form->checkBoxListInlineRow($model, 'service', array( Yii::t('main','Medical Consultation'), Yii::t('main','Physiotherapy Treatment') )); ?>
	
	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5')); ?>
	
	<?php echo $form->textFieldRow($model,'telp',array('class'=>'span5')); ?>
	
	<?php echo $form->textFieldRow($model,'record',array('class'=>'span5')); ?>
	
	<?php //echo $form->textFieldRow($model,'name',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5')); ?>
	<?php
	$jam = array(
		'13.00'=>'13.00',
		'14.00'=>'14.00',
		'15.00'=>'15.00',
		'16.00'=>'16.00',
		'17.00'=>'17.00',
		'18.00'=>'18.00',
		'19.00'=>'19.00',
		'20.00'=>'20.00',
		'21.00'=>'21.00',
	);
	$jamk2 = array(
		'14.00'=>'14.00',
		'15.00'=>'15.00',
		'16.00'=>'16.00',
		'17.00'=>'17.00',
		'18.00'=>'18.00',
		'19.00'=>'19.00',
		'20.00'=>'20.00',
		'21.00'=>'21.00',
		'22.00'=>'22.00',
	);
	?>
	<div class="row">
		<div class="span4">
		<div class="control-group ">
			<?php echo $form->labelEx($model,'tanggal1',array('class'=>'control-label')); ?>
			<div class="controls">
				<?php
				    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				    // 'name'=>'Reservation[date_add]',
				    'model'=>$model,
				    'attribute'=>'tanggal1',
				    // additional javascript options for the date picker plugin
				    'options'=>array(
				    	'showAnim'=>'fold',
				    	'showOn'=> "button",
						'buttonImage'=> Yii::app()->baseUrl."/asset/images/icon-calender.png",
						'buttonImageOnly'=> true,
				    ),
				    'htmlOptions'=>array(
				    'style'=>'height:20px; width: 125px;'
				    ),
				    ));
				?>
			</div>
		</div>

		<?php echo $form->dropDownListRow($model,'jam1',$jam,array('class'=>'span2')); ?>
		</div>
		<div class="span4 left">
		<div class="control-group ">
			<?php echo $form->labelEx($model,'tanggal2',array('class'=>'control-label')); ?>
			<div class="controls">
				<?php
				    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				    // 'name'=>'Reservation[date_add]',
				    'model'=>$model,
				    'attribute'=>'tanggal2',
				    // additional javascript options for the date picker plugin
				    'options'=>array(
				    	'showAnim'=>'fold',
				    	'showOn'=> "button",
						'buttonImage'=> Yii::app()->baseUrl."/asset/images/icon-calender.png",
						'buttonImageOnly'=> true,
				    ),
				    'htmlOptions'=>array(
				    'style'=>'height:20px; width: 125px;'
				    ),
				    ));
				?>
			</div>
		</div>

		<?php echo $form->dropDownListRow($model,'jam2',$jamk2,array('class'=>'span2')); ?>
		</div>
	</div>

	<?php echo $form->textAreaRow($model,'body',array('class'=>'span5')); ?>
	
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
	<?php echo $form->textFieldRow($model,'verifyCode',array('class'=>'span5')); ?>

	<div class="control-group ">
		<label for="ContactForm_subject" class="control-label">&nbsp;</label>
		<div class="controls">
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'buttonType'=>'submit',
				// 'type'=>'primary',
				'label'=> Yii::t('main','Submit'),
			)); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

			</div>
		</div>
		<div class="text-content menu-left-container">
			<div class="menu-left-shad-l"></div>
			<div class="menu-left-shad-r"></div>
			<div class="padding-20">
				<div class="height-35"></div>
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