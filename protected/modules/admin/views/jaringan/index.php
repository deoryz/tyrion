<?php
$this->breadcrumbs=array(
	'Jaringan',
);

$this->menu=array(
	array('label'=>'Add Jaringan', 'icon'=>'th-list','url'=>array('create')),
);
?>

<h1>Jaringan</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'jaringan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'id',
		array(
			'name'=>'city_id',
			'filter'=>false,
			'value'=>'$data->city->city_name',
		),
		// 'city_id',
		'alamat',
		'phone',
		'fax',
		'email',
		/*
		'map',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} {delete}'
		),
	),
)); ?>
