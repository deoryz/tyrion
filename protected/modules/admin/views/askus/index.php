<?php
$this->breadcrumbs=array(
	'Askus',
);

$this->menu=array(
	array('label'=>'Add Askus', 'icon'=>'th-list','url'=>array('create')),
);
?>

<h1>Askus</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'askus-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'header'=>'Masalah',
			'value'=>'$data->desc->masalah',
		),
		'date_input',
		'date_modif',
		array(
			'name'=>'active',
			'filter'=>array(
				'0'=>'No',
				'1'=>'Yes',
			),
			'value'=>'($data->active=="1")? "Yes" : "No" ',
		),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} {delete}',
			'deleteButtonUrl'=>'Yii::app()->createUrl("/admin/askus/delete", array("id" => $data->id))',
			'updateButtonUrl'=>'Yii::app()->createUrl("/admin/askus/update", array("id" => $data->id))',
		),
	),
)); ?>
