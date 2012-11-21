<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1><i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<!--reloj-->
<div class="content">
<left>
<!-- $Id: clock.php 72 2010-02-07 01:20:18Z mocapapa@g.pugpug.org $ -->
<div style="position: relative;">
  <img src="/bolsaCruge/images/analog-clock-base.png">
    <div class="hourHand" style="width:104px;height:104px;background-image:url(/bolsaCruge/images/analog-clock-hands.png);background-repeat:no-repeat;top:1px;left:0px;position:absolute;"></div>
    <div class="minuteHand" style="width:104px;height:104px;background-image:url(/bolsaCruge/images/analog-clock-hands.png);background-repeat:no-repeat;top:1px;left:0px;position:absolute;"></div>
    <div class="secondHand" style="width:104px;height:104px;background-image:url(/bolsaCruge/images/analog-clock-hands.png);background-repeat:no-repeat;top:1px;left:0px;position:absolute;"></div>
</div>
<script type="text/javascript">
   /*<![CDATA[*/
   $(document).ready(function() {
       animation();
       setInterval(function(){
           animation();
         }, 1000);
       function animation() {
	 var currentTime = new Date();
	 var s = currentTime.getSeconds();
	 var m = currentTime.getMinutes();
	 var h = Math.floor(5*(currentTime.getHours()%12)+m/12);
	 $('.hourHand').css('background-position', -h*104+'px 0px');
	 $('.minuteHand').css('background-position', -m*104+'px -104px');
	 $('.secondHand').css('background-position', -s*104+'px -208px');
       }
     });
/*]]>*/
</script>

<!--<embed src="http://www.clocklink.com/clocks/0001-gray.swf?TimeZone=JST&Place=&"
  width="140" height="140" wmode="transparent" type="application/x-shockwave-flash">
-->
</left>
</div><!-- content -->

    <!--reloj-->


    <br>

    
<!-- Feed widget -->
<?php 
//kw_profesor/
$this->widget(
   'ext.yii-feed-widget.YiiFeedWidget',
   array('url'=>'http://www.infojobs.net/trabajos.rss/kw_profesor/','limit'=>3)
); 
?>



            <p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>


