
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>LPG Vitarak Chayan</title>

<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" />
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="assets/css/ie7.css">
<![endif]-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/respond.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>https://code.jquery.com/jquery-latest.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui-1.8.17.custom.css" media="screen"/>

<!-- Validation -->
<link href="<?php echo base_url();?>assets/validetta/validetta.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="<?php echo base_url();?>assets/validetta/validetta.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/SHA256.js"></script>

<!-- Data Table -->
<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/inputmaskjs/dist/jquery.inputmask.bundle.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.dataTables.min.css" media="screen"/>

<script type="text/javascript">
$( document ).ready(function() {
	$( "#dob" ).datepicker({
      changeMonth: true,
      changeYear: true,
	  yearRange: '-100:+0',
	  dateFormat: 'dd-mm-yy',
	  maxDate: "-18Y",
	  minDate: "-100Y",
	  //showOn: "button",
	  buttonImage: "assets/images/calender_icon_small.png",
	  buttonImageOnly: true
    });
	
	$('#form').validetta({
		showErrorMessages : true, // If you dont want to display error messages set this option false
		/** You can display errors as inline or bubble */
		display : 'bubble', // bubble or inline
		/**
		* Error template class
		* This is the class which will be added to the error message window template.
		* If you want special style, you can change class name as you like with this option.
		* Error message window template : <span class="errorTemplateClass">Error messages will be here !</span>
		*/
		errorTemplateClass : 'validetta-bubble',
		/** Class that would be added on every failing validation field */
		errorClass : 'validetta-error',
		/** Same for valid validation */
		validClass : 'validetta-valid', // Same for valid validation
		bubblePosition: 'right', // Bubble position // right / bottom
		bubbleGapLeft: 15, // Right gap of bubble (px unit)
		bubbleGapTop: 0, // Top gap of bubble (px unit)
		/* To enable real-time form control, set this option true. */
		realTime : false,
		validators: {}, // Custom validators stored in this variable
		/** Callback functions */
		onValid : function(){ 
					$("input[name='password']").val(SHA256($("input[name='password']").val()+"ATvHiJLvhGHdfyqfkvd6w"));
					$("input[name='re_password']").val(SHA256($("input[name='re_password']").val()+"ATvHiJLvhGHdfyqfkvd6w"));
					
					$("input[name='old_password']").val(SHA256($("input[name='old_password']").val()+"ATvHiJLvhGHdfyqfkvd6w"));
		},
		onError : function(){}
	});
});

function refreshimage()
{
	var v=Math.random() * 100;
	var b=Math.random() * 100;
	document.getElementById("captcha_img").src='includes/captcha.php?ss='+v+'&dd='+b;
	return true;
}

(function ($, undefined) {
    $.fn.loopScroll = function (p_options) {
        var options = $.extend({
            direction: "upwards",
            speed: 60
        }, p_options);

        return this.each(function () {
            var obj = $(this).find(".news");
            var text_height = obj.find(".whatnewslisting").height();
            var start_y, end_y;
            if (options.direction == "downwards") {
                start_y = -text_height;
                end_y = 0;
            } else if (options.direction == "upwards") {
                //start_y = text_height-150;
				start_y = 200;
                end_y = -text_height;
            }

            var animate = function () {
                // setup animation of specified block "obj"
                // calculate distance of animation    
                var distance = Math.abs(end_y - parseInt(obj.css("top")));

                //alert("animate " + obj.css("top") + "-> " + end_y + " " + distance);

                //duration will be distance / speed
                obj.animate({
                    top: end_y
                }, //scroll upwards
                1000 * distance / options.speed,
                    "linear",

                function () {
                    // scroll to start position
                    obj.css("top", start_y);
                    animate();
                });
            };
			
            //obj.find(".whatnewslisting").clone().appendTo(obj);
            $(this).on("mouseover", function () {
                obj.stop();
            }).on("mouseout", function () {
                animate(); // resume animation
            });
            obj.css("top", start_y);
            animate(); // start animation

        });
    };
}(jQuery));

