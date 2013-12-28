<?php
$this->breadcrumbs=array(
	'Askus'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Askus', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Create Askus', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Askus', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Update Askus <?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model, 'modelDesc'=>$modelDesc)); ?>