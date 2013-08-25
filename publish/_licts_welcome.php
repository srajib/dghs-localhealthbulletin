<!DOCTYPE>
<html>
<head>
	<style>
	body { font: 0.8em "Trebuchet MS", Arial, Helvetica, sans-serif;
	width:100%;
	padding:0;
	margin:0;
	 }
	.pageContent { width: 30%; }
	.accordion { list-style-type: none; padding: 0; margin: 0 0 30px; border: 1px solid #17a; border-top: none; border-left: none; }
	.accordion ul { padding: 0; margin: 0; float: left; display: block; width: 100%; }
	.accordion li { background: #3cf; cursor: pointer; list-style-type: none; padding: 0; margin: 0; float: left; display: block; width: 100%;}
	.accordion li.active>a { background: url('close.gif') no-repeat center right; }
	.accordion li div { padding: 20px; background: 	#2952A3; display: block; clear: both; float: left; width: 360px;}
	.accordion a { text-decoration: none; border-bottom: 1px solid #4df; font: bold 1.1em/2em Arial, sans-serif; color: #FFF; padding: 0 10px; display: block; cursor: pointer; background: url('open.gif') no-repeat center right;}
	
	/* Level 2 */
	.accordion li ul li { background:#2952A3; color:#FFF; font-size: 1em; width:95%; }
	/* Level 3 */
	.accordion li ul li ul li { background:#5C85D6; color:#FFF; font-size: 1em; width:95%; }

	/* Level 3 */
	.accordion li ul li ul li ul li { background: #99B2E6; color:#FFF; font-size: 1em; width:95%; }

	/* Level 4 */
	.accordion li ul li ul li ul li ul li { background: #2952A3; color:#FFF; font-size: 1em; width:95%; }

	.banner{
		width:100%;
		background:#006;
		color:#FFF;
		font-size:24px;
		height:120px;
		text-align:center;
		vertical-align:middle;
		margin-bottom:8px;
		padding-top:15px;
	}
	</style>
    <script type="text/javascript">
	function goPublish(){
		var timeYear=document.getElementById(timeYear).value;
		window.location = "publish.php?org="+orgId+"&year="+timeYear;
	}
	</script>
    
    <? include('_dbconnect_.php'); ?>
</head>
<body>
	<div id="pageWrap" class="pageWrap">
    <div class="banner">
    <img src="publish_files/gov.jpg" height="70px" /> &nbsp; <img src="publish_files/logo-hpnsdp.jpg" height="70px" /><br/>
    MIS Local Health Bulletin
    </div>
    	<div class="pageContent" style="float:left;">
		<ul class="accordion">
        <li><a><select id="timeYear" name="year" style="width:100%;">
        <option> Select Year </option>
        <option value="2013" selected> 2013 </option>
        </select>
        </a>
        </li>
        </ul>
                
                <ul class="accordion">
                    <li><a href="#">Bangladesh</a>
                            <ul>
                            <?
                            $divi_q=mysql_query("SELECT * FROM divisions ORDER BY name ASC");
                            while($divi_r=mysql_fetch_object($divi_q)){
                            ?>
                            <li><a href="#"><? echo $divi_r->name; ?></a>
                                    <ul>
                                    <?
                                    $dist_q=mysql_query("SELECT * FROM districts WHERE division_id='$divi_r->division_id' ORDER BY name ASC");
                                    while($dist_r=mysql_fetch_object($dist_q)){
                                    ?>
                                    <li><a href="#"><? echo $dist_r->name; ?></a>
                                            <ul>
                                            <?
                                            $upz_q=mysql_query("SELECT * FROM upazillas WHERE district_id='$dist_r->district_id' ORDER BY name ASC");
		                                    while($upz_r=mysql_fetch_object($upz_q)){
                                            ?>
                                            <li><a href="#"><? echo $upz_r->name; ?></a>
                                                    <ul>
                                                    <?
                                                    $org_q=mysql_query("SELECT * FROM organization WHERE division_id='$divi_r->division_id' AND district_id='$dist_r->district_id' AND upazilla_id='$upz_r->upazilla_id' ORDER BY name ASC");
                                                    while($org_r=mysql_fetch_object($org_q)){
                                                    ?>
                                                    <li><a href="publish.php?org=<? echo $org_r->organization_id; ?>&year=2013" target="_blank"><? echo $org_r->name; ?></a></li>
                                                    <?
                                                    }
                                                    ?>
                                                    </ul>
                                            </li>
                                            <?
											}
											?>
                                            </ul>
                                    </li>
                                    <? 
                                    }
                                    ?>
                                    </ul>
                            </li> 
                             <?
                            }?>
                            </ul>
                    </li>
                </ul>
							
		</div>
        <div style="width:68%; float:right; margin-right:5px; background:#000; height:500px;">
        <img src="publish_files/bd_upz_map.png" width="100%" />
        </div>
	</div>

	<script src="dependencies/jquery-1.3.2.js" type="text/javascript"> </script>
	<script src="jquery.accordion.source.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		// <![CDATA[
			
		$(document).ready(function () {
			$('ul').accordion();
		});
				
		// ]]>
	</script>
</body>
</html>