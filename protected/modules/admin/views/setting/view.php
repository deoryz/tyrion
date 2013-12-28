<?php
$this->breadcrumbs=array(
	'Settings'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Setting', 'icon'=>'th-list', 'url'=>array('index')),
	array('label'=>'Add Setting', 'icon'=>'plus-sign', 'url'=>array('create')),
	array('label'=>'Edit Setting', 'icon'=>'pencil', 'url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Setting', 'icon'=>'trash', 'url'=>'#','htmlOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Setting #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'value',
	),
)); ?>
