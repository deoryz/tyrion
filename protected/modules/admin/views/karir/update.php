<?php
$this->breadcrumbs=array(
	'Karirs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Karir', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Create Karir', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Karir', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Update Karir <?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model, 'modelDesc'=>$modelDesc)); ?>