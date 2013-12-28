<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'kantor-form',
    'type'=>'horizontal',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<h3>Kantor Pusat</h3>
	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php if(Yii::app()->user->hasFlash('success')): ?>
	
	    <?php $this->widget('bootstrap.widgets.TbAlert', array(
	        'alerts'=>array('success'),
	    )); ?>
	
	<?php endif; ?>
	
	<?php echo $form->textFieldRow($model,'pusat_kota',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'pusat_alamat',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'pusat_map',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'pusat_phone',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'pusat_fax',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'pusat_email',array('class'=>'span5','maxlength'=>200)); ?>

<h3>Kantor Perwakilan Utama </h3>
	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->textFieldRow($model,'wakil_kota',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'wakil_alamat',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'wakil_map',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'wakil_phone',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'wakil_fax',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'wakil_email',array('class'=>'span5','maxlength'=>200)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Add' : 'Save',
		)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			// 'buttonType'=>'submit',
			// 'type'=>'info',
			'url'=>CHtml::normalizeUrl(array('index')),
			'label'=>'Batal',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
