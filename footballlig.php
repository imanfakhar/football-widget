<?php
add_action( 'widgets_init', 'wp_parsi_football' );
function wp_parsi_football() {
	register_widget( 'wp_parsi_football' );
}
class wp_parsi_football extends WP_Widget {
	function wp_parsi_football() {
		$widget_ops = array( 'classname' => 'wpparsifootball', 'description' =>  'نتایج بازی های فوتبال' );
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'wp-parsi-football' );
		$this->WP_Widget( 'wp-parsi-football','نتایج لیگ', $widget_ops, $control_ops );
	}
	function widget( $args, $instance ) {
						extract( $args );
			 $stplaytheme = $instance['stplaytheme'];
			   $ourlogo = $instance['ourlogo'];
			  $ourtitle = $instance['ourtitle'];
			   $stlogo2 = $instance['stlogo2'];
			  $sttitle2 = $instance['sttitle2'];
			   $stlogo3 = $instance['stlogo3'];
			  $sttitle3 = $instance['sttitle3'];
			$stplayday1 = $instance['stplayday1'];
			$stplayday2 = $instance['stplayday2'];
		 $stplaydatejh1 = $instance['stplaydatejh1'];
		 $stplaydatejh2 = $instance['stplaydatejh2'];
		 $stplaydatejd1 = $instance['stplaydatejd1'];
		 $stplaydatejd2 = $instance['stplaydatejd2'];
		 $stplaydatejm1 = $instance['stplaydatejm1'];
		 $stplaydatejm2 = $instance['stplaydatejm2'];
		 $stplaydatejy1 = $instance['stplaydatejy1'];
		 $stplaydatejy2 = $instance['stplaydatejy2'];
			$stplaygol1 = $instance['stplaygol1'];
			$stplaygol2 = $instance['stplaygol2'];
			 $stplayst1 = $instance['stplayst1'];
			 $stplayst2 = $instance['stplayst2'];
			 $stplaylig = $instance['stplaylig'];
		
  ?>
  <script src="<?php echo get_template_directory_uri(); ?>/jquery.js"></script>
	<div class="wp-parsi-sport-tabs0 <?php echo $stplaytheme;?>">
<div class="wp-parsi-sport-tabs">
<div class="wp-parsi-stth tabth1">بازی قبلی</div><div class="wp-parsi-stth tabth2">بازی بعدی</div>
	<div class="wp-parsi-sttr">
<div class="wp-parsi-sttd tabtd1">
	<table class="wp-parsi-st-table"cellpadding="0" cellspacing="0" style="width: 100%; height:150px;margin:20px 0 0 0">
		<tr>
			<th class="wp-parsi-st-logo" rowspan="2">
			<img src="<?php echo $ourlogo; ?>" alt="لوگوی تیم <?php echo $ourtitle;?>" title="<?php echo $ourtitle;?>" ></th>
			<td class="wp-parsi-st-deta center bold"><?php echo $stplayday1;?>&nbsp; <?php echo $stplaydatejd1;?></td>
			<th class="wp-parsi-st-logo" rowspan="2">
			<img src="<?php echo $stlogo2;?>"  alt="لوگوی تیم <?php echo $sttitle2;?>" title="<?php echo $sttitle2;?>" ></th>
		</tr>
		<tr>
			<td class="wp-parsi-st-deta center bold"><?php echo $stplaydatejm1;?>&nbsp; <?php echo $stplaydatejy1;?></td>
		</tr>
		<tr>
			<th class="wp-parsi-st-deta gol" rowspan="2"><?php echo $stplaygol1;?></th>
			<td class="wp-parsi-st-deta center bold">ساعت <?php echo $stplaydatejh1;?></td>
			<th class="wp-parsi-st-deta gol" rowspan="2"><?php echo $stplaygol2;?></th>
		</tr>
		<tr>
			<td class="wp-parsi-st-deta"><?php echo $stplayst1;?></td>
		</tr>
		<tr>
		<th><?php echo $ourtitle;?></th>
		<td></td>
		<th><?php echo $sttitle2;?></th>
		</tr>
		<tr>
			<td colspan="3" class="wp-parsi-st-deta"><?php echo $stplaylig;?></td>
		</tr>
	</table>
</div>
<div class="wp-parsi-sttd tabtd2">
	<table class="wp-parsi-st-table"cellpadding="0" cellspacing="0" style="width: 100%; height:150px;margin:20px 0 0 0">
		<tr>
			<th class="wp-parsi-st-logo" rowspan="3">
			<img src="<?php echo $ourlogo;?>" alt="لوگوی تیم <?php echo $ourtitle;?>" title="<?php echo $ourtitle;?>" ></th>
			<td class="wp-parsi-st-deta center bold"><?php echo $stplayday2;?>&nbsp; <?php echo $stplaydatejd2;?></td>
			<th class="wp-parsi-st-logo" rowspan="3">
			<img src="<?php echo $stlogo3;?>"  alt="لوگوی تیم <?php echo $sttitle3;?>" title="<?php echo $sttitle3;?>" ></th>
		</tr>
		<tr>
			<td class="wp-parsi-st-deta center bold"><?php echo $stplaydatejm2;?>&nbsp; <?php echo $stplaydatejy2;?></td>
		</tr>
		<tr>
			<td class="wp-parsi-st-deta center bold">ساعت <?php echo $stplaydatejh2;?></td>
		</tr>
		<tr>
			<th><?php echo $ourtitle;?></th>
			<td class="wp-parsi-st-deta center bold"><?php echo $stplayst1;?></td>
			<th><?php echo $sttitle3;?></th>
		</tr>
		<tr>
			<td colspan="3" class="wp-parsi-st-deta center bold"><?php echo $stplaylig;?></td>
		</tr>
		<tr>
			<td colspan="3" class="wp-parsi-st-deta st-countdown"><div id="note"></div></td>
		</tr>
	</table>
	</div>
</div></div></div>
	<script type="text/javascript">
<!--
$(document).ready(function() { 
$(".tabth1").addClass("active");
$(".tabtd1").show();
$(".tabtd2").hide();
$(".tabth2").click(function() {
	$(".tabth2").addClass("active");
	$(".tabth1").removeClass("active");
	$(".wp-parsi-sttr").css("backgroundPosition","left -42px");
	$(".tabtd1").slideUp(500);
	$(".tabtd2").delay( 500 ).slideDown(500);
})
$(".tabth1").click(function() {
	$(".tabth1").addClass("active");
	$(".tabth2").removeClass("active");
	$(".wp-parsi-sttr").css("backgroundPosition","right -42px");
	$(".tabtd2").slideUp(500);
	$(".tabtd1").delay( 500 ).slideDown(500);
})
})
//-->
</script>
<?php include_once(TEMPLATEPATH . '/jdf.php');?>
<script>

/*
Count up from any date script-
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free scripts here!
*/
var cdown = "<?php echo jalali_to_gregorian($stplaydatejy2, $stplaydatejm2,$stplaydatejd2,', ');?>" 
var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")

function countdown(yr,m,d){
var today=new Date()
var todayy=today.getYear()
if (todayy < 1000)
todayy+=1900
var todaym=today.getMonth()
var todayd=today.getDate()
var todaystring=montharray[todaym]+" "+todayd+", "+todayy
var paststring=montharray[m-1]+" "+d+", "+yr
var difference=(Math.round((Date.parse(todaystring)-Date.parse(paststring))/(24*60*60*1000))*1) 
var difference1 = difference*'-1' 
difference1+=" روز" 
document.getElementById('note').innerHTML = "تا مسابقه بعدی  "+difference1+"  مانده "
}
//enter the count up date using the format year/month/day
countdown(cdown);

</script>
<?php		echo $after_widget;
	}
	//Update the widget 
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags from title and name to remove HTML 
		$instance['ourlogo']=  strip_tags( $new_instance['ourlogo']);
		$instance['stplaytheme']=  strip_tags( $new_instance['stplaytheme']);
		$instance['ourtitle']=  strip_tags( $new_instance['ourtitle']);
		$instance['stlogo2']= strip_tags( $new_instance['stlogo2']);
		$instance['sttitle2']= strip_tags( $new_instance['sttitle2']);
		$instance['stlogo3']= strip_tags( $new_instance['stlogo3']);
		$instance['sttitle3']= strip_tags( $new_instance['sttitle3']);
		$instance['stplayday1']= strip_tags( $new_instance['stplayday1']);
		$instance['stplayday2']= strip_tags( $new_instance['stplayday2']);
		$instance['stplaydatejh1']= strip_tags( $new_instance['stplaydatejh1']);
		$instance['stplaydatejh2']= strip_tags( $new_instance['stplaydatejh2']);
		$instance['stplaydatejd1']= strip_tags( $new_instance['stplaydatejd1']);
		$instance['stplaydatejd2']= strip_tags( $new_instance['stplaydatejd2']);
		$instance['stplaydatejm1']= strip_tags( $new_instance['stplaydatejm1']);
		$instance['stplaydatejm2']= strip_tags( $new_instance['stplaydatejm2']);
		$instance['stplaydatejy1']= strip_tags( $new_instance['stplaydatejy1']);
		$instance['stplaydatejy2']= strip_tags( $new_instance['stplaydatejy2']);
		$instance['stplaygol1']= strip_tags( $new_instance['stplaygol1']);
		$instance['stplaygol2']= strip_tags( $new_instance['stplaygol2']);
		$instance['stplayst1']= strip_tags( $new_instance['stplayst1']);
		$instance['stplayst2']= strip_tags( $new_instance['stplayst2']);
		$instance['stplaylig']= strip_tags( $new_instance['stplaylig']);
		return $instance;
	}
	function form( $instance ) {

		//Set up some default widget settings.
		$defaults = array( 
		'stplaytheme' => 'cpad1' ,
		'ourlogo' => get_template_directory_uri() . '/logo/11.png' ,
		'ourtitle' => 'پرسپولیس' ,
		'stlogo2' => get_template_directory_uri() . '/logo/15.png' ,
		'sttitle2' => 'سپاهان' ,
		'stlogo3' => get_template_directory_uri() . '/logo/2.png' ,
		'sttitle3' => 'داماش رشت' ,
		'stplayday1' => 'جمعه' ,
		'stplayday2' => 'جمعه' ,
		'stplaydatejd1' => '12' ,
		'stplaydatejd2' => '26' ,
		'stplaydatejm1' => '07' ,
		'stplaydatejm2' => '07' ,
		'stplaydatejy1' => '1392' ,
		'stplaydatejy2' => '1392' ,
		'stplaydatejh1' => '18' ,
		'stplaydatejh2' => '18' ,
		'stplaygol1' => '2' ,
		'stplaygol2' => '0' ,
		'stplayst1' => 'اهواز' ,
		'stplayst2' => 'آزادی' ,
		'stplaylig' => 'لیگ برتر خلیج فارس' 
		 );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
<style type="text/css">
.tlogos img {
	max-height:32px;
	max-width:32px;
}
.tlogos input {
	border-style:none;
	outline-style:none;
	margin:1px;
width:16px;height:16px}
</style>		
<script type="text/javascript">
function footballch1(IMG) {
	var mysrc = IMG.src;
	var mytitle = IMG.title;
	document.getElementById("<?php echo $this->get_field_id( 'ourlogo' ); ?>").value = mysrc;
	document.getElementById("<?php echo $this->get_field_id( 'ourtitle' ); ?>").value = mytitle;
}
function footballch2(IMG) {
	var mysrc = IMG.src;
	var mytitle = IMG.title;
	document.getElementById("<?php echo $this->get_field_id( 'stlogo2' ); ?>").value = mysrc;
	document.getElementById("<?php echo $this->get_field_id( 'sttitle2' ); ?>").value = mytitle;
}
function footballch3(IMG) {
	var mysrc = IMG.src;
	var mytitle = IMG.title;
	document.getElementById("<?php echo $this->get_field_id( 'stlogo3' ); ?>").value = mysrc;
	document.getElementById("<?php echo $this->get_field_id( 'sttitle3' ); ?>").value = mytitle;
}
</script>  
						<h3>تنظیمات اصلی </h3>
		<div class="wp-parsi-st-panel p0">
		<p>
			<label for="<?php echo $this->get_field_id( 'stplaytheme' ); ?>">رنگبندی پنل</label>
			<center class="tlogos">
			<input onclick="document.getElementById('<?php echo $this->get_field_id( 'stplaytheme' ); ?>').value=this.className" class="cpad1" type="button" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/cpad1.png);">
			<input onclick="document.getElementById('<?php echo $this->get_field_id( 'stplaytheme' ); ?>').value=this.className" class="cpad2" type="button" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/cpad2.png);">
			<input onclick="document.getElementById('<?php echo $this->get_field_id( 'stplaytheme' ); ?>').value=this.className" class="cpad3" type="button" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/cpad3.png);">
			<input onclick="document.getElementById('<?php echo $this->get_field_id( 'stplaytheme' ); ?>').value=this.className" class="cpad4" type="button" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/cpad4.png);">
			<input onclick="document.getElementById('<?php echo $this->get_field_id( 'stplaytheme' ); ?>').value=this.className" class="cpad5" type="button" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/cpad5.png);">
			<input onclick="document.getElementById('<?php echo $this->get_field_id( 'stplaytheme' ); ?>').value=this.className" class="cpad6" type="button" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/cpad6.png);">
			<input onclick="document.getElementById('<?php echo $this->get_field_id( 'stplaytheme' ); ?>').value=this.className" class="cpad7" type="button" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/cpad7.png);">
			<input onclick="document.getElementById('<?php echo $this->get_field_id( 'stplaytheme' ); ?>').value=this.className" class="cpad8" type="button" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/cpad8.png);">
			<input onclick="document.getElementById('<?php echo $this->get_field_id( 'stplaytheme' ); ?>').value=this.className" class="cpad9" type="button" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/cpad9.png);">
			<input onclick="document.getElementById('<?php echo $this->get_field_id( 'stplaytheme' ); ?>').value=this.className" class="cpad10" type="button" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/cpad10.png);">
			<input onclick="document.getElementById('<?php echo $this->get_field_id( 'stplaytheme' ); ?>').value=this.className" class="cpad11" type="button" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/cpad11.png);">
			<input onclick="document.getElementById('<?php echo $this->get_field_id( 'stplaytheme' ); ?>').value=this.className" class="cpad12" type="button" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/cpad12.png);">
			<input onclick="document.getElementById('<?php echo $this->get_field_id( 'stplaytheme' ); ?>').value=this.className" class="cpad13" type="button" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/cpad13.png);">
			<input onclick="document.getElementById('<?php echo $this->get_field_id( 'stplaytheme' ); ?>').value=this.className" class="cpad14" type="button" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/cpad14.png);">
			</center>یا کلاس شخصی بگذارید <input id="<?php echo $this->get_field_id( 'stplaytheme' ); ?>" name="<?php echo $this->get_field_name( 'stplaytheme' ); ?>" value="<?php echo $instance['stplaytheme']; ?>" type="text">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'stplaylig' ); ?>">نام لیگ</label>
			<input id="<?php echo $this->get_field_id( 'stplaylig' ); ?>" name="<?php echo $this->get_field_name( 'stplaylig' ); ?>" value="<?php echo $instance['stplaylig']; ?>" style="width:100%;">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'ourlogo' ); ?>">نشانی لوگوی تیم اصلی</label>
			<input id="<?php echo $this->get_field_id( 'ourlogo' ); ?>" name="<?php echo $this->get_field_name( 'ourlogo' ); ?>" value="<?php echo $instance['ourlogo']; ?>" style="width:100%;">
