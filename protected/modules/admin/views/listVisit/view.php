<?php
$this->breadcrumbs=array(
	'List Visits'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ListVisit', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add ListVisit', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit ListVisit', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ListVisit', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View ListVisit #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'images',
		'active',
		'sort',
	),
)); ?>
