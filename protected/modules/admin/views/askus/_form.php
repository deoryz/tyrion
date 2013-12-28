<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'askus-form',
    'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data', 'onsubmit'=>'return checkCoords();'),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php 
	foreach ($modelDesc as $key => $value): 
		echo $form->errorSummary($value); 
	endforeach
	?>
	<?php if(Yii::app()->user->hasFlash('success')): ?>
	
	    <?php $this->widget('bootstrap.widgets.TbAlert', array(
	        'alerts'=>array('success'),
	    )); ?>
	
	<?php endif; ?>
	<?php	$tabs = array();
	foreach ($modelDesc as $key => $value) {
		$lang = Language::model()->getName($key);
		if ($key=='en') {
			$tabs[] = array('label'=>$lang->name, 'content'=>
		        $form->textFieldRow($value,'['.$lang->code.']masalah',array('class'=>'span5','maxlength'=>100)).
		        $form->textAreaRow($value,'['.$lang->code.']cuplikan_masalah',array('class'=>'span5','maxlength'=>200)).
		        $form->textAreaRow($value,'['.$lang->code.']content',array('class'=>'span5','maxlength'=>200))
		        , 'active'=>($key=='en')?TRUE:false,
		    );
			$this->widget('application.extensions.extckeditor.ExtCKEditor', array(
				'model'=>$value,
				'attribute'=>'['.$lang->code.']content', // model atribute
				'editorTemplate'=>'full', // Toolbar settings (full, basic, advanced)
				'return'=>TRUE, // Toolbar settings (full, basic, advanced)
				'contentCSS'=>Yii::app()->baseUrl.'/asset/css/styles-text.css',
			));
			$this->widget('application.extensions.extckeditor.ExtCKEditor', array(
				'model'=>$value,
				'attribute'=>'['.$lang->code.']cuplikan_masalah', // model atribute
				'editorTemplate'=>'full', // Toolbar settings (full, basic, advanced)
				'return'=>TRUE, // Toolbar settings (full, basic, advanced)
				'contentCSS'=>Yii::app()->baseUrl.'/asset/css/styles-text.css',
			));
		}
	}
	?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>100)) ?>

	<?php $this->widget('bootstrap.widgets.TbTabs', array(
	    'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
	    'placement'=>'above', // 'above', 'right', 'below' or 'left'
	    'tabs'=>$tabs,
	)); ?>
	

	<?php echo $form->dropDownListRow($model, 'active', array(
		'1'=>'Active',
		'0'=>'Deactive',
	)); ?>

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
