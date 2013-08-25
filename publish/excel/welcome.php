<?php
if(isset($_GET['lvl']) && $_GET['lvl']!=""){
include ('../_dbconnect_.php');
$level=mysql_real_escape_string($_GET['lvl']);
		if($level==1){
			header( "Content-Type: application/vnd.ms-excel" );
			header( "Content-disposition: attachment; filename=UHCs.xls" );
			$type="Upazila";
				$qq=mysql_query("SELECT *,divi.`name` AS diviname, dist.`name` AS distname, upz.`name` AS upzname, org.`name` AS orgname from lhb_ans_2013 lhb13
				LEFT JOIN organization org
				ON lhb13.org_iid=org.organization_id
				LEFT JOIN divisions divi
				ON org.division_id=divi.division_id
				LEFT JOIN districts dist
				ON org.district_id=dist.district_id
				LEFT JOIN upazillas upz
				ON org.upazilla_id=upz.upazilla_id
				WHERE lhb13.lhb_lvl_id='$level' ORDER BY upzname ASC");


			echo "Excel for Upazila Health Complexs. Download date & time :".date('Y-m-d H:i:s')."\n";

			echo 
			'Organization Name' . "\t" .
			'Organization LHB Level ID ' . "\t" .
			'Division' . "\t" .
			'District' . "\t" .
			'Upazila' . "\t" .
			'Total No. of live births in the Upazila' . "\t" .
			'Total No. of still births in the Upazila' . "\t" .
			'Total No. of neonatal deaths (0-28 days)' . "\t".
			"Total No. of infant deaths (0-11 months)". "\t".
			"Total No. of under 5 deaths (0-5 years)". "\t".
			"Total No. of children treated under IMCI Program (UHC+USC+UHFWC+CC)". "\t".
			"Fully Vaccinated Children (FVC %)". "\t".
			
			"Total of registered pregnant women". "\t".
			"Total of 1st ANC recipients (at least 1)". "\t".
			"Total of 4th ANC recipients (at least 4)". "\t".
			"Total of all ANC recipients". "\t".
			"Total of complicated pregnancies treated". "\t".
			"Total of normal deliveries". "\t".
			"Total of vaginal deliveries with breech or face presentation". "\t".
			"Total of No. of cesarean deliveries". "\t".
			"Total of forceps deliveries". "\t".
			"Total of PNC services provided to mother in the Upazila". "\t".
			"Total of maternal death during pregnancy or within 42 days after child birth". "\t".
			"Valid TT5 Coverage (%)". "\n";
			
			while($qr=mysql_fetch_object($qq)){
			echo 
			$qr->orgname . "\t" .
			'1' . "\t" .
			$qr->diviname . "\t" .
			$qr->distname . "\t" .
			$qr->upzname . "\t" .
			$qr->a33 . "\t" .
			$qr->a34 . "\t" .
			$qr->a35 . "\t" .	
			$qr->a36 . "\t" .
			$qr->a37 . "\t" .
			$qr->a38 . "\t" .
			$qr->a39 . "\t".
			
			($qr->a40+$qr->a41+$qr->a42+$qr->a43+$qr->a44) . "\t".
			($qr->a45+$qr->a46+$qr->a47+$qr->a48+$qr->a49) . "\t".
			($qr->a50+$qr->a51+$qr->a52+$qr->a53+$qr->a54) . "\t".
			($qr->a55+$qr->a56+$qr->a57+$qr->a58+$qr->a59) . "\t".
			($qr->a60+$qr->a61+$qr->a62+$qr->a63+$qr->a64) . "\t".
			($qr->a65+$qr->a66+$qr->a67+$qr->a68+$qr->a69) . "\t".
			($qr->a70+$qr->a71+$qr->a72+$qr->a73+$qr->a74) . "\t".
			($qr->a75+$qr->a76+$qr->a77+$qr->a78+$qr->a79) . "\t".
			($qr->a80+$qr->a81+$qr->a82+$qr->a83+$qr->a84) . "\t".
			($qr->a90+$qr->a91+$qr->a92+$qr->a93+$qr->a94) . "\t".
			($qr->a95+$qr->a96+$qr->a97+$qr->a98+$qr->a99) . "\t".
			$qr->a100 . "\n";
		}
		}
		
		if($level==2){
			header( "Content-Type: application/vnd.ms-excel" );
			header( "Content-disposition: attachment; filename=Sadar_Upazila.xls" );
			$type="Upazila";
				$qq=mysql_query("SELECT *,divi.`name` AS diviname, dist.`name` AS distname, upz.`name` AS upzname, org.`name` AS orgname from lhb_ans_2013 lhb13
				LEFT JOIN organization org
				ON lhb13.org_iid=org.organization_id
				LEFT JOIN divisions divi
				ON org.division_id=divi.division_id
				LEFT JOIN districts dist
				ON org.district_id=dist.district_id
				LEFT JOIN upazillas upz
				ON org.upazilla_id=upz.upazilla_id
				WHERE lhb13.lhb_lvl_id='$level' ORDER BY upzname ASC");


			echo "Excel for Sadar Upazila Health Offices. Download date & time :".date('Y-m-d H:i:s')."\n";

			echo 
			'Organization Name' . "\t" .
			'Organization LHB Level ID ' . "\t" .
			'Division' . "\t" .
			'District' . "\t" .
			'Upazila' . "\t" .
			'Total No. of live births in the Upazila' . "\t" .
			'Total No. of still births in the Upazila' . "\t" .
			'Total No. of neonatal deaths (0-28 days)' . "\t".
			"Total No. of infant deaths (0-11 months)". "\t".
			"Total No. of under 5 deaths (0-5 years)". "\t".
			"Total No. of children treated under IMCI Program (UHC+USC+UHFWC+CC)". "\t".
			"Fully Vaccinated Children (FVC %)". "\t".
			
			"Total of registered pregnant women". "\t".
			"Total of 1st ANC recipients (at least 1)". "\t".
			"Total of 4th ANC recipients (at least 4)". "\t".
			"Total of all ANC recipients". "\t".
			"Total of complicated pregnancies treated". "\t".
			"Total of normal deliveries". "\t".
			"Total of vaginal deliveries with breech or face presentation". "\t".
			"Total of No. of cesarean deliveries". "\t".
			"Total of forceps deliveries". "\t".
			"Total of PNC services provided to mother in the Upazila". "\t".
			"Total of maternal death during pregnancy or within 42 days after child birth". "\t".
			"Valid TT5 Coverage (%)". "\n";
			
			while($qr=mysql_fetch_object($qq)){
			echo 
			$qr->orgname . "\t" .
			'1' . "\t" .
			$qr->diviname . "\t" .
			$qr->distname . "\t" .
			$qr->upzname . "\t" .
			$qr->a33 . "\t" .
			$qr->a34 . "\t" .
			$qr->a35 . "\t" .	
			$qr->a36 . "\t" .
			$qr->a37 . "\t" .
			$qr->a38 . "\t" .
			$qr->a39 . "\t".
			
			($qr->a40+$qr->a41+$qr->a42+$qr->a43+$qr->a44) . "\t".
			($qr->a45+$qr->a46+$qr->a47+$qr->a48+$qr->a49) . "\t".
			($qr->a50+$qr->a51+$qr->a52+$qr->a53+$qr->a54) . "\t".
			($qr->a55+$qr->a56+$qr->a57+$qr->a58+$qr->a59) . "\t".
			($qr->a60+$qr->a61+$qr->a62+$qr->a63+$qr->a64) . "\t".
			($qr->a65+$qr->a66+$qr->a67+$qr->a68+$qr->a69) . "\t".
			($qr->a70+$qr->a71+$qr->a72+$qr->a73+$qr->a74) . "\t".
			($qr->a75+$qr->a76+$qr->a77+$qr->a78+$qr->a79) . "\t".
			($qr->a80+$qr->a81+$qr->a82+$qr->a83+$qr->a84) . "\t".
			($qr->a90+$qr->a91+$qr->a92+$qr->a93+$qr->a94) . "\t".
			($qr->a95+$qr->a96+$qr->a97+$qr->a98+$qr->a99) . "\t".
			$qr->a100 . "\n";
		}
		}
		
		if($level==3){
			header( "Content-Type: application/vnd.ms-excel" );
			header( "Content-disposition: attachment; filename=Secondary_Hospital.xls" );
			$type="Upazila";
				$qq=mysql_query("SELECT *,divi.`name` AS diviname, dist.`name` AS distname, upz.`name` AS upzname, org.`name` AS orgname from lhb_ans_2013 lhb13
				LEFT JOIN organization org
				ON lhb13.org_iid=org.organization_id
				LEFT JOIN divisions divi
				ON org.division_id=divi.division_id
				LEFT JOIN districts dist
				ON org.district_id=dist.district_id
				LEFT JOIN upazillas upz
				ON org.upazilla_id=upz.upazilla_id
				WHERE lhb13.lhb_lvl_id='$level' ORDER BY upzname ASC");


			echo "Excel for District/General Hospitals. Download date & time :".date('Y-m-d H:i:s')."\n";

			echo 
			'Organization Name' . "\t" .
			'Organization LHB Level ID ' . "\t" .
			'Division' . "\t" .
			'District' . "\t" .
			'Upazila' . "\t" .
			'Total No. of live births in the Upazila' . "\t" .
			'Total No. of still births in the Upazila' . "\t" .
			'Total No. of neonatal deaths (0-28 days)' . "\t".
			"Total No. of infant deaths (0-11 months)". "\t".
			"Total No. of under 5 deaths (0-5 years)". "\t".
			"Total No. of children treated under IMCI Program (UHC+USC+UHFWC+CC)". "\t".
			"Fully Vaccinated Children (FVC %)". "\t".
			
			"Total of registered pregnant women". "\t".
			"Total of 1st ANC recipients (at least 1)". "\t".
			"Total of 4th ANC recipients (at least 4)". "\t".
			"Total of all ANC recipients". "\t".
			"Total of complicated pregnancies treated". "\t".
			"Total of normal deliveries". "\t".
			"Total of vaginal deliveries with breech or face presentation". "\t".
			"Total of No. of cesarean deliveries". "\t".
			"Total of forceps deliveries". "\t".
			"Total of PNC services provided to mother in the Upazila". "\t".
			"Total of maternal death during pregnancy or within 42 days after child birth". "\t".
			"Valid TT5 Coverage (%)". "\n";
			
			while($qr=mysql_fetch_object($qq)){
			echo 
			$qr->orgname . "\t" .
			'1' . "\t" .
			$qr->diviname . "\t" .
			$qr->distname . "\t" .
			$qr->upzname . "\t" .
			$qr->a33 . "\t" .
			$qr->a34 . "\t" .
			$qr->a35 . "\t" .	
			$qr->a36 . "\t" .
			$qr->a37 . "\t" .
			$qr->a38 . "\t" .
			$qr->a39 . "\t".
			
			($qr->a40+$qr->a41+$qr->a42+$qr->a43+$qr->a44) . "\t".
			($qr->a45+$qr->a46+$qr->a47+$qr->a48+$qr->a49) . "\t".
			($qr->a50+$qr->a51+$qr->a52+$qr->a53+$qr->a54) . "\t".
			($qr->a55+$qr->a56+$qr->a57+$qr->a58+$qr->a59) . "\t".
			($qr->a60+$qr->a61+$qr->a62+$qr->a63+$qr->a64) . "\t".
			($qr->a65+$qr->a66+$qr->a67+$qr->a68+$qr->a69) . "\t".
			($qr->a70+$qr->a71+$qr->a72+$qr->a73+$qr->a74) . "\t".
			($qr->a75+$qr->a76+$qr->a77+$qr->a78+$qr->a79) . "\t".
			($qr->a80+$qr->a81+$qr->a82+$qr->a83+$qr->a84) . "\t".
			($qr->a90+$qr->a91+$qr->a92+$qr->a93+$qr->a94) . "\t".
			($qr->a95+$qr->a96+$qr->a97+$qr->a98+$qr->a99) . "\t".
			$qr->a100 . "\n";
		}
		}
		
		if($level==4){
			header( "Content-Type: application/vnd.ms-excel" );
			header( "Content-disposition: attachment; filename=CS_Offices.xls" );
			$type="Upazila";
				$qq=mysql_query("SELECT *,divi.`name` AS diviname, dist.`name` AS distname, upz.`name` AS upzname, org.`name` AS orgname from lhb_ans_2013 lhb13
				LEFT JOIN organization org
				ON lhb13.org_iid=org.organization_id
				LEFT JOIN divisions divi
				ON org.division_id=divi.division_id
				LEFT JOIN districts dist
				ON org.district_id=dist.district_id
				LEFT JOIN upazillas upz
				ON org.upazilla_id=upz.upazilla_id
				WHERE lhb13.lhb_lvl_id='$level' ORDER BY upzname ASC");


			echo "Excel for CS Offices. Download date & time :".date('Y-m-d H:i:s')."\n";

			echo 
			'Organization Name' . "\t" .
			'Organization LHB Level ID ' . "\t" .
			'Division' . "\t" .
			'District' . "\t" .
			'Upazila' . "\t" .
			'Total No. of live births in the Upazila' . "\t" .
			'Total No. of still births in the Upazila' . "\t" .
			'Total No. of neonatal deaths (0-28 days)' . "\t".
			"Total No. of infant deaths (0-11 months)". "\t".
			"Total No. of under 5 deaths (0-5 years)". "\t".
			"Total No. of children treated under IMCI Program (UHC+USC+UHFWC+CC)". "\t".
			"Fully Vaccinated Children (FVC %)". "\t".
			
			"Total of registered pregnant women". "\t".
			"Total of 1st ANC recipients (at least 1)". "\t".
			"Total of 4th ANC recipients (at least 4)". "\t".
			"Total of all ANC recipients". "\t".
			"Total of complicated pregnancies treated". "\t".
			"Total of normal deliveries". "\t".
			"Total of vaginal deliveries with breech or face presentation". "\t".
			"Total of No. of cesarean deliveries". "\t".
			"Total of forceps deliveries". "\t".
			"Total of PNC services provided to mother in the Upazila". "\t".
			"Total of maternal death during pregnancy or within 42 days after child birth". "\t".
			"Valid TT5 Coverage (%)". "\n";
			
			while($qr=mysql_fetch_object($qq)){
			echo 
			$qr->orgname . "\t" .
			'1' . "\t" .
			$qr->diviname . "\t" .
			$qr->distname . "\t" .
			$qr->upzname . "\t" .
			$qr->a33 . "\t" .
			$qr->a34 . "\t" .
			$qr->a35 . "\t" .	
			$qr->a36 . "\t" .
			$qr->a37 . "\t" .
			$qr->a38 . "\t" .
			$qr->a39 . "\t".
			
			($qr->a40+$qr->a41+$qr->a42+$qr->a43+$qr->a44) . "\t".
			($qr->a45+$qr->a46+$qr->a47+$qr->a48+$qr->a49) . "\t".
			($qr->a50+$qr->a51+$qr->a52+$qr->a53+$qr->a54) . "\t".
			($qr->a55+$qr->a56+$qr->a57+$qr->a58+$qr->a59) . "\t".
			($qr->a60+$qr->a61+$qr->a62+$qr->a63+$qr->a64) . "\t".
			($qr->a65+$qr->a66+$qr->a67+$qr->a68+$qr->a69) . "\t".
			($qr->a70+$qr->a71+$qr->a72+$qr->a73+$qr->a74) . "\t".
			($qr->a75+$qr->a76+$qr->a77+$qr->a78+$qr->a79) . "\t".
			($qr->a80+$qr->a81+$qr->a82+$qr->a83+$qr->a84) . "\t".
			($qr->a90+$qr->a91+$qr->a92+$qr->a93+$qr->a94) . "\t".
			($qr->a95+$qr->a96+$qr->a97+$qr->a98+$qr->a99) . "\t".
			$qr->a100 . "\n";
		}
		}
		
		if($level==5){
			header( "Content-Type: application/vnd.ms-excel" );
			header( "Content-disposition: attachment; filename=Tertiary_Hospital.xls" );
			$type="Upazila";
				$qq=mysql_query("SELECT *,divi.`name` AS diviname, dist.`name` AS distname, upz.`name` AS upzname, org.`name` AS orgname from lhb_ans_2013 lhb13
				LEFT JOIN organization org
				ON lhb13.org_iid=org.organization_id
				LEFT JOIN divisions divi
				ON org.division_id=divi.division_id
				LEFT JOIN districts dist
				ON org.district_id=dist.district_id
				LEFT JOIN upazillas upz
				ON org.upazilla_id=upz.upazilla_id
				WHERE lhb13.lhb_lvl_id='$level' ORDER BY upzname ASC");


			echo "Excel for Tertiary Hospital (Medical College Hospital, Specialized Hospital, National Institute). Download date & time :".date('Y-m-d H:i:s')."\n";

			echo 
			'Organization Name' . "\t" .
			'Organization LHB Level ID ' . "\t" .
			'Division' . "\t" .
			'District' . "\t" .
			'Upazila' . "\t" .
			'Total No. of live births in the Upazila' . "\t" .
			'Total No. of still births in the Upazila' . "\t" .
			'Total No. of neonatal deaths (0-28 days)' . "\t".
			"Total No. of infant deaths (0-11 months)". "\t".
			"Total No. of under 5 deaths (0-5 years)". "\t".
			"Total No. of children treated under IMCI Program (UHC+USC+UHFWC+CC)". "\t".
			"Fully Vaccinated Children (FVC %)". "\t".
			
			"Total of registered pregnant women". "\t".
			"Total of 1st ANC recipients (at least 1)". "\t".
			"Total of 4th ANC recipients (at least 4)". "\t".
			"Total of all ANC recipients". "\t".
			"Total of complicated pregnancies treated". "\t".
			"Total of normal deliveries". "\t".
			"Total of vaginal deliveries with breech or face presentation". "\t".
			"Total of No. of cesarean deliveries". "\t".
			"Total of forceps deliveries". "\t".
			"Total of PNC services provided to mother in the Upazila". "\t".
			"Total of maternal death during pregnancy or within 42 days after child birth". "\t".
			"Valid TT5 Coverage (%)". "\n";
			
			while($qr=mysql_fetch_object($qq)){
			echo 
			$qr->orgname . "\t" .
			'1' . "\t" .
			$qr->diviname . "\t" .
			$qr->distname . "\t" .
			$qr->upzname . "\t" .
			$qr->a33 . "\t" .
			$qr->a34 . "\t" .
			$qr->a35 . "\t" .	
			$qr->a36 . "\t" .
			$qr->a37 . "\t" .
			$qr->a38 . "\t" .
			$qr->a39 . "\t".
			
			($qr->a40+$qr->a41+$qr->a42+$qr->a43+$qr->a44) . "\t".
			($qr->a45+$qr->a46+$qr->a47+$qr->a48+$qr->a49) . "\t".
			($qr->a50+$qr->a51+$qr->a52+$qr->a53+$qr->a54) . "\t".
			($qr->a55+$qr->a56+$qr->a57+$qr->a58+$qr->a59) . "\t".
			($qr->a60+$qr->a61+$qr->a62+$qr->a63+$qr->a64) . "\t".
			($qr->a65+$qr->a66+$qr->a67+$qr->a68+$qr->a69) . "\t".
			($qr->a70+$qr->a71+$qr->a72+$qr->a73+$qr->a74) . "\t".
			($qr->a75+$qr->a76+$qr->a77+$qr->a78+$qr->a79) . "\t".
			($qr->a80+$qr->a81+$qr->a82+$qr->a83+$qr->a84) . "\t".
			($qr->a90+$qr->a91+$qr->a92+$qr->a93+$qr->a94) . "\t".
			($qr->a95+$qr->a96+$qr->a97+$qr->a98+$qr->a99) . "\t".
			$qr->a100 . "\n";
		}
		}
}
else {
?>
<style type="text/css">
.button{
border:1px solid #72021c; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; text-align: center; color: #FFFFFF; background-color: #a90329; line-height:3;
 background-image: -webkit-gradient(linear, left top, left bottom, from(#a90329), to(#6d0019));
 background-image: -webkit-linear-gradient(top, #a90329, #6d0019);
 background-image: -moz-linear-gradient(top, #a90329, #6d0019);
 background-image: -ms-linear-gradient(top, #a90329, #6d0019);
 background-image: -o-linear-gradient(top, #a90329, #6d0019);
 background-image: linear-gradient(to bottom, #a90329, #6d0019);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#a90329, endColorstr=#6d0019);
 text-decoration:none;
}

.button:hover{
 border:1px solid #450111; background-color: #77021d;
 background-image: -webkit-gradient(linear, left top, left bottom, from(#77021d), top(#3a000d));
 background-image: -webkit-linear-gradient(top, #77021d, #3a000d);
 background-image: -moz-linear-gradient(top, #77021d, #3a000d);
 background-image: -ms-linear-gradient(top, #77021d, #3a000d);
 background-image: -o-linear-gradient(top, #77021d, #3a000d);
 background-image: linear-gradient(to bottom, #77021d, #3a000d);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#77021d, endColorstr=#3a000d);
}
</style>
<div style="text-align:center; margin:auto; padding: 20px;">
<h2>Export LHB-2013 Data as Excel (.xls)</h2>
<p>
<a href="?lvl=1" class="button">Upazila Health Complexs Data</a><br/>
<a href="?lvl=2" class="button">Sadar Upazila Offices Data</a><br/>
<a href="?lvl=3" class="button">District/General Hospitals Data</a><br/>
<a href="?lvl=4" class="button">CS Offices Data</a><br/>
<a href="?lvl=5" class="button">Tertiary Hospital (Medical College Hospital, Specialized Hospital, National Institute)</a>
</p>
</div>
<?php
mysql_close($dbh_connection);
}
?>