



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>LPG Vitarak Chayan</title>

<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">
<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css';?>" />
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="assets/css/ie7.css">
<![endif]-->
<script type="text/javascript" src="<?php  echo base_url().'assets/js/respond.min.js';?>"></script>

<script type="text/javascript" src="<?php echo base_url().'https://code.jquery.com/jquery-latest.min.js';?>"></script>
<script src="<?php echo base_url().'assets/js/jquery-ui.js';?>"></script>
<link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui-1.8.17.custom.css';?>" media="screen"/>

<!-- Validation -->
<link href="<?php echo base_url().'assets/validetta/validetta.css';?>" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="<?php echo base_url().'assets/validetta/validetta.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/SHA256.js';?>"></script>

<!-- Data Table -->
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js';?>"></script>
<script src="<?php echo base_url().'assets/inputmaskjs/dist/jquery.inputmask.bundle.min.js'?>"></script>
<link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery.dataTables.min.css';?>" media="screen"/>

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
    <div class="col-sm-12 col-xs-12 col-md-7 logo"> <a href="index.php"><img src="<?php echo base_url().'assets/images/header-rgt-logo.jpg';?>" alt="#"><img src="<?php echo base_url().'assets/images/logo.jpg';?>" alt="" style="margin-left:15px; margin-top:12px;" /></a></div>
    <div class="col-sm-12 col-xs-12 col-md-5 header-right">
        <img src="<?php echo base_url().'assets/images/ujwala-logo.jpg';?>" alt="#">
	    </div>
  </div>
