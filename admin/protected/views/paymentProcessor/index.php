<?php
/* @var $this PaymentProcessorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Payment Processors',
);

$this->menu=array(
	array('label'=>'Create PaymentProcessor', 'url'=>array('create')),
	array('label'=>'Manage PaymentProcessor', 'url'=>array('admin')),
);
?>

<h1>Payment Processors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