function changeLanguage() {
	document.languageFrm.submit();
}
</script>
</head>

<body>
<!--HEADER START HERE-->
<div class="header-top row">
  <div class="container">
    <div class="col-sm-12 col-xs-12 col-md-7 logo"> <a href="index.php"><img src="<?php echo base_url();?>assets/images/header-rgt-logo.jpg" alt="#"><img src="<?php echo base_url();?>assets/images/logo.jpg" alt="" style="margin-left:15px; margin-top:12px;" /></a></div>
    <div class="col-sm-12 col-xs-12 col-md-5 header-right">
        <img src="<?php echo base_url();?>assets/images/ujwala-logo.jpg" alt="#">
	    </div>
  </div>
</div>
<div class="blueheader"></div>
<!--HEADER END HERE-->
<!--HEADER START HERE-->
<div class="slidermaincontainer">
  <div class="slidercontainer"> </div>
  <div class="sliderinner">
    <div class="bannrrgtbox">
      <div class="btnbox">
            <a href="<?php echo base_url().'login/loginview' ?>" title="Login" class="homebtnlogin"><img src="<?php echo base_url();?>assets/images/icon-login.png" width="30" alt="login">Login</a> 
      <a href="<?php echo base_url().'Welcome/regstr'?>" title="Register" class="btnregister"><img src="<?php echo base_url();?>assets/images/icon-register.png" width="30" alt="Register">Register</a>
            </div>
      <div class="clear height25"></div>
      <div class="advertismentcontainer">
        <div class="newscontentbox">
          <h2><img src="<?php echo base_url();?>assets/images/icon-annoucment.jpg" alt="#">Whats New</h2>
          <div class="arrow"><img src="<?php echo base_url();?>assets/images/orange-arrow.jpg" alt="#"></div>
          <div class="news_container" id="example3">
            <div class="news">
              <div class="whatnewslisting">
                <ul>
									  <li><a href="https://www.lpgvitarakchayan.in/draw-result.php">
					  <b>APPLICANTS SELECTED IN DRAW FOR SELECTION OF LPG DISTRIBUTOR FOR VARIOUS ADVERTISEMENT</b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - MADHYA PRADESH <img src="<?php echo base_url();?>assets/images/newicon.gif" /> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=127">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b> Kerala  </b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - KERALA 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=126">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>  Uttarakhand  </b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=125">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>  KARNATAKA  </b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - KARNATAKA 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=23">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>  ANDHRA PRADESH  </b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=117">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>  ANDHRA PRADESH  </b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=124">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>  TRIPURA  </b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=123">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>  UTTAR PRADESH  </b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=121">
					   List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>  MAHARASHTRA  </b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=122">
					   List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b> GOA </b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=120">
					   List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b> MADHYA PRADESH </b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - TRIPURA 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=119">
					  