<center class="tlogos">
<img id="img1" onclick="footballch1(this)" title="ذوب آهن" src="<?php echo get_template_directory_uri(); ?>/logo/1.png" >
<img id="img2" onclick="footballch1(this)" title="داماش گیلان" src="<?php echo get_template_directory_uri(); ?>/logo/2.png" >
<img id="img3" onclick="footballch1(this)" title="استقلال" src="<?php echo get_template_directory_uri(); ?>/logo/3.png" >
<img id="img4" onclick="footballch1(this)" title="استقلال خوزستان" src="<?php echo get_template_directory_uri(); ?>/logo/4.png" >
<img id="img5" onclick="footballch1(this)" title="فجر سپاسی" src="<?php echo get_template_directory_uri(); ?>/logo/5.png" >
<img id="img6" onclick="footballch1(this)" title="فولاد خوزستان" src="<?php echo get_template_directory_uri(); ?>/logo/6.png" >
<img id="img7" onclick="footballch1(this)" title="گسترش فولاد" src="<?php echo get_template_directory_uri(); ?>/logo/7.png" >
<img id="img8" onclick="footballch1(this)" title="ملوان بندرانزلی" src="<?php echo get_template_directory_uri(); ?>/logo/8.png" >
<img id="img9" onclick="footballch1(this)" title="مس کرمان" src="<?php echo get_template_directory_uri(); ?>/logo/9.png" >
<img id="img10" onclick="footballch1(this)" title="نفت تهران" src="<?php echo get_template_directory_uri(); ?>/logo/10.png" >
<img id="img11" onclick="footballch1(this)" title="پرسپولیس" src="<?php echo get_template_directory_uri(); ?>/logo/11.png" >
<img id="img12" onclick="footballch1(this)" title="تراکتورسازی" src="<?php echo get_template_directory_uri(); ?>/logo/12.png" >
<img id="img13" onclick="footballch1(this)" title="راه آهن شهر ری" src="<?php echo get_template_directory_uri(); ?>/logo/13.png" >
<img id="img14" onclick="footballch1(this)" title="صبای قم" src="<?php echo get_template_directory_uri(); ?>/logo/14.png" >
<img id="img15" onclick="footballch1(this)" title="سپاهان" src="<?php echo get_template_directory_uri(); ?>/logo/15.png" >
<img id="img16" onclick="footballch1(this)" title="سایپای کرج" src="<?php echo get_template_directory_uri(); ?>/logo/16.png" >
</center>
		</p>
				<p>
			<label for="<?php echo $this->get_field_id( 'ourtitle' ); ?>">نام تیم اصلی</label>
			<input id="<?php echo $this->get_field_id( 'ourtitle' ); ?>" name="<?php echo $this->get_field_name( 'ourtitle' ); ?>" value="<?php echo $instance['ourtitle']; ?>" style="width:100%;">
		</p>
