<?php
$this->breadcrumbs=array(
	'List Visits'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ListVisit','url'=>array('index')),
	array('label'=>'Add ListVisit','url'=>array('create')),
);
?>

<h1>Manage List Visits</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'list-visit-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'description',
		'images',
		'active',
		'sort',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
