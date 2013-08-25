<!DOCTYPE html>
<html lang="en">
<head>
<title>Local Health Bulletin-2012</title>
<?php
include '_licts_include.php';
 ?>
 <style type="text/css">
	body {
		font-size: 13px;
	}
	.btn_print{
		position: fixed;
		float: right;
		right: 0;
		padding: 5px 10px 5px 10px;
		color: #fff;
		background: #09F;
		font-size: 16px;
		font-weight: bold;
	}
	.rclear {
		clear: right;	
	}
	@media print {
		.btn_print{
			display: none;
		}	
	}
</style>

</head>
<body>
<?php
if(isset($_GET['org']) && isset($_GET['year'])){
include './_dbconnect_.php';
$org=mysql_real_escape_string($_GET['org']);
$year=mysql_real_escape_string($_GET['year']);
$datatable="lhb_ans_".$year;
$orgsql=mysql_query('SELECT *,org.name as orgname, divi.name as diviname, dist.name as distname, upz.name as upzname FROM '.$datatable.' dtbl
					JOIN organization org
					ON dtbl.org_iid=org.organization_id
					JOIN divisions divi
					ON org.division_id=divi.division_id
					JOIN districts dist
					ON org.district_id=dist.district_id
					JOIN upazillas upz
					ON org.upazilla_id=upz.upazilla_id
					JOIN org_type_map lvl
					ON org.organization_id=lvl.organization_id
					where dtbl.org_iid='.$org.' AND dtbl.lhb_year='.$year.'');
$orgsql_num=mysql_num_rows($orgsql);
		if($orgsql_num==1){
		$pdfdata=mysql_fetch_object($orgsql);
		$pdf="_licts_pdf_".$pdfdata->lhb_level_id.".php";
		$pageno=$pdfdata->orgname." | Health Bulletin ".$year." | Page#" ;
		$print="<div><input type=\"button\" onclick=\"javascript:window.print()\" value=\"Print LHB\" class=\"btn_print\" /></div><div class=\"rclear\"></div>";
		function icd10($code4d){
	if($code4d!=""){
		$main=array('.',' ','-');
		$rplc=array('','','');
	$code=str_replace($main,$rplc,$code4d);
	$icd_q=mysql_query("Select * from icd10_code where code='$code'");
	$icd_Data=mysql_fetch_object($icd_q);
	$details=$icd_Data->disease;	
		
			if($details==""){
			$details="<div style=\"color:red; font-weight:bold;\">".$code4d." Code either does not match or written incorrectly. Correct Example: A09.0 or A09 without space or hiphen or camma </div>";
			} else {
				$details=$icd_Data->disease;
			} 
			
	} else {
		$details="";
	}
	return $details;
}
		$totalFunc=($pdfdata->a451+
$pdfdata->a455+$pdfdata->a459+$pdfdata->a463+$pdfdata->a467+$pdfdata->a471+$pdfdata->a475+$pdfdata->a479+$pdfdata->a483+$pdfdata->a487+$pdfdata->a491+$pdfdata->a495+$pdfdata->a499+$pdfdata->a503+$pdfdata->a507+$pdfdata->a511+$pdfdata->a515+$pdfdata->a519+$pdfdata->a523+$pdfdata->a527+$pdfdata->a531+$pdfdata->a535+$pdfdata->a539+$pdfdata->a543+$pdfdata->a547+$pdfdata->a551+$pdfdata->a555+$pdfdata->a559+$pdfdata->a563+$pdfdata->a567+$pdfdata->a571+$pdfdata->a575+$pdfdata->a579+$pdfdata->a583+$pdfdata->a587+$pdfdata->a591+$pdfdata->a595+$pdfdata->a599+$pdfdata->a603+$pdfdata->a607+$pdfdata->a611+$pdfdata->a615+$pdfdata->a619+$pdfdata->a623+$pdfdata->a627+$pdfdata->a631+$pdfdata->a635+$pdfdata->a639+$pdfdata->a643+$pdfdata->a647+$pdfdata->a651+$pdfdata->a655+$pdfdata->a659+$pdfdata->a663+$pdfdata->a667+$pdfdata->a671+$pdfdata->a675+$pdfdata->a679+$pdfdata->a683+$pdfdata->a687+$pdfdata->a691+$pdfdata->a695+$pdfdata->a699+$pdfdata->a703+$pdfdata->a707+$pdfdata->a711+$pdfdata->a715+$pdfdata->a719+$pdfdata->a723+$pdfdata->a727+$pdfdata->a731+$pdfdata->a735+$pdfdata->a739+$pdfdata->a743+$pdfdata->a747+$pdfdata->a751+$pdfdata->a755+$pdfdata->a759+$pdfdata->a763+$pdfdata->a767+$pdfdata->a771+$pdfdata->a775+$pdfdata->a779+$pdfdata->a783+$pdfdata->a787+$pdfdata->a791+$pdfdata->a795+$pdfdata->a799+$pdfdata->a803+$pdfdata->a807+$pdfdata->a811+$pdfdata->a815);

			$totalRepairable=($pdfdata->a452+$pdfdata->a456+$pdfdata->a460+$pdfdata->a464+$pdfdata->a468+$pdfdata->a472+$pdfdata->a476+$pdfdata->a480+$pdfdata->a484+$pdfdata->a488+$pdfdata->a492+$pdfdata->a496+$pdfdata->a500+$pdfdata->a504+$pdfdata->a508+$pdfdata->a512+$pdfdata->a516+$pdfdata->a520+$pdfdata->a524+$pdfdata->a528+$pdfdata->a532+$pdfdata->a536+$pdfdata->a540+$pdfdata->a544+$pdfdata->a548+$pdfdata->a552+$pdfdata->a556+$pdfdata->a560+$pdfdata->a564+$pdfdata->a568+$pdfdata->a572+$pdfdata->a576+$pdfdata->a580+$pdfdata->a584+$pdfdata->a588+$pdfdata->a592+$pdfdata->a596+$pdfdata->a600+$pdfdata->a604+$pdfdata->a608+$pdfdata->a612+$pdfdata->a616+$pdfdata->a620+$pdfdata->a624+$pdfdata->a628+$pdfdata->a632+$pdfdata->a636+$pdfdata->a640+$pdfdata->a644+$pdfdata->a648+$pdfdata->a652+$pdfdata->a656+$pdfdata->a660+$pdfdata->a664+$pdfdata->a668+$pdfdata->a672+$pdfdata->a676+$pdfdata->a680+$pdfdata->a684+$pdfdata->a688+$pdfdata->a692+$pdfdata->a696+$pdfdata->a700+$pdfdata->a704+$pdfdata->a708+$pdfdata->a712+$pdfdata->a716+$pdfdata->a720+$pdfdata->a724+$pdfdata->a728+$pdfdata->a732+$pdfdata->a736+$pdfdata->a740+$pdfdata->a744+$pdfdata->a748+$pdfdata->a752+$pdfdata->a756+$pdfdata->a760+$pdfdata->a764+$pdfdata->a768+$pdfdata->a772+$pdfdata->a776+$pdfdata->a780+$pdfdata->a784+$pdfdata->a788+$pdfdata->a792+$pdfdata->a796+$pdfdata->a800+$pdfdata->a804+$pdfdata->a808+$pdfdata->a812+$pdfdata->a816);
			
			$totalNonRepairable=($pdfdata->a453+$pdfdata->a457+$pdfdata->a461+$pdfdata->a465+$pdfdata->a469+$pdfdata->a473+$pdfdata->a477+$pdfdata->a481+$pdfdata->a485+$pdfdata->a489+$pdfdata->a493+$pdfdata->a497+$pdfdata->a501+$pdfdata->a505+$pdfdata->a509+$pdfdata->a513+$pdfdata->a517+$pdfdata->a521+$pdfdata->a525+$pdfdata->a529+$pdfdata->a533+$pdfdata->a537+$pdfdata->a541+$pdfdata->a545+$pdfdata->a549+$pdfdata->a553+$pdfdata->a557+$pdfdata->a561+$pdfdata->a565+$pdfdata->a569+$pdfdata->a573+$pdfdata->a577+$pdfdata->a581+$pdfdata->a585+$pdfdata->a589+$pdfdata->a593+$pdfdata->a597+$pdfdata->a601+$pdfdata->a605+$pdfdata->a609+$pdfdata->a613+$pdfdata->a617+$pdfdata->a621+$pdfdata->a625+$pdfdata->a629+$pdfdata->a633+$pdfdata->a637+$pdfdata->a641+$pdfdata->a645+$pdfdata->a649+$pdfdata->a653+$pdfdata->a657+$pdfdata->a661+$pdfdata->a665+$pdfdata->a669+$pdfdata->a673+$pdfdata->a677+$pdfdata->a681+$pdfdata->a685+$pdfdata->a689+$pdfdata->a693+$pdfdata->a697+$pdfdata->a701+$pdfdata->a705+$pdfdata->a709+$pdfdata->a713+$pdfdata->a717+$pdfdata->a721+$pdfdata->a725+$pdfdata->a729+$pdfdata->a733+$pdfdata->a737+$pdfdata->a741+$pdfdata->a745+$pdfdata->a749+$pdfdata->a753+$pdfdata->a757+$pdfdata->a761+$pdfdata->a765+$pdfdata->a769+$pdfdata->a773+$pdfdata->a777+$pdfdata->a781+$pdfdata->a785+$pdfdata->a789+$pdfdata->a793+$pdfdata->a797+$pdfdata->a801+$pdfdata->a805+$pdfdata->a809+$pdfdata->a813+$pdfdata->a817); 
			
			$totalNotInstalled=($pdfdata->a454+$pdfdata->a458+$pdfdata->a462+$pdfdata->a466+$pdfdata->a470+$pdfdata->a474+$pdfdata->a478+$pdfdata->a482+$pdfdata->a486+$pdfdata->a490+$pdfdata->a494+$pdfdata->a498+$pdfdata->a502+$pdfdata->a506+$pdfdata->a510+$pdfdata->a514+$pdfdata->a518+$pdfdata->a522+$pdfdata->a526+$pdfdata->a530+$pdfdata->a534+$pdfdata->a538+$pdfdata->a542+$pdfdata->a546+$pdfdata->a550+$pdfdata->a554+$pdfdata->a558+$pdfdata->a562+$pdfdata->a566+$pdfdata->a570+$pdfdata->a574+$pdfdata->a578+$pdfdata->a582+$pdfdata->a586+$pdfdata->a590+$pdfdata->a594+$pdfdata->a598+$pdfdata->a602+$pdfdata->a606+$pdfdata->a610+$pdfdata->a614+$pdfdata->a618+$pdfdata->a622+$pdfdata->a626+$pdfdata->a630+$pdfdata->a634+$pdfdata->a638+$pdfdata->a642+$pdfdata->a646+$pdfdata->a650+$pdfdata->a654+$pdfdata->a658+$pdfdata->a662+$pdfdata->a666+$pdfdata->a670+$pdfdata->a674+$pdfdata->a678+$pdfdata->a682+$pdfdata->a686+$pdfdata->a690+$pdfdata->a694+$pdfdata->a698+$pdfdata->a702+$pdfdata->a706+$pdfdata->a710+$pdfdata->a714+$pdfdata->a718+$pdfdata->a722+$pdfdata->a726+$pdfdata->a730+$pdfdata->a734+$pdfdata->a738+$pdfdata->a742+$pdfdata->a746+$pdfdata->a750+$pdfdata->a754+$pdfdata->a758+$pdfdata->a762+$pdfdata->a766+$pdfdata->a770+$pdfdata->a774+$pdfdata->a778+$pdfdata->a782+$pdfdata->a786+$pdfdata->a790+$pdfdata->a794+$pdfdata->a798+$pdfdata->a802+$pdfdata->a806+$pdfdata->a810+$pdfdata->a814+$pdfdata->a818);
			
			$totalGrand=$totalFunc+$totalRepairable+$totalNonRepairable+$totalNotInstalled;
		include ("$pdf");
		
		}
		else if($orgsql_num==0){
			$orgq=mysql_query("SELECT name FROM organization where organization_id='$org'");
			$orgq_r=mysql_fetch_object($orgq);
		echo "<div style=\"text-align:center; color:#000000; font-size:25px; padding-top:50px;\"><span style=\"color:red\">Sorry!!</span> There is no <span style=\"color:orange;\">Local Health Bulletin-".$year." </span>for <span style=\"color:orange\">".$orgq_r->name."</span>.</div>"; }
		else {
		echo "Contact with admin";}

} else {
echo "Please search org corectly";
}
mysql_close();
?>
</body>
</html>