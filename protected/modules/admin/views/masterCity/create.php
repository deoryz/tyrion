<?php
$this->breadcrumbs=array(
	'Master Cities'=>array('index'),
	'Add',
);

$this->menu=array(
	array('label'=>'List MasterCity', 'icon'=>'th-list','url'=>array('index')),
);
?>

<h1>Add MasterCity</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>