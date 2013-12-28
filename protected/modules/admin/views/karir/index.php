<?php
$this->breadcrumbs=array(
	'Karirs',
);

$this->menu=array(
	array('label'=>'Add Karir', 'icon'=>'th-list','url'=>array('create')),
);
?>

<h1>Karirs</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'karir-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'header'=>'Position',
			'value'=>'$data->desc->position',
		),
		// 'posisi',
		'date_open',
		'date_close',
		'date_input',
		'date_modif',
		/*
		'active',
		'sort',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} {delete}',
			'deleteButtonUrl'=>'Yii::app()->createUrl("/admin/karir/delete", array("id" => $data->id))',
			'updateButtonUrl'=>'Yii::app()->createUrl("/admin/karir/update", array("id" => $data->id))',
		),
	),
)); ?>
