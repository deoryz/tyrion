<?php
$this->breadcrumbs=array(
	'Master Cities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MasterCity', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add MasterCity', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit MasterCity', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MasterCity', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View MasterCity #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'city_name',
		'city_state_id',
	),
)); ?>
