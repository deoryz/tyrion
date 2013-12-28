<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pusat_kota',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'pusat_alamat',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'pusat_map',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'pusat_phone',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'pusat_fax',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'pusat_email',array('class'=>'span5','maxlength'=>200)); ?>

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
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
