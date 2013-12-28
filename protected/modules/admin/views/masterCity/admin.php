<?php
$this->breadcrumbs=array(
	'Master Cities'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MasterCity','url'=>array('index')),
	array('label'=>'Add MasterCity','url'=>array('create')),
);
?>

<h1>Manage Master Cities</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'master-city-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'city_name',
		'city_state_id',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
