<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MIS-DGHS Local Health Bulletin</title>
		<?php 
		
		$msg="<div class=\"alert alert-success alert-login\" style=\"text-align:center;\">
					Write your Org. Email and Password to Login
				</div>";
		if(isset($_POST['loginlhb'])){
		include ("conf/_dbconnect_.php");
				$orgPass=md5($_POST['orgPass']);
				$orgMail=mysql_real_escape_string($_POST['orgMail']);
				
				$log_q=mysql_query("SELECT * FROM tbl_users WHERE username='$orgMail' AND password='$orgPass'");
				$log_q_numr=mysql_num_rows($log_q);
				
				if($log_q_numr==1){
					$log_type=mysql_query("SELECT * FROM tbl_users usr 
										JOIN organization orga ON usr.organization_id=orga.organization_id
										JOIN org_type_map orgtype ON orga.organization_id=orgtype.organization_id
										WHERE usr.username='$orgMail'");
				$log_type_f=mysql_fetch_object($log_type);
				$_SESSION['orgemail']=$orgMail;
				$_SESSION['orgid']=$log_type_f->organization_id;
				$_SESSION['orglhblvlid']=$log_type_f->lhb_level_id;
				header ("location: index.php");
										
				}

				else
				{
				$msg="<div class=\"alert alert-danger alert-login\" style=\"text-align:center;\">
							Your Org. Email or Password is wrong
						</div>";		
				}
		}
		else{
			$orgMail="";
			$orgPass="";
		}
		
		if(isset($_POST['passrecovery'])){
			
			
			//change this to your email. 
    $to = "hassan@mis.dghs.gov.bd,mahfizur@mis.dghs.gov.bd"; 
    $from =$_POST['pr_email'];
    $subject = "About Password Problem in LHB 2013";
	//Password Update
	include ("conf/_dbconnect_.php");
	
	$pr_q=mysql_query("SELECT * FROM tbl_users WHERE username='$from'");
	$eft=mysql_num_rows($pr_q);
	
	if($eft==1){
	
	mysql_query("UPDATE tbl_users SET password=MD5('dghs123') WHERE username='$from'");
	
	$to2 = $_POST['pr_email'];
    $from2 = "hassan@mis.dghs.gov.bd,mahfizur@mis.dghs.gov.bd"; 
    $subject2 = "About Password Problem in LHB 2013";

    //begin of HTML message 
    $message = "Please Help me about Login in Local Health Bulletin 2013"; 
    $message2 = "Your password recovery request is sent to LHB System Admin Mohammad Hassanour Zaman. Your Login details have been updated.Now your user name: ".$from." & password: dghs123"; 
   //end of message 
    $headers  = "From: $from\r\n"; 
    $headers .= "Content-type: text/html\r\n"; 
	
    $headers2  = "From: $from2\r\n"; 
    $headers2 .= "Content-type: text/html\r\n"; 

    //options to send to cc+bcc 
    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]"; 
    //$headers .= "Bcc: [email]email@maaking.cXom[/email]"; 
     
    // now lets send the email. 
    mail($to, $subject, $message, $headers); 
	
	mail($to2, $subject2, $message2, $headers2);

	$msg="<div class=\"alert alert-danger alert-login\" style=\"text-align:center; color:white; background:green;\">
		Your Message is sent successfully!!<br/>Please check your email.
				</div>";
	
	}
	else {
			$msg="<div class=\"alert alert-danger alert-login\" style=\"text-align:center; color:white; background:red;\">
		You entered wrong Email.<br/>Please click Forgot password button again to <br />re-setup your password.
				</div>";
	}
	
		}
		?>
        <!-- Bootstrap framework -->
            <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
            <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css" />
        <!-- theme color-->
            <link rel="stylesheet" href="css/blue.css" />
        <!-- tooltip -->    
			<link rel="stylesheet" href="lib/qtip2/jquery.qtip.min.css" />
        <!-- main styles -->
            <link rel="stylesheet" href="css/style.css" />
    
        <!-- Favicons and the like (avoid using transparent .png) -->
            <link rel="shortcut icon" href="mis_lhb.ico" />
            <link rel="apple-touch-icon-precomposed" href="icon.png" />
    
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    
        <!--[if lte IE 8]>
            <script src="js/ie/html5.js"></script>
			<script src="js/ie/respond.min.js"></script>
        <![endif]-->
		
    </head>
    <body class="login_page">
    
    <div style="position:fixed; left:0px; height:auto; font-size:15px; top:0px; width:100%; text-align:center; background:#030; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
