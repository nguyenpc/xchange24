<?php
/* @var $this PaymentProcessorController */
/* @var $model PaymentProcessor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'payment-processor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_send'); ?>
		<?php echo $form->checkBox($model,'is_send'); ?>
		<?php echo $form->error($model,'is_send'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_receive'); ?>
		<?php echo $form->checkBox($model,'is_receive'); ?>
		<?php echo $form->error($model,'is_receive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'send_fees'); ?>
		<?php echo $form->textField($model,'send_fees'); ?>
		<?php echo $form->error($model,'send_fees'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'receive_fees'); ?>
		<?php echo $form->textField($model,'receive_fees'); ?>
		<?php echo $form->error($model,'receive_fees'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Reserve'); ?>
		<?php echo $form->textField($model,'Reserve'); ?>
		<?php echo $form->error($model,'Reserve'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'send_extra'); ?>
		<?php echo $form->textField($model,'send_extra'); ?>
		<?php echo $form->error($model,'send_extra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'receive_extra'); ?>
		<?php echo $form->textField($model,'receive_extra'); ?>
		<?php echo $form->error($model,'receive_extra'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->