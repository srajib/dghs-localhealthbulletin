<?php	
	$current=array(',','-','_');
	$replace=array('','','');	
	
	include ("{$pfx}classes/{$pfx}classes.php");
	include ("{$pfx}insert_update/{$pfx}insert_update.php");
	
	$viewsqldata=mysql_query('SELECT * FROM '.$datatable.' WHERE org_iid='.$orgid.' AND lhb_year='.$openyear.'');
	 $viewdata=mysql_fetch_object($viewsqldata);
?>