
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>LPG Vitarak Chayan</title>

<link type="text/css" rel="stylesheet" href="<?php  echo base_url();?>assets/css/style.css">
<link type="text/css" rel="stylesheet" href="<?php  echo base_url();?>assets/css/bootstrap.css" />
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="assets/css/ie7.css">
<![endif]-->
<script type="text/javascript" src="<?php  echo base_url();?>assets/js/respond.min.js"></script>

<script type="text/javascript" src="<?php  echo base_url();?>https://code.jquery.com/jquery-latest.min.js"></script>
<script src="<?php  echo base_url();?>assets/js/jquery-ui.js"></script>
<link rel="stylesheet" href="<?php  echo base_url();?>assets/css/jquery-ui-1.8.17.custom.css" media="screen"/>

<!-- Validation -->
<link href="<?php  echo base_url();?>assets/validetta/validetta.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="<?php  echo base_url();?>assets/validetta/validetta.js"></script>
<script type="text/javascript" src="<?php  echo base_url();?>assets/js/SHA256.js"></script>

<!-- Data Table -->
<script src="<?php  echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php  echo base_url();?>assets/inputmaskjs/dist/jquery.inputmask.bundle.min.js"></script>
<link rel="stylesheet" href="<?php  echo base_url();?>assets/css/jquery.dataTables.min.css" media="screen"/>

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
    <div class="col-sm-12 col-xs-12 col-md-7 logo"> <a href="index.php"><img src="<?php  echo base_url();?>assets/images/header-rgt-logo.jpg" alt="#"><img src="<?php  echo base_url();?>assets/images/logo.jpg" alt="" style="margin-left:15px; margin-top:12px;" /></a></div>
    <div class="col-sm-12 col-xs-12 col-md-5 header-right">
        <img src="<?php  echo base_url();?>assets/images/ujwala-logo.jpg" alt="#">
	    </div>
  </div>
</div>
<div class="blueheader"></div>
<!--HEADER END HERE--><style type="text/css">
.blueheader {
	height: 100px;
}
</style>

<div class="container">
  <div class="logincontainer" style="position:relative;">
    <div class="headerformtitle">
      <h1>Online Application for Selection of LPG VITRAK </h1>
    </div>
    <div class="clear" style="height:30px;"></div>
    <div class="loginform">
      <h1>SIGN IN YOUR ACCOUNT</h1>
      <div class="borderline"></div>
            <div class="loginpanel">
        <div class="form-bg">
          <form name="loginForm" id="form" action="<?php echo base_url().'login/signin';?>" method="post">
            <div class="col-md-12">
              <div class="inputbox"> <span class="iconmail"></span>
                <input type="text" name="email_id" placeholder="Mobile no/Email Id" data-validetta="required" value="">
              </div>
            </div>
            <div class="col-md-12">
              <div class="inputbox" style="margin-bottom:10px;"> <span class="iconpass"></span>
                <input type="password" name="password" placeholder="Password" data-validetta="required" autocomplete="off" value="">
              </div>
            </div>
            <div class="col-md-12">
              <div style="float:left; width:auto;">
                <div style="float:left; width:auto;"><img src="includes/captcha.php" alt="captcha image" id="captcha_img" name="captcha" /></div>
                <div style="float:left; width:auto; margin-top:8px;"><img src="assets/images/view_refresh.ico" alt="refresh" title="Refresh Captcha" onClick="refreshimage();" style="cursor:pointer; margin:0 5px 0 5px;" /></div>
                <div style="float:left; width:auto;">
                  <input type="text" name="captcha" size="6" maxlength="6" data-validetta="required" autocomplete="off" value="" />
                </div>
              </div>
            </div>
            <div class="clear" style="height:20px;"></div>
            <div class="loginformtext col-md-12">
              <div class="fl"><a href="forget-password.php">Forgot Password</a></div>
              <div class="fr"><a href="<?php echo base_url();?>Welcome/regstr">Register</a></div>
            </div>
            <div class="clear"></div>
            <div class="tc">
              <input type="submit" value="LOGIN" class="btnlogin" name="submit"/>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="clear" style="height:20px;"></div>
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
</body></html>