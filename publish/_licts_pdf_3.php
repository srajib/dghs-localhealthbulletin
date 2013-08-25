<?php echo $print; ?>
<div class="fullpage">
    	<div id="headlogo">
    		<br> &nbsp; <br>
            <table align="center">
             <tbody>
              <tr>
               <td align="center" valign="middle">
                 <p><a href="#"><img src="./publish_files/gov.jpg" height="110px" alt="BD GOV"></a><br>
                   <span class="heading">Ministry of Health and Family Welfare (MOHFW)</span><br>
                   <span class="subheading">HEALTH BULLETIN <? echo $pdfdata->lhb_year; ?></span><br>
                   <span style="color:#000; font-weight: bold;">The data belong to Jan-Dec <? echo ($pdfdata->lhb_year-1); ?></span><br>
                   <span class="subheading"><? echo $pdfdata->orgname; ?></span>
                </p>
                <p><span class="subheading" style="font-size: 18px">District: <? echo $pdfdata->distname; ?>, Division: <? echo $pdfdata->diviname; ?></span></p></td>
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
            <div id="prefacefooter"><? echo $pdfdata->a2; ?><br>
          <span class="control-label">Superintendent</span><br><? echo $pdfdata->orgname; ?></div>
     	</fieldset>
    </div>
    <p style="page-break-before:always"></p><div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 1</div>
        <fieldset>
        	<legend><div id="lgndp">Organization at a glance</div></legend>
                <div id="inputName"><span id="IName">Name of the District</span><span id="IInput"><? echo $pdfdata->distname; ?></span></div>
                <div id="inputName"><span id="IName">Name of Superitendent </span><span id="IInput"><? echo $pdfdata->a2; ?></span>
                </div>
                <div id="inputName"><span id="IName">Telephone No. </span><span id="IInput">0<? echo $pdfdata->a4; ?></span></div>
                <div id="inputName"><span id="IName">FAX No. </span><span id="IInput"><? echo $pdfdata->a5; ?></span></div>
                <div id="inputName"><span id="IName">Mobile No. </span><span id="IInput">0<? echo $pdfdata->a3; ?></span></div>
                <div id="inputName"><span id="IName">Email </span><span id="IInput"><? echo $pdfdata->a6; ?></span></div>
                <div id="inputName"><span id="IName">GPS location in the Hospital </span><span id="IInput"> Lati: <? echo number_format($pdfdata->a7,4); ?></span> And <span id="IInput"> Long: <? echo number_format($pdfdata->a8,4); ?></span></div>
                <div id="inputName"><span id="IName">No. of Unions in the District</span><span id="IInput"><? echo number_format($pdfdata->a9); ?></span></div>
                <div id="inputName"><span id="IName">No. of Households in the District </span><span id="IInput"><? echo number_format($pdfdata->a10); ?></span></div>
                <div id="inputName"><span id="IName">No. of Population in the District </span><span id="IInput"><? echo number_format($pdfdata->a11); ?></span></div>
                <div id="inputName"><span id="IName">Area of District in sq km </span><span id="IInput"><? echo number_format($pdfdata->a12,2); ?></span></div>
        </fieldset>
        
    </div>
    <p style="page-break-before:always"></p><div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 2</div>
        <fieldset>
            <legend>
            <div id="lgndp">Existing health facilities in the <span class="heading">District</span>/General Hospital</div></legend>
            <table width="100%" border="1" align="center" cellspacing="0">
                <tbody>
                  <tr>
                    <td width="60%"><div id="tblhdp">Facility Type</div></td>
                    <td width="20%"><div id="tblhdp">Total</div></td>
                    <td width="20%"><div id="tblhdp">No. of Beds</div></td>
                  </tr>
                  <tr>
                    <td id="tblclm1">District Hospital</td>
                    <td id="tblclm2"><? echo $pdfdata->a838; ?></td>
                    <td id="tblclm3"><? echo $pdfdata->a839; ?></td>
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
        
    </div>
        <p style="page-break-before:always"></p><div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 4</div>
    <fieldset>
    	<div class="indicators">
       	  <h3>Legends</h3>
        	<ul>
            	<li>R.P.W- </li>
                <li class="right">Registered Pregnanat Woman </li><div class="lclear"></div>
                <li>1st ANC-</li>
                <li class="right">No. of 1st ANC recipients </li><div class="lclear"></div>
                <li>R.P.W- </li>
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
                <li class="right">No. of PNC services provided to mother</li>
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
            <? echo number_format((($pdfdata->a95+$pdfdata->a96+$pdfdata->a97+$pdfdata->a98+$pdfdata->a99)/$pdfdata->a33)*100000,2); ?> per 100,000 live births.