</div>

				<h3>تنظیمات بازی قبل </h3>
				
		<div class="wp-parsi-st-panel p1">
		<p>
			<label for="<?php echo $this->get_field_id( 'stlogo2' ); ?>">نشانی لوگوی تیم مقابل در  بازی قبل</label>
			<input id="<?php echo $this->get_field_id( 'stlogo2' ); ?>" name="<?php echo $this->get_field_name( 'stlogo2' ); ?>" value="<?php echo $instance['stlogo2']; ?>" style="width:100%;">
<center class="tlogos">
<img id="img1" onclick="footballch2(this)" title="ذوب آهن" src="<?php echo get_template_directory_uri(); ?>/logo/1.png" >
<img id="img2" onclick="footballch2(this)" title="داماش گیلان" src="<?php echo get_template_directory_uri(); ?>/logo/2.png" >
<img id="img3" onclick="footballch2(this)" title="استقلال" src="<?php echo get_template_directory_uri(); ?>/logo/3.png" >
<img id="img4" onclick="footballch2(this)" title="استقلال خوزستان" src="<?php echo get_template_directory_uri(); ?>/logo/4.png" >
<img id="img5" onclick="footballch2(this)" title="فجر سپاسی" src="<?php echo get_template_directory_uri(); ?>/logo/5.png" >
<img id="img6" onclick="footballch2(this)" title="فولاد خوزستان" src="<?php echo get_template_directory_uri(); ?>/logo/6.png" >
<img id="img7" onclick="footballch2(this)" title="گسترش فولاد" src="<?php echo get_template_directory_uri(); ?>/logo/7.png" >
<img id="img8" onclick="footballch2(this)" title="ملوان بندرانزلی" src="<?php echo get_template_directory_uri(); ?>/logo/8.png" >
<img id="img9" onclick="footballch2(this)" title="مس کرمان" src="<?php echo get_template_directory_uri(); ?>/logo/9.png" >
<img id="img10" onclick="footballch2(this)" title="نفت تهران" src="<?php echo get_template_directory_uri(); ?>/logo/10.png" >
<img id="img11" onclick="footballch2(this)" title="پرسپولیس" src="<?php echo get_template_directory_uri(); ?>/logo/11.png" >
<img id="img12" onclick="footballch2(this)" title="تراکتورسازی" src="<?php echo get_template_directory_uri(); ?>/logo/12.png" >
<img id="img13" onclick="footballch2(this)" title="راه آهن شهر ری" src="<?php echo get_template_directory_uri(); ?>/logo/13.png" >
<img id="img14" onclick="footballch2(this)" title="صبای قم" src="<?php echo get_template_directory_uri(); ?>/logo/14.png" >
<img id="img15" onclick="footballch2(this)" title="سپاهان" src="<?php echo get_template_directory_uri(); ?>/logo/15.png" >
<img id="img16" onclick="footballch2(this)" title="سایپای کرج" src="<?php echo get_template_directory_uri(); ?>/logo/16.png" >
</center>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'sttitle2' ); ?>">نام تیم مقابل در بازی قبل</label>
			<input id="<?php echo $this->get_field_id( 'sttitle2' ); ?>" name="<?php echo $this->get_field_name( 'sttitle2' ); ?>" value="<?php echo $instance['sttitle2']; ?>" style="width:100%;">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'stplayday1' ); ?>">روز بازی قبل</label>
		<select id="<?php echo $this->get_field_id( 'stplayday1' ); ?>" name="<?php echo $this->get_field_name( 'stplayday1' ); ?>" style="width:20%"> 
				<option value="<?php echo $instance['stplayday1']; ?>" selected="selected" class="stplayselected">
				<?php 				
				echo $instance['stplayday1'];
				?>
				</option>
				<option value="شنبه" class="stday"> شنبه </option>
				<option value="یکشنبه" class="stday"> یکشنبه </option>
				<option value="دوشنبه" class="stday"> دوشنبه </option>
				<option value="سه شنبه" class="stday"> سه شنبه </option>
				<option value="چهارشنبه" class="stday"> چهارشنبه </option>
				<option value="پنجشنبه" class="stday"> پنجشنبه </option>
				<option value="جمعه" class="stday"> جمعه </option>
			</select><label for="<?php echo $this->get_field_id( 'stplaydatejd1' ); ?>">تاریخ بازی قبل</label>
		<select id="<?php echo $this->get_field_id( 'stplaydatejd1' ); ?>" name="<?php echo $this->get_field_name( 'stplaydatejd1' ); ?>" style="width:20%"> 
				<option value="<?php echo $instance['stplaydatejd1']; ?>" selected="selected" class="stplayselected">
				<?php 				
				echo $instance['stplaydatejd1'];
				?>
				</option>
				<option value="01" class="stday"> 01 </option>
				<option value="02" class="stday"> 02 </option>
				<option value="03" class="stday"> 03 </option>
				<option value="04" class="stday"> 04 </option>
				<option value="05" class="stday"> 05 </option>
				<option value="06" class="stday"> 06 </option>
				<option value="07" class="stday"> 07 </option>
				<option value="08" class="stday"> 08 </option>
				<option value="09" class="stday"> 09 </option>
				<option value="10" class="stday"> 10 </option>
				<option value="11" class="stday"> 11 </option>
				<option value="12" class="stday"> 12 </option>
				<option value="13" class="stday"> 13 </option>
				<option value="14" class="stday"> 14 </option>
				<option value="15" class="stday"> 15 </option>
				<option value="16" class="stday"> 16 </option>
				<option value="17" class="stday"> 17 </option>
				<option value="18" class="stday"> 18 </option>
				<option value="19" class="stday"> 19 </option>
				<option value="20" class="stday"> 20 </option>
				<option value="21" class="stday"> 21 </option>
				<option value="22" class="stday"> 22 </option>
				<option value="23" class="stday"> 23 </option>
				<option value="24" class="stday"> 24 </option>
				<option value="25" class="stday"> 25 </option>
				<option value="26" class="stday"> 26 </option>
				<option value="27" class="stday"> 27 </option>
				<option value="28" class="stday"> 28 </option>
				<option value="29" class="stday"> 29 </option>
				<option value="30" class="stday"> 30 </option>
				<option value="31" class="stday"> 31 </option>
			</select><label for="<?php echo $this->get_field_id( 'stplaydatejm1' ); ?>">ماه بازی قبل</label>
		<select id="<?php echo $this->get_field_id( 'stplaydatejm1' ); ?>" name="<?php echo $this->get_field_name( 'stplaydatejm1' ); ?>" style="width:20%"> 
				<option value="<?php echo $instance['stplaydatejm1']; ?>" selected="selected" class="stplayselected">
				<?php 				
				echo $instance['stplaydatejm1'];
				?>
				</option>
				<option value="01" class="stday"> 01 </option>
				<option value="02" class="stday"> 02 </option>
				<option value="03" class="stday"> 03 </option>
				<option value="04" class="stday"> 04 </option>
				<option value="05" class="stday"> 05 </option>
				<option value="06" class="stday"> 06 </option>
				<option value="07" class="stday"> 07 </option>
				<option value="08" class="stday"> 08 </option>
				<option value="09" class="stday"> 09 </option>
				<option value="10" class="stday"> 10 </option>
				<option value="11" class="stday"> 11 </option>
				<option value="12" class="stday"> 12 </option>
			</select>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'stplaydatejy1' ); ?>">سال بازی قبل</label>
				<input id="<?php echo $this->get_field_id( 'stplaydatejy1' ); ?>" name="<?php echo $this->get_field_name( 'stplaydatejy1' ); ?>" value="<?php echo $instance['stplaydatejy1']; ?>" maxlength="4" style="width:50%;">
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'stplaydatejh1' ); ?>">ساعت باری قبل</label>
				<input id="<?php echo $this->get_field_id( 'stplaydatejh1' ); ?>" name="<?php echo $this->get_field_name( 'stplaydatejh1' ); ?>" value="<?php echo $instance['stplaydatejh1']; ?>" maxlength="2" style="width:20%;">
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'stplayst1' ); ?>">ورزشگاه بازی قبل</label>
				<input id="<?php echo $this->get_field_id( 'stplayst1' ); ?>" name="<?php echo $this->get_field_name( 'stplayst1' ); ?>" value="<?php echo $instance['stplayst1']; ?>" style="width:100%;">
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'stplaygol1' ); ?>">گل زده تیم اصلی در بازی قبل</label>
				<input id="<?php echo $this->get_field_id( 'stplaygol1' ); ?>" name="<?php echo $this->get_field_name( 'stplaygol1' ); ?>" value="<?php echo $instance['stplaygol1']; ?>" style="width:30%;">
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'stplaygol2' ); ?>">گل خورده از تیم مقابل در بازی قبل</label>
				<input id="<?php echo $this->get_field_id( 'stplaygol2' ); ?>" name="<?php echo $this->get_field_name( 'stplaygol2' ); ?>" value="<?php echo $instance['stplaygol2']; ?>" style="width:30%;">
			</p>
		</div>
				<h3>تنظیمات بازی بعد </h3>

		<div class="wp-parsi-st-panel p2">
				<p>
			<label for="<?php echo $this->get_field_id( 'stlogo3' ); ?>">نشانی لوگوی تیم بازی بعد</label>
			<input id="<?php echo $this->get_field_id( 'stlogo3' ); ?>" name="<?php echo $this->get_field_name( 'stlogo3' ); ?>" value="<?php echo $instance['stlogo3']; ?>" style="width:100%;">
