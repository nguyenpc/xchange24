<?php
/* @var $this PaymentProcessorController */
/* @var $model PaymentProcessor */

$this->breadcrumbs=array(
	'Payment Processors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List PaymentProcessor', 'url'=>array('index')),
	array('label'=>'Create PaymentProcessor', 'url'=>array('create')),
	array('label'=>'Update PaymentProcessor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PaymentProcessor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PaymentProcessor', 'url'=>array('admin')),
);
?>

<h1>View PaymentProcessor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'code',
		'name',
		'is_send',
		'is_receive',
		'send_fees',
		'receive_fees',
		'Reserve',
		'send_extra',
		'receive_extra',
	),
)); ?>
