<?php
$this->breadcrumbs=array(
	'Master States'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MasterState', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add MasterState', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit MasterState', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MasterState', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View MasterState #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'state_name',
		'state_country_id',
	),
)); ?>
