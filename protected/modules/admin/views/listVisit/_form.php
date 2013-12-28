<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'list-visit-form',
    'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php if(Yii::app()->user->hasFlash('success')): ?>
	
	    <?php $this->widget('bootstrap.widgets.TbAlert', array(
	        'alerts'=>array('success'),
	    )); ?>
	
	<?php endif; ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	
	<?php $this->widget('application.extensions.extckeditor.ExtCKEditor', array(
			'model'=>$model,
			'attribute'=>'description', // model atribute
			'editorTemplate'=>'full', // Toolbar settings (full, basic, advanced)
			'return'=>TRUE, // Toolbar settings (full, basic, advanced)
			//'contentCSS'=>Yii::app()->baseUrl.'/asset/images/de_font2.css'
		));
	?>

	<?php //echo $form->textFieldRow($model,'images',array('class'=>'span5','maxlength'=>225)); ?>
	<?php echo $form->fileFieldRow($model,'images',array(
	'hint'=>'<b>Note:</b> Ukuran gambar adalah 640 x 480px. Gambar yang lebih besar akan ter-crop otomatis')); ?>
	<?php if ($model->scenario == 'update'): ?>
	<div class="control-group">
		<label class="control-label">&nbsp;</label>
		<div class="controls">
		<img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(300,300, '/images/visiting-consultan/'.$model->images , array('method' => 'resize', 'quality' => '90')) ?>"/>
		</div>
	</div>
	<?php endif; ?>

	<?php echo $form->dropDownListRow($model, 'active', array(
		'1'=>'Active',
		'0'=>'Deactive',
	)); ?>

	<?php //ho $form->textFieldRow($model,'sort',array('class'=>'span5')); ?>

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
