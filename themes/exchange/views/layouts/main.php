<html lang="en" class="csstransforms no-csstransforms3d csstransitions">
    <?php include 'header.tpl';?>

        <!-- Content strats -->

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Blog starts -->

                        <div class="blog">
                            <div class="row">
                                <div class="col-md-12">

                                    <!-- Blog Posts -->
                                    <div class="row">

                                        <div class="col-md-4 col-sm-4">
                                            <widget>
                                            <div class="sidebar">
                                                <!-- Widget -->
                                                
                                                <div class="widget">
                                                    <h4>Rate Caculator</h4>
                                                    <div class="row-select">
<select id="from1" class="none"  style="width:190px;">
<option value="0">Select as first</option>
      <option value=EUR data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/perfectmoney.png">Perfect Money EUR</option>
      <option value=EUR data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/perfectmoney.png">Perfect Money EUR</option>
      <option value=BTC data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/bitcoin.png">Bitcoin</option>
      <option value=LTC data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/litecoin.png">Litecoin</option>
      <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/btce.png">BTC-E USD</option>
      <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/egopay.png">EgoPay USD</option>
      <option value=EUR data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/egopay.png">EgoPay EUR</option>
      <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/liqpay.png">LIQPAY USD</option>
      <option value=EUR data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/liqpay.png">LIQPAY EUR</option>
      <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/okpay.png">OKPAY USD</option>
      <option value=EUR data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/okpay.png">OKPAY EUR</option>
      <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/webmoney.png">Webmoney WMZ</option>
      <option value=EUR data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/webmoney.png">Webmoney WME</option>
      </select>

<input type="text" class="inputbox40" id="scur"  name="scur" value="100"  />
&nbsp;<span id="mena1" ></span>
                                                    </div>
                                                    <div class="row-select">
<select name="bbuy1"  id="bbuy1"  style="width:190px;">
<option value="0">Select as second</option>
         <option value=BTC data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/bitcoin.png">Bitcoin</option>
      <option value=LTC data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/litecoin.png">Litecoin</option>
      <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/btce.png">BTC-E USD</option>
      <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/egopay.png">EgoPay USD</option>
      <option value=EUR data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/liqpay.png">LIQPAY EUR</option>
      <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/liqpay.png">LIQPAY USD</option>
      <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/hdm.png">HD-Money USD</option>
      <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/okpay.png">OKPAY USD</option>
      <option value=EUR data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/okpay.png">OKPAY EUR</option>
      <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/payza.png">Payza USD</option>
      <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/perfectmoney.png">Perfect Money USD</option>
      <option value=EUR data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/perfectmoney.png">Perfect Money EUR</option>
      <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/skrill.png">Skrill USD</option>
      <option value=EUR data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/skrill.png">Skrill EUR</option>
      <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/solidtrustpay.png">SolidTrustPay USD</option>
      <option value=USD data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/webmoney.png">Webmoney WMZ</option>
      </select>
                                                        
<input type="text" class="inputbox40" style="background:#EDEEF1;" id="bcur"  name="bcur" value="" readonly="true" /> 


                                                    </div>
                                                </div>

                                            </div>   


                                            <div class="sidebar">
                                                <!-- Widget -->

                                                <div class="widget menu">
                                                    <h4>User Panel</h4>
                                                    <ul>
                                                        <li><a href="#">My Account</a></li>
                                                        <li><a href="#">History</a></li>
                                                        <li><a href="#">New Exchange</a></li>
                                                        <li><a href="#">Verification</a></li>
                                                        <li><a href="#">Logout</a></li>
                                                    </ul>
                                                </div>
                                            </widget>
                                            </div>       
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <div class="posts">

                                                <?php if (isset($this->breadcrumbs)): ?>
                                                    <?php
                                                    $this->widget('zii.widgets.CBreadcrumbs', array(
                                                        'links' => $this->breadcrumbs,
                                                    ));
                                                    ?><!-- breadcrumbs -->
                                                <?php endif ?>

                                                <?php echo $content; ?>

                                            </div>
                                        </div>                        



                                    </div>



                                </div>
                            </div>
                        </div>


                        <!-- Service ends -->



                    </div>
                </div>
            </div>
        </div>   

        <!-- Content ends --> 

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Widget 1 -->
                        <div class="widget">
                            <h4>About Us</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum dolor eget nisi fermentum quis hendrerit magna vestibulum. </p>
                            <ul>
                                <li><a href="http://responsivewebinc.com/premium/ericka/ericka-o/blog1.html#">Sed eu leo orci, condimentum gravida metus</a></li>
                                <li><a href="http://responsivewebinc.com/premium/ericka/ericka-o/blog1.html#">Etiam at nulla ipsum, in rhoncus purus</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Widget 2 -->
                        <div class="widget">
                            <h4>Recent Posts</h4>
                            <ul>
                                <li><a href="http://responsivewebinc.com/premium/ericka/ericka-o/blog1.html#">Sed eu leo orci, in rhoncus puru condimentum gravida metus</a></li>
                                <li><a href="http://responsivewebinc.com/premium/ericka/ericka-o/blog1.html#">Etiam at in rhoncus puru nulla ipsum, in rhoncus purus</a></li>
                                <li><a href="http://responsivewebinc.com/premium/ericka/ericka-o/blog1.html#">Fusce vel magnain rhoncus puru faucibus felis dapibus facilisis</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Widget 3 -->
                        <div class="widget">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="http://responsivewebinc.com/premium/ericka/ericka-o/blog1.html#">Condimentum</a></li>
                                <li><a href="http://responsivewebinc.com/premium/ericka/ericka-o/blog1.html#">Etiam at</a></li>
                                <li><a href="http://responsivewebinc.com/premium/ericka/ericka-o/blog1.html#">Fusce vel</a></li>
                                <li><a href="http://responsivewebinc.com/premium/ericka/ericka-o/blog1.html#">Vivamus</a></li>
                                <li><a href="http://responsivewebinc.com/premium/ericka/ericka-o/blog1.html#">Pellentesque</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12"><p class="copy">
                            <!-- Copyright information. You can remove my site link. -->
                            Copyright © <a href="http://responsivewebinc.com/premium/ericka/ericka-o/blog1.html#">Your Site</a> | Designed by <a href="http://responsivewebinc.com/">Responsive Web Design</a></p></div>
                </div>
            </div>
        </footer>		
  <script language="javascript">
$(document).ready(function(e) {
try {
$("body select").msDropDown();
} catch(e) {
alert(e.message);
}
});
</script>


    </body></html>