<a href="#" style="color:#FFF;"> Welcome to Local Health Bulletin </a>
</div>
    
	<div style="width:100%; margin:0 auto; text-align:center;"><a href="#"> <img src="./img/LHB.png"> </a></div>
    
		<div class="login_box">
			<form action="" method="post" id="login_form">
				<div class="top_b" style="text-align:center;"><strong style="font-size:18px; line-height:1; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Login Panel</strong></div>    
                <?php echo $msg; ?>
				<div class="cnt_b">
					<div class="formRow"><br>
						<div class="input-prepend">
							<span class="add-on"><i class="icon-edit"></i></span><input type="text" id="username" name="orgMail" placeholder="Organization Email" value="<?php echo $orgMail;?>" />
						</div>
                        
					</div>
					<div class="formRow">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-lock"></i></span><input type="password" id="password" name="orgPass" placeholder="Password" value="<?php echo $orgPass;?>" />
						</div>
					</div>
				</div>
				<div class="btm_b clearfix">
					<button class="btn btn-success pull-right" type="submit" name="loginlhb"> Login to LHB </button>
				</div>  
			</form>
			
			<form action="#" method="post" id="pass_form" style="display:none">
				<div class="top_b">Can't sign in to Local Health Bulletin?</div>    
					<div class="alert alert-danger alert-login" style="text-align:justify; font-weight:bold;">
					Please enter your email address. You will receive a email with a new password from LHB System Admin.For other help Call to LHB System Admin Mohammad Hassanour Zaman # 01754 244 881.
				</div>
				<div class="cnt_b">
					<div class="formRow clearfix">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-edit"></i></span><input type="text" name="pr_email" placeholder="Organization Email" value="<?php echo $orgMail;?>" />
						</div>
					</div>
				</div>
				<div class="btm_b tac">
					<input type="submit" class="btn btn-primary" value="Request for New Password" name="passrecovery" />
				</div>  
			</form>			
		</div>		
		<div class="links_b links_btm clearfix">
			<span class="linkform btn btn-danger" ><a href="#pass_form" style="color:#FFF;">Forgot password?</a></span>
            <span class="btn btn-success" ><a href="manual.pdf" style="color:#FFF;" target="_blank">Print Manual</a></span>
			<span class="linkform btn btn-success" style="display:none"><a href="#login_form" style="color:#FFF;">Back to the Sign-in</a></span>
		</div>  
<div style="position:fixed; left:0px; height:auto; font-size:15px; bottom:0px; width:100%; text-align:center; background:#030; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;"><a href="#" style="color:#FFF;"> &copy; MIS,DGHS 2013 </a></div>

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.actual.min.js"></script>
        <script src="lib/validation/jquery.validate.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                
				//* boxes animation
				form_wrapper = $('.login_box');
                $('.linkform a,.link_reg a').on('click',function(e){
					var target	= $(this).attr('href'),
						target_height = $(target).actual('height');
					$(form_wrapper).css({
						'height'		: form_wrapper.height()
					});	
					$(form_wrapper.find('form:visible')).fadeOut(400,function(){
						form_wrapper.stop().animate({
                            height	: target_height
                        },500,function(){
                            $(target).fadeIn(400);
                            $('.links_btm .linkform').toggle();
							$(form_wrapper).css({
								'height'		: ''
							});	
                        });
					});
					e.preventDefault();
				});
				
				//* validation
				$('#pass_form').validate({
					onkeyup: false,
					errorClass: 'error',
					validClass: 'valid',
					rules: {
						pr_email: { required: true, email: true }
					},
					highlight: function(element) {
						$(element).closest('div').addClass("f_error");
					},
					unhighlight: function(element) {
						$(element).closest('div').removeClass("f_error");
					},
					errorPlacement: function(error, element) {
						$(element).closest('div').append(error);
					}
					});
				$('#login_form').validate({
					onkeyup: false,
					errorClass: 'error',
					validClass: 'valid',
					rules: {
						orgMail: { required: true, email: true },
						orgPass: { required: true, minlength: 3 },
						pr_email: { required: true, email: true }
					},
					highlight: function(element) {
						$(element).closest('div').addClass("f_error");
					},
					unhighlight: function(element) {
						$(element).closest('div').removeClass("f_error");
					},
					errorPlacement: function(error, element) {
						$(element).closest('div').append(error);
					}
				});
            });
        </script>
    </body>
</html>
