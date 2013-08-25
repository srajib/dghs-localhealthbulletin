<?php
	session_start();
	include("./conf/_config.php");
	if(isset($_SESSION['orgemail']) && isset($_SESSION['orgid']) && isset($_SESSION['orglhblvlid']))
	{
		include("./conf/_dbconnect_.php");
		$orglvl=$_SESSION['orglhblvlid'];
		$orgemail=$_SESSION['orgemail'];
		$orgid=$_SESSION['orgid'];
		$qyear=mysql_query("SELECT * FROM lhb_year WHERE status_='1'");
		$resultyear=mysql_fetch_object($qyear);
		$openyear=$resultyear->year_;
		$datatable="lhb_ans_".$openyear;
		
		$org_d_q=mysql_query("SELECT * FROM organization where organization_id='$orgid'");
		$org_details=mysql_fetch_object($org_d_q);
		
		include("$header");
		$userrole="_".$orglvl;
		

		if(isset($_GET['page'])){			
			$pa=$_GET['page'];
			$page=$pfx."template/".$pfx.$pa.$userrole.".php"; 
			if(file_exists($page))
			{
				$page=$page;
			} else 
			{
				$page=$error404;
			}
		} else {
			$page=$default;
		} 		
		include("$page");
		include("$footer");
	} else {
		//echo "Back";
		include("$loginpage");
	}
?>