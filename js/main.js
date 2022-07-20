$(document).ready(function () {
    $width = $(window).width();

  /*  var dmonth = new Date().getMonth();

    if(dmonth*1 >= 6){
      console.log(dmonth);
      $(".dacia_lodgy_span .price").html("מ- 105,990 ₪ בלבד");
    }
*/
/*
function moveright(){

  if($(window).width() > 640){
    var leftPos = parseFloat($('.carrousselctr').css("right"))*(100/($(window).width()));
    if(leftPos >= 17 && leftPos < 32.5){
      $('.carrousselctr').animate({"right": "33vw"});
    }else if (leftPos >= 32.5) {
      $('.carrousselctr').animate({"right": "0vw"});
    }else{
      var newpos = (leftPos + 16.5)+"vw"
      $('.carrousselctr').animate({"right": newpos});
    }
  }else{
    var leftPos = parseFloat($('.carrousselctr').css("right"))*(100/($(window).width()));
    if(leftPos >= 125 && leftPos < 165.5){
      $('.carrousselctr').animate({"right": "167vw"});
    }else if (leftPos >= 165.5) {
      $('.carrousselctr').animate({"right": "1vw"});
    }else{
      var newpos = (leftPos + 41.5)+"vw"
      $('.carrousselctr').animate({"right": newpos});
    }
  }
}


$(".leftar").click(function () {


  if($(window).width() > 640){
    var leftPos = parseFloat($('.carrousselctr').css("right"))*(100/($(window).width()));
    if(leftPos <= 14 && leftPos > 0.5){
      $('.carrousselctr').animate({"right": "0vw"});
    }else if (leftPos <= 0.5) {
      $('.carrousselctr').animate({"right": "33vw"});
    }else{
      var newpos = (leftPos - 16.5)+"vw"
      $('.carrousselctr').animate({"right": newpos});
    }
  }else{
    var leftPos = parseFloat($('.carrousselctr').css("right"))*(100/($(window).width()));
    if(leftPos <= 41 && leftPos > 2.5){
      $('.carrousselctr').animate({"right": "1vw"});
    }else if (leftPos <= 2.5) {
      $('.carrousselctr').animate({"right": "167vw"});
    }else{
      var newpos = (leftPos - 41.5)+"vw"
      $('.carrousselctr').animate({"right": newpos});
    }
  }
  if(myinterv){clearInterval(myinterv);}
});

$(".rightar").click(function () {
  moveright();
  if(myinterv){clearInterval(myinterv);}
});

var myinterv = setInterval(function(){ moveright(); }, 4000);
*/

	$('.ctc a').on('click', function(e) {
		$('body').append("goog_snippet_vars=function(){var w=window;w.google_conversion_id=938424957;w.google_conversion_label='i4gkCIHa82MQ_fS8vwM';w.google_remarketing_only=false}goog_report_conversion=function(url){goog_snippet_vars();window.google_conversion_format='3';var opt=new Object();opt.onload_callback=function(){if(typeof(url)!='undefined'){window.location=url}}var conv_handler=window['google_trackConversion'];if(typeof(conv_handler)=='function'){conv_handler(opt)}}");
	});

  $("#phone").keydown(function (e) {
      var phoneval = $("#phone").val();
      if (phoneval[0] == 0) {
        if (phoneval[1] == 5 || phoneval[1] == 7) {
          $("#phone").attr('maxlength','10').attr('minlength','10');
        }else if (phoneval[1] == 2 || phoneval[1] == 3 || phoneval[1] == 4 || phoneval[1] == 8 || phoneval[1] == 9) {
          $("#phone").attr('maxlength','9').attr('minlength','9');
        }
      }

  		// Allow: backspace, delete, tab, escape, enter and .
  		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
  			 // Allow: Ctrl+A, Command+A
  			(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
  			 // Allow: home, end, left, right, down, up
  			(e.keyCode >= 35 && e.keyCode <= 40)) {
  				 // let it happen, don't do anything
  				 return;
  		}
  		// Ensure that it is a number and stop the keypress
  		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
  			e.preventDefault();
  		}
  	});

    function checkPhone(phone){
      var phoneval=$("#phone").val();
      if(phoneval[0]==0){
        if(phoneval[1]==5){
          if(phoneval.length==10){
            return/^0[0-9]{8,9}$/.test(phone);}
          }else{
            return false;
          }
        }else{
          return false;
        }
      }
   /* function checkPhone(phone) {
      var phoneval = $("#phone").val();

        if (phoneval[1] == 5 || phoneval[1] == 7) {
          return /^0[0-9]{9}$/.test(phone);
        }else if (phoneval[1] == 2 || phoneval[1] == 3 || phoneval[1] == 4 || phoneval[1] == 8 || phoneval[1] == 9) {
          return /^0[0-9]{8}$/.test(phone);
        }else{
          return false;
        }
  }*/

	$.ketchup.validation('phone', 'Must be a valid phone', function(form, el, value) {

		if (!this.isNumber(value) || !checkPhone(value))
			return false;
		else
			return true;
	});
  function checkFullname(fullname) {
    fullname = $.trim(fullname);
        var firstName = fullname.split(' ')[0];
        var lastName = fullname.split(' ')[1];
        if($.trim(firstName) != '' && $.trim(lastName) != ''){
          //jQuery("#myForm #captcha_is_valid").val(0);
          //grecaptcha.execute();
          return true;
        }else{
          return false;
        }
    }
    $.ketchup.validation('name', "* יש לרשום שם מלא כולל שם משפחה", function(form, el, value) {
        if (!checkFullname(value))
            return false;
        else
            return true;
    });

    $.ketchup.validation('captcha', 'אימות גולש לא תקין', function(form, el, value) {
      console.log('captcha validation');
      if(value == 1 ) {
        return true;
      } else {
        alert('אימות גולש לא תקין')
        return false;
      }
    }, function(form, el) {
      //initial callback, this is optional
    });

	$.ketchup.messages({
		'required': 'יש למלא שדה זה',
		'name': 'שם לא תקין',
		'number': 'יש למלא שדה זה',
		'email': 'יש למלא מייל תקין',
		'phone': 'יש למלא מספר טלפון נייד תקין'
	});

  $('form').bind('formIsValid', function(event, form) {
        event.preventDefault();
         form.find('button[type="submit"]').attr("disabled", "disabled");
     }).ketchup();

	if ($(window).width() > 1000) {
		$('.bot .zi').mouseover(function () {
			$('.zoome').css('display','block');
		});
		$('.zoome').mouseleave(function () {
			$(this).fadeOut();
		});
	}

	$('#c2f_btn').on('click', function(e) {
		$("html, body").animate({ scrollTop: $(document).height() }, 1000);
	});

})
