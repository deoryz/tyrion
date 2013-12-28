<?php
$this->breadcrumbs=array(
	'Kantors'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->menu=array(
	// array('label'=>'List Kantor', 'icon'=>'th-list','url'=>array('index')),
	// array('label'=>'Add Kantor', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Kantor', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<!-- <h1>Edit Kantor <?php echo $model->id; ?></h1> -->
<?php //$this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>