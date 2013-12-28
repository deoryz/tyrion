<?php
$this->breadcrumbs=array(
	'Master Cities',
);

$this->menu=array(
	array('label'=>'Add MasterCity', 'icon'=>'th-list','url'=>array('create')),
);
?>

<h1>Master Cities</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'master-city-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'id',
		// 'city_state_id',
		array(
			'name'=>'city_state_id',
			'filter'=>CHtml::listData(MasterState::model()->findAll(),'id','state_name'),
			'value'=>'$data->prov->state_name'
		),
		'city_name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} {delete}'
		),
	),
)); ?>
