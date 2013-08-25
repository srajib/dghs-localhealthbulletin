<?php echo $print; ?>
<div class="fullpage">
    	<div id="headlogo">
    		<br> &nbsp; <br>
            <table align="center">
             <tbody>
              <tr>
               <td align="center" valign="middle">
                <p><a href="#"><img src="./publish_files/gov.jpg" height="50px" alt="BD GOV"></a><br>
                <span class="heading">Ministry of Health and Family Welfare (MOHFW)</span><br>
                <span class="subheading">HEALTH BULLETIN <? echo $pdfdata->lhb_year; ?></span><br><span style="color:#000; font-weight: bold;">The data belong to Jan-Dec <? echo ($pdfdata->lhb_year-1); ?></span><br><span class="subheading"><? echo $pdfdata->orgname; ?></span></p>
                <p><span class="subheading" style="font-size: 20px; padding: 0; margin: 0">Upazila: <? echo $pdfdata->upzname; ?>, District: <? echo $pdfdata->distname; ?>, Division: <? echo $pdfdata->diviname; ?></span></p>
               </td>
              </tr>
             </tbody>
            </table>
            <br />
            <img src="../../dghshrm/<? echo $pdfdata->image; ?>" width="400px" height="300px" />
        </div><!--end of id headlogo -->
        <div class="headfoot">
            <img src="./publish_files/logo-hpnsdp.jpg" alt="HPNSDP" width="181" height="143"><br>
            <span class="black">Supported by:</span><br>
            <span class="green">Management Information System (MIS)</span><br>
            <span class="black">Directorate General of Health Services (DGHS)</span><br>
            <span class="black">Ministry of Health &amp; Family Welfare (MOHFW)</span><br>
            <span class="black">Mohakhali, Dhaka-1212</span>
        </div><!--end of id headfoot -->
    </div><!--end of class fullpage -->
    <p style="page-break-before:always"></p>
    <div class="fullpage">
    	<div style="width:100%; text-align:right;"><? echo $pdfdata->orgname." | Health Bulletin ".$year." | " ; ?></div>
    	<fieldset>
            <legend><div id="lgndp">Preface</div></legend>
            <div class="preface"><? echo $pdfdata->a1; ?></div>
            <div id="prefacefooter"><? echo $pdfdata->a2; ?><br>UH&amp;FPO<br><? echo $pdfdata->orgname; ?></div>
     	</fieldset>
    </div>
    <p style="page-break-before:always"></p><div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 1</div>
        <fieldset>
        	<legend><div id="lgndp">Organization at a glance</div></legend>
                <div id="inputName"><span id="IName">Name of the Upazila</span><span id="IInput"><? echo $pdfdata->upzname; ?></span></div>
                <div id="inputName"><span id="IName">Name of UHFPO </span><span id="IInput"><? echo $pdfdata->a2; ?></span>
                </div>
                <div id="inputName"><span id="IName">Telephone No. </span><span id="IInput"><? echo number_format($pdfdata->a4); ?></span></div>
                <div id="inputName"><span id="IName">FAX No. </span><span id="IInput"><? echo $pdfdata->a5; ?></span></div>
                <div id="inputName"><span id="IName">Mobile No. </span><span id="IInput">0<? echo $pdfdata->a3; ?></span></div>
                <div id="inputName"><span id="IName">Email </span><span id="IInput"><? echo $pdfdata->a6; ?></span></div>
                <div id="inputName"><span id="IName">GPS location of UHFPO office </span><span id="IInput"> Lati: <? echo number_format($pdfdata->a7,4); ?></span> And <span id="IInput"> Long: <? echo number_format($pdfdata->a8,4); ?></span></div>
                <div id="inputName"><span id="IName">No. of Unions in the Upazila</span><span id="IInput"><? echo $pdfdata->a9; ?></span></div>
                <div id="inputName"><span id="IName">No. of Households in the Upazila </span><span id="IInput"><? echo number_format($pdfdata->a10); ?></span></div>
                <div id="inputName"><span id="IName">No. of Population in the Upazila </span><span id="IInput"><? echo number_format($pdfdata->a11); ?></span></div>
                <div id="inputName"><span id="IName">Area of Upazila in sq km </span><span id="IInput"><? echo number_format($pdfdata->a12,2); ?></span></div>
        </fieldset>
        
    </div>
    <p style="page-break-before:always"></p><div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 2</div>
        <fieldset>
            <legend><div id="lgndp">Existing health facilities in the Upazila </div></legend>
            <table width="100%" border="1" align="center" cellspacing="0">
                <tbody>
                  <tr>
                    <td width="60%"><div id="tblhdp">Facility Type</div></td>
                    <td width="20%"><div id="tblhdp">Total</div></td>
                    <td width="20%"><div id="tblhdp">No. of Beds</div></td>
                  </tr>
                  <tr>
                    <td id="tblclm1">Upazila Health Complex</td>
                    <td id="tblclm2"><? echo $pdfdata->a13; ?></td>
                    <td id="tblclm3"><? echo $pdfdata->a14; ?></td>
                    </tr>
                  <tr>
                    <td id="tblclm1">No. of Union Sub-Centres</td>
                    <td id="tblclm2"><? echo $pdfdata->a15; ?></td>
                    <td id="tblclm3"><? echo $pdfdata->a16; ?></td>
                  </tr>
                  <tr>
                    <td id="tblclm1">No. of Union Health and  Family Welfare Centres</td>
                    <td id="tblclm2"><? echo $pdfdata->a17; ?></td>
                    <td id="tblclm3"><? echo $pdfdata->a18; ?></td>
                  </tr>
                  <tr>
                    <td id="tblclm1">No. of Rural Dispensaries</td>
                    <td id="tblclm2"><? echo $pdfdata->a19; ?></td>
                    <td id="tblclm3"><? echo $pdfdata->a20; ?></td>
                  </tr>
                  <tr>
                    <td id="tblclm1">No. of Community Clinics</td>
                    <td id="tblclm2"><? echo $pdfdata->a21; ?></td>
                    <td id="tblclm3"><? echo $pdfdata->a22; ?></td>
                  </tr>
                  <tr>
                    <td id="tblclm1">No of Trauma Centres</td>
                    <td id="tblclm2"><? echo $pdfdata->a23; ?></td>
                    <td id="tblclm3"><? echo $pdfdata->a24; ?></td>
                  </tr>
                  <tr>
                    <td id="tblclm1">No. of MCWC</td>
                    <td id="tblclm2"><? echo $pdfdata->a25; ?></td>
                    <td id="tblclm3"><? echo $pdfdata->a26; ?></td>
                  </tr>
                  <tr>
                    <td id="tblclm1">No. of Chest Disease Clinic (TB clinic)</td>
                    <td id="tblclm2"><? echo $pdfdata->a27; ?></td>
                    <td id="tblclm3"><? echo $pdfdata->a28; ?></td>
                  </tr>
                  <tr>
                    <td id="tblclm1">No. of Private Clinics</td>
                    <td id="tblclm2"><? echo $pdfdata->a29; ?></td>
                    <td id="tblclm3"><? echo $pdfdata->a30; ?></td>
                  </tr>
                  <tr>
                    <td id="tblclm1">No. of NGO Clinics</td>
                    <td id="tblclm2"><? echo $pdfdata->a31; ?></td>
                    <td id="tblclm3"><? echo $pdfdata->a32; ?></td>
                  </tr>
                </tbody>
            </table>
        </fieldset>
        <br>        
    </div>
<p style="page-break-before:always"></p><div class="fullpage">
  <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 3</div>
      	<fieldset>
            <legend>
                <div id="lgndp">Child health and MDG-4 (No.) (January-December, <? echo ($year-1) ; ?>)</div>
            </legend>
            <div class="lgndp" style="text-align: right">No. of Live Birth:  <?php echo number_format($pdfdata->a33);?></div>         
            <div style="text-align:center; border:#000 solid 2px; height:400px;">
			  <?php include '_licts_nmr.php'; ?>
                <div id="nmr">                
                <svg></svg>
                
                </div>
            </div>
            <br />
        	<br />
          	<div class="lgndp">Total No. of children treated under IMCI Program <? echo number_format($pdfdata->a38); ?></div>            
          	<div class="lgndp">Fully Vaccinated Children:  <? echo $pdfdata->a39; ?></div>            
      </fieldset>
      <fieldset>
		<legend><div id="lgndp">Neonatal Mortality Rate (January-December, <? echo ($year-1) ; ?>)</div></legend>
        	Neonatal Mortality Rate (NMR) is <? echo number_format(($pdfdata->a35/$pdfdata->a33)*1000,2); ?> per 1,000 live births.
        </fieldset>
    <br>
    <br>
    <!--<fieldset>
    <legend>
    <div id="lgndp">Utilization of services at Upazila Health Complex</div></legend>
        <table width="100%" border="1" align="center" cellspacing="0">
            <tbody>
            <tr>
                <td width="60%"><div id="tblhdp">Indicators</div></td>
                <td width="20%"><div id="tblhdp">Upazila</div></td>
            </tr>
            <tr>
                <td id="tblclm1">Average Length of Hospital Stay (No. of days per patient)</td>
                <td id="tblclm2">2.63</td>
            </tr>
            <tr>
                <td id="tblclm1">Bed Occupancy Rate (%)</td>
                <td id="tblclm2"><? echo $pdfdata->a269; ?></td>
            </tr>
            <tr>
                <td id="tblclm1">Hospital Death Rate (%)</td>
                <td id="tblclm2"><? echo $pdfdata->a270; ?></td>
            </tr>
            </tbody>
        </table>
    </fieldset>-->
