<?php
/* @var $this PaymentProcessorController */
/* @var $model PaymentProcessor */

$this->breadcrumbs=array(
	'Payment Processors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PaymentProcessor', 'url'=>array('index')),
	array('label'=>'Manage PaymentProcessor', 'url'=>array('admin')),
);
?>

<h1>Create PaymentProcessor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>