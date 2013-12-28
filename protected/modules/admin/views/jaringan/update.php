<?php
$this->breadcrumbs=array(
	'Jaringan'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->menu=array(
	array('label'=>'List Jaringan', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Jaringan', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Jaringan', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Edit Jaringan <?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>