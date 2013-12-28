<?php
$this->breadcrumbs=array(
	'Lokasi'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->menu=array(
	array('label'=>'List Lokasi', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Lokasi', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Lokasi', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Edit Lokasi <?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>