List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b> KERALA </b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - UTTAR PRADESH (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - GOA (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - MAHARASHTRA (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=118">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>  ASSAM</b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - MADHYA PRADESH (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=117">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>  ANDHRA PRADESH </b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=116">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b> CHHATTISGARH </b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - KERALA (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - ASSAM (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  
NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - ANDHRA PRADESH (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - CHHATTISGARH (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=114">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b> HIMACHAL PRADESH</b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=113">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>TRIPURA </b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=112">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>GUJARAT</b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=111">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>WEST BENGAL</b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=110">
					  
List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>KERALA</b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - HIMACHAL PRADESH (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=109">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>ANDHRA PRADESH</b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=108">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>JAMMU AND KASHMIR</b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - TRIPURA(Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=107">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>KARNATAKA</b> 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - GUJARAT (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - WEST BENGAL (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=105">
					  
List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>TELANGANA(Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - KERALA (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=104">
					  
List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>ASSAM (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=106">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MAHARASHTRA (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=103">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>GOA (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - ANDHRA PRADESH(Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=100">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>TAMIL NADU (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=101">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>BIHAR (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=102">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>JHARKHAND (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - JAMMU AND KASHMIR(Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=98">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>GUJARAT (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=99">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>RAJASTHAN (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - KARNATAKA  (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - MAHARASHTRA  (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - TELANGANA  (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - ASSAM   (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - GOA   (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=96">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>CHHATTISGARH (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=97">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MADHYA PRADESH (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=95">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>ANDHRA PRADESH (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - JHARKHAND (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - BIHAR (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - TAMIL NADU (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - Rajasthan (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - Gujrat (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=94">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>UTTARAKHAND (Re-Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=93">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>Punjab (Re-Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=91">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>TAMIL NADU (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=92">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>Assam (Re-Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=90">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>GUJARAT (Re-Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - MADHYA PRADESH (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - CHHATTISGARH (Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=89">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>Sikkim (Re-Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - ANDHRA PRADESH(Re Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=87">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>UTTAR PRADESH (Re-Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=88">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>West Bengal (Re-Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - UTTARAKHAND (Re-Advertisement) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - Punjab ( Re Advertisement ) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=85">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>Himachal Pradesh (Re-Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - ASSAM ( Re Advertisement ) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - TAMIL NADU ( Re Advertisement ) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=86">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>JHARKHAND (Re-Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=84">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>GUJARAT (Re-Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/advertisement-list.php">
					  NOTICE FOR APPOINTMENT OF LPG DISTRIBUTORS - Gujrat (Re-Advertisement) 
                      </a></li>
										  <li><a href="#">
					  Last date for submission of online applications for Sikkim (Re-Adv) has been extended to Monday, 10-12-2018. 
                      </a></li>
										  <li><a href="#">
					  Last date for submission of online applications for West Bangal (Re-Adv) has been extended to Friday, 30-11-2018. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=83">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>JAMMU & KASHMIR (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=82">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MAHARASHTRA (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=81">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>TELENGANA (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=80">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>ANDHRA PRADESH (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=78">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>TAMIL NADU (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=79">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>HIMACHAL PRADESH (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=76">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>JHARKHAND (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=75">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>Nagaland (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=74">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>Arunachal Pradesh (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=73">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>Meghalaya (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=72">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>ANDAMAN AND NICOBAR ISLANDS(Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=71">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>CHHATTISGARH (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=70">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MADHYA PRADESH (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=69">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>GUJARAT (Re-Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=68">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>UTTARAKHAND (Re-Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=67">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>KERLA (Re-Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=77">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>GOA (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=66">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>BIHAR (Re-Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=65">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MAHARASHTRA (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=63">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MANIPUR (Re-Adv)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=64">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>NAGALAND (Re-Adv)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=60">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MEGHALAYA (Re-Adv)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=61">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>TRIPURA (Re-Adv)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=62">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>ARUNACHAL PRADESH (Re-Adv)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=58">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MADHYA PRADESH (Re-Adv)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=59">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>CHHATTISGARH (Re-Adv)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=57">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>ASSAM (Advertisement 2)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=56">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>ASSAM</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=53">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>TAMIL NADU (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=52">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MADHYA PRADESH (New)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=51">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>ODISHA (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=50">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>SIKKIM (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=49">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>ANDAMAN AND NICOBAR (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=48">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>WEST BENGAL (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=46">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>GUJARAT (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=45">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>KERALA (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=47">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MAHARASHTRA (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=44">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>JAMMU & KASHMIR (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=43">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>CHHATTISGARH (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=42">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MADHYA PRADESH (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=41">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>RAJASTHAN (Re-Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=40">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>UTTARAKHAND (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=39">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>JHARKHAND (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=37">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MANIPUR (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=35">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MEGHALAYA (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=34">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>TRIPURA (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=38">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>NAGALAND (Re Advertisement)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=33">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>BIHAR (Advertisement 3)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=30">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>KERALA</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=28">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MEGHALAYA</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=31">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>UTTAR PRADESH - Advertisement 2</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=23">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>ANDHRA PRADESH</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=19">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>WEST BENGAL</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=18">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>SIKKIM</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=10">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>JAMMU AND KASHMIR</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=8">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>JHARKHAND</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=29">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>NAGALAND</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=27">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MANIPUR</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=26">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MIZORAM</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=22">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>TELANGANA</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=13">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>KARNATAKA</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=25">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>GOA</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=24">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MAHARASHTRA</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=17">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>MADHYA PRADESH</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=16">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>RAJASTHAN</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=15">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>TAMIL NADU</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=21">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>TRIPURA</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=20">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>ARUNACHAL PRADESH</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=14">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>BIHAR (Advertisement 2)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=11">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>CHHATTISGARH</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=12">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>HARYANA</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=9">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>HIMACHAL PRADESH</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=5">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>GUJRAT</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=6">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>DADRA AND NAGAR HAVELI</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=7">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>BIHAR (Advertisement 1)</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=3">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>Uttar Pradesh</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=2">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>Uttarakhand</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=1">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>Punjab</b>. 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/list-eligible-candidates.php?ad_id=4">
					  List of Applicants Found Eligible for Draw for Selection of LPG Distributor for <b>Andman and Nicobar</b> 
                      </a></li>
					                </ul>
              </div>
            </div>
          </div>
          <div style="padding-top:5px; padding-bottom:15px; font-size:12px;">
		  
          <a href="whats-new.php" style="float:left">View all</a>
		  <a href="draw-result.php" style="float:right">Applicants Selected in Draw</a>
		  
		  
		  </div>
		  
        </div>
      </div>
    </div>
  </div>
  <div class="container homenews">
		<marquee SCROLLDELAY=150 onmouseover="this.stop();" onmouseout="this.start();">
		<!--<img src="assets/images/newicon.gif" /><b> Please use the Internet Banking to make the payment for application fees.</b>&nbsp;&nbsp;&nbsp;-->
		For any query or complaint regarding the selection of LPG Distributors appearing on this website please send email to support@lpgvitarakchayan.in or contact concerned <a href="area-offices.php">Area Office (IOC) / Territory Office (BPC) / Regional Office (HPC)</a>. Details are given in the link available below.
		</marquee>
	</div>
	
</div>
<!--Page Layout -->
<div class="container homepagecontent">
	
  <div class="col-md-8 col-sm-12 col-xs-12 contentbox">
    <h2>LPG Vitarak Chayan Guideline</h2>
    <p>Network expansion has been an important business activity of PSU Oil Marketing Companies (OMCs) for increasing the reach of petroleum products including LPG across the country. OMCs are engaged in appointing new LPG Distributors as a continuous business process and providing accessibility of LPG to households.</p>
    <p style="margin-bottom:10px;"><strong>The four formats of LPG distributorships are:</strong></p>
    <ul>
      <li>Sheheri Vitrak </li>
      <li>Rurban Vitrak </li>
      <li>Gramin Vitrak  & </li>
      <li>Durgam Kshetriya Vitrak (DKV) </li>
    </ul>
    <a class="btnreadmore" id="button" style="cursor:pointer;">Read more..</a> </div>
  <div class="col-md-4 col-sm-12 col-xs-12">
    <div class="boxcontent">
      <h2><img src="<?php echo base_url();?>assets/images/icon-important-link.jpg" alt="#">Important Links</h2>
      <div class="arrow"><img src="<?php echo base_url();?>assets/images/blue-arrow.jpg" alt="#"></div>
      <div class="boxlistcontent">
        <div class="news">
          <div class="whatnewslisting" style="height: 280px; overflow-y:scroll;">
            <ul>
              					  <li><a href="<?php echo base_url();?>https://www.lpgvitarakchayan.in/uploads/Screenshot_20190109-101338~2.png" target="_blank">
					  Public Notice – Beware of Fraudsters 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/uploads/BROCHURE FOR UNIFIED GUIDELINES FOR SELECTION OF DISTRIBUTORSHIPS - 15.12.19.pdf" target="_blank">
					  Brochure for selection of LPG Distributors through Online Process Ver 1.5 (English) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/faq.php" target="_blank">
					  Frequently Asked Questions (FAQs) 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/uploads/List of documents to be submitted by the selected candidate.pdf" target="_blank">
					  LIST OF DOCUMENTS TO BE SUBMITTED BY THE SELECTED CANDIDATE AFTER THE DRAW 
                      </a></li>
										  <li><a href="https://www.lpgvitarakchayan.in/uploads/User manual for applicant - Online application - LPG Vitarak Chayan.pdf" target="_blank">
					  User manual for applicant - Online application - LPG Vitarak Chayan 
                      </a></li>
										  <li><a href="http://petroleum.nic.in" target="_blank">
					  http://petroleum.nic.in 
                      </a></li>
										  <li><a href="https://iocl.com" target="_blank">
					  https://iocl.com 
                      </a></li>
										  <li><a href="https://bharatpetroleum.com" target="_blank">
					  https://bharatpetroleum.com 
                      </a></li>
										  <li><a href="http://www.hindustanpetroleum.com" target="_blank">
					  http://www.hindustanpetroleum.com 
                      </a></li>
										  <li><a href="http://mylpg.in" target="_blank">
					  http://mylpg.in 
                      </a></li>
					            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid" style="background:#f0f0f0; padding:20px 0px; margin-bottom:-20px;">
	<div class="container" style="color:#333; font-weight:bold; line-height:20px; font-size:13px;">
		<strong style="color:#cc0000;">PUBLIC NOTICE CAUTION AGAINST “FRAUDULENT OFFERS” : </strong>
		<p style="text-align: justify;color:#333; font-weight:bold;">It has come to our notice that some unscrupulous agencies/persons are fraudulently offering false business opportunities for appointment of LPG distributors for Prime Minister Ujwala Yojana or under the erstwhile Rajeev Gandhi Gramin LPG Vitarak Yojana (RGGLV) Scheme of the Public Sector Oil Marketing Companies. It has been reported in some cases that the fraudulent websites namely <strong>www.ujjwaladealer.com, www.lpgvitarakchayan.org, www.ujjwalalpgvitarak.org</strong> is referring to their Registered office as UJJWALARGGLV_YOJANA, Ujjwala Apartment M G Road Kandivali West Mumbai Maharashtra 400067. Fraudulent Emails are being sent from an Email Id : info@ujjwaladealer.com. These bogus agencies / Emails may be conducting telephonic interviews, claiming money from prospective candidates and advising to deposit certain amount in their account.</p>
		<p style="text-align: justify;color:#333; font-weight:bold;">The Pradhanmantri Ujwala Yojana (PMUY) scheme does not envisage opening of separate LPG Distributorships exclusively for the scheme. The advertisements purportedly in the name of “Prime Minister’s Ujwala Yojana and/or Rajiv Gandhi LPG Distributorship Plan for rural areas (RGGLV)  Scheme and/or PMUDY’ as mentioned in the fake website does not pertain to any Scheme or appointment of any LPG Distributorship of the Public Sector Oil Marketing Companies. The website operated by vested people, with MOP&amp;NG PMUY logo and Hon’ble Prime Minister’s photo, Public Sector Oil Marketing Companies’ product logo on the website, is fake, malicious and is intended to defraud gullible people.</p>
        <p style="text-align: justify;color:#333; font-weight:bold;">It may please be noted that appointment of LPG distributors by the Public Sector Oil Marketing Companies for distribution of LPG is carried out across the country through a well-established selection procedure comprising of detailed advertisement published in leading Newspapers, hosting on internet site of the Public Sector Oil Marketing Companies and conducting draw of lot out of all eligible applicants.</p>
        <p style="text-align: justify;color:#333; font-weight:bold;">None of the Public Sector Oil Marketing Companies have appointed any agency/person on their behalf for selection/appointment of LPG distributors across the country, nor they have authorized any agency/person to solicit any money whatsoever from any candidate at any stage of the selection process.</p>
        <p style="text-align: justify;color:#333; font-weight:bold;">The Public Sector Oil Marketing Companies shall not be responsible in any way for amount paid by the individuals to any individual or group of individuals/agencies/Companies purporting to be representing Public Sector Oil Marketing Companies.</p>
	</div>
</div>
<!--FOOTER START HERE-->
<div class="clear height20"></div>
<div class="footer">
  <div class="container">
    <div class="col-sm-6 col-xs-12 col-md-4 footer-left">Copyright © LPG Vitarak Chayan. All rights reserved.
    <br /><span style="color:#ccc;">Design &amp; Developed by <a href="http://www.cyfuture.com/" target="_blank" style="color:#ccc;">Cyfuture India Pvt. Ltd</a></span></div>
    
    <div class="col-sm-6 col-xs-12 col-md-4"><a href="faq.php" style="color:#FFF;">FAQs</a> | <a href="area-offices.php" style="color:#FFF;">Area Offices / Territory Offices / Regional Offices</a> | <a href="website-policy.php" style="color:#FFF;">Website Policies</a></div>
    
    <div class="col-sm-6 col-xs-12 col-md-4 footer-right" style="font-size:14px;">For any Complaints/Queries<br />Write us on <a href="mailto:support@lpgvitarakchayan.in">support@lpgvitarakchayan.in</a></div>
  </div>
</div>
<!--FOOTER END HERE-->
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93070075-1', 'auto');
  ga('send', 'pageview');
</script>
</body></html><script type="text/javascript">
$(document).ready(function() {
	$("#button").click(function() {
		$("#langpopup").css({"display":"block"});
		$("#fadelogin").css({"display":"block"});
        
    });
	$('#btnclose').click(function(){
		$("#langpopup").hide();
		$("#fadelogin").hide();
	});
    
});

$("#example3").loopScroll({
    speed: 30
});
</script>

<!--POPUP CODE START HERE-->
<div style="display: none; position: fixed;" id="langpopup" class="popupcontainer">
  <p style="text-align:center;"><a id="btnclose" class="btnclose" ><img src="assets/images/close.jpg" alt="" /></a></p>
  <div class="popupform">
    <div class="col-sm-12 col-xs-12 col-md-12 declarationtext" style="padding-left:0px; text-align:justify;">
      <p>Network expansion has been an important business activity of PSU Oil Marketing Companies (OMCs) for increasing the reach of petroleum products including LPG across the country. OMCs are engaged in appointing new LPG Distributors as a continuous business process and providing accessibility of LPG to households.</p>
		<p>The four formats of LPG distributorships are:<br /> 1. Sheheri Vitrak<br /> 2. Rurban Vitrak<br /> 3. Gramin Vitrak<br /> 4. Durgam Kshetriya Vitrak (DKV)</p>
		<p>Detailed guidelines on eligibility criteria, infrastructure requirements of land for LPG godown/ LPG godown, land for Showroom / ready built showroom, infrastructure for Home delivery of cylinders etc. along with the details of selection process are given in the Brochure, which can be downloaded from any of the Oil Companies&rsquo; websites &ndash; www.iocl.com, www.ebharatgas.com, www.bharatpetroleum.in, www.hindustanpetroleum.com of IOCL, BPCL and HPCL. The Brochure can also be downloaded from the website&nbsp;<a href="http://www.lpgvitarakchayan.in/">www.lpgvitarakchayan.in</a></p>
		<p>&nbsp;</p>
		<p>All persons fulfilling the eligibility criteria and desirous of applying for selection as Sheheri Vitrak, Rurban Vitrak, Gramin Vitrak or Durgam Kshetriya Vitrak shall log on to the website&nbsp;<a href="http://www.lpgvitarakchayan.in/">www.lpgvitarakchayan.in</a>&nbsp;and register themselves on the website. Once registered, they shall login to their account, fill in required details in all respects and submit the online application on or before 17:00 hrs. of&nbsp;(dd/mm/yyyy). Before submission of application form, candidates will be required to upload scan copy of their passport size photograph and their signature in separate files, and also submit applicable non refundable application fee through internet banking / debit card / credit card facility available on the website&nbsp;<a href="http://www.lpgvitarakchayan.in/">www.lpgvitarakchayan.in</a>. The non refundable application fee applicable for Sheheri Vitrak , Rurban Vitrak, Gramin Vitrak and Durgam Kshetriya Vitrak is given in the Table 1 and 2 below:</p>
		<p>Table 1 &ndash; Non Refundable Application Fee for Sheheri Vitrak &amp; Rurban Vitrak locations</p>
		<table width="605">
		<tbody>
		<tr>
		<td>
		<p>Category</p>
		</td>
		<td>
		<p>Non Refundable Application Fee</p>
		</td>
		</tr>
		<tr>
		<td>
		<p>Open</p>
		</td>
		<td>
		<p>Rs. 10,000 (Rupees ten thousand only)**</p>
		</td>
		</tr>
		<tr>
		<td>
		<p>OBC</p>
		</td>
		<td>
		<p>Rs. 5,000 (Rupees five thousand only)</p>
		</td>
		</tr>
		<tr>
		<td>
		<p>SC/ST</p>
		</td>
		<td>
		<p>Rs. 3,000 (Rupees three thousand only)</p>
		</td>
		</tr>
		</tbody>
		</table>
		<p>** SC/ST candidates applying for Open category under Sheheri Vitrak &amp; Rurban Vitrak locations mentioned in the advertisement / notification can submit non-refundable application fee of Rs. 3,000 (Rupees three thousand only). However, candidates belonging to OBC category but applying for &ldquo;Open&rdquo; category locations shall submit Application fee applicable to &ldquo;Open&rdquo; candidates.</p>
		<p>Table 2 &ndash; Non Refundable Application Fee for Gramin Vitrak locations &amp; Durgam Kshetriya Vitrak locations</p>
		<table width="605">
		<tbody>
		<tr>
		<td>
		<p>Category</p>
		</td>
		<td>
		<p>Non Refundable Application Fee</p>
		</td>
		</tr>
		<tr>
		<td>
		<p>Open</p>
		</td>
		<td>
		<p>Rs. 8,000 (Rupees eight thousand only)**</p>
		</td>
		</tr>
		<tr>
		<td>
		<p>OBC</p>
		</td>
		<td>
		<p>Rs. 4,000 (Rupees four thousand only)</p>
		</td>
		</tr>
		<tr>
		<td>
		<p>SC/ST</p>
		</td>
		<td>
		<p>Rs. 2,500 (Rupees two thousand five hundred only)</p>
		</td>
		</tr>
		</tbody>
		</table>
		<p>**SC/ST candidates applying for Open category Gramin Vitrak &amp; Durgam Kshetriya Vitrak locations can submit non-refundable application fee of Rs. 2,500 (Rupees two thousand five hundred only). However, candidates belonging to OBC category but applying for &ldquo;Open&rdquo; category locations shall submit Application fee applicable to &ldquo;Open&rdquo; candidates.</p>
		<p>The candidates are requested to refer to the brochure for further details. Regarding the procedure for filling up application forms, candidates are requested to read carefully &lsquo;User manual for Applicants &ndash; LPG VITARAK CHAYAN&rsquo; which is available at the portal&nbsp;<a href="http://www.lpgvitarakchayan.in/">www.lpgvitarakchayan.in</a>, before filling up the online application form.</p>
		<p>&nbsp;</p>
		<p>After submission of the online application, no document or printout of the application form is required to be submitted in the physical form to any office, unless requested. Later, if the candidate is selected in the draw of lots, the selected candidate shall produce the prescribed eligibility certificate(s) as applicable at the time of verification. Applicants applying under Defence Personal category shall submit the original eligibility certificate from Directorate General Resettlement (DGR) within the time limit as stipulated in the Brochure. For details please refer to the Brochure.</p>
		<p>&nbsp;</p>
		<p>GENERAL</p>
		
		<p>a. Indian Oil Corporation Ltd., Bharat Petroleum Corporation Ltd., or Hindustan Petroleum Corporation Ltd. reserves the right to cancel/withdraw/ amend the advertisement or extend the due date of submission of application forms at its sole discretion without assigning any reason.</p>
		<p>b. While application by a candidate can be made for different locations, the same should be done by submitting separate online application forms for each location, along with applicable non refundable application fee in each case. Applicants can submit only one application for a location.</p>
		<p>c. If any statement made in the application or in the documents subsequently submitted in pursuance of the application by the candidate, at any stage is found to have been suppressed / misrepresented / incorrect or false affecting eligibility, then the application is liable to be rejected without assigning any reason and in case the applicant has been appointed as a distributor, the distributorship is liable to be terminated and the non refundable application fee will be forfeited. In such cases the candidate / distributor shall have no claim whatsoever against the respective Oil Company.</p>
		<p>d. The submission of application form should not be construed as an offer of LPG Distributorship.</p>
		<p>e. All correspondence will be made by the portal&nbsp;<a href="http://www.lpgvitarakchayan.in/">www.lpgvitarakchayan.in</a>through Email and / or SMS to the candidate&rsquo;s registered email ID or Registered phone number.</p>
		<p>f. This is purely a business proposition and not an application for job in the respective Oil Company and has normal business risks and also does not guarantee any assured returns or profits.</p>
		<p>g. If there is any discrepancy found in the Advertisement published in English, if any, vis-a-vis vernacular language, the directions/information indicated in vernacular version would prevail.</p>
		<p>h. In case of discrepancy in the details appearing on the website&nbsp;<a href="http://www.lpgvitarakchayan.in/">www.lpgvitarakchayan.in</a>vis-&agrave;-vis&rsquo; the advertisement / notification, the details appearing in the published advertisement / notification would prevail.</p>
		<p>i. Indian Oil Corporation Ltd., Bharat Petroleum Corporation Ltd., or Hindustan Petroleum Corporation Ltd. will not be responsible for any amount deducted from applicant&rsquo;s bank account/debit card account/ credit card account which has not been transferred or credited to the respective bank account of the concerned Oil Company.</p>
		<p>j. Indian Oil Corporation Ltd., Bharat Petroleum Corporation Ltd., or Hindustan Petroleum Corporation Ltd. is not responsible for refunding any excess amount paid online by the applicant, for an application, from his/her bank account/debit card account/ credit card account.</p>
		<p>k. Nomenclature used in the category of locations mentioned in the Advertisement / Notification is as under :-</p>
		
		<p>Open - Open Category<br /> SC/ST - Scheduled Caste/ Scheduled Tribe Category<br /> OBC - Other Backward Classes Category<br /> SC/ST (GP) - Government Personnel category consists of Defence Personnel, Central/State Government Employees and Central/State PSU employees, belonging to SC/ST Category<br /> OBC (GP) - Government Personnel category consists of Defence Personnel, Central/State Government Employees and Central/State PSU employees, belonging to OBC Category.<br /> Open(GP) - Government Personnel category consists of Defence Personnel, Central/State Government Employees and Central/State PSU employees, belonging to Open category<br /> SC/ST (PH) - Physically Handicapped Personnel category consists of Physically Challenged Personnel belonging to SC/ST category<br /> OBC (PH) - Physically Handicapped Personnel category consists of Physically Challenged Personnel belonging to OBC category<br /> Open(PH) - Physically Handicapped Personnel category consists of Physically Challenged Personnel belonging to Open category<br /> Open(CC) - Combined Category consists of Outstanding Sports Persons (OSP) and Freedom Fighter (FF) belonging to Open category<br /> SC/ST(W) - Women Category consists of Women belonging to SC/ST category<br /> OBC(W) - Women Category consists of Women belonging to OBC category<br /> Open(W) - Women Category consists of Women belonging to Open category</p>    </div>
  </div>
</div>
<div style="display:none;" id="fadelogin" class="black_overlay"></div>

<!--POPUP END HERE-->