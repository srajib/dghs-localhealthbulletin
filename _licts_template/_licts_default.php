<?php 
	if($orglvl==0 || $orglvl=="")
	{
		echo  "<div style=\"font-size:30px; line-height:1.5; text-align:center; color:green; padding-top:100px; width:100%;\">Your organation has no permission to Local Health Bulletin.<br/>For details, email to <a href=\"mailto:hassan@mis.dghs.gov.bd?Subject=Local%20Health%20Bulletin\">hassan@mis.dghs.gov.bd</a><br/><a href=\"./logout.php\">Click here to logout from Local Health Bulletin</a></div>";
	}
	else if($orglvl>0){
		echo  "<div style=\"font-size:30px; line-height:1.5; text-align:center; color:green; padding-top:100px; width:100%;\">Welcome to Local Health Bulletin.<br/><a href=\"manual.pdf\" target=\"_blank\">Read the Manual to Create/Upadate the Local Health Bulletin</a><br/>For Help, Email to <a href=\"mailto:hassan@mis.dghs.gov.bd?Subject=Local%20Health%20Bulletin\">hassan@mis.dghs.gov.bd</a></div>";
	}
	else {
		//email to hassan
		}
?>