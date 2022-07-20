<?php

include "config.php";
$source = "";
$bid = "";
if($_GET){
    if(isset($_GET['BannID'])){
        $bid = $_GET['BannID'];
    }
    if(isset($_GET['utm_source'])){
        $source = $_GET['utm_source'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="מותג הרכב הצומח בישראל עם מגוון דגמים במחירים המשתלמים ביותר, Dacia הוא מותג רכב הלואו קוסט היחיד בישראל. דאצ'יה – החשבון פשוט!">
    <title>Dacia | דאצ׳יה</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
	<link href="//cdn.rawgit.com/noelboss/featherlight/1.7.6/release/featherlight.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css?ver=<?php echo rand(111,9999); ?>" type="text/css">
    <link rel="stylesheet" href="fonts/font-awesome-4.6.3/css/font-awesome.min.css" type="text/css">
    <!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <script>
       function onSubmit(token) {
        jQuery("#myForm #captcha_is_valid").val(1);
       }
     </script>-->
    <?php if(get_device() == 'mobile'): ?>

    <?php endif; ?>
    <?php
		$mobile = false;
		if(get_device() == 'mobile'){
			$mobile = true;
		}else{
			$mobile = false;
		}
	?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KK73LV9');</script>
	<!-- End Google Tag Manager -->


	<!--[if IE]>
	<style type="text/css">
	  IE specific CSS rules go here
  		.bot{
    		bottom: -3vw;
		}
	</style>
	<![endif]-->
</head>
<body>
	<div class="wrapper">
		<img id="logo_img" src="images/logo.png">

		<div class="right">

			<!-- <div id="header">
				<img id="logo_img" src="images/logo.png">
			</div> -->
			<?php if($mobile){ ?>
			<?php
				if (ctc_time()) {
			?>
					<div id="c2c_btn">
						<a href="tel:<?php echo getPhone($source); ?>" target="_parent">
							<h4>לשיחה<br /> עם נציג</h4>
							<div id="c2c_icon"></div>
						</a>
					</div>
			<?php
				}
			?>
			<!-- <div id="c2f_btn">
				<div id="c2f_icon"></div>
				<h4>להשארת<br />פרטים</h4>
			</div> -->
			<?php } ?>
<!-- 			<div id="c2f_btn">
				<div id="c2f_icon"></div>
				<h4>להשארת<br />פרטים</h4>
			</div> -->

      <div class="txt_wrap">
				<span class="txt_down mobhide">דאצ'יה גאה להציג:</span>
				<span class="txt_down2 mobhide"><span>באתי. </span><span>קניתי. </span><span>נסעתי.</span></span>
        <span class="txt_down3 mobhide">קונים רכב חדש ומקבלים תוך שעה*. פשוט.</span>
				<span class="txt_down mobi">דאצ'יה גאה להציג:</span>
				<span class="txt_down2 mobi"><span>באתי. </span><span>קניתי. </span><span>נסעתי.</span></span>
        <span class="txt_down3 mobi">קונים רכב חדש ומקבלים תוך שעה*. פשוט.</span>
			</div>

      <div class="carrousselwrap">
        <div class="carrousselctr">
          <div class="dacia_mcv_stepway_span car_span">

    				<span class="title">
    					Dacia	MCV Stepway <span class="hahadash">החדש</span>
    				</span>
    				<br />
    				<span class="txt">
    				רכב פנאי
      				<br />
      				<span class="price">
      					מ- 84,990 ₪ בלבד
      				</span>
      				<br />
    					לדגם האוטומטי
    				</span>
    			</div>

          <div class="dacia_dokker_span car_span">

            <span class="title">
              Dacia Dokker
            </span>
            <br />
            <span class="txt">
              רכב עבודה שימושי
              <br />
              <span class="price">
                מ- 105,990 ₪ בלבד
              </span>
              <br>
              לדגם הידני
            </span>
          </div>


    			<div class="dacia_duster_span car_span">

    				<span class="title">
    				  Dacia Duster
    				</span>
    				<br />
    				<span class="txt">
    					רכב פנאי שטח
      				<br />
      				<span class="price">
      					מ- 94,990 ₪ בלבד
      				</span>
              <br>
            לדגם הידני
            </span>
    			</div>

          <div class="dacia_sandero_stepway_span car_span">

            <span class="title">
              Dacia Sandero Stepway
            </span>
            <br />
            <span class="txt">
              קרוסאובר משפחתי
              <br />
              <span class="price">
                מ- 77,990 ₪ בלבד
              </span>
              <br />
            לדגם הידני
            </span>
          </div>



    			<div class="dacia_sandero_span car_span">

    				<span class="title">
    					Dacia Sandero
    				</span>
    				<br />
    				<span class="txt">
    					סופר מיני מרווחת
      				<br />
      				<span class="price">
      				מ- 58,990 ₪ בלבד
      				</span>
      				<br />
              לדגם הידני
            </span>
    			</div>

    			<div class="dacia_lodgy_span car_span">

    				<span class="title">
    					Dacia Lodgy
    				</span>
    				<br />
    				<span class="txt">
    					מיניוואן 7 מקומות
    				  <br />
      				<span class="price">
      					מ- 109,990 ₪ בלבד
      				</span>
              <br>
              לדגם הידני
            </span>
    			</div>
        </div>
      </div>



			<div style="clear: both;"></div>
		</div>
		<div class="left">
			<div class="ftext">
				<div class="ftxt">
					<h2>
            לפרטים נוספים על דגמי דאצ'יה ועל מסלול שלם וסע
            <span>
							שלחו פרטים ונחזור אליכם בהקדם
						</span>
					</h2>
				</div>
			</div>
			<div class="formbox">
				<form id="myForm" name="formbox" method="post" action="<?php echo "ty.php?" . $_SERVER['QUERY_STRING'];?>">
					<input type="hidden" name="ip" value="<?php echo get_client_ip(); ?>">
					<input type="hidden" name="media" value="<?php echo get_device(); ?>">
					<input type="hidden" name="bannid" value="<?php echo $bid; ?>">
          <input type="hidden" name="captcha_is_valid" id="captcha_is_valid" value="1" data-validate="validate(captcha)">
          <div class="g-recaptcha" data-sitekey="6Ld9PssUAAAAAMP4S30tRu-VMmvEQ0HEwvrXxp_f" data-callback="onSubmit" data-size="invisible"></div>
					<input type="hidden" name="va4" value="טרייד אין">
          <input type="text" name="name" data-validate="validate(name)" placeholder="*שם מלא" id="name">
          <input type="text" name="phone" inputmode="numeric" pattern="[0-9]*" required title="מספר לא תקין" maxlength="9" data-validate="validate(required, phone)" placeholder="*טלפון נייד" id="phone">
					<input type="text" name="email" placeholder='מייל' id="mail">
					<button type="submit" class="btn_submit">
						שלח
					</button>
					<div class="chk">
	                    <input type="checkbox" name="newsl" id="newsl">
	                    <label for="newsl">אני מאשר קבלת חומר פרסומי, באמצעות פקס, סמס, דואר, דוא"ל, וחיוג אוטומטי</label>
	                </div>
	                <span class="required">*שדות חובה</span>
				</form>
			</div>
		</div>
	</div>
	<div class="bot mobhide">
		<div class="lines mobhide">
			<img class="footer_right mobhide" src="images/footer_right.png">

			<!-- <a href="images/tech.pdf" target="_blank" class="tech"><img src="images/tech_button.png"></a> -->
			<!-- <a href="images/tech.pdf" target="_blank" class="tech">למפרט טכני >></a> -->
			<!-- <a href="#" class="catalog">לקטלוג המלא <i class="fa fa-angle-double-left" aria-hidden="true"></i></a> -->
		</div>
		<!-- <img class="footer_left" src="images/footer_left.png" /> -->
		<a href="#" data-featherlight="#botlb" class="pu_layer mobi"></a>
    <span class="mish">
      <a href="https://www.dacia.co.il/CountriesData/Israel/images/AboutDacia/dacia_pay_and_drive.pdf">
        *בכפוף לתקנון
      </a>
        *לפי מחירון 2020001. המחירים כוללים מע"מ ואינם כוללים אגרת רישוי (1,237 ₪ - 1,529 ₪, תלוי רכב). התמונה להמחשה בלבד. נתוני צריכת הדלק שלהלן הם לפי בדיקת מעבדה. צריכת הדלק בפועל עשויה להיות שונה משמעותית הואיל והיא מושפעת מאופי הנהיגה, השימוש ברכב, תנאי הדרך ומגורמים נוספים | דגם דאסטר מתייחס לבנזין 1.3 ליטר ידני laureate | דגם סנדרו סטפווי מתייחס לדגם טורבו דיזל 1.5 ליטר ידני | דגם לודג'י מתייחס לדגם טורבו דיזל 1.5 ליטר ידני | דגם דוקר מתייחס לדגם דיזל 1.5 ידני | דגם סנדרו מתייחס לדגם בנזין 1.0 ליטר ידני | דגם MCV Stepway מתייחס לדגם 0.9 ליטר טורבו בנזין אוטומטי
    </span>
		<ul class="zi">
			<li>דרגת זיהום אוויר</li>
      <li class="c4">4</li>
			<li class="c7">7</li>
      <li class="c8">8</li>
      <li class="c9">9</li>
			<li class="c10">10</li>
      <li class="c11">11</li>
      <li class="c12">12</li>
      <li class="c13">13</li>
			<li>רמת האבזור הבטיחותי</li>
      <li class="c0">0</li>
      <li class="c1b">1</li>
			<li class="det">לפרטים:</li>
			<li class="det2"><a href="https://www.dacia.co.il/" target="_blank">www.dacia.co.il</a></li>
		</ul>
		<div class="zoome fadeInUp dskz">
			<img src="images/zhover.jpg" style="width: 40vw;" />
		</div>
	</div>
	<div class="bot mobi">
		<div class="linesmob1">
			<img class="footer_right mobi" src="images/footer_right.png">
		</div>

		<a href="#" data-featherlight="#botlb" class="pu_layer mobi"></a>
    <span class="mish">
      <a href="https://www.dacia.co.il/CountriesData/Israel/images/AboutDacia/dacia_pay_and_drive.pdf">
        *בכפוף לתקנון
      </a>
        *לפי מחירון 2020001. המחירים כוללים מע"מ ואינם כוללים אגרת רישוי (1,237 ₪ - 1,529 ₪, תלוי רכב). התמונה להמחשה בלבד. נתוני צריכת הדלק שלהלן הם לפי בדיקת מעבדה. צריכת הדלק בפועל עשויה להיות שונה משמעותית הואיל והיא מושפעת מאופי הנהיגה, השימוש ברכב, תנאי הדרך ומגורמים נוספים | דגם דאסטר מתייחס לבנזין 1.3 ליטר ידני laureate | דגם סנדרו סטפווי מתייחס לדגם טורבו דיזל 1.5 ליטר ידני | דגם לודג'י מתייחס לדגם טורבו דיזל 1.5 ליטר ידני | דגם דוקר מתייחס לדגם דיזל 1.5 ידני | דגם סנדרו מתייחס לדגם בנזין 1.0 ליטר ידני | דגם MCV Stepway מתייחס לדגם 0.9 ליטר טורבו בנזין אוטומטי
    </span>
		<ul class="zi">
			<li>דרגת זיהום אוויר</li>
        <li class="c4">4</li>
      <li class="c7">7</li>
      <li class="c8">8</li>
      <li class="c9">9</li>
			<li class="c10">10</li>
      <li class="c11">11</li>
      <li class="c12">12</li>
      <li class="c13">13</li>
			<li>רמת האבזור הבטיחותי</li>
      <li class="c0">0</li>
      <li class="c1b">1</li>
			<li class="det">לפרטים:</li>
			<li class="det2"><a href="https://www.dacia.co.il/" target="_blank">www.dacia.co.il</a></li>
		</ul>

		<div class="zoome fadeInUp">
			<img src="images/zhover.jpg" />
		</div>
	</div>

<div style="display: none">
	<div id="botlb">
		<img src="images/zhover.jpg" />
	</div>
</div>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="js/jquery.ketchup.all.min.js" type="text/javascript"></script>
<script src="js/slick/slick.min.js" type="text/javascript"></script>
<script src="js/main.js?ver=<?php echo rand(111,9999); ?>" type="text/javascript"></script>
<script src="https://cdn.enable.co.il/licenses/enable-L442rn2ytf9quk-0817-867/init.js"></script>
<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.6/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>
