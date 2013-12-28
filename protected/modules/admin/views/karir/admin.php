<?php
$this->breadcrumbs=array(
	'Karirs'=>array('index', $this->varGet=>$_GET[$this->varGet]),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Karir','url'=>array('index', $this->varGet=>$_GET[$this->varGet])),
	array('label'=>'Add Karir','url'=>array('create', $this->varGet=>$_GET[$this->varGet])),
);
?>

<h1>Manage Karirs</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'karir-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'posisi',
		'date_open',
		'date_close',
		'date_input',
		'date_modif',
		/*
		'active',
		'sort',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
