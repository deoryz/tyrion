<?php
$this->breadcrumbs=array(
	'List Visits',
);

$this->menu=array(
	array('label'=>'Add ListVisit', 'icon'=>'th-list','url'=>array('create')),
);
?>

<h1>List Visits</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'list-visit-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		// 'description',
		array(
			'name'=>'description',
			'type'=>'raw',
			'value'=>'substr(strip_tags($data->description), 0, 250)',
		),
		'images',
		'active',
		'sort',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} {delete}'
		),
	),
)); ?>
