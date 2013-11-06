<?php
/* @var $this RatesController */
/* @var $model Rates */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'rates-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>



    <div class="row">


        <?php echo $form->labelEx($model, 'from_proc'); ?>
        <?php
        $list = CHtml::listData(PaymentProcessor::model()->findAll(), 'id', 'name');
        echo $form->dropDownList($model, 'from_proc', $list, array('empty' => 'Select Payment Processor'))
        ?>
<?php echo $form->error($model, 'from_proc'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'to_proc'); ?>

        <?php echo $form->dropDownList($model, 'to_proc', $list, array('empty' => 'Select Payment Processor')) ?>
        <?php echo $form->error($model, 'to_proc'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'rate'); ?>
        <?php echo $form->textField($model, 'rate'); ?>
        <?php echo $form->error($model, 'rate'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'level'); ?>
        
           <?php
        $list = CHtml::listData(Level::model()->findAll(), 'id', 'name');
        echo $form->dropDownList($model, 'level', $list, array('empty' => 'Select Level'))
        ?>
        <?php echo $form->error($model, 'level'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'min'); ?>
        <?php echo $form->textField($model, 'min'); ?>
        <?php echo $form->error($model, 'min'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'max'); ?>
        <?php echo $form->textField($model, 'max'); ?>
        <?php echo $form->error($model, 'max'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'extra_fees'); ?>
        <?php echo $form->textField($model, 'extra_fees'); ?>
        <?php echo $form->error($model, 'extra_fees'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->