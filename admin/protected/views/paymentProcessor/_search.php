<?php
/* @var $this PaymentProcessorController */
/* @var $model PaymentProcessor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_send'); ?>
		<?php echo $form->textField($model,'is_send'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_receive'); ?>
		<?php echo $form->textField($model,'is_receive'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'send_fees'); ?>
		<?php echo $form->textField($model,'send_fees'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'receive_fees'); ?>
		<?php echo $form->textField($model,'receive_fees'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Reserve'); ?>
		<?php echo $form->textField($model,'Reserve'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'send_extra'); ?>
		<?php echo $form->textField($model,'send_extra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'receive_extra'); ?>
		<?php echo $form->textField($model,'receive_extra'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->