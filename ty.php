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
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KK73LV9');</script>
	<!-- End Google Tag Manager -->
	<?php
		$mobile = false;
		if(get_device() == 'mobile'){
			$mobile = true;
		}else{
			$mobile = false;
		}
	?>
</head>
<body class="ty">

<div class="wrapper thanks">
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
						<a href="tel:<?php echo getPhone($source); ?>">
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
						תודה!<br />
						פרטיך התקבלו
					</h2>
          <a class="ecombutton" href="https://sales.dacia.co.il/">
          <div class="kaftordiv"></div>
        </a>
      <!--  <a class="newsbutton" href="https://campaigns.israeldacia.co.il/heb/1018_divur?BannID=9159&utm_source=newsletter&utm_medium=Dacia&utm_campaign=1018_divur&utm_content=lead">
            <div class="newsdiv" style="margin-top: 3vw;"></div>
          </a>-->
				</div>
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
			<img src="images/zhover.jpg" />
		</div>
	</div>
	<div class="bot mobi">
		<div class="linesmob1">
			<img class="footer_right_mob mobi" src="images/footer_right.png">
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
  <script src="js/main.js?ver=<?php echo rand(111,9999); ?>" type="text/javascript"></script>
  <script src="https://cdn.enable.co.il/licenses/enable-L442rn2ytf9quk-0817-867/init.js"></script>
  <script src="//cdn.rawgit.com/noelboss/featherlight/1.7.6/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>


<?php

if ($_REQUEST['name']) {

  $full_name = explode(' ', $_REQUEST['name']);
  $first_name = $full_name[0];
  $last_name = $full_name[1];

		$q = $_SERVER['QUERY_STRING'];
		$qs = str_replace('&', ' ', $q);

	$model = $_REQUEST['model'];
	$event = '742';
	$campaign = 'מניפה';





      $dev_env = false; //TODO: change it to 'false' to go production

      $url = ($dev_env ? 'http://ma.carasso.co.il/js/formtitan-by-layer-dev.php?' : 'http://ma.carasso.co.il/js/formtitan-by-layer-production.php?') . $_SERVER['QUERY_STRING'];

      $data = [
          "campaignId" => "CAM-00057", //TODO: replace with the correct 'campaignId' - should be different between dev and production
          "media"      => "Internet",  //TODO: replace with the correct 'media'
          "firstName"  => $first_name, //FirstName
          "lastName"   => $last_name, //LastName
          "mobile"     => $_REQUEST['phone'], //Mobile
          "email"      => $_REQUEST['email'], //Email
          "message"    => '', //Message_External
          "emailOptIn" => empty($_REQUEST["newsl"]) ? "false" : "true", //EmailOptIn
          "city"       => '' //City
      ];

      // use key 'http' even if you send the request to https://...
      $options = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($data)
          )
      );
      $result = file_get_contents($url, false, stream_context_create($options));
      if ($result === FALSE) {
          $error = error_get_last();
          var_dump($error);
      }


		$poststring = '';
		$poststring .= '<iframe src="https://campaign.twisted.co.il/manager/api.php';
		$poststring .= '?Event=' . $event;
		$poststring .= '&Name=' . $first_name;
		$poststring .= '&Family=' . $last_name;
		$poststring .= '&identity_card=' . $_REQUEST['ip'];
		$poststring .= '&Phone=' . $_REQUEST['phone'];
		$poststring .= '&Mail=' . $_REQUEST['email'];
		$poststring .= '&va1=' . (empty($_REQUEST["newsl"]) ? 'לא' : 'כן');
		$poststring .= '&va2=' . $_REQUEST['media'];
		$poststring .= '&va3=' . $qs;
		$poststring .= '&va4=' . $model;
		$poststring .= '&va5=' . $campaign;
    $poststring .= '&va6=' . $_REQUEST['gclid_field'];
    $poststring .= '&va7=' . ($source == "" ? "Direct Link" : $source);
		$poststring .= '" name="PixFram" id="PixFram" width="0" height="0" frameborder="0" style="display:none;"></iframe>';
		echo $poststring;
	}
?>


<!--<script type='application/javascript' src='https://resources.fortvision.com/staticfiles/fb-web/js/fortvision-fb-web-action.js' async></script>-->
</body>
</html>
