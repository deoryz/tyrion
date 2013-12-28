<?php
$this->breadcrumbs=array(
	'Master Cities'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->menu=array(
	array('label'=>'List MasterCity', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add MasterCity', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View MasterCity', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Edit MasterCity <?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>