</div>
<p style="page-break-before:always"></p><div class="fullpage">
  <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 4</div>
     <br>
     <fieldset>
    	<div class="indicators">
       	  <h3>Legends</h3>
        	<ul>
            	<li>R.P.W- </li>
                <li class="right">Registered Pregnanat Woman </li><div class="lclear"></div>
                <li>1st ANC-</li>
                <li class="right">No. of 1st ANC recipients </li><div class="lclear"></div>
                <li>4th ANC- </li>
                <li class="right">No. of 4th ANC recipients</li><div class="lclear"></div>
                <li>C. Preg- </li>
                <li class="right">No. of complicated pregnancies </li><div class="lclear"></div>
                <li>N. deli- </li>
                <li class="right">No. of normal deliveries</li><div class="lclear"></div>
                <li>V. deli- </li>
                <li class="right">No. of vaginal deliveries</li><div class="lclear"></div>
                <li>C. deli- </li>
                <li class="right">No. of cesarean deliveries</li><div class="lclear"></div>
                <li>PNC- </li>
                <li class="right">No. of PNC services provided to mother in the Upazila</li>
            </ul><div class="lclear"></div>
        </div><div class="rclear"></div>
        <br />
        <legend>
<div id="lgndp">
      Maternal health and MDG-5 (No.) (January-December, <? echo ($year-1) ; ?>)
      </div>
        </legend>
          <div style="text-align:center; border:#000 solid 2px; height:400px;">
			<?php include '_licts_mmr.php'; ?>
            <div id="mmr">
			<svg></svg>
			</div>
      </div>
      <br /><br />
      <div class="lgndp">All ANC Receiptients:  <? echo number_format($pdfdata->a55+$pdfdata->a56+$pdfdata->a57+$pdfdata->a58+$pdfdata->a59) ; ?></div>            <div class="lgndp">Total Number of Deliveries:  <? echo number_format(($pdfdata->a65+$pdfdata->a66+$pdfdata->a67+$pdfdata->a68+$pdfdata->a69)+($pdfdata->a70+$pdfdata->a71+$pdfdata->a72+$pdfdata->a73+$pdfdata->a74)+($pdfdata->a75+$pdfdata->a76+$pdfdata->a77+$pdfdata->a78+$pdfdata->a79)+($pdfdata->a80+$pdfdata->a81+$pdfdata->a82+$pdfdata->a83+$pdfdata->a84)) ; ?></div>
            <div class="lgndp">No. of Maternal Death:  <? echo number_format($pdfdata->a95+$pdfdata->a96+$pdfdata->a97+$pdfdata->a98+$pdfdata->a99) ; ?></div>
            <div class="lgndp">Valid TT Coverage:  <? echo ($pdfdata->a100) ; ?> %</div>
    </fieldset>
    <fieldset>
        <legend><div id="lgndp">Maternal Mortality Ratio (MMR)(January-December, <? echo ($year-1) ; ?>)</div>
        </legend>
        	Maternal Mortality Ratio (MMR) is 
        <? echo number_format(($pdfdata->a36/$pdfdata->a33)*100000,2); ?> per 100,000 live births.
    </fieldset>
    <br>&nbsp;
    
