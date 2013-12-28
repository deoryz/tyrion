<?php
$this->breadcrumbs=array(
	'Master States'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MasterState','url'=>array('index')),
	array('label'=>'Add MasterState','url'=>array('create')),
);
?>

<h1>Manage Master States</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'master-state-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'state_name',
		'state_country_id',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