<center class="tlogos">
<img id="img1" onclick="footballch3(this)" title="ذوب آهن" src="<?php echo get_template_directory_uri(); ?>/logo/1.png" >
<img id="img2" onclick="footballch3(this)" title="داماش گیلان" src="<?php echo get_template_directory_uri(); ?>/logo/2.png" >
<img id="img3" onclick="footballch3(this)" title="استقلال" src="<?php echo get_template_directory_uri(); ?>/logo/3.png" >
<img id="img4" onclick="footballch3(this)" title="استقلال خوزستان" src="<?php echo get_template_directory_uri(); ?>/logo/4.png" >
<img id="img5" onclick="footballch3(this)" title="فجر سپاسی" src="<?php echo get_template_directory_uri(); ?>/logo/5.png" >
<img id="img6" onclick="footballch3(this)" title="فولاد خوزستان" src="<?php echo get_template_directory_uri(); ?>/logo/6.png" >
<img id="img7" onclick="footballch3(this)" title="گسترش فولاد" src="<?php echo get_template_directory_uri(); ?>/logo/7.png" >
<img id="img8" onclick="footballch3(this)" title="ملوان بندرانزلی" src="<?php echo get_template_directory_uri(); ?>/logo/8.png" >
<img id="img9" onclick="footballch3(this)" title="مس کرمان" src="<?php echo get_template_directory_uri(); ?>/logo/9.png" >
<img id="img10" onclick="footballch3(this)" title="نفت تهران" src="<?php echo get_template_directory_uri(); ?>/logo/10.png" >
<img id="img11" onclick="footballch3(this)" title="پرسپولیس" src="<?php echo get_template_directory_uri(); ?>/logo/11.png" >
<img id="img12" onclick="footballch3(this)" title="تراکتورسازی" src="<?php echo get_template_directory_uri(); ?>/logo/12.png" >
<img id="img13" onclick="footballch3(this)" title="راه آهن شهر ری" src="<?php echo get_template_directory_uri(); ?>/logo/13.png" >
<img id="img14" onclick="footballch3(this)" title="صبای قم" src="<?php echo get_template_directory_uri(); ?>/logo/14.png" >
<img id="img15" onclick="footballch3(this)" title="سپاهان" src="<?php echo get_template_directory_uri(); ?>/logo/15.png" >
<img id="img16" onclick="footballch3(this)" title="سایپای کرج" src="<?php echo get_template_directory_uri(); ?>/logo/16.png" >
</center>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'sttitle3' ); ?>">نام تیم بازی بعد</label>
			<input id="<?php echo $this->get_field_id( 'sttitle3' ); ?>" name="<?php echo $this->get_field_name( 'sttitle3' ); ?>" value="<?php echo $instance['sttitle3']; ?>" style="width:100%;">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'stplayday2' ); ?>">روز بازی بعد</label>
		<select id="<?php echo $this->get_field_id( 'stplayday2' ); ?>" name="<?php echo $this->get_field_name( 'stplayday2' ); ?>" style="width:20%"> 
				<option value="<?php echo $instance['stplayday2']; ?>" class="stplayselected" selected="selected">
				<?php 				
				echo $instance['stplayday2'];
				?>
				</option>
				<option value="شنبه" class="stday"> شنبه </option>
				<option value="یکشنبه" class="stday"> یکشنبه </option>
				<option value="دوشنبه" class="stday"> دوشنبه </option>
				<option value="سه شنبه" class="stday"> سه شنبه </option>
				<option value="چهارشنبه" class="stday"> چهارشنبه </option>
				<option value="پنجشنبه" class="stday"> پنجشنبه </option>
				<option value="جمعه" class="stday"> جمعه </option>
			</select><label for="<?php echo $this->get_field_id( 'stplaydatejd2' ); ?>">تاریخ بازی بعد</label>
		<select id="<?php echo $this->get_field_id( 'stplaydatejd2' ); ?>" name="<?php echo $this->get_field_name( 'stplaydatejd2' ); ?>" style="width:20%"> 
				<option value="<?php echo $instance['stplaydatejd2']; ?>" selected="selected" class="stplayselected">
				<?php 				
				echo $instance['stplaydatejd2'];
				?>
				</option>
				<option value="01" class="stday"> 01 </option>
				<option value="02" class="stday"> 02 </option>
				<option value="03" class="stday"> 03 </option>
				<option value="04" class="stday"> 04 </option>
				<option value="05" class="stday"> 05 </option>
				<option value="06" class="stday"> 06 </option>
				<option value="07" class="stday"> 07 </option>
				<option value="08" class="stday"> 08 </option>
				<option value="09" class="stday"> 09 </option>
				<option value="10" class="stday"> 10 </option>
				<option value="11" class="stday"> 11 </option>
				<option value="12" class="stday"> 12 </option>
				<option value="13" class="stday"> 13 </option>
				<option value="14" class="stday"> 14 </option>
				<option value="15" class="stday"> 15 </option>
				<option value="16" class="stday"> 16 </option>
				<option value="17" class="stday"> 17 </option>
				<option value="18" class="stday"> 18 </option>
				<option value="19" class="stday"> 19 </option>
				<option value="20" class="stday"> 20 </option>
				<option value="21" class="stday"> 21 </option>
				<option value="22" class="stday"> 22 </option>
				<option value="23" class="stday"> 23 </option>
				<option value="24" class="stday"> 24 </option>
				<option value="25" class="stday"> 25 </option>
				<option value="26" class="stday"> 26 </option>
				<option value="27" class="stday"> 27 </option>
				<option value="28" class="stday"> 28 </option>
				<option value="29" class="stday"> 29 </option>
				<option value="30" class="stday"> 30 </option>
				<option value="31" class="stday"> 31 </option>
			</select><label for="<?php echo $this->get_field_id( 'stplaydatejm2' ); ?>">ماه بازی بعد</label>
		<select id="<?php echo $this->get_field_id( 'stplaydatejm2' ); ?>" name="<?php echo $this->get_field_name( 'stplaydatejm2' ); ?>" style="width:20%"> 
				<option value="<?php echo $instance['stplaydatejm2']; ?>" selected="selected" class="stplayselected">
				<?php 				
				echo $instance['stplaydatejm2'];
				?>
				</option>
				<option value="01" class="stday"> 01 </option>
				<option value="02" class="stday"> 02 </option>
				<option value="03" class="stday"> 03 </option>
				<option value="04" class="stday"> 04 </option>
				<option value="05" class="stday"> 05 </option>
				<option value="06" class="stday"> 06 </option>
				<option value="07" class="stday"> 07 </option>
				<option value="08" class="stday"> 08 </option>
				<option value="09" class="stday"> 09 </option>
				<option value="10" class="stday"> 10 </option>
				<option value="11" class="stday"> 11 </option>
				<option value="12" class="stday"> 12 </option>
			</select>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'stplaydatejy2' ); ?>">سال بازی بعد</label>
				<input id="<?php echo $this->get_field_id( 'stplaydatejy2' ); ?>" name="<?php echo $this->get_field_name( 'stplaydatejy2' ); ?>" value="<?php echo $instance['stplaydatejy2']; ?>" maxlength="4" style="width:50%;">
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'stplaydatejh2' ); ?>">ساعت باری بعد</label>
				<input id="<?php echo $this->get_field_id( 'stplaydatejh2' ); ?>" name="<?php echo $this->get_field_name( 'stplaydatejh2' ); ?>" value="<?php echo $instance['stplaydatejh2']; ?>" maxlength="2" style="width:20%;">
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'stplayst2' ); ?>">ورزشگاه بازی بعد</label>
				<input id="<?php echo $this->get_field_id( 'stplayst2' ); ?>" name="<?php echo $this->get_field_name( 'stplayst2' ); ?>" value="<?php echo $instance['stplayst2']; ?>" style="width:100%;">
			</p>

		</div>
		
	<?php
	}
}
?>