</fieldset>
    
    </div>
        <p style="page-break-before:always"></p><div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 5</div>
     <br>
    <fieldset>
    <legend>
    <div id="lgndp"> No. of OPD &amp; Emergency visits at District/General Hospital</div></legend>
    <table width="100%" border="1" align="center" cellspacing="0">
      <tbody><tr>
        <td width="36%" rowspan="2" id="tblhdp">Health Facility</td>
        <td height="27" colspan="4"><div id="tblhdp">OPD</div></td>
        <td colspan="4"><div id="tblhdp">Emergency</div></td>
        </tr>
      <tr>
        <td width="5%" id="tblhdp">T</td>
        <td width="5%" id="tblhdp">M</td>
        <td width="5%" id="tblhdp">F</td>
        <td width="8%" id="tblhdp">Child</td>
        <td width="6%" id="tblhdp">T</td>
        <td width="5%" id="tblhdp">M</td>
        <td width="5%" id="tblhdp">F</td>
        <td width="7%" id="tblhdp">Child</td>
        </tr>
      <tr>
        <td id="tblclm1">District Hospital</td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a842)+($pdfdata->a843)+($pdfdata->a844)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a842); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a843); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a844); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a845)+($pdfdata->a846)+($pdfdata->a847)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a845); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a846); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a847); ?></td>
        </tr>
      </tbody>
    </table>
    </fieldset>
    <br>
    
    <fieldset>
        <legend>
        <div id="lgndp">No. of Admissions &amp; Deaths at District/General Hospital</div></legend>
        <table width="100%" border="1" align="center" cellspacing="0">
      <tbody><tr>
        <td width="36%" rowspan="2" id="tblhdp">Health Facility</td>
        <td colspan="4"><div id="tblhdp">Admission</div></td>
        <td colspan="4"><div id="tblhdp"> Death</div></td>
        </tr>
      <tr>
        <td width="6%" id="tblhdp">T</td>
        <td width="5%" id="tblhdp">M</td>
        <td width="5%" id="tblhdp">F</td>
        <td width="7%" id="tblhdp">Child</td>
        <td width="5%" id="tblhdp">T</td>
        <td width="4%" id="tblhdp">M</td>
        <td width="3%" id="tblhdp">F</td>
        <td width="6%" id="tblhdp">Child</td>
        </tr>
      <tr>
        <td id="tblclm1">District Hospital</td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a848)+($pdfdata->a849)+($pdfdata->a850)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a848); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a849); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a850); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a851)+($pdfdata->a852)+($pdfdata->a853)); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a851); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a852); ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a853); ?></td>
        </tr>
      </tbody>
    </table>
    </fieldset>
    <br>
    
    </div>
        <p style="page-break-before:always"></p><div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 6</div>
     <br>
      <fieldset>
    <legend>
    <div id="lgndp">Top 10 diseases according to the number of patients admitted in the District/General Hospital during the reporting period</div></legend>
    <table width="100%" border="1" align="center" cellspacing="0">
      <tbody><tr>
        <td height="34" colspan="2" id="tblhdp" style="text-align:right; padding-right:5px;">Total number of admitted  patients during the reporting period</td>
        <td colspan="2" id="tblclm3"><?php echo $pdfdata->a225; ?></td>
        </tr>
      <tr>
        <td width="10%" align="center"><div id="tblhdp">Serial No.</div></td>
        <td width="66%"><div id="tblhdp">ICD-10 Code with Disease Name</div></td>
        <td width="14%"><div id="tblhdp">No. of cases</div></td>
        <td width="10%"><div id="tblhdp"> % </div></td>
      </tr>
      <tr>
        <td align="center" id="tblclm1">1</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a226); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a227; ?></td>
        <td id="tblclm2"><?php echo number_format(($pdfdata->a227/$pdfdata->a225)*100,2); ?></td>
        </tr>
      <tr>
        <td align="center" id="tblclm1">2</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a228); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a229; ?></td>
        <td id="tblclm2"><?php echo number_format(($pdfdata->a229/$pdfdata->a225)*100,2); ?></td>
        </tr>
      <tr>
        <td align="center" id="tblclm1">3</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a230); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a231; ?></td>
        <td id="tblclm2"><?php echo number_format(($pdfdata->a231/$pdfdata->a225)*100,2); ?></td>
        </tr>
      <tr>
        <td align="center" id="tblclm1">4</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a232); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a233; ?></td>
        <td id="tblclm2"><?php echo number_format(($pdfdata->a233/$pdfdata->a225)*100,2); ?></td>
        </tr>
      <tr>
        <td align="center" id="tblclm1">5</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a234); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a235; ?></td>
        <td id="tblclm2"><?php echo number_format(($pdfdata->a235/$pdfdata->a225)*100,2); ?></td>
        </tr>
      <tr>
        <td align="center" id="tblclm1">6</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a236); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a237; ?></td>
        <td id="tblclm2"><?php echo number_format(($pdfdata->a237/$pdfdata->a225)*100,2); ?></td>
        </tr>
      <tr>
        <td align="center" id="tblclm1">7</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a238); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a239; ?></td>
        <td id="tblclm2"><?php echo number_format(($pdfdata->a239/$pdfdata->a225)*100,2); ?></td>
        </tr>
      <tr>
        <td align="center" id="tblclm1">8</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a240); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a241; ?></td>
        <td id="tblclm2"><?php echo number_format(($pdfdata->a241/$pdfdata->a225)*100,2); ?></td>
        </tr>
      <tr>
        <td align="center" id="tblclm1">9</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a242); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a243; ?></td>
        <td id="tblclm2"><?php echo number_format(($pdfdata->a243/$pdfdata->a225)*100,2); ?></td>
        </tr>
      <tr>
        <td align="center" id="tblclm1">10</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a244); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a245; ?></td>
        <td id="tblclm2"><?php echo number_format(($pdfdata->a245/$pdfdata->a225)*100,2); ?></td>
        </tr>
    </tbody></table>
    </fieldset>
    <br>
    
    </div>
        <p style="page-break-before:always"></p><div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 7</div>
     <br>
     <fieldset>
    <legend>
    <div id="lgndp">Top 10 diseases according to the number of deaths among admitted patients in the District/General Hospital during the reporting period</div></legend>
    <table width="100%" border="1" align="center" cellspacing="0">
      <tbody><tr>
        <td height="34" colspan="2" id="tblhdp">Total number of Deaths during the reporting period</td>
        <td colspan="2" id="tblclm3"><?php echo $pdfdata->a246; ?></td>
        </tr>
      <tr>
        <td width="10%" align="center"><div id="tblhdp">Serial No.</div></td>
        <td width="66%"><div id="tblhdp">ICD-10 Code with Disease Name</div></td>
        <td width="14%"><div id="tblhdp">No. of cases</div></td>
        <td width="10%"><div id="tblhdp"> % </div></td>
      </tr>
      <tr>
        <td align="center" id="tblclm1">1</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a247); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a248; ?></td>
        <td id="tblclm3"><?php echo number_format(($pdfdata->a248/$pdfdata->a246)*100,2); ?></td>
      </tr>
      <tr>
        <td align="center" id="tblclm1">2</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a249); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a250; ?></td>
        <td id="tblclm3"><?php echo number_format(($pdfdata->a250/$pdfdata->a246)*100,2); ?></td>
      </tr>
      <tr>
        <td align="center" id="tblclm1">3</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a251); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a252; ?></td>
        <td id="tblclm3"><?php echo number_format(($pdfdata->a252/$pdfdata->a246)*100,2); ?></td>
      </tr>
      <tr>
        <td align="center" id="tblclm1">4</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a253); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a254; ?></td>
        <td id="tblclm3"><?php echo number_format(($pdfdata->a254/$pdfdata->a246)*100,2); ?></td>
      </tr>
      <tr>
        <td align="center" id="tblclm1">5</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a255); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a256; ?></td>
        <td id="tblclm3"><?php echo number_format(($pdfdata->a256/$pdfdata->a246)*100,2); ?></td>
      </tr>
      <tr>
        <td align="center" id="tblclm1">6</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a257); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a258; ?></td>
        <td id="tblclm3"><?php echo number_format(($pdfdata->a258/$pdfdata->a246)*100,2); ?></td>
      </tr>
      <tr>
        <td align="center" id="tblclm1">7</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a259); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a260; ?></td>
        <td id="tblclm3"><?php echo number_format(($pdfdata->a260/$pdfdata->a246)*100,2); ?></td>
      </tr>
      <tr>
        <td align="center" id="tblclm1">8</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a261); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a262; ?></td>
        <td id="tblclm3"><?php echo number_format(($pdfdata->a262/$pdfdata->a246)*100,2); ?></td>
      </tr>
      <tr>
        <td align="center" id="tblclm1">9</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a263); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a264; ?></td>
        <td id="tblclm3"><?php echo number_format(($pdfdata->a64/$pdfdata->a246)*100,2); ?></td>
      </tr>
      <tr>
        <td align="center" id="tblclm1">10</td>
        <td id="tblclm2"><? echo icd10($pdfdata->a265); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a266; ?></td>
        <td id="tblclm3"><?php echo number_format(($pdfdata->a266/$pdfdata->a246)*100,2); ?></td>
        </tr>
    </tbody></table>
    </fieldset>
    <br>
    
    </div>
        <p style="page-break-before:always"></p><div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 8</div>
     <br>
     <fieldset>
    <legend><div id="lgndp">Water &amp; sanitation</div></legend>
    <table width="100%" border="1" align="center" cellspacing="0">
      <tbody><tr>
        <td width="73%"><div id="tblhdp">Indicators</div></td>
        <td width="27%"><div id="tblhdp">Upazila %</div></td>
        </tr>
      <tr>
        <td id="tblclm1">Coverage of households having access to safe drinking water (%)</td>
        <td id="tblclm2"><? echo $pdfdata->a267; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Coverage of households having access to sanitary latrines (%)</td>
        <td id="tblclm2"><? echo $pdfdata->a268; ?></td>
        </tr>
    </tbody></table>
    </fieldset>
    <br>
    <br>
    <fieldset>
    <legend>
    <div id="lgndp">Utilization of services at District/General Hospital</div></legend>
    <table width="100%" border="1" align="center" cellspacing="0">
      <tbody><tr>
        <td width="60%"><div id="tblhdp">Indicators</div></td>
        <td width="20%"><div id="tblhdp">Upazila</div></td>
        </tr>
        <tr>
        <td id="tblclm1">Total Patient days in District Hospital in 365 days (No.)</td>
        <td id="tblclm2"><? echo number_format($pdfdata->a1090,0); ?></td>
        </tr>
        <tr>
        <td id="tblclm1">Bed Occupancy Rates (%)</td>
        <td id="tblclm2"><? echo number_format($pdfdata->a1091,2); ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Average Length of Hospital Stay (No. of days per patient)</td>
        <td id="tblclm2"><? echo number_format($pdfdata->a1092,2); ?></td>
        </tr>        
         <tr>
        <td id="tblclm1">Hospital Death Rate (%)</td>
        <td id="tblclm2"><? echo number_format($pdfdata->a1093,2); ?></td>
        </tr>
        
    </tbody></table>
    </fieldset>
    <br>
    
    <br>
    
    
    </div>
        <p style="page-break-before:always"></p><div class="fullpage">
    <div style="width:100%; border="1" text-align:right;"><? echo $pageno ; ?> 9</div>
     <br>
    <fieldset>
    <legend>
    <div id="lgndp">Surgeries &amp; Interventions done in the District/General Hospital</div></legend>
    <table width="100%" align="center" border="1" cellpadding="0" cellspacing="0">
      <tbody><tr>
        <td width="60%"><div id="tblhdp">Type</div></td>
        <td width="20%"><div id="tblhdp">No.</div></td>
        </tr>
      <tr>
        <td id="tblclm1">Major Surgeries</td>
        <td id="tblclm2"><? echo $pdfdata->a269; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Minor Surgeries</td>
        <td id="tblclm2"><? echo $pdfdata->a270; ?></td>
        </tr>
    </tbody></table>
    </fieldset>
    <br>&nbsp;
    
    </div>
    <p style="page-break-before:always"></p><div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 10</div>
     <br>
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
        <th colspan="7" id="tblhdp">District Total</th>
      </tr>
      <tr>
        <td width="8%" rowspan="2" id="tblclm1">Class I</td>
        <td width="10%" id="tblclm2">Doctor</td>
        <td id="tblclm2"><? echo $pdfdata->a854; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a855; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a856; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a854-($pdfdata->a855+$pdfdata->a856)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a854-($pdfdata->a855+$pdfdata->a856))/($pdfdata->a854)*100,2); ?></td>
        </tr>
      <tr>
        <td id="tblclm2">Non Doctor</td>
        <td id="tblclm2"><? echo $pdfdata->a857; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a858; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a859; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a857-($pdfdata->a858+$pdfdata->a859)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a857-($pdfdata->a858+$pdfdata->a859))/($pdfdata->a857)*100,2); ?></td>
        </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class II</td>
        <td id="tblclm2"><? echo $pdfdata->a860; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a861; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a862; ?></td>
        <td id="tblclm2"><? echo number_format($pdfdata->a860-($pdfdata->a861+$pdfdata->a862)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a860-($pdfdata->a861+$pdfdata->a862))/($pdfdata->a860)*100,2); ?></td>
        </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class III</td>
        <td id="tblclm2"><? echo $pdfdata->a863; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a864; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a865; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a863-($pdfdata->a864+$pdfdata->a865)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a863-($pdfdata->a864+$pdfdata->a865))/($pdfdata->a863)*100,2); ?></td>
        </tr>
      <tr>
        <td colspan="2" id="tblclm1">Class IV</td>
        <td id="tblclm2"><? echo $pdfdata->a866; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a867; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a868; ?></td>
        <td id="tblclm2"><? echo ($pdfdata->a866-($pdfdata->a867+$pdfdata->a868)); ?></td>
        <td id="tblclm2"><? echo number_format(($pdfdata->a866-($pdfdata->a867+$pdfdata->a868))/($pdfdata->a866)*100,2); ?></td>
        </tr>
    </tbody>
    <tr>      
    </table>
    </fieldset>
    <br>&nbsp;
    
    </div>
    <br>
    </div>
    <p style="page-break-before:always"></p><div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 11</div>
     <br>
    <fieldset>
    <legend><div id="lgndp">Status of Human Resources (Category wise)</div></legend>
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
    </tbody></table>
    </fieldset>
    <br>
    
    </div>
    <p style="page-break-before:always"></p><div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 12</div>
     <br>
    <fieldset>
    <legend><div id="lgndp">Existing equipments at <span class="heading">District/General Hospital</span></div></legend>
    <table width="100%" border="1" cellspacing="0">
      <tr>
        <td width="42%" rowspan="2" id="tblhdp">Equipment</td>
        <td width="12%" rowspan="2" id="tblhdp">Total (No.)</td>
        <td width="11%" rowspan="2" id="tblhdp">Functional (No.)</td>
        <td colspan="2" id="tblhdp">Non-functional</td>
        <td width="8%" rowspan="2" id="tblclm2">Not Installed</td>
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
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 13</div>
     <br>
    <fieldset>
    <legend><div id="lgndp">Existing equipments at <span class="heading">District/General Hospital</span></div></legend>
  <table width="100%" border="1" cellspacing="0">
      <tbody>
      <tr>
        <td width="33%" rowspan="2" id="tblhdp">Equipment</td>
        <td width="13%" rowspan="2" id="tblhdp">Total (No.)</td>
        <td width="16%" rowspan="2" id="tblhdp">Functional (No.)</td>
        <td colspan="2" id="tblhdp">Non-functional</td>
        <td width="9%" rowspan="2" id="tblclm2">Not Installed</td>
        </tr>
      <tr>
        <td width="14%" id="tblhdp">Repairable (No.)</td>
        <td width="15%" id="tblhdp">Non-repairable (No.)</td>
        </tr>
      <tr>
        <th colspan="6" id="tblhdp">Cardiology equipment</th>
      </tr>        
      <tr>
        <td id="tblclm1">Coronary angiogram machine</td>
        <td id="tblclm2"><? echo ($pdfdata->a551+$pdfdata->a552+$pdfdata->a553+$pdfdata->a554); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a551; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a552; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a553; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a554; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Debrililator</td>
        <td id="tblclm2"><? echo ($pdfdata->a555+$pdfdata->a556+$pdfdata->a557+$pdfdata->a558); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a555; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a556; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a557; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a558; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">ECG machine</td>
        <td id="tblclm2"><? echo ($pdfdata->a559+$pdfdata->a560+$pdfdata->a561+$pdfdata->a562); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a559; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a560; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a561; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a562; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Ecocardiogram machine</td>
        <td id="tblclm2"><? echo ($pdfdata->a563+$pdfdata->a564+$pdfdata->a565+$pdfdata->a566); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a563; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a564; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a565; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a566; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Cardiac monitor</td>
        <td id="tblclm2"><? echo ($pdfdata->a567+$pdfdata->a568+$pdfdata->a569+$pdfdata->a570); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a567; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a568; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a569; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a570; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Holter monitor</td>
        <td id="tblclm2"><? echo ($pdfdata->a571+$pdfdata->a572+$pdfdata->a573+$pdfdata->a574); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a571; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a572; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a573; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a574; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Nebulizer machine</td>
        <td id="tblclm2"><? echo ($pdfdata->a575+$pdfdata->a576+$pdfdata->a577+$pdfdata->a578); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a575; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a576; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a577; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a578; ?></td>
        </tr>
      <tr>
        <td id="tblclm1">Pulse oximeter</td>
        <td id="tblclm2"><? echo ($pdfdata->a579+$pdfdata->a580+$pdfdata->a581+$pdfdata->a582); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a579; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a580; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a581; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a582; ?></td>
        </tr>
      <tr>
        <th colspan="6" id="tblhdp">Dental equipment</th>
        </tr>
      <tr>
        <td id="tblclm1">Dental unit</td>
        <td id="tblclm2"><? echo ($pdfdata->a583+$pdfdata->a584+$pdfdata->a585+$pdfdata->a586); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a583; ?></td>
        <td width="14%" id="tblclm2"><? echo $pdfdata->a584; ?></td>
        <td width="15%" id="tblclm2"><? echo $pdfdata->a585; ?></td>
        <td width="9%" id="tblclm2"><? echo $pdfdata->a586; ?></td>
      </tr>
      <tr>
        <th colspan="6" id="tblhdp">Gastroeneterology equipment</th>
        </tr>
      <tr>
        <td id="tblclm1">Endoscopy machine</td>
        <td id="tblclm2"><? echo ($pdfdata->a587+$pdfdata->a588+$pdfdata->a589+$pdfdata->a590); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a587; ?></td>
        <td width="14%" id="tblclm2"><? echo $pdfdata->a588; ?></td>
        <td width="14%" id="tblclm2"><? echo $pdfdata->a589; ?></td>
        <td width="10%" id="tblclm2"><? echo $pdfdata->a590; ?></td>
      </tr>
      <tr>
        <td id="tblclm1">Laparoscopic machine</td>
        <td id="tblclm2"><? echo ($pdfdata->a591+$pdfdata->a592+$pdfdata->a593+$pdfdata->a594); ?></td>
        <td id="tblclm2"><? echo $pdfdata->a591; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a592; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a593; ?></td>
        <td id="tblclm2"><? echo $pdfdata->a594; ?></td>
        </tr>
      </tbody>
      </table>
      <br />
      </fieldset>
    <br>
    
    </div>
    <p style="page-break-before:always"></p>
    <div class="fullpage">
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 14</div>
     <br>
    <fieldset>
    <legend><div id="lgndp">Existing equipments at <span class="heading">District/General Hospital</span></div></legend>
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
          <td width="14%" id="tblclm2"><? echo $pdfdata->a633; ?></td>
          <td width="10%" id="tblclm2"><? echo $pdfdata->a634; ?></td>
        </tr>
        <tr>
          <th colspan="6" id="tblhdp">Ophthalmic equipment</th>
        </tr>
        <tr>
          <td id="tblclm1">FACO machine</td>
          <td id="tblclm2"><? echo ($pdfdata->a635+$pdfdata->a636+$pdfdata->a637+$pdfdata->a638); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a635; ?></td>
          <td width="13%" id="tblclm2"><? echo $pdfdata->a636; ?></td>
          <td width="14%" id="tblclm2"><? echo $pdfdata->a637; ?></td>
          <td width="10%" id="tblclm2"><? echo $pdfdata->a638; ?></td>
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
          <td width="14%" id="tblclm2"><? echo $pdfdata->a645; ?></td>
          <td width="10%" id="tblclm2"><? echo $pdfdata->a646; ?></td>
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
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 15</div>
     <br>
    <fieldset>
    <legend><div id="lgndp">Existing equipments at <span class="heading">District/General Hospital</span></div></legend>
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
          <td width="12%" id="tblclm2"><? echo $pdfdata->a692; ?></td>
          <td width="15%" id="tblclm2"><? echo $pdfdata->a693; ?></td>
          <td width="10%" id="tblclm2"><? echo $pdfdata->a694; ?></td>
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
          <td width="12%" id="tblclm2"><? echo $pdfdata->a700; ?></td>
          <td width="15%" id="tblclm2"><? echo $pdfdata->a701; ?></td>
          <td width="10%" id="tblclm2"><? echo $pdfdata->a702; ?></td>
        </tr>
        <tr>
          <th colspan="6" id="tblhdp">Vehicles</th>
        </tr>
      <tbody>
        <tr>
          <td id="tblclm1">Ambulance</td>
          <td id="tblclm2"><? echo ($pdfdata->a703+$pdfdata->a704+$pdfdata->a705+$pdfdata->a706); ?></td>
          <td id="tblclm2"><? echo $pdfdata->a703; ?></td>
          <td width="12%" id="tblclm2"><? echo $pdfdata->a704; ?></td>
          <td width="15%" id="tblclm2"><? echo $pdfdata->a705; ?></td>
          <td width="10%" id="tblclm2"><? echo $pdfdata->a706; ?></td>
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
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 16</div>
     <br>
    <fieldset>
    <legend><div id="lgndp">Existing equipments at <span class="heading">District/General Hospital</span></div></legend>
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
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 17</div>
     <br>
    <fieldset>
    <legend><div id="lgndp">Existing equipments at <span class="heading">District/General Hospital</span></div></legend>
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
    <div style="width:100%; text-align:right;"><? echo $pageno ; ?> 18</div>
     <br>
    <fieldset>
    <legend>
    	<div id="lgndp">Important information and necessary issues for <? echo $pdfdata->orgname; ?> |</div></legend>
            <?php echo $pdfdata->a1100; ?>
        
    <br>
    </fieldset>
    </div>
    <p style="page-break-before:always"></p>