<?php
$this->breadcrumbs=array(
	'Jaringans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Jaringan','url'=>array('index')),
	array('label'=>'Add Jaringan','url'=>array('create')),
);
?>

<h1>Manage Jaringans</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'jaringan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'city_id',
		'alamat',
		'phone',
		'fax',
		'email',
		/*
		'map',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
