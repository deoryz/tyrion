<?php
$this->breadcrumbs=array(
	'Master States'=>array('index'),
	'Add',
);

$this->menu=array(
	array('label'=>'List MasterState', 'icon'=>'th-list','url'=>array('index')),
);
?>

<h1>Add MasterState</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>