</div>
    <p style="page-break-before:always"></p>
    <div class="fullpage">
    	<div style="width:100%; text-align:right;"><? echo $pageno ; ?> 5</div>
     <br>
    <fieldset>
    <legend>
    <div id="lgndp"> No. of OPD &amp; Emergency visits &amp; Deaths at Upazila Health Office</div>
    </legend>
    <table width="100%" border="1" align="center" cellspacing="0">
      <tbody><tr>
        <td width="36%" rowspan="2" id="tblhdp">Health Facility</td>
        <td height="27" colspan="4"><div id="tblhdp">OPD</div></td>
        <td colspan="4"><div id="tblhdp">Emergency</div></td>
        </tr>
      <tr>
        <td width="5%" id="tblhdp" class="bold" style="background-color:#C93;">T (M+F)</td>
        <td width="5%" id="tblhdp" style="background-color:#C93;">M</td>
        <td width="5%" id="tblhdp" style="background-color:#C93;">F</td>
        <td width="8%" id="tblhdp">Child (U-5)</td>
                <td width="5%" id="tblhdp" class="bold" style="background-color:#C93;">T (M+F)</td>
        <td width="5%" id="tblhdp" style="background-color:#C93;">M</td>
        <td width="5%" id="tblhdp" style="background-color:#C93;">F</td>
        <td width="7%" id="tblhdp">Child (U-5)</td>
        </tr>
      <tr>
            <td id="tblclm1">Upazila Health Complex</td>
            <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a105)+($pdfdata->a106)); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a105); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a106); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a107); ?></td>
            <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a135)+($pdfdata->a136)); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a135); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a136); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a137); ?></td>
        </tr>
         <tr>
            <td id="tblclm1">Union Sub-Centres</td>
            <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a108)+($pdfdata->a109)); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a108); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a109); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a110); ?></td>
            <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a138)+($pdfdata->a139)); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a138); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a139); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a140); ?></td>
        </tr>
      <tr>
            <td id="tblclm1">Union Health and  Family Welfare Centre (under DGHS)</td>
            <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a111)+($pdfdata->a112)); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a111); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a112); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a113); ?></td>
            <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a141)+($pdfdata->a142)); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a141); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a142); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a143); ?></td>
        </tr>
      <tr>
            <td id="tblclm1">Rural/Urban/Thana Dispensaries</td>
            <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a114)+($pdfdata->a115)); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a114); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a115); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a116); ?></td>
            <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a144)+($pdfdata->a145)); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a144); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a145); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a146); ?></td>
        </tr>
      	<tr>
            <td id="tblclm1">Community Clinics</td>
            <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a117)+($pdfdata->a118)); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a117); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a118); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a119); ?></td>
            <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a147)+($pdfdata->a148)); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a147); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a148); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a149); ?></td>
        </tr>
      	<tr>
            <td id="tblclm1">Trauma Centres</td>
            <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a120)+($pdfdata->a121)); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a120); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a121); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a122); ?></td>
            <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a150)+($pdfdata->a151)); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a150); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a151); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a152); ?></td>
        </tr>
      	<tr>
            <td id="tblclm1">MCWCs</td>
            <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a123)+($pdfdata->a124)); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a123); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a124); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a125); ?></td>
            <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a153)+($pdfdata->a154)); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a153); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a154); ?></td>
            <td id="tblclm2"><? echo number_format($pdfdata->a155); ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Chest Disease Clinics  (TB clinics)</td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a126)+($pdfdata->a127)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a126); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a127); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a128); ?></td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a156)+($pdfdata->a157)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a156); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a157); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a158); ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Private Clinics/Facilities</td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a129)+($pdfdata->a130)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a129); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a130); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a131); ?></td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a159)+($pdfdata->a160)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a159); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a160); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a161); ?></td>
        </tr>
      <tr>
        <td id="tblclm1">NGO Clinics/Facilities</td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a132)+($pdfdata->a133)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a132); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a133); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a134); ?></td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a162)+($pdfdata->a163)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a162); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a163); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a164); ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Total</td>
        <td id="tblclm2" class="bold"><?php echo number_format(($pdfdata->a105)+($pdfdata->a106)+($pdfdata->a129)+($pdfdata->a130)+($pdfdata->a132)+($pdfdata->a133)+($pdfdata->a129)+($pdfdata->a130)+($pdfdata->a126)+($pdfdata->a127)+($pdfdata->a123)+($pdfdata->a124)+($pdfdata->a120)+($pdfdata->a121)+($pdfdata->a117)+($pdfdata->a118)+($pdfdata->a114)+($pdfdata->a115)+($pdfdata->a111)+($pdfdata->a112)+($pdfdata->a108)+($pdfdata->a109)) ?></td>
        <td id="tblclm2"><?php echo number_format($pdfdata->a105+$pdfdata->a108+$pdfdata->a111+$pdfdata->a114+$pdfdata->a117+$pdfdata->a120+$pdfdata->a123+$pdfdata->a126+$pdfdata->a129+$pdfdata->a132); ?></td>
        <td id="tblclm2"><?php echo number_format(($pdfdata->a106+$pdfdata->a109+$pdfdata->a112+$pdfdata->a115+$pdfdata->a118+$pdfdata->a121+$pdfdata->a124+$pdfdata->a127+$pdfdata->a130+$pdfdata->a133)); ?></td>
        <td id="tblclm2"><?php echo number_format($pdfdata->a107+$pdfdata->a110+$pdfdata->a113+$pdfdata->a116+$pdfdata->a119+$pdfdata->a122+$pdfdata->a125+$pdfdata->a128+$pdfdata->a131+$pdfdata->a134); ?></td>
        <td id="tblclm2" class="bold"><?php echo number_format(($pdfdata->a135)+($pdfdata->a136)+($pdfdata->a138)+($pdfdata->a139)+($pdfdata->a141)+($pdfdata->a142)+($pdfdata->a144)+($pdfdata->a145)+($pdfdata->a147)+($pdfdata->a148)+($pdfdata->a150)+($pdfdata->a151)+($pdfdata->a153)+($pdfdata->a154)+($pdfdata->a156)+($pdfdata->a157)+($pdfdata->a159)+($pdfdata->a160)+($pdfdata->a162)+($pdfdata->a163)) ?></td>
        <td id="tblclm2"><?php echo number_format($pdfdata->a135+$pdfdata->a138+$pdfdata->a141+$pdfdata->a144+$pdfdata->a147+$pdfdata->a150+$pdfdata->a153+$pdfdata->a156+$pdfdata->a159+$pdfdata->a162); ?></td>
        <td id="tblclm2"><?php echo number_format($pdfdata->a136+$pdfdata->a139+$pdfdata->a142+$pdfdata->a145+$pdfdata->a148+$pdfdata->a151+$pdfdata->a154+$pdfdata->a157+$pdfdata->a160+$pdfdata->a163); ?></td>
        <td id="tblclm2"><?php echo number_format($pdfdata->a137+$pdfdata->a140+$pdfdata->a143+$pdfdata->a146+$pdfdata->a149+$pdfdata->a152+$pdfdata->a154+$pdfdata->a157+$pdfdata->a160+$pdfdata->a163); ?></td>
      </tr>
      </tbody>
    </table>
    </fieldset>
  <fieldset>
        <legend><div id="lgndp">No. of Admissions &amp; Deaths at Upazila Health Office</div></legend>
        <table width="100%" border="1" align="center" cellspacing="0">
      <tbody><tr>
        <td width="36%" rowspan="2" id="tblhdp">Health Facility</td>
        <td colspan="4"><div id="tblhdp">Admission</div></td>
        <td colspan="4"><div id="tblhdp"> Death</div></td>
        </tr>
      <tr>
                <td width="5%" id="tblhdp" class="bold" style="background-color:#C93;">T (M+F)</td>
        <td width="5%" id="tblhdp" style="background-color:#C93;">M</td>
        <td width="5%" id="tblhdp" style="background-color:#C93;">F</td>
        <td width="7%" id="tblhdp">Child (U-5)</td>
                <td width="5%" id="tblhdp" class="bold" style="background-color:#C93;">T (M+F)</td>
        <td width="5%" id="tblhdp" style="background-color:#C93;">M</td>
        <td width="5%" id="tblhdp" style="background-color:#C93;">F</td>
        <td width="6%" id="tblhdp">Child (U-5)</td>
        </tr>
      <tr>
        <td id="tblclm1">Upazila Health Complex</td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a165)+($pdfdata->a166)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a165); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a166); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a167); ?></td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a195)+($pdfdata->a196)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a195); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a196); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a197); ?></td>
        </tr>
         <tr>
        <td id="tblclm1">Union Sub-Centres</td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a168)+($pdfdata->a169)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a168); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a169); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a170); ?></td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a198)+($pdfdata->a199)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a198); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a199); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a200); ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Union Health and  Family Welfare Centre (under DGHS)</td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a171)+($pdfdata->a172)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a171); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a172); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a173); ?></td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a201)+($pdfdata->a202)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a201); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a202); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a203); ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Rural/Urban/Thana Dispensaries</td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a174)+($pdfdata->a175)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a174); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a175); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a176); ?></td>
        <td id="tblclm2" class="bold"><? echo ($pdfdata->a204)+($pdfdata->a205); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a204); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a205); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a206); ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Community Clinics</td>
        <td id="tblclm2" class="bold"><? echo ($pdfdata->a177)+($pdfdata->a178); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a177; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a178; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a179; ?></td>
        <td id="tblclm2" class="bold"><? echo ($pdfdata->a207)+($pdfdata->a208); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a207; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a208; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a209; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Trauma Centres</td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a180)+($pdfdata->a181)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a180); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a181); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a182); ?></td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a210)+($pdfdata->a211)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a210); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a211); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a212); ?></td>
        </tr>
      <tr>
        <td id="tblclm1">MCWCs</td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a183)+($pdfdata->a184)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a183); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a184); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a185); ?></td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a213)+($pdfdata->a214)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a213); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a214); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a215); ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Chest Disease Clinics  (TB clinics)</td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a186)+($pdfdata->a187)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a186); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a187); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a188); ?></td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a216)+($pdfdata->a217)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a216); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a217); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a218); ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Private Clinics/Facilities</td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a189)+($pdfdata->a190)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a189); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a190); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a191); ?></td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a219)+($pdfdata->a220)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a219); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a220); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a221); ?></td>
        </tr>
      <tr>
        <td id="tblclm1">NGO Clinics/Facilities</td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a192)+($pdfdata->a193)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a192); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a193); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a194); ?></td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a222)+($pdfdata->a223)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a222); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a223); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a224); ?></td>
      </tr>
      <tr>
        <td id="tblclm1">Total</td>
        <td id="tblclm2" class="bold"><? echo number_format(($pdfdata->a165)+($pdfdata->a166)+($pdfdata->a168)+($pdfdata->a169)+($pdfdata->a171)+($pdfdata->a172)+($pdfdata->a174)+($pdfdata->a175)+($pdfdata->a177)+($pdfdata->a178)+($pdfdata->a180)+($pdfdata->a181)+($pdfdata->a183)+($pdfdata->a184)+($pdfdata->a186)+($pdfdata->a187)+($pdfdata->a189)+($pdfdata->a190)+($pdfdata->a192)+($pdfdata->a193)); ?></td>
        <td id="tblclm2"><?php echo number_format($pdfdata->a165+$pdfdata->a168+$pdfdata->a171+$pdfdata->a174+$pdfdata->a177+$pdfdata->a180+$pdfdata->a183+$pdfdata->a186+$pdfdata->a189+$pdfdata->a192); ?></td>
        <td id="tblclm2"><?php echo number_format($pdfdata->a166+$pdfdata->a169+$pdfdata->a172+$pdfdata->a175+$pdfdata->a178+$pdfdata->a181+$pdfdata->a184+$pdfdata->a187+$pdfdata->a190+$pdfdata->a193); ?></td>
        <td id="tblclm2"><?php echo number_format($pdfdata->a167+$pdfdata->a170+$pdfdata->a173+$pdfdata->a176+$pdfdata->a179+$pdfdata->a182+$pdfdata->a185+$pdfdata->a188+$pdfdata->a191+$pdfdata->a194); ?></td>
        <td id="tblclm2" class="bold"><?php echo number_format($pdfdata->a195+$pdfdata->a196+$pdfdata->a198+$pdfdata->a199+$pdfdata->a201+$pdfdata->a202+$pdfdata->a204+$pdfdata->a205+$pdfdata->a207+$pdfdata->a208+$pdfdata->a210+$pdfdata->a211+$pdfdata->a213+$pdfdata->a214+$pdfdata->a216+$pdfdata->a217+$pdfdata->a219+$pdfdata->a220+$pdfdata->a222+$pdfdata->a223); ?></td>
        <td id="tblclm2"><?php echo number_format($pdfdata->a195+$pdfdata->a198+$pdfdata->a201+$pdfdata->a204+$pdfdata->a207+$pdfdata->a210+$pdfdata->a213+$pdfdata->a216+$pdfdata->a219+$pdfdata->a222); ?></td>
        <td id="tblclm2"><?php echo number_format($pdfdata->a196+$pdfdata->a199+$pdfdata->a202+$pdfdata->a205+$pdfdata->a208+$pdfdata->a211+$pdfdata->a214+$pdfdata->a217+$pdfdata->a220+$pdfdata->a223); ?></td>
        <td id="tblclm2"><?php echo number_format($pdfdata->a197+$pdfdata->a200+$pdfdata->a203+$pdfdata->a206+$pdfdata->a209+$pdfdata->a212+$pdfdata->a215+$pdfdata->a218+$pdfdata->a221+$pdfdata->a224); ?></td>
      </tr>
      </tbody>
    </table>
    </fieldset>
    <br>
    
    </div>
    <p style="page-break-before:always"></p><div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 6</div>
     <fieldset>
    <legend><div id="lgndp">Water &amp; sanitation</div></legend>
    <table width="100%" border="1" align="center" cellspacing="0">
      <tbody><tr>
        <td width="73%"><div id="tblhdp">Indicators</div></td>
        <td width="27%"><div id="tblhdp">Upazila %</div></td>
        </tr>
      <tr>
        <td id="tblclm1">Coverage of households having access to safe drinking water (%)</td>
        <td id="tblclm2"><? echo number_format($pdfdata->a267,2); ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Coverage of households having access to sanitary latrines (%)</td>
        <td id="tblclm2"><? echo number_format($pdfdata->a268,2); ?></td>
        </tr>
    </tbody></table>
    </fieldset>
    <fieldset>
    <legend>
    <div id="lgndp">Status of Human Resources (Class wise)</div>
    </legend>    
    <table width="100%" border="1" align="center" cellspacing="0">
      <tbody>
      <tr>
        <td colspan="2" rowspan="2" id="tblhdp">Class</td>
        <td width="30%" rowspan="2" id="tblhdp">Sanctioned</td>
        <td colspan="2" id="tblhdp">Filled-up</td>
        <td width="13%" rowspan="2" id="tblhdp">Vacant</td>
        <td width="13%" rowspan="2" id="tblhdp">Vacancy %</td>
      </tr>
      <tr>
        <td width="13%" id="tblhdp">M</td>
        <td width="13%" id="tblhdp">F</td>
      </tr>
      <tr>
        <th colspan="7" id="tblhdp">UHC/Sadar Upazila Health Office</th>
      </tr>
      <tr>
        <td width="8%" rowspan="2" id="tblclm1">Class I</td>
        <td width="10%" id="tblclm2">Doctor</td>
        <td id="tblclm2"><? echo $pdfdata->a271; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a272; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a273; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a271-($pdfdata->a272+$pdfdata->a273)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a271-($pdfdata->a272+$pdfdata->a273))/($pdfdata->a271)*100,2); ?>  </td>
      </tr>
      <tr>
        <td id="tblclm2">Non Doctor</td>
        <td id="tblclm2"><? echo $pdfdata->a274; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a275; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a276; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a274-($pdfdata->a275+$pdfdata->a276)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a274-($pdfdata->a275+$pdfdata->a276))/($pdfdata->a274)*100,2); ?></td>
        </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class II</td>
        <td id="tblclm2"><? echo $pdfdata->a277; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a278; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a279; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a277-($pdfdata->a278+$pdfdata->a279)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a277-($pdfdata->a278+$pdfdata->a279))/($pdfdata->a277)*100,2); ?></td>
      </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class III</td>
        <td id="tblclm2"><? echo $pdfdata->a280; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a281; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a282; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a280-($pdfdata->a281+$pdfdata->a282)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a280-($pdfdata->a281+$pdfdata->a282))/($pdfdata->a280)*100,2); ?></td>
        </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class IV</td>
        <td id="tblclm2"><? echo $pdfdata->a283; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a284; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a285; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a283-($pdfdata->a284+$pdfdata->a285)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a283-($pdfdata->a284+$pdfdata->a285))/($pdfdata->a283)*100,2); ?></td>
      </tr>
      <tr>
        <th colspan="7" id="tblhdp">Union Health &amp; Family Welfare Center (under DGHS)</th>
      </tr>
      <tr>
        <td width="8%" rowspan="2" id="tblclm1">Class I</td>
        <td width="10%" id="tblclm2">Doctor</td>
        <td id="tblclm2"><? echo $pdfdata->a286; ?></td>
        <td width="13%" id="tblclm2"><? echo $pdfdata->a287; ?></td>
        <td width="13%" id="tblclm2"><? echo $pdfdata->a288; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a286-($pdfdata->a287+$pdfdata->a288)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a286-($pdfdata->a287+$pdfdata->a288))/($pdfdata->a286)*100,2); ?></td>
      </tr>
      <tr>
        <td id="tblclm2">Non Doctor</td>
        <td id="tblclm2"><? echo $pdfdata->a289; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a290; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a291; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a289-($pdfdata->a290+$pdfdata->a291)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a289-($pdfdata->a290+$pdfdata->a291))/($pdfdata->a289)*100,2); ?></td>
        </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class II</td>
        <td id="tblclm2"><? echo $pdfdata->a292; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a293; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a294; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a292-($pdfdata->a293+$pdfdata->a294)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a292-($pdfdata->a293+$pdfdata->a294))/($pdfdata->a292)*100,2); ?></td>
      </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class III</td>
        <td id="tblclm2"><? echo $pdfdata->a295; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a296; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a297; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a295-($pdfdata->a296+$pdfdata->a297)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a295-($pdfdata->a296+$pdfdata->a297))/($pdfdata->a295)*100,2); ?></td>
        </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class IV</td>
        <td id="tblclm2"><? echo $pdfdata->a298; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a299; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a300; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a298-($pdfdata->a299+$pdfdata->a300)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a298-($pdfdata->a299+$pdfdata->a300))/($pdfdata->a298)*100,2); ?></td>
      </tr>
      <tr>
        <th colspan="7" id="tblhdp">Rural/Urban/Thana Dispensaries</th>
      </tr>
      <tr>
        <td width="8%" rowspan="2" id="tblclm1">Class I</td>
        <td width="10%" id="tblclm2">Doctor</td>
        <td id="tblclm2"><? echo $pdfdata->a301; ?></td>
        <td width="13%" id="tblclm2"><? echo $pdfdata->a302; ?></td>
        <td width="13%" id="tblclm2"><? echo $pdfdata->a303; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a301-($pdfdata->a302+$pdfdata->a303)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a301-($pdfdata->a302+$pdfdata->a303))/($pdfdata->a301)*100,2); ?></td>
      </tr>
      <tr>
        <td id="tblclm2">Non Doctor</td>
        <td id="tblclm2"><? echo $pdfdata->a304; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a305; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a306; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a304-($pdfdata->a305+$pdfdata->a306)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a304-($pdfdata->a305+$pdfdata->a306))/($pdfdata->a304)*100,2); ?></td>
        </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class II</td>
        <td id="tblclm2"><? echo $pdfdata->a307; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a308; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a309; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a307-($pdfdata->a308+$pdfdata->a309)); ?></td>
            <td id="tblclm2"><? echo number_format(($pdfdata->a307-($pdfdata->a308+$pdfdata->a309))/($pdfdata->a307)*100,2); ?></td>
      </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class III</td>
        <td id="tblclm2"><? echo $pdfdata->a310; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a311; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a312; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a310-($pdfdata->a311+$pdfdata->a312)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a310-($pdfdata->a311+$pdfdata->a312))/($pdfdata->a310)*100,2); ?></td>
        </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class IV</td>
        <td id="tblclm2"><? echo $pdfdata->a313; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a314; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a315; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a313-($pdfdata->a314+$pdfdata->a315)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a313-($pdfdata->a314+$pdfdata->a315))/($pdfdata->a313)*100,2); ?></td>
      </tr>
     <th colspan="7" id="tblhdp">Community Clinics</th>
        </tr>
      <tr>
        <td width="8%" rowspan="2" id="tblclm1">Class I</td>
        <td width="10%" id="tblclm2">Doctor</td>
        <td id="tblclm2"><? echo $pdfdata->a316; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a317; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a318; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a316-($pdfdata->a317+$pdfdata->a318)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a316-($pdfdata->a317+$pdfdata->a318))/($pdfdata->a316)*100,2); ?></td>
      </tr>
      <tr>
        <td id="tblclm2">Non Doctor</td>
        <td id="tblclm2"><? echo $pdfdata->a319; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a320; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a321; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a319-($pdfdata->a320+$pdfdata->a321)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a319-($pdfdata->a320+$pdfdata->a321))/($pdfdata->a319)*100,2); ?></td>
        </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class II</td>
        <td id="tblclm2"><? echo $pdfdata->a322; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a323; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a324; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a322-($pdfdata->a323+$pdfdata->a324)); ?></td>
            <td id="tblclm2"><? echo number_format(($pdfdata->a322-($pdfdata->a323+$pdfdata->a324))/($pdfdata->a322)*100,2); ?></td>
      </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class III</td>
        <td id="tblclm2"><? echo $pdfdata->a325; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a326; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a327; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a325-($pdfdata->a326+$pdfdata->a327)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a325-($pdfdata->a326+$pdfdata->a327))/($pdfdata->a325)*100,2); ?></td>
        </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class IV</td>
        <td id="tblclm2"><? echo $pdfdata->a328; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a329; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a330; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a328-($pdfdata->a329+$pdfdata->a330)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a328-($pdfdata->a329+$pdfdata->a330))/($pdfdata->a328)*100,2); ?></td>
      </tr>
    </tbody></table>
    </fieldset>
    </div>
    <p style="page-break-before:always"></p>
    <div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 7</div>
     <br>
    <fieldset>
    <legend>
    <div id="lgndp">Status of Human Resources (Class wise)</div>
    </legend>
    <table width="100%" border="1" align="center" cellspacing="0">
      <tbody>
      <tr>
        <td colspan="2" rowspan="2" id="tblhdp">Class</td>
        <td width="30%" rowspan="2" id="tblhdp">Sanctioned (No.)</td>
        <td colspan="2" id="tblhdp">Filled-up (No.)</td>
        <td width="13%" rowspan="2" id="tblhdp">Vacant (No.)</td>
        <td width="13%" rowspan="2" id="tblhdp">Vacancy %</td>
      </tr>
      <tr>
        <td width="13%" id="tblhdp">M</td>
        <td width="13%" id="tblhdp">F</td>
      </tr>
      
      <tr>
        <th colspan="7" id="tblhdp">Other Hospitals &amp; Clinics</th>
      </tr>
      <tr>
        <td width="8%" rowspan="2" id="tblclm1">Class I</td>
        <td width="10%" id="tblclm2">Doctor</td>
        <td id="tblclm2"><? echo $pdfdata->a346; ?></td>
        <td width="13%" id="tblclm2"><? echo $pdfdata->a347; ?></td>
        <td width="13%" id="tblclm2"><? echo $pdfdata->a348; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a346-($pdfdata->a347+$pdfdata->a348)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a346-($pdfdata->a347+$pdfdata->a348))/($pdfdata->a346)*100,2); ?></td>
      </tr>
      <tr>
        <td id="tblclm2">Non Doctor</td>
        <td id="tblclm2"><? echo $pdfdata->a349; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a350; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a351; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a349-($pdfdata->a350+$pdfdata->a351)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a349-($pdfdata->a350+$pdfdata->a351))/($pdfdata->a349)*100,2); ?></td>
        </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class II</td>
        <td id="tblclm2"><? echo $pdfdata->a352; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a353; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a354; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a352-($pdfdata->a353+$pdfdata->a354)); ?></td>
            <td id="tblclm2"><? echo number_format(($pdfdata->a352-($pdfdata->a353+$pdfdata->a354))/($pdfdata->a352)*100,2); ?></td>
      </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class III</td>
        <td id="tblclm2"><? echo $pdfdata->a355; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a356; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a357; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a355-($pdfdata->a356+$pdfdata->a357)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a355-($pdfdata->a356+$pdfdata->a357))/($pdfdata->a355)*100,2); ?></td>
        </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class IV</td>
        <td id="tblclm2"><? echo $pdfdata->a358; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a359; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a360; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a358-($pdfdata->a359+$pdfdata->a360)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a358-($pdfdata->a359+$pdfdata->a360))/($pdfdata->a358)*100,2); ?></td>
      </tr>
      <tr>
        <th colspan="7" id="tblhdp">Upazila Total</th>
      </tr>
      <tr>
        <td width="8%" rowspan="2" id="tblclm1">Class I</td>
        <td width="10%" id="tblclm2">Doctor</td>
        <td id="tblclm2"><? echo $pdfdata->a331; ?></td>
        <td width="13%" id="tblclm2"><? echo $pdfdata->a332; ?></td>
        <td width="13%" id="tblclm2"><? echo $pdfdata->a333; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a331-($pdfdata->a332+$pdfdata->a333)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a331-($pdfdata->a332+$pdfdata->a333))/($pdfdata->a331)*100,2); ?></td>
      </tr>
      <tr>
        <td id="tblclm2">Non Doctor</td>
        <td id="tblclm2"><? echo $pdfdata->a334; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a335; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a336; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a334-($pdfdata->a335+$pdfdata->a336)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a334-($pdfdata->a335+$pdfdata->a336))/($pdfdata->a334)*100,2); ?></td>
        </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class II</td>
        <td id="tblclm2"><? echo $pdfdata->a337; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a338; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a339; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a337-($pdfdata->a338+$pdfdata->a339)); ?></td>
            <td id="tblclm2"><? echo number_format(($pdfdata->a337-($pdfdata->a338+$pdfdata->a339))/($pdfdata->a337)*100,2); ?></td>
      </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class III</td>
        <td id="tblclm2"><? echo $pdfdata->a340; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a341; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a342; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a340-($pdfdata->a341+$pdfdata->a342)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a340-($pdfdata->a341+$pdfdata->a342))/($pdfdata->a340)*100,2); ?></td>
        </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class IV</td>
        <td id="tblclm2"><? echo $pdfdata->a343; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a344; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a345; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a343-($pdfdata->a344+$pdfdata->a345)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a343-($pdfdata->a344+$pdfdata->a345))/($pdfdata->a343)*100,2); ?></td>
      </tr>
    </tbody></table>
    </fieldset>
    <br>
    
    </div>
    <p style="page-break-before:always"></p>
    <div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 8</div>
     <br>
    <fieldset>
    <legend>
    <div id="lgndp">Status of Human Resources (No.) (Category wise)</div>
    </legend>
    <table width="100%" border="1" cellspacing="0">
      <tbody><tr>
        <td width="13%" rowspan="2" id="tblhdp">Manpower</td>
        <td colspan="2" id="tblhdp">Community Clinic</td>
        <td colspan="2" id="tblhdp">USC/UHFWC/RD</td>
        <td colspan="2" id="tblhdp">UHC</td>
        <td colspan="2" id="tblhdp">Others</td>
        <td width="10%" rowspan="2" id="tblhdp">IMCI trained</td>
        <td width="11%" rowspan="2" id="tblhdp">Basic EOC trained</td>
      </tr>
      <tr>
        <td width="10%" id="tblhdp">Sanctioned</td>
        <td width="8%" id="tblhdp">Filled-up</td>
        <td width="8%" id="tblhdp">Sanctioned</td>
        <td width="9%" id="tblhdp">Filled-up</td>
        <td width="8%" id="tblhdp">Sanctioned</td>
        <td width="8%" id="tblhdp">Filled-up</td>
        <td width="8%" id="tblhdp">Sanctioned</td>
        <td width="7%" id="tblhdp">Filled-up</td>
        </tr>
      <tr>
        <td id="tblclm1">Physician</td>
        <td id="tblclm2"><? echo $pdfdata->a361; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a362; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a363; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a364; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a365; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a366; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a367; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a368; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a369; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a370; ?></td>
      </tr>
      <tr>
        <td id="tblclm1">Nurse</td>
        <td id="tblclm2"><? echo $pdfdata->a371; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a372; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a373; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a374; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a375; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a376; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a377; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a378; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a379; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a380; ?></td>
      </tr>
      <tr>
        <td id="tblclm1">Medical Assistant</td>
        <td id="tblclm2"><? echo $pdfdata->a381; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a382; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a383; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a384; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a385; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a386; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a387; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a388; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a389; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a390; ?></td>
      </tr>
      <tr>
    <td id="tblclm1">Medical Technologist</td>
    <td id="tblclm2"><? echo $pdfdata->a391; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a392; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a393; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a394; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a395; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a396; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a397; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a398; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a399; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a400; ?></td>
      </tr>
      <tr>
    <td id="tblclm1">CHCP</td>
    <td id="tblclm2"><? echo $pdfdata->a401; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a402; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a403; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a404; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a405; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a406; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a407; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a408; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a409; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a410; ?></td>
      </tr>
      <tr>
    <td id="tblclm1">HI</td>
    <td id="tblclm2"><? echo $pdfdata->a411; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a412; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a413; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a414; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a415; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a416; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a417; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a418; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a419; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a420; ?></td>
      </tr>
      <tr>
    <td id="tblclm1">AHI</td>
    <td id="tblclm2"><? echo $pdfdata->a421; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a422; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a423; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a424; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a425; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a426; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a427; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a428; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a429; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a430; ?></td>
      </tr>
      <tr>
    <td id="tblclm1">HA</td>
    <td id="tblclm2"><? echo $pdfdata->a431; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a432; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a433; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a434; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a435; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a436; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a437; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a438; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a439; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a440; ?></td>
      </tr>
      <tr>
    <td id="tblclm1">CSBA trained***</td>
    <td id="tblclm2"><? echo $pdfdata->a441; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a442; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a443; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a444; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a445; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a446; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a447; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a448; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a449; ?></td>
    <td id="tblclm2"><? echo $pdfdata->a450; ?></td>
      </tr>
    </tbody></table>
    </fieldset>
    <br>
    
    </div>
    <p style="page-break-before:always"></p>
    <div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 9</div>
     <br>
    <fieldset>
    <legend><div id="lgndp">Existing equipments at Upazila Health Office</div></legend>
    <table width="100%" border="1" cellspacing="0">
      <tr>
        <td width="35%" rowspan="2" id="tblhdp">Equipment</td>
        <td width="11%" rowspan="2" id="tblhdp">Total (No.)</td>
        <td width="13%" rowspan="2" id="tblhdp">Functional (No.)</td>
        <td colspan="2" id="tblhdp">Non-functional</td>
        <td width="14%" rowspan="2" id="tblclm2">Not Installed (No.)</td>
      </tr>
        <tr>
          <td width="15%" id="tblhdp">Repairable (No.)</td>
          <td width="12%" id="tblhdp">Non-repairable (No.)</td>
        </tr>
        <tbody>
         <tr>
        <th colspan="6" id="tblhdp">Radiology equipment</th>
        </tr>
      <tr>
        <td id="tblclm1">X-ray machine (100 mA)</td>
        <td id="tblclm2"><? echo ($pdfdata->a451+$pdfdata->a452+$pdfdata->a453+$pdfdata->a454); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a451; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a452; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a453; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a454; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">X-ray machine (300 mA)</td>
        <td id="tblclm2"><? echo ($pdfdata->a455+$pdfdata->a456+$pdfdata->a457+$pdfdata->a458); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a455; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a456; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a457; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a458; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">X-ray machine (500 mA)</td>
        <td id="tblclm2"><? echo ($pdfdata->a459+$pdfdata->a460+$pdfdata->a461+$pdfdata->a462); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a459; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a460; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a461; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a462; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">X-ray machine (digital)</td>
        <td id="tblclm2"><? echo ($pdfdata->a463+$pdfdata->a464+$pdfdata->a465+$pdfdata->a466); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a463; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a464; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a465; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a466; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">X-ray machine (portable)</td>
        <td id="tblclm2"><? echo ($pdfdata->a467+$pdfdata->a468+$pdfdata->a469+$pdfdata->a470); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a467; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a468; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a469; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a470; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Dental X-ray unit</td>
        <td id="tblclm2"><? echo ($pdfdata->a471+$pdfdata->a472+$pdfdata->a473+$pdfdata->a474); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a471; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a472; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a473; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a474; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Spiral CT Scan</td>
        <td id="tblclm2"><? echo ($pdfdata->a475+$pdfdata->a476+$pdfdata->a477+$pdfdata->a478); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a475; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a477; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a478; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a479; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">C-arm</td>
        <td id="tblclm2"><? echo ($pdfdata->a480+$pdfdata->a481+$pdfdata->a482+$pdfdata->a483); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a480; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a481; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a482; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a483; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Mamogram machine</td>
        <td id="tblclm2"><? echo ($pdfdata->a484+$pdfdata->a485+$pdfdata->a486+$pdfdata->a487); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a484; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a485; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a486; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a486; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Dehumidifier</td>
        <td id="tblclm2"><? echo ($pdfdata->a487+$pdfdata->a488+$pdfdata->a489+$pdfdata->a490); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a487; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a488; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a489; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a490; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">MRI machine</td>
        <td id="tblclm2"><? echo ($pdfdata->a491+$pdfdata->a492+$pdfdata->a493+$pdfdata->a494); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a491; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a492; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a493; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a494; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Ultrasonogram machine</td>
        <td id="tblclm2"><? echo ($pdfdata->a495+$pdfdata->a496+$pdfdata->a497+$pdfdata->a498); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a495; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a496; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a497; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a498; ?></td>
        </tr>
      <tr>
        <th colspan="6" id="tblhdp">Anesthesiology/surgical equipment</th>
        </tr>
      <tr>
        <td id="tblclm1">Anesthesia machine with ventilator</td>
        <td id="tblclm2"><? echo ($pdfdata->a499+$pdfdata->a500+$pdfdata->a501+$pdfdata->a502); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a499; ?></td>
        <td width="15%" id="tblclm2"><? echo $pdfdata->a500; ?></td>
        <td width="12%" id="tblclm2"><? echo $pdfdata->a501; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a502; ?></td>
      </tr>
      <tr>
        <td id="tblclm1">Anesthesia machine without ventilator</td>
        <td id="tblclm2"><? echo ($pdfdata->a503+$pdfdata->a504+$pdfdata->a505+$pdfdata->a506); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a503; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a504; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a505; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a506; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Autoclave</td>
        <td id="tblclm2"><? echo ($pdfdata->a507+$pdfdata->a508+$pdfdata->a509+$pdfdata->a510); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a507; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a508; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a509; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a510; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Electric cautery machine</td>
        <td id="tblclm2"><? echo ($pdfdata->a511+$pdfdata->a512+$pdfdata->a513+$pdfdata->a514); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a511; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a512; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a513; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a514; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Diathermy machine</td>
        <td id="tblclm2"><? echo ($pdfdata->a515+$pdfdata->a516+$pdfdata->a517+$pdfdata->a518); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a515; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a516; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a517; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a518; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Operating microscope</td>
        <td id="tblclm2"><? echo ($pdfdata->a519+$pdfdata->a520+$pdfdata->a521+$pdfdata->a522); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a519; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a520; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a521; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a522; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Ceiling mounting OT Light</td>
        <td id="tblclm2"><? echo ($pdfdata->a523+$pdfdata->a524+$pdfdata->a525+$pdfdata->a526); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a523; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a524; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a525; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a526; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Portable OT Light</td>
        <td id="tblclm2"><? echo ($pdfdata->a527+$pdfdata->a528+$pdfdata->a529+$pdfdata->a530); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a527; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a528; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a529; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a530; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Fracture table</td>
        <td id="tblclm2"><? echo ($pdfdata->a531+$pdfdata->a532+$pdfdata->a533+$pdfdata->a534); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a531; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a532; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a533; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a534; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Hydrolic OT Table</td>
        <td id="tblclm2"><? echo ($pdfdata->a535+$pdfdata->a536+$pdfdata->a537+$pdfdata->a538); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a535; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a536; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a537; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a538; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Sterilizer</td>
        <td id="tblclm2"><? echo ($pdfdata->a539+$pdfdata->a540+$pdfdata->a541+$pdfdata->a542); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a539; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a540; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a541; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a542; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Sucker machine (electric)</td>
        <td id="tblclm2"><? echo ($pdfdata->a543+$pdfdata->a544+$pdfdata->a545+$pdfdata->a546); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a543; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a544; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a545; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a546; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Ventilator</td>
        <td id="tblclm2"><? echo ($pdfdata->a547+$pdfdata->a548+$pdfdata->a549+$pdfdata->a550); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a547; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a548; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a549; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a550; ?></td>
        </tr>
   </tbody>
  </table>
  <br />
  </fieldset>
    <br>
    
    </div>
    <p style="page-break-before:always"></p>
    <div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 10</div>
     <br>
    <fieldset>
    <legend><div id="lgndp">Existing equipments at Upazila Health Office</div></legend>
      <table width="100%" border="1" cellspacing="0">
        <tr>
        <td width="33%" rowspan="2" id="tblhdp">Equipment</td>
        <td width="13%" rowspan="2" id="tblhdp">Total (No.)</td>
        <td width="16%" rowspan="2" id="tblhdp">Functional (No.)</td>
        <td colspan="2" id="tblhdp">Non-functional</td>
        <td width="13%" rowspan="2" id="tblclm2">Not Installed (No.)</td>
        </tr>
        <tr>
          <td width="13%" id="tblhdp">Repairable (No.)</td>
          <td width="12%" id="tblhdp">Non-repairable (No.)</td>
        </tr>
        <tr>
          <th colspan="6" id="tblhdp">Lab equipment</th>
        </tr>
      <tbody>
      <tr>
        <td id="tblclm1">Biochemical auto-analyzer</td>
        <td id="tblclm2"><? echo ($pdfdata->a595+$pdfdata->a596+$pdfdata->a597+$pdfdata->a598); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a595; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a596; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a597; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a598; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Centrifuge machine (electric)</td>
        <td id="tblclm2"><? echo ($pdfdata->a599+$pdfdata->a600+$pdfdata->a601+$pdfdata->a602); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a599; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a600; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a601; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a602; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Colorimeter</td>
        <td id="tblclm2"><? echo ($pdfdata->a603+$pdfdata->a604+$pdfdata->a605+$pdfdata->a606); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a603; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a604; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a605; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a606; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Electrolyte analyzer</td>
        <td id="tblclm2"><? echo ($pdfdata->a607+$pdfdata->a608+$pdfdata->a609+$pdfdata->a610); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a607; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a608; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a609; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a610; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">ELISA machine</td>
        <td id="tblclm2"><? echo ($pdfdata->a611+$pdfdata->a612+$pdfdata->a613+$pdfdata->a614); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a611; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a612; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a613; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a614; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Gas analyzer</td>
        <td id="tblclm2"><? echo ($pdfdata->a615+$pdfdata->a616+$pdfdata->a617+$pdfdata->a618); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a615; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a616; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a617; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a618; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Hormone analyzer</td>
        <td id="tblclm2"><? echo ($pdfdata->a619+$pdfdata->a620+$pdfdata->a621+$pdfdata->a622); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a619; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a620; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a621; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a622; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Blood cell counter</td>
        <td id="tblclm2"><? echo ($pdfdata->a623+$pdfdata->a624+$pdfdata->a625+$pdfdata->a626); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a623; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a624; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a625; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a626; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Microscope (binocular)</td>
        <td id="tblclm2"><? echo ($pdfdata->a627+$pdfdata->a628+$pdfdata->a629+$pdfdata->a630); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a627; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a628; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a629; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a630; ?></td>
        </tr>
        <tr>
          <th colspan="6" id="tblhdp">Obstetric equipment</th>
        </tr>
        <tr>
          <td id="tblclm1">Fetal Monitor</td>
          <td id="tblclm2"><? echo ($pdfdata->a631+$pdfdata->a632+$pdfdata->a633+$pdfdata->a634); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a631; ?></td>
          <td width="13%" id="tblclm2"><? echo $pdfdata->a632; ?></td>
          <td width="12%" id="tblclm2"><? echo $pdfdata->a633; ?></td>
          <td width="13%" id="tblclm2"><? echo $pdfdata->a634; ?></td>
        </tr>
        <tr>
          <th colspan="6" id="tblhdp">Ophthalmic equipment</th>
        </tr>
        <tr>
          <td id="tblclm1">FACO machine</td>
          <td id="tblclm2"><? echo ($pdfdata->a635+$pdfdata->a636+$pdfdata->a637+$pdfdata->a638); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a635; ?></td>
          <td width="13%" id="tblclm2"><? echo $pdfdata->a636; ?></td>
          <td width="12%" id="tblclm2"><? echo $pdfdata->a637; ?></td>
          <td width="13%" id="tblclm2"><? echo $pdfdata->a638; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Retinoscope</td>
          <td id="tblclm2"><? echo ($pdfdata->a639+$pdfdata->a640+$pdfdata->a641+$pdfdata->a642); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a639; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a640; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a641; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a642; ?></td>
        </tr>
        <tr>
          <th colspan="6" id="tblhdp">Pediatric equipment</th>
        </tr>
        <tr>
          <td id="tblclm1">Baby incubator</td>
          <td id="tblclm2"><? echo ($pdfdata->a643+$pdfdata->a644+$pdfdata->a645+$pdfdata->a646); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a643; ?></td>
          <td width="13%" id="tblclm2"><? echo $pdfdata->a644; ?></td>
          <td width="12%" id="tblclm2"><? echo $pdfdata->a645; ?></td>
          <td width="13%" id="tblclm2"><? echo $pdfdata->a646; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Phototherapy unit</td>
          <td id="tblclm2"><? echo ($pdfdata->a647+$pdfdata->a648+$pdfdata->a649+$pdfdata->a650); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a647; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a648; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a649; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a650; ?></td>
        </tr>      
      </tbody>
      </table>
      <br />
      </fieldset>
    <br>
    
    </div>
    <p style="page-break-before:always"></p>
    <div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 11</div>
     <br>
    <fieldset>
    <legend><div id="lgndp">Existing equipments at Upazila Health Office</div></legend>
      <table width="100%" border="1" cellspacing="0">
        <tr>
        <td width="33%" rowspan="2" id="tblhdp">Equipment</td>
        <td width="13%" rowspan="2" id="tblhdp">Total (No.)</td>
        <td width="16%" rowspan="2" id="tblhdp">Functional (No.)</td>
        <td colspan="2" id="tblhdp">Non-functional</td>
        <td width="13%" rowspan="2" id="tblclm2">Not Installed (No.)</td>
        </tr>
        <tr>
          <td width="13%" id="tblhdp">Repairable (No.)</td>
          <td width="12%" id="tblhdp">Non-repairable (No.)</td>
        </tr>
       <tr>
          <th colspan="6" id="tblhdp">Blood bank equipment</th>
        </tr>
      <tbody>
      <tr>
        <td id="tblclm1">Blood bank centrifuge</td>
        <td id="tblclm2"><? echo ($pdfdata->a651+$pdfdata->a652+$pdfdata->a653+$pdfdata->a654); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a651; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a652; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a653; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a654; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Laminar flow hood</td>
        <td id="tblclm2"><? echo ($pdfdata->a655+$pdfdata->a656+$pdfdata->a657+$pdfdata->a658); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a655; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a656; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a657; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a658; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">pH meter</td>
        <td id="tblclm2"><? echo ($pdfdata->a659+$pdfdata->a660+$pdfdata->a661+$pdfdata->a662); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a659; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a660; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a661; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a662; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Hemoglobin photometer</td>
        <td id="tblclm2"><? echo ($pdfdata->a663+$pdfdata->a664+$pdfdata->a665+$pdfdata->a666); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a663; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a664; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a665; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a666; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Blood bank refrigerator</td>
        <td id="tblclm2"><? echo ($pdfdata->a667+$pdfdata->a668+$pdfdata->a669+$pdfdata->a670); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a667; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a668; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a669; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a670; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Blood plasma seperating machine</td>
        <td id="tblclm2"><? echo ($pdfdata->a671+$pdfdata->a672+$pdfdata->a673+$pdfdata->a674); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a671; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a672; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a673; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a674; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Platelet seperating machine</td>
        <td id="tblclm2"><? echo ($pdfdata->a675+$pdfdata->a676+$pdfdata->a677+$pdfdata->a678); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a675; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a676; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a677; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a678; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Deep freeze (plasma)</td>
        <td id="tblclm2"><? echo ($pdfdata->a679+$pdfdata->a680+$pdfdata->a681+$pdfdata->a682); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a679; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a680; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a681; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a682; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Deep freeze (RBC)</td>
        <td id="tblclm2"><? echo ($pdfdata->a683+$pdfdata->a684+$pdfdata->a685+$pdfdata->a686); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a683; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a684; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a685; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a686; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Refrigerator</td>
        <td id="tblclm2"><? echo ($pdfdata->a687+$pdfdata->a688+$pdfdata->a689+$pdfdata->a690); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a687; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a688; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a689; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a690; ?></td>
        </tr>
        <tr>
          <th colspan="6" id="tblhdp">Psichiatry equipment</th>
        </tr>
        <tr>
          <td id="tblclm1">ECT machine</td>
          <td id="tblclm2"><? echo ($pdfdata->a691+$pdfdata->a692+$pdfdata->a693+$pdfdata->a694); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a691; ?></td>
          <td width="13%" id="tblclm2"><? echo $pdfdata->a692; ?></td>
          <td width="12%" id="tblclm2"><? echo $pdfdata->a693; ?></td>
          <td width="13%" id="tblclm2"><? echo $pdfdata->a694; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">EEG machine</td>
          <td id="tblclm2"><? echo ($pdfdata->a695+$pdfdata->a696+$pdfdata->a697+$pdfdata->a698); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a695; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a696; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a697; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a698; ?></td>
        </tr>
        <tr>
          <th colspan="6" id="tblhdp">Urology equipment</th>
        </tr>
        <tr>
          <td id="tblclm1">Cystoscopic machine</td>
          <td id="tblclm2"><? echo ($pdfdata->a699+$pdfdata->a700+$pdfdata->a701+$pdfdata->a702); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a699; ?></td>
          <td width="13%" id="tblclm2"><? echo $pdfdata->a700; ?></td>
          <td width="12%" id="tblclm2"><? echo $pdfdata->a701; ?></td>
          <td width="13%" id="tblclm2"><? echo $pdfdata->a702; ?></td>
        </tr>
        <tr>
          <th colspan="6" id="tblhdp">Vehicles</th>
        </tr>
      <tbody>
        <tr>
          <td id="tblclm1">Ambulance</td>
          <td id="tblclm2"><? echo ($pdfdata->a703+$pdfdata->a704+$pdfdata->a705+$pdfdata->a706); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a703; ?></td>
          <td width="13%" id="tblclm2"><? echo $pdfdata->a704; ?></td>
          <td width="12%" id="tblclm2"><? echo $pdfdata->a705; ?></td>
          <td width="13%" id="tblclm2"><? echo $pdfdata->a706; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Bus</td>
          <td id="tblclm2"><? echo ($pdfdata->a707+$pdfdata->a708+$pdfdata->a709+$pdfdata->a710); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a707; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a708; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a709; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a710; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Jeep</td>
          <td id="tblclm2"><? echo ($pdfdata->a711+$pdfdata->a712+$pdfdata->a713+$pdfdata->a714); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a711; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a712; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a713; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a714; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Microbus</td>
          <td id="tblclm2"><? echo ($pdfdata->a715+$pdfdata->a716+$pdfdata->a717+$pdfdata->a718); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a715; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a716; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a717; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a718; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Pickup</td>
          <td id="tblclm2"><? echo ($pdfdata->a719+$pdfdata->a720+$pdfdata->a721+$pdfdata->a722); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a719; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a720; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a721; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a722; ?></td>
        </tr>
      </tbody>
      </table>
      <br />
      </fieldset>
    <br>
    
    </div>
    <p style="page-break-before:always"></p>
    <div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 12</div>
     <br>
    <fieldset>
    <legend>
    <div id="lgndp">Existing equipments at Upazila Health Office</div>
    </legend>
      <table width="100%" border="1" cellspacing="0">
		<tr>
        <td width="33%" rowspan="2" id="tblhdp">Equipment</td>
        <td width="13%" rowspan="2" id="tblhdp">Total (No.)</td>
        <td width="16%" rowspan="2" id="tblhdp">Functional (No.)</td>
        <td colspan="2" id="tblhdp">Non-functional</td>
        <td width="9%" rowspan="2" id="tblclm2">Not Installed</td>
        </tr>
        <tr>
          <td width="13%" id="tblhdp">Repairable (No.)</td>
          <td width="14%" id="tblhdp">Non-repairable (No.)</td>
        </tr>
      <tbody>
      <tr>
      <th colspan="6" id="tblhdp">Air conditioner</th>
        </tr>
      <tr>
        <td id="tblclm1">Air conditioner (split type)</td>
        <td id="tblclm2"><? echo ($pdfdata->a723+$pdfdata->a724+$pdfdata->a725+$pdfdata->a726); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a723; ?></td>
        <td width="11%" id="tblclm2"><? echo $pdfdata->a724; ?></td>
        <td width="15%" id="tblclm2"><? echo $pdfdata->a725; ?></td>
        <td width="10%" id="tblclm2"><? echo $pdfdata->a726; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Air conditioner (window)</td>
        <td id="tblclm2"><? echo ($pdfdata->a727+$pdfdata->a728+$pdfdata->a729+$pdfdata->a730); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a727; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a728; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a729; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a730; ?></td>
        </tr>
        <tr>
          <th colspan="6" id="tblhdp">Generator</th>
        </tr>
        <tr>
          <td id="tblclm1">Generator (diesel/petrol)</td>
          <td id="tblclm2"><? echo ($pdfdata->a731+$pdfdata->a732+$pdfdata->a733+$pdfdata->a734); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a731; ?></td>
          <td width="12%" id="tblclm2"><? echo $pdfdata->a732; ?></td>
          <td width="15%" id="tblclm2"><? echo $pdfdata->a733; ?></td>
          <td width="10%" id="tblclm2"><? echo $pdfdata->a734; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Generator (gas)</td>
          <td id="tblclm2"><? echo ($pdfdata->a735+$pdfdata->a736+$pdfdata->a737+$pdfdata->a738); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a735; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a736; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a737; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a738; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Solar panel</td>
          <td id="tblclm2"><? echo ($pdfdata->a739+$pdfdata->a740+$pdfdata->a741+$pdfdata->a742); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a739; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a740; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a741; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a742; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">IPS</td>
          <td id="tblclm2"><? echo ($pdfdata->a743+$pdfdata->a744+$pdfdata->a745+$pdfdata->a746); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a743; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a744; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a745; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a746; ?></td>
        </tr>
        <tr>
          <th colspan="6" id="tblhdp">ICT equipment</th>
        </tr>
        <tr>
          <td id="tblclm1">Computer (desktop)</td>
          <td id="tblclm2"><? echo ($pdfdata->a747+$pdfdata->a748+$pdfdata->a749+$pdfdata->a750); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a747; ?></td>
          <td width="12%" id="tblclm2"><? echo $pdfdata->a748; ?></td>
          <td width="15%" id="tblclm2"><? echo $pdfdata->a749; ?></td>
          <td width="10%" id="tblclm2"><? echo $pdfdata->a750; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Laptop</td>
          <td id="tblclm2"><? echo ($pdfdata->a751+$pdfdata->a752+$pdfdata->a753+$pdfdata->a754); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a751; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a752; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a753; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a754; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Printer (dot matrix)</td>
          <td id="tblclm2"><? echo ($pdfdata->a755+$pdfdata->a756+$pdfdata->a757+$pdfdata->a758); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a755; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a756; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a757; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a758; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Printer (inkjet)</td>
          <td id="tblclm2"><? echo ($pdfdata->a759+$pdfdata->a760+$pdfdata->a761+$pdfdata->a762); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a759; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a760; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a761; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a762; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Printer (laser)</td>
          <td id="tblclm2"><? echo ($pdfdata->a763+$pdfdata->a764+$pdfdata->a765+$pdfdata->a766); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a763; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a764; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a765; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a766; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Scanner</td>
          <td id="tblclm2"><? echo ($pdfdata->a767+$pdfdata->a768+$pdfdata->a769+$pdfdata->a770); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a767; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a768; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a769; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a770; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">UPS</td>
          <td id="tblclm2"><? echo ($pdfdata->a771+$pdfdata->a772+$pdfdata->a773+$pdfdata->a774); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a771; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a772; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a773; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a774; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Fax</td>
          <td id="tblclm2"><? echo ($pdfdata->a775+$pdfdata->a776+$pdfdata->a777+$pdfdata->a778); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a775; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a776; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a777; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a778; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Intercom</td>
          <td id="tblclm2"><? echo ($pdfdata->a779+$pdfdata->a780+$pdfdata->a781+$pdfdata->a782); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a779; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a780; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a781; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a782; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Internet fixed line</td>
          <td id="tblclm2"><? echo ($pdfdata->a783+$pdfdata->a784+$pdfdata->a785+$pdfdata->a786); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a783; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a784; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a785; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a786; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Internet wireless line</td>
          <td id="tblclm2"><? echo ($pdfdata->a787+$pdfdata->a788+$pdfdata->a789+$pdfdata->a790); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a787; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a788; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a789; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a790; ?></td>
        </tr>
        <tr>
          <td id="tblclm1">Multimedia</td>
          <td id="tblclm2"><? echo ($pdfdata->a791+$pdfdata->a792+$pdfdata->a793+$pdfdata->a794); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a791; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a792; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a793; ?></td>
          <td id="tblclm2"><? echo $pdfdata->a794; ?></td>
        </tr>
      </tbody>
      </table>
      <br />
      </fieldset>
    <br>
    
    </div>
    <p style="page-break-before:always"></p>
    <div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 13</div>
     <br>
    <fieldset>
    <legend><div id="lgndp">Existing equipments at Upazila Health Office</div></legend>
      <table width="100%" border="1" cellspacing="0">
        <tr>
        <td width="33%" rowspan="2" id="tblhdp">Equipment</td>
        <td width="13%" rowspan="2" id="tblhdp">Total (No.)</td>
        <td width="16%" rowspan="2" id="tblhdp">Functional (No.)</td>
        <td colspan="2" id="tblhdp">Non-functional</td>
        <td width="9%" rowspan="2" id="tblclm2">Not Installed</td>
        </tr>
        <tr>
          <td width="13%" id="tblhdp">Repairable (No.)</td>
          <td width="14%" id="tblhdp">Non-repairable (No.)</td>
        </tr>
      <tbody>
        <tr>
          <th colspan="6" id="tblhdp">OHP</th>
        </tr>
      <tr>
        <td id="tblclm1">PA system (Sound)</td>
        <td id="tblclm2"><? echo ($pdfdata->a795+$pdfdata->a796+$pdfdata->a797+$pdfdata->a798); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a795; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a796; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a797; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a798; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Land phone</td>
        <td id="tblclm2"><? echo ($pdfdata->a799+$pdfdata->a800+$pdfdata->a801+$pdfdata->a802); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a799; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a800; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a801; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a802; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Mobile phone</td>
        <td id="tblclm2"><? echo ($pdfdata->a803+$pdfdata->a804+$pdfdata->a805+$pdfdata->a806); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a803; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a804; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a805; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a806; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Photocopier machine</td>
        <td id="tblclm2"><? echo ($pdfdata->a807+$pdfdata->a808+$pdfdata->a809+$pdfdata->a810); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a807; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a808; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a809; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a810; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Digital camera</td>
        <td id="tblclm2"><? echo ($pdfdata->a811+$pdfdata->a812+$pdfdata->a813+$pdfdata->a814); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a811; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a812; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a813; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a814; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Video camera</td>
        <td id="tblclm2"><? echo ($pdfdata->a815+$pdfdata->a816+$pdfdata->a817+$pdfdata->a818); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a815; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a816; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a817; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a818; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Total</td>
        <td id="tblclm2"><? echo $totalGrand; ?></td>
        <td id="tblclm2"><? echo $totalFunc; ?></td>
        <td id="tblclm2"><? echo $totalRepairable; ?></td>
        <td id="tblclm2"><? echo $totalNonRepairable; ?></td>
        <td id="tblclm2"><? echo $totalNotInstalled; ?></td>
      </tr>
      </tbody>
    </table>
    
    </fieldset>
    <br>
    
    </div>
    <p style="page-break-before:always"></p>
    <div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 14</div>
     <br>
    <fieldset>
    <legend>
    	<div id="lgndp">Important information and necessary issues for <? echo $pdfdata->orgname; ?> |</div></legend>
            <?php echo $pdfdata->a1100; ?>
        
    <br>
    </fieldset>
    </div>
    <p style="page-break-before:always"></p>