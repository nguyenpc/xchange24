<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
 //echo $this->getLayoutFile('index');
?>

<div class="row" style="background-color:red;">
<?php
$fromProcessor = PaymentProcessor::model()->findAll();

print_r($models);
?>
<select   name="webmenu" id="select-have" style="float:left;margin:10px 10px 10px 10px" >
<option value="0" data-icon="icon-heart">You have</option>
      <option value="pm-usd" data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/perfectmoney.png">Perfect Money USD</option>
      <option value="pm-eur" data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/perfectmoney.png">Perfect Money EUR</option>
      <option value="ego-usd" data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/egopay.png">EgoPay USD</option>
      <option value="ego-eur" data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/egopay.png">EgoPay EUR</option>
      <option value="WMZ" data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/webmoney.png">Webmoney WMZ</option>
      <option value="WME" data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/webmoney.png">Webmoney WME</option>
            <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/solidtrustpay.png">SolidTrustPay USD</option>

      </select>
<img style="margin: 10px 10% 0 10%;" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/next.png"/>

<select name="bbuy"  id="select-want" style="float:right; margin:10px 10px 10px 5px">
<option value="0">You want</option>
      <option value="EUR" id="ego-eur2" data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/egopay.png">EgoPay EUR</option>
      <option value="USD" id="ego-usd2" data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/egopay.png">EgoPay USD</option>
      <option value="Payza" id="payza2" data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/payza.png">Payza USD</option>
      <option value="USD" id="pm-usd2" data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/perfectmoney.png">Perfect Money USD</option>
      <option value=EUR data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/perfectmoney.png">Perfect Money EUR</option>
      <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/solidtrustpay.png">SolidTrustPay USD</option>
      <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/webmoney.png">Webmoney WMZ</option>
      </select>
</div>
<div id="loading" style="text-align:center; margin-top:10px;display: none;">
<img  style="width:60px;height:60px" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/loading-128x128.gif" style="">
</div>
<div id="content">
    
</div>