</div>
<div class="blueheader"></div>
<!--HEADER END HERE--><script type="text/javascript">
    function check_validation() {
        $('#register').validetta({
            showErrorMessages: true, // If you dont want to display error messages set this option false
            /** You can display errors as inline or bubble */
            display: 'bubble', // bubble or inline
            /**
             * Error template class
             * This is the class which will be added to the error message window template.
             * If you want special style, you can change class name as you like with this option.
             * Error message window template : <span class="errorTemplateClass">Error messages will be here !</span>
             */
            errorTemplateClass: 'validetta-bubble',
            /** Class that would be added on every failing validation field */
            errorClass: 'validetta-error',
            /** Same for valid validation */
            validClass: 'validetta-valid', // Same for valid validation
            bubblePosition: 'right', // Bubble position // right / bottom
            bubbleGapLeft: 15, // Right gap of bubble (px unit)
            bubbleGapTop: 0, // Top gap of bubble (px unit)
            /* To enable real-time form control, set this option true. */
            realTime: true,
            validators: {}, // Custom validators stored in this variable
            /** Callback functions */
            onValid: function () {
				$("input[name='password']").val(SHA256($("input[name='password']").val()+"ATvHiJLvhGHdfyqfkvd6w"));
				$("input[name='con_password']").val(SHA256($("input[name='con_password']").val()+"ATvHiJLvhGHdfyqfkvd6w"));
				
            },
            onError: function () {
            }
        });

    }

    $(document).ready(function () {

        check_validation();

        $("#loding1").hide();
        $("#state").change(function () {
            var id = $(this).val();
            if (id == '') {
                $("#district").html('<option value="">Select</option>');
                return false;
            }

            $("#loding1").show();
            $("#district").find('option').remove();
            $.post("ajax/get_data.php", {st_id: id, act: "getdistricts"}, function (data) {
                $("#loding1").hide();
                /*var json_obj = $.parseJSON(data);
                 alert(json_obj);
                 var output="";
                 for (var i in json_obj) 
                 {
                 output+="<option value='"+json_obj[i].id+"'>" + json_obj[i].district_name + "</option>";
                 }
                 $("#district").html(output);*/

                $.each(data, function (index, element) {
                    $('#district').append($('<option>', {
                        text: element.district_name,
                        value: element.id
                    }));
                });
            }, "json");
        });

        $(".generate_otp").click(function () {
            var first_name = $("#first_name").val();
			var last_name = $("#last_name").val();
            var dob = $("#dob").val();
            var address1 = $("#address1").val();
            var mobile_no = $("#mobile_no").val();
            var state = $("#state").val();
            var district = $("#district").val();
            var pin_code = $("#pin_code").val();
            var password = $("#password").val();
            var con_password = $("#con_password").val();
            var captcha = $("#captcha").val();
//            var registration_otp = $("#registration_otp").val();
            if (mobile_no === '') {
                $("#mobile_no").after('<span class="validetta-bubble validetta-bubble--right" style="top: 0px; left: 530px;">This field is required.<br></span>');
                alert("To generate otp you must enter mobile no.");
                return false;
            }
			else if (mobile_no.length !== 10) {
                $("#mobile_no").after('<span class="validetta-bubble validetta-bubble--right" style="top: 0px; left: 530px;">Mobile No. must have 10 digits.<br></span>');
                alert("Mobile No. must have 10 digits!");
                return false;
            }
			
            var pass_regex = /(?=.*\d)(?=.*[a-z])(?=.*[!@#$%^&*_\-]).{8,}/i;
            if(!pass_regex.test(password)){
                 $("#password").after('<span class="validetta-bubble validetta-bubble--right" style="top: 0px; left: 530px;">Password must have 1 alphabet 1 numeric value & 1 spl character.<br></span>');
                return false;
            }
			
            if ((mobile_no !== '' && mobile_no.length === 10) && first_name !== '' && dob !== '' && address1 !== '' && mobile_no !== '' && state !== '' && district !== '' && pin_code !== '' && password !== '' && con_password !== '' && captcha !== '' && con_password === password) {

                var sendstr = {
                    mobile_no: mobile_no
                };
				
                $.ajax({
                    type: "POST",
                    url: "ajax/ajx_new_registration_otp.php",
                    data: sendstr,
//                    async: false,
                    dataType: 'json',
                    beforeSend: function () {
//                    $("#generate_otp").hide();
                        $("#re_send_otp").hide();
                        $("#loding2").show();
                    },
                    complete: function () {
                        $("#re_send_otp").show();
                        $('#loding2').hide();
                    },
                    success: function (data) {
                        if (data === 0) {
                            $("#mobile_no").after('<span class="validetta-bubble validetta-bubble--right" style="top: 0px; left: 530px;">A user is already exists with this mobile no.!<br></span>');
                            alert("A user is already exists with this mobile no.!");
                            return false;
                        } else if (data === 1) {
                            $("#otpBlock").show();
                            $("#submit").show();
                            $("#generate_otp").hide();
                            return;
                        }
                    },
                    error: function (data) {
//                    alert("Something unexpected Happened! Try after sometime!");
//                    console.log(data);
                        return false;
                    }
                });
            }
        });

    });
</script>

<div class="bodycontent">
  <div class="container bxshadow">
    <div class="headerformtitle">
      <h1>New Registration</h1>
    </div>
    <div class="breadcrumb-li"><a href="index.php">Home</a>/<span>New Registration</span></div>
    <div class="formbox step1">
      	      <div class="form">
      <p><strong>Alert:</strong> Please fill details of your registration carefully as the details will be captured directly in the application form. Once registration is confirmed, you will not be able to edit the details.</p><br />
      <form name="register" id="register" method="post" action="<?php echo base_url();?>Welcome/regstr/create">
        <div class="col-sm-6 col-xs-12 col-md-12">
          <div class="labeltxt">
            <label>First Name</label>
            <span class="requiredtxt">*</span> </div>
          <div class="inputfieldbox">
            <input name="first_name" id="first_name" type="text" class="full-length-txt" data-validetta="required,alphabet" value="" />
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-12">
          <div class="labeltxt">
            <label>Middle Name</label>
          </div>
          <div class="inputfieldbox">
            <input name="middle_name" id="middle_name" type="text" class="full-length-txt" data-validetta="alphabet" value="" />
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-12">
          <div class="labeltxt">
            <label>Last Name</label>
          </div>
          <div class="inputfieldbox">
            <input name="last_name" id="last_name" type="text" class="full-length-txt" data-validetta="alphabet" value="" />
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-12">
          <div class="labeltxt">
            <label>Gender</label>
            <span class="requiredtxt">*</span> </div>
          <div class="inputfieldbox">
            <input type="radio" name="gender" value="Male" checked="checked" /> Male
            &nbsp;
            <input type="radio" name="gender" value="Female"  /> Female
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-12">
          <div class="labeltxt">
            <label>Email Id</label>
            <span class="requiredtxt">*</span> </div>
          <div class="inputfieldbox">
            <input name="email_id" id="email_id" type="text" class="full-length-txt" data-validetta="required,email" value="" />
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-12">
          <div class="labeltxt">
            <label>Mobile No </label>
            <span class="requiredtxt">*</span> </div>
          <div class="inputfieldbox">
            <input name="mobile_no" id="mobile_no" type="text" class="full-length-txt" data-validetta="required,integer,minLength[10],maxLength[10]" value="" maxlength="10" />
            <!--<p style="font-size:12px; text-align:left; margin:5px 0 0 0; float:left; font-style:italic; width:100%; ">(Mobile number will be used as username.)</p>-->
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-12">
          <div class="labeltxt">
            <label>Date of Birth </label>
            <span class="requiredtxt">*</span> </div>
          <div class="inputfieldbox">
            <input name="dob" id="dob" type="text" class="full-length-txt" data-validetta="required" value="" readonly="readonly" style="width:150px;" />
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-12">
          <div class="labeltxt">
            <label>Address 1</label>
            <span class="requiredtxt">*</span></div>
          <div class="inputfieldbox">
            <input type="text" name="address1" id="address1" class="full-length-txt" data-validetta="required" value="">
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-12">
          <div class="labeltxt">
            <label>Address 2</label>
            <span class="requiredtxt">*</span></div>
          <div class="inputfieldbox">
            <input type="text" name="address2" id="address2" class="full-length-txt" data-validetta="required" value="">
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-12">
          <div class="labeltxt">
            <label>Address 3</label>
            <span class="requiredtxt">*</span></div>
          <div class="inputfieldbox">
            <input type="text" name="address3" id="address3" class="full-length-txt" data-validetta="required" value="">
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-12">
          <div class="labeltxt">
            <label>State</label>
            <span class="requiredtxt">*</span></div>
          <div class="inputfieldbox">
            <select name="state" id="state" class="full-length-txt" data-validetta="required">
              <option value="">Select</option>
              	<option value="1">ANDAMAN AND NICOBAR</option><option value="2">ANDHRA PRADESH</option><option value="3">ARUNACHAL PRADESH</option><option value="4">ASSAM</option><option value="5">BIHAR</option><option value="6">CHANDIGARH</option><option value="7">CHHATTISGARH</option><option value="8">DADRA AND NAGAR HAVELI</option><option value="9">DELHI</option><option value="10">GOA</option><option value="11">GUJARAT</option><option value="12">HARYANA</option><option value="13">HIMACHAL PRADESH</option><option value="14">JAMMU AND KASHMIR</option><option value="15">JHARKHAND</option><option value="16">KARNATAKA</option><option value="17">KERALA</option><option value="18">LAKSHADWEEP</option><option value="19">MADHYA PRADESH</option><option value="20">MAHARASHTRA</option><option value="21">MANIPUR</option><option value="22">MEGHALAYA</option><option value="23">MIZORAM</option><option value="24">NAGALAND</option><option value="25">ODISHA</option><option value="26">PUDUCHERRY</option><option value="27">PUNJAB</option><option value="28">RAJASTHAN</option><option value="29">SIKKIM</option><option value="30">TAMIL NADU</option><option value="31">TELANGANA</option><option value="32">TRIPURA</option><option value="33">UTTAR PRADESH</option><option value="34">UTTARAKHAND</option><option value="35">WEST BENGAL</option>            </select>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-12">
          <div class="labeltxt">
            <label>District </label>
            <span class="requiredtxt">*</span></div>
          <div class="inputfieldbox">
            <select name="district" id="district" class="full-length-txt" data-validetta="required">
              <option value="">Select</option>
                          </select>
          </div>
          <img src="assets/images/ajax-loader.gif" id="loding1" style="float:left;"></img> </div>
        <div class="col-sm-6 col-xs-12 col-md-12">
          <div class="labeltxt">
            <label> Pin code </label>
            <span class="requiredtxt">*</span></div>
          <div class="inputfieldbox">
            <input name="pin_code" id="pin_code" type="text" class="full-length-txt" data-validetta="required,minLength[6],maxLength[6]" maxlength="6" value="" />
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-12">
          <div class="labeltxt">
            <label>Password</label>
            <span class="requiredtxt">*</span> </div>
          <div class="inputfieldbox">
            <input name="password" type="password" class="full-length-txt" data-validetta="required,minLength[6],custom[/(?=.*\d)(?=.*[a-z])(?=.*[!@#$%^&*_\-]).{8,}/i]" maxlength="30" value="" id="password" />
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-12">
          <div class="labeltxt">
            <label>Retype password</label>
            <span class="requiredtxt">*</span> </div>
          <div class="inputfieldbox">
            <input name="con_password" type="password" class="full-length-txt" data-validetta="required,equalTo[password]" maxlength="30" value="" id="con_password"/>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-12">
          <div class="labeltxt">
            <label>Captcha Code</label>
            <span class="requiredtxt">*</span> </div>
          <div class="inputfieldbox">
            <div style="float:left; width:auto;"><img src="includes/captcha.php" alt="captcha image" id="captcha_img" name="captcha" /></div>
            <div style="float:left; width:auto; margin-top:8px;"><img src="assets/images/view_refresh.ico" alt="refresh" title="Refresh Captcha" onClick="refreshimage();" style="cursor:pointer; margin:0 5px 0 5px;" /></div>
            <input type="text" name="captcha" class="full-length-txt wid200" style="width:150px;" data-validetta="required" value="" id="captcha" />
          </div>
          <img src="assets/images/ajax-loader.gif" id="loding2" style="float:left;display:none;"> </div>
        <div class="col-sm-6 col-xs-12 col-md-12" id="otpBlock" style="display:none;">
          <div class="labeltxt">
            <label>Enter OTP</label>
            <span class="requiredtxt">*</span> </div>
          <div class="inputfieldbox">
            <input name="registration_otp" type="text" class="full-length-txt" id='registration_otp' data-validetta="required,minLength[5],maxLength[5]" />
          </div>
          &nbsp;
          <input type='button' name="re_send_otp" id="re_send_otp" class="btnblue generate_otp" value="Re-send OTP">
        </div>
        <div class="clear" style="height:15px;"></div>
        <div class="col-sm-6 col-xs-12 col-md-12">
          <div class="labeltxt">
            <label>&nbsp;</label>
          </div>
          <input name="generate_otp" type="submit" class="btnblue generate_otp" value="Generate OTP" id="generate_otp" />
          <input name="submit" type="submit" class="btnblue" value="Submit" id="submit" />
        </div>
      </form>
    </div>
    <div class="clearfix height25"></div>
  </div>
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