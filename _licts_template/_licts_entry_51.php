<form method="post">
		<!-- main content -->

           <div id="contentwrapper">
                <div class="main_content">
                  <?php include "_nav.php"; ?>
					<div class="row-fluid">
						<div class="span12">               	                    
							<h3 class="heading">Data Entry Form for Tertiary Hospital<?php echo $msg; ?>
                            </h3>
                           	<div class="tabbable tabs-left">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#inst" data-toggle="tab">Instruction</a></li>
									<li><a href="#page_1" data-toggle="tab" class="pop_over" data-original-title="Basic Information" data-placement="right">Page 1</a></li>
									<li><a href="#page_2" data-toggle="tab" class="pop_over" data-original-title="Existing Health Facilities" data-placement="right">Page 2</a></li>
                                    <li><a href="#page_3" data-toggle="tab" class="pop_over" data-original-title="Child Health and MDG-4" data-placement="right">Page 3</a></li>
									<li><a href="#page_4" data-toggle="tab" class="pop_over" data-original-title="Maternal Health and MDG-5" data-placement="right">Page 4</a></li>
									<li><a href="#page_5" data-toggle="tab" class="pop_over" data-original-title="No. of OPD, Emergency visits, Admissions & Deaths" data-placement="right">Page 5</a></li>
                                    <li><a href="#page_6" data-toggle="tab" class="pop_over" data-original-title="Morbidity Profile" data-placement="right">Page 6</a></li>
									<li><a href="#page_7" data-toggle="tab" class="pop_over" data-original-title="Mortality Profile" data-placement="right">Page 7</a></li>
									<li><a href="#page_8" data-toggle="tab" class="pop_over" data-original-title="Water & sanitation" data-placement="right">Page 8</a></li>
                                    <li><a href="#page_9" data-toggle="tab" class="pop_over" data-original-title="Surgeries & Interventions done in the Tertiary Hospital" data-placement="right">Page 9</a></li>
									<li><a href="#page_10" data-toggle="tab" class="pop_over" data-original-title="Class wise Manpower in the Tertiary Hospital" data-placement="right">Page 10</a></li>
									<li><a href="#page_11" data-toggle="tab" class="pop_over" data-original-title="Human resources on the date of data entry" data-placement="right">Page 11</a></li>
									<li><a href="#page_12" data-toggle="tab" class="pop_over" data-original-title="Existing equipments at Tertiary Hospital" data-placement="right">Page 12</a></li>                                    																																																									 									<li><a href="#page_13" data-toggle="tab" class="pop_over" data-original-title="Additional Information" data-placement="right">Page 13</a></li>
                                    <li><a href="#page_14" data-toggle="tab" class="pop_over" data-original-title="Important information and necessary issues" data-placement="right">Page 14</a></li>
								</ul>
                                <div class="tab-content">
									<div class="tab-pane active" id="inst">

										<p>
                                        <div class="span10">
									<div class="form-horizontal well">                                    
											<h2>You have access to create local health bulletin (year <?php echo $openyear; ?>,data belongs to <?php echo $openyear-1; ?>) for your organization</h2>
                                         </div>
                                         </div>
										</p>

									</div>
                                    
									<div class="tab-pane" id="page_1">
										<p>
                                        <div class="span11 form-horizontal well">
                                            
                                                <fieldset>
                                                    <p class="f_legend">Basic Information</p>
                                                    <div class="control-group">
                                                        <label class="control-label">Your preface</label>
                                                        <div class="controls">
                                                            <textarea name="a1" id="txtarea_limit_chars" cols="30" rows="5" class="span10" placeholder="Maximum 3000 characters"><? echo $viewdata->a1; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Name of Director</label>
                                                        <div class="controls">
                                                            <input value="<? echo $viewdata->a2; ?>" name="a2" type="text" class="span10" id="a2" />													
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Mobile No.</label>
                                                        <div class="controls">
                                                            <input value="<? echo $viewdata->a3; ?>" name="a3" type="text" class="span10 mobile_phone" />													
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Telephone No.</label>
                                                        <div class="controls">
                                                            <input value="<? echo $viewdata->a4; ?>" name="a4" type="text" class="span10 onlynumber" id="a4"/>													
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Fax No.</label>
                                                        <div class="controls">
                                                            <input value="<? echo $viewdata->a5; ?>" name="a5" type="text" class="span10 onlynumber" id="a5" />													
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Email</label>
                                                        <div class="controls">
                                                            <input value="<? echo $viewdata->a6; ?>" name="a6" type="email" class="span10" id="a6" />													
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">GPS Location of Facility</label>
                                                        <div class="controls">
                                                        	
                                                            <span style="float: left;">Lat: <input value="<? echo $viewdata->a7; ?>" name="a7" type="text" class="span10 lat" id="a7" placeholder="lattitude" /></span><span style="float: left;">Long:<input value="<? echo $viewdata->a8; ?>" name="a8" type="text" class="span10 long" id="a8" placeholder="longitude"/>													</span>
                                                      </div>
                                                    </div>                                            											
                                                </fieldset>
                                            
                                		</div>
										</p>
									</div>
                                    
                                    <div class="tab-pane" id="page_2">
										<p>
                                        <div class="span11 form-horizontal well">
											
											<p class="f_legend">Existing Health Facilities (Year <? echo ($openyear-1); ?>)</p>	
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Facility Type</th>
                                                        <th>Total No. </th>
                                                        <th>No. of Beds</th>
                                                    </tr>
                                                </thead>
                                                <tr>
                                                	<td>Medical College Hospital</td>
                                                    <td><input value="<? echo $viewdata->a836; ?>" name="a836" type="text" class=" onlynumber span12" id="a836" /></td>
                                                    <td><input value="<? echo $viewdata->a837; ?>" name="a837" type="text" class=" onlynumber span12" id="a837" /></td>
                                                </tr>
                                            </table>
                                		</div>
										</p>
									</div>
                                    <div class="tab-pane" id="page_3">
										<p>
                                        <div class="span11 form-horizontal well">
											
										  <p class="f_legend">Child Health &amp; MDG-4 (Year <? echo ($openyear-1); ?>)</p>	
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Indicator</th>
                                                        <th> Total </th>
                                                    </tr>
                                                </thead>
                                                <tr>
                                                	<td>Total No. of live births in the Hospital</td>
                                                    <td><input value="<? echo $viewdata->a33; ?>" name="a33" type="text" class="onlynumber span12" id="a33" /></td>
                                                </tr>
                                                <tr>
                                                	<td>Total No. of still births in the Hospital </td>
                                                    <td><input value="<? echo $viewdata->a34; ?>" name="a34" type="text" class="onlynumber span12" id="a34" /></td>
                                                </tr>
                                                <tr>
                                                	<td>Total No. of neonatal deaths (0-28 days) in the Hospital </td>
                                                    <td><input value="<? echo $viewdata->a35; ?>" name="a35" type="text" class="onlynumber span12" id="a35" /></td>
                                                </tr>
                                                <tr>
                                                	<td>Total No. of infant deaths (0-11 months) in the Hospital</td>
                                                    <td><input value="<? echo $viewdata->a36; ?>" name="a36" type="text" class="onlynumber span12" id="a36" /></td>
                                                </tr>
                                            	<tr>
                                                	<td>Total No. of under 5 deaths (0-5 years) in the Hospital</td>
                                                    <td><input value="<? echo $viewdata->a37; ?>" name="a37" type="text" class="onlynumber span12" id="a37" /></td>
                                                </tr>
                                                <tr>
                                                	<td>Total No. of children treated under IMCI Program</td>
                                                    <td><input value="<? echo $viewdata->a38; ?>" name="a38" type="text" class="onlynumber span12" id="a38" /></td>
                                                </tr>
                                            </table>
                                		</div>
										</p>
									</div>
                                    <div class="tab-pane" id="page_4">
										<p>
                                      <div class="span11 form-horizontal well">
											
										<p class="f_legend">Maternal health &amp; MDG-5 (Year <? echo ($openyear-1); ?>) </p>	
                                          <table class="table table-striped table-bordered">
                                              <thead>
                                                  <tr>
                                                      <th>Indicator</th>
                                                      <th>Hospital Total</th>
                                                  </tr>
                                              </thead>
                                              <tr>
                                               	  <td>No. of registered pregnant women</td>
                                                  <td><input value="<? echo $viewdata->a40; ?>" name="a40" type="text" class="onlynumber span12" id="a40" onchange="doMath('a40','a41','a42','a43','a44','a40_44')" /></td>
                                              </tr>
                                              <tr>
                                               	  <td>No.  of 1st ANC recipients </td>
                                                  <td><input value="<? echo $viewdata->a45; ?>" name="a45" type="text" class="onlynumber span12" id="a45" onchange="doMath('a45','a46','a47','a48','a49','a45_49')" /></td>
                                              </tr>
                                              <tr>
                                                <td>No.  of 4th ANC recipients </td>
                                                <td><input value="<? echo $viewdata->a50; ?>" name="a50" type="text" class="onlynumber span12" id="a50" onchange="doMath('a50','a51','a52','a53','a54','a50_54')" /></td>
                                              </tr>
                                              <tr>
                                                <td>No.  of all ANC recipients </td>
                                                <td><input value="<? echo $viewdata->a55; ?>" name="a55" type="text" class="onlynumber span12" id="a55" onchange="doMath('a55','a56','a57','a58','a59','a55_59')" /></td>
                                              </tr>
                                              <tr>
                                               	  <td>No. of complicated pregnancies treated</td>
                                                  <td><input value="<? echo $viewdata->a60; ?>" name="a60" type="text" class="onlynumber span12" id="a60" onchange="doMath('a60','a61','a62','a63','a64','a60_64')" /></td>
                                              </tr>
                                              <tr>
                                               	  <td>No. of normal deliveries</td>
                                                  <td><input value="<? echo $viewdata->a65; ?>" name="a65" type="text" class="onlynumber span12" id="a65" onchange="doMath('a65','a66','a67','a68','a69','a65_69')" /></td>
                                              </tr>
                                           	  <tr>
                                               	  <td>No. of vaginal deliveries with breech or face presentation</td>
                                                  <td><input value="<? echo $viewdata->a70; ?>" name="a70" type="text" class="onlynumber span12" id="a70" onchange="doMath('a70','a71','a72','a73','a74','a70_74')" /></td>
                                              </tr>
                                              <tr>
                                               	  <td>No. of cesarean deliveries</td>
                                                  <td><input value="<? echo $viewdata->a75; ?>" name="a75" type="text" class="onlynumber span12" id="a75" onchange="doMath('a75','a76','a77','a78','a79','a75_79')" /></td>
                                              </tr>
                                              <tr>
                                               	  <td>No. of forceps deliveries</td>
                                                  <td><input value="<? echo $viewdata->a80; ?>" name="a80" type="text" class="onlynumber span12" id="a80" onchange="doMath('a80','a81','a82','a83','a84','a80_84')" /></td>
                                              </tr>
                                              <tr>
                                               	  <td>Total No. of deliveries </td>
                                                  <td><input value="<? echo $viewdata->a85; ?>" name="a85" type="text" class="onlynumber span12" id="a85" onchange="doMath('a85','a86','a87','a88','a89','a85_89')" /></td>
                                              </tr>
                                              <tr>
                                               	  <td>No. of PNC services provided to mother</td>
                                                  <td><input value="<? echo $viewdata->a90; ?>" name="a90" type="text" class="onlynumber span12" id="a90" onchange="doMath('a90','a91','a92','a93','a94','a90_94')" /></td>
                                              </tr>
                                              <tr>
                                               	  <td>No. of maternal death during pregnancy or within 42 days after child birth</td>
                                                  <td><input value="<? echo $viewdata->a95; ?>" name="a95" type="text" class="onlynumber span12" id="a95" onchange="doMath('a95','a96','a97','a98','a99','a95_99')" /></td>
                                              </tr>
                                          </table>
                                		</div>
										</p>
									</div>
                                    <div class="tab-pane" id="page_5">
										<p>
                                      <div class="span11 form-horizontal well">
											
										<p class="f_legend">No. of OPD &amp; Emergency visits, Admissions &amp; Deaths (Year <? echo ($openyear-1); ?>) </p>	
                                          <table class="table table-striped table-bordered">
                                              <thead>
                                                  <tr>
                                                      <th rowspan="2">Health Facility</th>
                                                      <th colspan="3">OPD visits (Year <span class="f_legend"><? echo ($openyear-1); ?></span>)</th>
                                                  </tr>
                                                    <tr>
                                                      <th> Male (total)</th>
                                                      <th> Female (total)</th>
                                                      <th> Child (under 5)</th>
                                                    </tr>
                                              </thead>
                                              <tr>
                                               	  <td>MCH</td>
                                                  <td><input value="<? echo $viewdata->a842; ?>" name="a842" type="text" class="onlynumber span12" id="a842" /></td>
                                                  <td><input value="<? echo $viewdata->a843; ?>" name="a843" type="text" class="onlynumber span12" id="a843" /></td>
                                                  <td><input value="<? echo $viewdata->a844; ?>" name="a844" type="text" class="onlynumber span12" id="a844" /></td>
                                              </tr>
                                          </table>
                                          <br />
										<hr />
                                          <table class="table table-striped table-bordered">
                                              <thead>
                                                  <tr>
                                                      <th rowspan="2">Health Facility</th>
                                                      <th colspan="3">Emergency visits (Year <span class="f_legend"><? echo ($openyear-1); ?></span>)</th>
                                                  </tr>
                                                    <tr>
                                                      <th> Male (total)</th>
                                                      <th> Female (total)</th>
                                                      <th> Child (under 5)</th>
                                                    </tr>
                                              </thead>
                                              <tr>
                                               	  <td>MCH</td>
                                                  <td><input value="<? echo $viewdata->a845; ?>" name="a845" type="text" class="onlynumber span12" id="a845" /></td>
                                                  <td><input value="<? echo $viewdata->a846; ?>" name="a846" type="text" class="onlynumber span12" id="a846" /></td>
                                                  <td><input value="<? echo $viewdata->a847; ?>" name="a847" type="text" class="onlynumber span12" id="a847" /></td>
                                              </tr>
                                          </table>
                                          <br />
										<hr />
                                          <table class="table table-striped table-bordered">
                                              <thead>
                                                  <tr>
                                                      <th rowspan="2">Health Facility</th>
                                                      <th colspan="3">Admissions (Year <span class="f_legend"><? echo ($openyear-1); ?></span>)</th>
                                                  </tr>
                                                    <tr>
                                                      <th> Male (total)</th>
                                                      <th> Female (total)</th>
                                                      <th> Child (under 5)</th>
                                                    </tr>
                                              </thead>
                                              <tr>
                                               	  <td>MCH</td>
                                                  <td><input value="<? echo $viewdata->a848; ?>" name="a848" type="text" class="onlynumber span12" id="a848" /></td>
                                                  <td><input value="<? echo $viewdata->a849; ?>" name="a849" type="text" class="onlynumber span12" id="a849" /></td>
                                                  <td><input value="<? echo $viewdata->a850; ?>" name="a850" type="text" class="onlynumber span12" id="a850" /></td>
                                              </tr>
                                          </table>
                                          <br />
										<hr />
                                          <table class="table table-striped table-bordered">
                                              <thead>
                                                  <tr>
                                                      <th rowspan="2">Health Facility</th>
                                                      <th colspan="3">Deaths (Year <span class="f_legend"><? echo ($openyear-1); ?></span>)</th>
                                                  </tr>
                                                    <tr>
                                                      <th> Male (total)</th>
                                                      <th> Female (total)</th>
                                                      <th> Child (under 5)</th>
                                                    </tr>
                                              </thead>
                                              <tr>
                                               	  <td>MCH</td>
                                                  <td><input value="<? echo $viewdata->a851; ?>" name="a851" type="text" class="onlynumber span12" id="a851" /></td>
                                                  <td><input value="<? echo $viewdata->a852; ?>" name="a852" type="text" class="onlynumber span12" id="a852" /></td>
                                                  <td><input value="<? echo $viewdata->a853; ?>" name="a853" type="text" class="onlynumber span12" id="a853" /></td>
                                              </tr>
                                          </table>
                               		  </div>
										</p>
									</div>
   
                                    <div class="tab-pane" id="page_6">
										<p>
                                      <div class="span11 form-horizontal well">
											
										<p class="f_legend">Morbidity Profile (Year <? echo ($openyear-1); ?>)<span style="float:right;"><a href="http://apps.who.int/classifications/icd10/browse/2010/en" target="_blank" style="color:#F00;">Click here for ICD-10 Code</a></span><br />
</p>	
                                          <table class="table table-striped table-bordered">
                                              <thead>
                                                  <tr>
                                                      <th colspan="2">Total No. of admitted patients during the reporting period</th>
                                                      <th><input value="<? echo $viewdata->a225; ?>" name="a225" type="text" class="onlynumber span12" id="a143" /></th>
                                                  </tr>
                                              <tr>
                                                  <th>No.</th>
                                               	  <th>ICD-10 Code</th>
                                                  <th>No. of Cases</th>
                                              </tr>
                                               </thead>
                                              <tr>
                                                  <td>1</td>
												  <td><? icd10_data("a226",$viewdata->a226); ?></td>
												  <td><input value="<? echo $viewdata->a227; ?>" name="a227" type="text" class="span12 onlynumber" id="a227" /></td>
                                              </tr>
                                              <tr>
                                                  <td>2</td>
                                               	  <td><? icd10_data("a228",$viewdata->a228); ?></td>
                                                  <td><input value="<? echo $viewdata->a229; ?>" name="a229" type="text" class="span12 onlynumber" id="a229" /></td>
                                              </tr>
                                              <tr>
                                                  <td>3</td>
                                               	  <td><? icd10_data("a230",$viewdata->a230); ?></td>
                                                  <td><input value="<? echo $viewdata->a231; ?>" name="a231" type="text" class="span12 onlynumber" id="a230" /></td>
                                              </tr>
                                           	  <tr>
                                            	  <td>4</td>
                                               	  <td><? icd10_data("a232",$viewdata->a232); ?></td>
                                                  <td><input value="<? echo $viewdata->a233; ?>" name="a233" type="text" class="span12 onlynumber" id="a151" /></td>
                                              </tr>
                                              <tr>
                                                  <td>5</td>
                                               	  <td><? icd10_data("a234",$viewdata->a234); ?></td>
                                                  <td><input value="<? echo $viewdata->a235; ?>" name="a235" type="text" class="span12 onlynumber" id="a153" /></td>
                                              </tr>
                                              <tr>
                                                  <td>6</td>
                                               	  <td><? icd10_data("a236",$viewdata->a236); ?></td>
                                                  <td><input value="<? echo $viewdata->a237; ?>" name="a237" type="text" class="span12 onlynumber" id="a155" /></td>
                                              </tr>
                                              <tr>
                                                  <td>7</td>
                                               	  <td><? icd10_data("a238",$viewdata->a238); ?></td>
                                                  <td><input value="<? echo $viewdata->a239; ?>" name="a239" type="text" class="span12 onlynumber" id="a157" /></td>
                                              </tr>
                                              <tr>
                                                  <td>8</td>
                                               	  <td><? icd10_data("a240",$viewdata->a240); ?></td>
                                                  <td><input value="<? echo $viewdata->a241; ?>" name="a241" type="text" class="span12 onlynumber" id="a159" /></td>
                                              </tr>
                                              <tr>
                                                  <td>9</td>
                                               	  <td><? icd10_data("a242",$viewdata->a242); ?></td>
                                                  <td><input value="<? echo $viewdata->a243; ?>" name="a243" type="text" class="span12 onlynumber" id="a161" /></td>
                                              </tr>
                                              <tr>
                                                  <td>10</td>
                                               	  <td><? icd10_data("a244",$viewdata->a244); ?></td>
                                                  <td><input value="<? echo $viewdata->a245; ?>" name="a245" type="text" class="span12 onlynumber" id="a163" /></td>
                                              </tr>
                                          </table>
                                		</div>
										</p>
									</div>
                                    <div class="tab-pane" id="page_7">
										<p>
                                      <div class="span11 form-horizontal well">
											
										<p class="f_legend">Mortality Profile (Year <? echo ($openyear-1); ?>)<span style="float:right;"><a href="http://apps.who.int/classifications/icd10/browse/2010/en" target="_blank" style="color:#F00;">Click here for ICD-10 Code</a></span><br />
</p>	
                                        <table class="table table-striped table-bordered">
                                              <thead>
                                                  <tr>
                                                      <th colspan="2">Total No. of Deaths during the reporting period</th>
                                                      <th><input value="<? echo $viewdata->a246; ?>" name="a246" type="text" class="span12 onlynumber" id="a164" /></th>
                                                  </tr>
                                              <tr>
                                                  <th>No.</th>
                                               	  <th>ICD-10 Code</th>
                                                  <th>No. of Cases</th>
                                              </tr>
                                               </thead>
                                              <tr>
                                                  <td>1</td>
                                               	  <td><? icd10_data("a247",$viewdata->a247); ?></td>
                                                  <td><input value="<? echo $viewdata->a248; ?>" name="a248" type="text" class="span12 onlynumber" id="a166" /></td>
                                              </tr>
                                              <tr>
                                                  <td>2</td>
                                               	  <td><? icd10_data("a249",$viewdata->a249); ?></td>
                                                  <td><input value="<? echo $viewdata->a250; ?>" name="a250" type="text" class="span12 onlynumber" id="a168" /></td>
                                              </tr>
                                              <tr>
                                                  <td>3</td>
                                               	  <td><? icd10_data("a251",$viewdata->a251); ?></td>
                                                  <td><input value="<? echo $viewdata->a252; ?>" name="a252" type="text" class="span12 onlynumber" id="a170" /></td>
                                              </tr>
                                           	  <tr>
                                            	  <td>4</td>
                                               	  <td><? icd10_data("a253",$viewdata->a253); ?></td>
                                                  <td><input value="<? echo $viewdata->a254; ?>" name="a254" type="text" class="span12 onlynumber" id="a172" /></td>
                                              </tr>
                                              <tr>
                                                  <td>5</td>
                                               	  <td><? icd10_data("a255",$viewdata->a255); ?></td>
                                                  <td><input value="<? echo $viewdata->a256; ?>" name="a256" type="text" class="span12 onlynumber" id="a174" /></td>
                                              </tr>
                                              <tr>
                                                  <td>6</td>
                                               	  <td><? icd10_data("a257",$viewdata->a257); ?></td>
                                                  <td><input value="<? echo $viewdata->a258; ?>" name="a258" type="text" class="span12 onlynumber" id="a176" /></td>
                                              </tr>
                                              <tr>
                                                  <td>7</td>
                                               	  <td><? icd10_data("a259",$viewdata->a259); ?></td>
                                                  <td><input value="<? echo $viewdata->a260; ?>" name="a260" type="text" class="span12 onlynumber" id="a178" /></td>
                                              </tr>
                                              <tr>
                                                  <td>8</td>
                                               	  <td><? icd10_data("a261",$viewdata->a261); ?></td>
                                                  <td><input value="<? echo $viewdata->a262; ?>" name="a262" type="text" class="span12 onlynumber" id="a180" /></td>
                                              </tr>
                                              <tr>
                                                  <td>9</td>
                                               	  <td><? icd10_data("a263",$viewdata->a263); ?></td>
                                                  <td><input value="<? echo $viewdata->a264; ?>" name="a264" type="text" class="span12 onlynumber" id="a182" /></td>
                                              </tr>
                                              <tr>
                                                  <td>10</td>
                                               	  <td><? icd10_data("a265",$viewdata->a265); ?></td>
                                                  <td><input value="<? echo $viewdata->a266; ?>" name="a266" type="text" class="span12 onlynumber" id="a184" /></td>
                                              </tr>
                                          </table>
                                		</div>
										</p>
                                    </div>

                                    <div class="tab-pane" id="page_8">
                                      <div class="span11 form-horizontal well">
											
											<p class="f_legend">Water & sanitation (Year <? echo ($openyear-1); ?>)</p>	
                         <div class="alert alert-danger alert-login" style="text-align:center;">
                         Not applicable for Medical College Hospital.Please go to next page.
						</div>
                                            <!-- <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Indicator</th>
                                                        <th>Hospital %</th>
                                                    </tr>
                                                </thead>
                                                <tr>
                                                	<td>Coverage of households having access to safe drinking water (%) </td>
                                                    <td><input value="<? echo $viewdata->a267; ?>" name="a267" type="text" class="percentnumber" id="a185" /></td>
                                                </tr>
                                                <tr>
                                                	<td>Coverage of households having access to sanitary latrines (%) </td>
                                                    <td><input value="<? echo $viewdata->a268; ?>" name="a268" type="text" class="percentnumber" id="a186" /></td>
                                                </tr>
                                            </table> --->
                                		</div>
										</p>
									</div>
                                    <div class="tab-pane" id="page_9">
										<p>
                                        <div class="span11 form-horizontal well">
											
											<p class="f_legend">Surgeries done in the Hospital (Year <? echo ($openyear-1); ?>)</p>	
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Type</th>
                                                        <th>Total No.</th>
                                                    </tr>
                                                </thead>
                                                <tr>
                                                	<td>Major Surgeries </td>
                                                    <td><input value="<? echo $viewdata->a269; ?>" name="a269" type="text" class="span12 onlynumber" id="a187" /></td>
                                                </tr>
                                                <tr>
                                                	<td>Minor Surgeries </td>
                                                    <td><input value="<? echo $viewdata->a270; ?>" name="a270" type="text" class="span12 onlynumber" id="a188" /></td>
                                                </tr>
                                            </table>
                                            <div class="tab-pane active">

                                        <div class="span12" style="color:#900; text-align:justify; padding:10px;">
									<p>
1. Minor surgery is any invasive operative procedure in which only skin or mucus membranes and connective tissue is resected e.g. vascular cutdown for catheter placement, implanting pumps in subcutaneous tissue. Procedures in which the surgical field cannot be effectively disinfected, e.g. tooth extractions and gingival grafts, will generally be considered minor. This category also includes biopsy, an invasive operative procedure for procurement of tissue samples or body fluids using a needle or trocar. 
Minor surgical procedures may be done in a laboratory setting using appropriate aseptic technique, including a clean work area, preparation and disinfection of the surgical site including clipping of the hair and surgical scrub of the skin, draping of the surgical site with sterile drapes, mask by the surgeon and any assistants working in the surgical field.
</p>
<p>
2. Major surgery is any invasive operative procedure in which a more extensive resection is performed, e.g. a body cavity is entered, organs are removed, or normal anatomy is altered. In general, if a mesenchymal barrier is opened (pleural cavity, peritoneum, meninges), the surgery is considered major. For surgical procedures that do not clearly fall in the above categories, the chance for significant inadvertent microbial contamination is to be a primary consideration. Generally, the classification of major will be applied only to procedures in which the animal is anticipated to survive longer than 24 hours. If the animal is to be terminated in less than 24 hours, techniques applicable to minor surgical procedures may be used. A procedure previously classified as minor will be changed to major if microbial contamination proves to be a significant problem. In general, the standards for major surgery apply only to non-rodent species. However, if microbial contamination proves to be a significant problem with procedures carried out in rodents, the standards for non-rodent species must be applied. 
All major surgical procedures in non-rodent species must use appropriate surgical techniques and must be conducted in facilities intended for survival surgery and used only for that purpose. The facilities must be designed and managed to insure a level of sanitation appropriate for aseptic surgery. The operating room should contain only the equipment and supplies required to support the procedure being performed. A separate area, apart from the surgery room, must be provided for preparing the animal for surgery although the final surgical preparation, not to include clipping of hair, may be conducted in the surgery. An area equipped with surgical scrub sinks should be apart from the operating room. A surgical-support area should be provided for storing instruments and sterile supplies and for washing and sterilizing instruments. 
</p>
<p>The classification of major or minor for each proposed surgical procedure will be determined by the IACUC committee.</p>
                                         </div>
									</div>
                                		</div>
										</p>
									</div>
                                    <div class="tab-pane" id="page_10">
										<p>
                                      <div class="span11 form-horizontal well">
											
										<p class="f_legend">
                                        	Status of Human Resources (Class wise)
                                            	<span style="float: right" class="input-append date dp2" id="dp2" data-date-format="yyyy/mm/dd">Reporting date
                                            	<input name="a828" id="a828" type="text" class="span6" readonly="readonly" value="<? echo $viewdata->a828; ?>" />
                                                	<span class="add-on">
                                                    	<i class="splashy-calendar_day"></i>
                                                	</span>
                                                </span>                                             
                                         </p>                                         
                                        <table class="table table-striped table-bordered">
                                       	  <thead>
                                            <tr>                                            
                                              <th colspan="2" rowspan="2">Class</th>
                                              <th rowspan="2">Sanctioned</th>
                                              <th colspan="2">Filled-up</th>
                                            </tr>
                                            <tr>
                                              <th>Male</th>
                                              <th>Female</th>
                                            </tr>                                              
                          <tr>
                                                    <th colspan="5">District Total</th>
                                                  </tr>
                                              </thead>
                                              <tr>
                                               	  <td rowspan="2">Class I</td>
                                               	  <td>Doctor</td>
                                                	<td><input value="<? echo $viewdata->a854; ?>" name="a854" type="text" class="span12 onlynumber" id="a854" /></td>
                                                	<td><input value="<? echo $viewdata->a855; ?>" name="a855" type="text" class="span12 onlynumber" id="a855" /></td>
                                                  <td><input value="<? echo $viewdata->a856; ?>" name="a856" type="text" class="span12 onlynumber" id="a856" /></td>
                                              </tr>
                                              <tr>
                                                <td>Non-Doctor</td>
                                                <td><input value="<? echo $viewdata->a857; ?>" name="a857" type="text" class="span12 onlynumber" id="a857" /></td>
                                                <td><input value="<? echo $viewdata->a858; ?>" name="a858" type="text" class="span12 onlynumber" id="a858" /></td>
                                                <td><input value="<? echo $viewdata->a859; ?>" name="a859" type="text" class="span12 onlynumber" id="a859" /></td>
                                              </tr>
                                              <tr>
                                               	  <td colspan="2">Class II</td>
                                                	<td><input value="<? echo $viewdata->a860; ?>" name="a860" type="text" class="span12 onlynumber" id="a860" /></td>
                                                	<td><input value="<? echo $viewdata->a861; ?>" name="a861" type="text" class="span12 onlynumber" id="a861" /></td>
                                                  <td><input value="<? echo $viewdata->a862; ?>" name="a862" type="text" class="span12 onlynumber" id="a862" /></td>
                                              </tr>
                                              <tr>
                                               	  <td colspan="2">Class III</td>
                                                	<td><input value="<? echo $viewdata->a863; ?>" name="a863" type="text" class="span12 onlynumber" id="a863" /></td>
                                                	<td><input value="<? echo $viewdata->a864; ?>" name="a864" type="text" class="span12 onlynumber" id="a864" /></td>
                                                  <td><input value="<? echo $viewdata->a865; ?>" name="a865" type="text" class="span12 onlynumber" id="a865" /></td>
                                              </tr>
                                              <tr>
                                               	  <td colspan="2">Class IV</td>
                                                	<td><input value="<? echo $viewdata->a866; ?>" name="a866" type="text" class="span12 onlynumber" id="a866" /></td>
                                                	<td><input value="<? echo $viewdata->a867; ?>" name="a867" type="text" class="span12 onlynumber" id="a867" /></td>
                                                  <td><input value="<? echo $viewdata->a868; ?>" name="a868" type="text" class="span12 onlynumber" id="a868" /></td>
                                              </tr>
                                          </table>
                               		  </div>
                                      </p>
									</div>
                                    <div class="tab-pane" id="page_11">
										<p>
                                      <div class="span11 form-horizontal well">
											
										<p class="f_legend">
                                        	Status of Human Resources (Category wise)
                                            	<span style="float: right" class="input-append date dp2" data-date-format="yyyy/mm/dd">Reporting date <input name="a834" type="text" class="span6" id="a834" readonly value="<? echo $viewdata->a834; ?>" />
                                                	<span class="add-on">
                                                    	<i class="splashy-calendar_day"></i>
                                                	</span>
                                                </span>                                             
                                       </p>	
                                          <table class="table table-striped table-bordered">
                                              <thead>                                                  
                                                  <tr>
                                                    <th rowspan="2">Manpower</th>
                                                    <th colspan="2">MCH</th>
                                                    <th rowspan="2">IMCI Trained</th>
                                                    <th rowspan="2">Basic EOC trained</th>
                                                  </tr>
                                                  <tr>
                                                    <th>Sanctioned</th>
                                                    <th>Filled-up</th>
                                                  </tr>
                                              </thead>
                                              <tr>
                                               	  <td>Physician</td>
                                                	<td><input value="<? echo $viewdata->a367; ?>" name="a367" type="text" class="span12 onlynumber" id="a210" /></td>
                                                	<td><input value="<? echo $viewdata->a368; ?>" name="a368" type="text" class="span12 onlynumber" id="a211" /></td>
                                                	<td><input value="<? echo $viewdata->a369; ?>" name="a369" type="text" class="span12 onlynumber" id="a212" /></td>
                                                	<td><input value="<? echo $viewdata->a370; ?>" name="a370" type="text" class="span12 onlynumber" id="a213" /></td>
                                           	  </tr>
                                              <tr>
                                               	  <td>Nurse</td>
                                                	<td><input value="<? echo $viewdata->a377; ?>" name="a377" type="text" class="span12 onlynumber" id="a220" /></td>
                                                	<td><input value="<? echo $viewdata->a378; ?>" name="a378" type="text" class="span12 onlynumber" id="a221" /></td>
                                                	<td><input value="<? echo $viewdata->a379; ?>" name="a379" type="text" class="span12 onlynumber" id="a222" /></td>
                                                	<td><input value="<? echo $viewdata->a380; ?>" name="a380" type="text" class="span12 onlynumber" id="a223" /></td>
                                           	  </tr>
                                              <tr>
                                               	  <td>Medical Assistant</td>
                                                	<td><input value="<? echo $viewdata->a387; ?>" name="a387" type="text" class="span12 onlynumber" id="a230" /></td>
                                                	<td><input value="<? echo $viewdata->a388; ?>" name="a388" type="text" class="span12 onlynumber" id="a231" /></td>
                                                	<td><input value="<? echo $viewdata->a389; ?>" name="a389" type="text" class="span12 onlynumber" id="a232" /></td>
                                                	<td><input value="<? echo $viewdata->a390; ?>" name="a390" type="text" class="span12 onlynumber" id="a233" /></td>
                                           	  </tr>
                                              <tr>
                                               	  <td>Medical Technologist</td>
                                                	<td><input value="<? echo $viewdata->a397; ?>" name="a397" type="text" class="span12 onlynumber" id="a240" /></td>
                                                	<td><input value="<? echo $viewdata->a398; ?>" name="a398" type="text" class="span12 onlynumber" id="a241" /></td>
                                                	<td><input value="<? echo $viewdata->a399; ?>" name="a399" type="text" class="span12 onlynumber" id="a242" /></td>
                                                	<td><input value="<? echo $viewdata->a400; ?>" name="a400" type="text" class="span12 onlynumber" id="a243" /></td>
                                           	  </tr>
                                              <tr>
                                               	  <td>CHCP</td>
                                                	<td><input value="<? echo $viewdata->a407; ?>" name="a407" type="text" class="span12 onlynumber" id="a250" /></td>
                                                	<td><input value="<? echo $viewdata->a408; ?>" name="a408" type="text" class="span12 onlynumber" id="a251" /></td>
                                                	<td><input value="<? echo $viewdata->a409; ?>" name="a409" type="text" class="span12 onlynumber" id="a252" /></td>
                                                	<td><input value="<? echo $viewdata->a410; ?>" name="a410" type="text" class="span12 onlynumber" id="a253" /></td>
                                           	  </tr>
                                          </table>
                                		</div>
										</p>
									</div>
                                    <div class="tab-pane" id="page_12">
										<p>
                                      
                                   	  <div class="span11 form-horizontal well">
											
										<p class="f_legend">Existing Equipments at Hospital</p>	
                                        <table class="table table-striped table-bordered">
                                        <thead>
                                          <tr>
                                            <th rowspan="3">Equipment</th>
                                            <th colspan="3">&nbsp;</th>
                                            <th rowspan="3">Not installed (No.)</th>
                                          </tr>
                                          <tr>
                                            <th rowspan="2">Fanctional (No.)</th>
                                            <th colspan="2">Non-functional</th>
                                          </tr>
                                          <tr>
                                            <th>Repairable (No.)</th>
                                            <th>Non-Repairable (No.)</th>
                                          </tr>
                                          
                                            <tr>
                                              <th colspan="5">Radiology equipment</th>
                                            </tr>
                                          </thead>
                                            <tr>
                                              <td>X-ray machine (100 mA)</td>
                                           	    <td><input value="<? echo $viewdata->a451; ?>" name="a451" type="text" class="span12 onlynumber" id="a295" /></td>
                                               	  <td><input value="<? echo $viewdata->a452; ?>" name="a452" type="text" class="span12 onlynumber" id="a296" /></td>
                                                <td><input value="<? echo $viewdata->a453; ?>" name="a453" type="text" class="span12 onlynumber" id="a297" /></td>
                                                <td><input value="<? echo $viewdata->a454; ?>" name="a454" type="text" class="span12 onlynumber" id="a" /></td>
                                            </tr>
                                            <tr>
                                              <td>X-ray machine (300 mA)</td>
                                           	    <td><input value="<? echo $viewdata->a455; ?>" name="a455" type="text" class="span12 onlynumber" id="a299" /></td>
                                               	  <td><input value="<? echo $viewdata->a456; ?>" name="a456" type="text" class="span12 onlynumber" id="a300" /></td>
                                                <td><input value="<? echo $viewdata->a457; ?>" name="a457" type="text" class="span12 onlynumber" id="a301" /></td>
                                                <td><input value="<? echo $viewdata->a458; ?>" name="a458" type="text" class="span12 onlynumber" id="a3" /></td>
                                            </tr>
                                            <tr>
                                              <td>X-ray machine (500 mA)</td>
                                           	    <td><input value="<? echo $viewdata->a459; ?>" name="a459" type="text" class="span12 onlynumber" id="a303" /></td>
                                               	  <td><input value="<? echo $viewdata->a460; ?>" name="a460" type="text" class="span12 onlynumber" id="a304" /></td>
                                                <td><input value="<? echo $viewdata->a461; ?>" name="a461" type="text" class="span12 onlynumber" id="a305" /></td>
                                                <td><input value="<? echo $viewdata->a462; ?>" name="a462" type="text" class="span12 onlynumber" id="a270" /></td>
                                            </tr>
                                            <tr>
                                              <td>X-ray machine (digital)</td>
                                           	    <td><input value="<? echo $viewdata->a463; ?>" name="a463" type="text" class="span12 onlynumber" id="a307" /></td>
                                               	  <td><input value="<? echo $viewdata->a464; ?>" name="a464" type="text" class="span12 onlynumber" id="a308" /></td>
                                                <td><input value="<? echo $viewdata->a465; ?>" name="a465" type="text" class="span12 onlynumber" id="a309" /></td>
                                                <td><input value="<? echo $viewdata->a466; ?>" name="a466" type="text" class="span12 onlynumber" id="a294" /></td>
                                            </tr>
                                            <tr>
                                              <td>X-ray machine (portable)</td>
                                           	    <td><input value="<? echo $viewdata->a467; ?>" name="a467" type="text" class="span12 onlynumber" id="a311" /></td>
                                               	  <td><input value="<? echo $viewdata->a468; ?>" name="a468" type="text" class="span12 onlynumber" id="a312" /></td>
                                                <td><input value="<? echo $viewdata->a469; ?>" name="a469" type="text" class="span12 onlynumber" id="a313" /></td>
                                                <td><input value="<? echo $viewdata->a470; ?>" name="a470" type="text" class="span12 onlynumber" id="a298" /></td>
                                            </tr>
                                            <tr>
                                              <td>Dental X-ray unit</td>
                                              <td><input value="<? echo $viewdata->a471; ?>" name="a471" type="text" class="span12 onlynumber" id="a306" /></td>
                                              <td><input value="<? echo $viewdata->a472; ?>" name="a472" type="text" class="span12 onlynumber" id="a312" /></td>
                                              <td><input value="<? echo $viewdata->a473; ?>" name="a473" type="text" class="span12 onlynumber" id="a313" /></td>
                                              <td><input value="<? echo $viewdata->a474; ?>" name="a474" type="text" class="span12 onlynumber" id="a298" /></td>
                                            </tr>
                                            <tr>
                                              <td>Spiral CT Scan</td>
                                           	    <td><input value="<? echo $viewdata->a475; ?>" name="a475" type="text" class="span12 onlynumber" id="a302" /></td>
                                               	  <td><input value="<? echo $viewdata->a476; ?>" name="a476" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a477; ?>" name="a477" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a478; ?>" name="a478" type="text" class="span12 onlynumber" id="a310" /></td>
                                            </tr>
                                            <tr>
                                              <td>C-arm</td>
                                           	    <td><input value="<? echo $viewdata->a479; ?>" name="a479" type="text" class="span12 onlynumber" id="a319" /></td>
                                               	  <td><input value="<? echo $viewdata->a480; ?>" name="a480" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a481; ?>" name="a481" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a482; ?>" name="a482" type="text" class="span12 onlynumber" id="a314" /></td>
                                            </tr>
                                            <tr>
                                              <td>Mamogram machine</td>
                                           	    <td><input value="<? echo $viewdata->a483; ?>" name="a483" type="text" class="span12 onlynumber" id="a323" /></td>
                                               	  <td><input value="<? echo $viewdata->a484; ?>" name="a484" type="text" class="span12 onlynumber" id="a324" /></td>
                                                <td><input value="<? echo $viewdata->a485; ?>" name="a485" type="text" class="span12 onlynumber" id="a325" /></td>
                                                <td><input value="<? echo $viewdata->a486; ?>" name="a486" type="text" class="span12 onlynumber" id="a315" /></td>
                                            </tr>
                                            <tr>
                                              <td>Dehumidifier</td>
                                           	    <td><input value="<? echo $viewdata->a487; ?>" name="a487" type="text" class="span12 onlynumber" id="a327" /></td>
                                               	  <td><input value="<? echo $viewdata->a488; ?>" name="a488" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a489; ?>" name="a489" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a490; ?>" name="a490" type="text" class="span12 onlynumber" id="a318" /></td>
                                            </tr>
                                              <tr>
                                                <td>MRI machine</td>
                                                <td><input value="<? echo $viewdata->a491; ?>" name="a491" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a492; ?>" name="a492" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a493; ?>" name="a493" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a494; ?>" name="a494" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Ultrasonogram machine</td>
                                                <td><input value="<? echo $viewdata->a495; ?>" name="a495" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a496; ?>" name="a496" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a497; ?>" name="a497" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a498; ?>" name="a498" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              <thead><tr>
                                                <th colspan="5">Anesthesiology/surgical equipment</th>
                                              </tr></thead>
                                              <tr>
                                                <td>Anesthesia machine with ventilator</td>
                                                <td><input value="<? echo $viewdata->a499; ?>" name="a499" type="text" class="span12 onlynumber" id="a295" /></td>
                                                <td><input value="<? echo $viewdata->a500; ?>" name="a500" type="text" class="span12 onlynumber" id="a296" /></td>
                                                <td><input value="<? echo $viewdata->a501; ?>" name="a501" type="text" class="span12 onlynumber" id="a297" /></td>
                                                <td><input value="<? echo $viewdata->a502; ?>" name="a502" type="text" class="span12 onlynumber" id="a" /></td>
                                              </tr>
                                              <tr>
                                                <td>Anesthesia machine without ventilator</td>
                                                <td><input value="<? echo $viewdata->a503; ?>" name="a503" type="text" class="span12 onlynumber" id="a299" /></td>
                                                <td><input value="<? echo $viewdata->a504; ?>" name="a504" type="text" class="span12 onlynumber" id="a300" /></td>
                                                <td><input value="<? echo $viewdata->a505; ?>" name="a505" type="text" class="span12 onlynumber" id="a301" /></td>
                                                <td><input value="<? echo $viewdata->a506; ?>" name="a506" type="text" class="span12 onlynumber" id="a3" /></td>
                                              </tr>
                                              <tr>
                                                <td>Autoclave</td>
                                                <td><input value="<? echo $viewdata->a507; ?>" name="a507" type="text" class="span12 onlynumber" id="a303" /></td>
                                                <td><input value="<? echo $viewdata->a508; ?>" name="a508" type="text" class="span12 onlynumber" id="a304" /></td>
                                                <td><input value="<? echo $viewdata->a509; ?>" name="a509" type="text" class="span12 onlynumber" id="a305" /></td>
                                                <td><input value="<? echo $viewdata->a510; ?>" name="a510" type="text" class="span12 onlynumber" id="a270" /></td>
                                              </tr>
                                              <tr>
                                                <td>Electric cautery machine</td>
                                                <td><input value="<? echo $viewdata->a511; ?>" name="a511" type="text" class="span12 onlynumber" id="a307" /></td>
                                                <td><input value="<? echo $viewdata->a512; ?>" name="a512" type="text" class="span12 onlynumber" id="a308" /></td>
                                                <td><input value="<? echo $viewdata->a513; ?>" name="a513" type="text" class="span12 onlynumber" id="a309" /></td>
                                                <td><input value="<? echo $viewdata->a514; ?>" name="a514" type="text" class="span12 onlynumber" id="a294" /></td>
                                              </tr>
                                              <tr>
                                                <td>Diathermy machine</td>
                                                <td><input value="<? echo $viewdata->a515; ?>" name="a515" type="text" class="span12 onlynumber" id="a311" /></td>
                                                <td><input value="<? echo $viewdata->a516; ?>" name="a516" type="text" class="span12 onlynumber" id="a312" /></td>
                                                <td><input value="<? echo $viewdata->a517; ?>" name="a517" type="text" class="span12 onlynumber" id="a313" /></td>
                                                <td><input value="<? echo $viewdata->a518; ?>" name="a518" type="text" class="span12 onlynumber" id="a298" /></td>
                                              </tr>
                                              <tr>
                                                <td>Operating microscope</td>
                                                <td><input value="<? echo $viewdata->a519; ?>" name="a519" type="text" class="span12 onlynumber" id="a306" /></td>
                                                <td><input value="<? echo $viewdata->a520; ?>" name="a520" type="text" class="span12 onlynumber" id="a312" /></td>
                                                <td><input value="<? echo $viewdata->a521; ?>" name="a521" type="text" class="span12 onlynumber" id="a313" /></td>
                                                <td><input value="<? echo $viewdata->a522; ?>" name="a522" type="text" class="span12 onlynumber" id="a298" /></td>
                                              </tr>
                                              <tr>
                                                <td>Ceiling mounting OT Light</td>
                                                <td><input value="<? echo $viewdata->a523; ?>" name="a523" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a524; ?>" name="a524" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a525; ?>" name="a525" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a526; ?>" name="a526" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td>Portable OT Light</td>
                                                <td><input value="<? echo $viewdata->a527; ?>" name="a527" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a528; ?>" name="a528" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a529; ?>" name="a529" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a530; ?>" name="a530" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td>Fracture table</td>
                                                <td><input value="<? echo $viewdata->a531; ?>" name="a531" type="text" class="span12 onlynumber" id="a323" /></td>
                                                <td><input value="<? echo $viewdata->a532; ?>" name="a532" type="text" class="span12 onlynumber" id="a324" /></td>
                                                <td><input value="<? echo $viewdata->a533; ?>" name="a533" type="text" class="span12 onlynumber" id="a325" /></td>
                                                <td><input value="<? echo $viewdata->a534; ?>" name="a534" type="text" class="span12 onlynumber" id="a315" /></td>
                                              </tr>
                                              <tr>
                                                <td>Hydrolic OT Table</td>
                                                <td><input value="<? echo $viewdata->a535; ?>" name="a535" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a536; ?>" name="a536" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a537; ?>" name="a537" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a538; ?>" name="a538" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Sterilizer</td>
                                                <td><input value="<? echo $viewdata->a539; ?>" name="a539" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a540; ?>" name="a540" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a541; ?>" name="a541" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a542; ?>" name="a542" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Sucker machine (electric)</td>
                                                <td><input value="<? echo $viewdata->a543; ?>" name="a543" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a544; ?>" name="a544" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a545; ?>" name="a545" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a546; ?>" name="a546" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Ventilator</td>
                                                <td><input value="<? echo $viewdata->a547; ?>" name="a547" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a548; ?>" name="a548" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a549; ?>" name="a549" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a550; ?>" name="a550" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              <thead><tr>
                                                <th colspan="5">Cardiology equipment</th>
                                              </tr></thead>
                                              <tr>
                                                <td>Coronary angiogram machine</td>
                                                <td><input value="<? echo $viewdata->a551; ?>" name="a551" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a552; ?>" name="a552" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a553; ?>" name="a553" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a554; ?>" name="a554" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Debrililator</td>
                                                <td><input value="<? echo $viewdata->a555; ?>" name="a555" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a556; ?>" name="a556" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a557; ?>" name="a557" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a558; ?>" name="a558" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td>ECG machine</td>
                                                <td><input value="<? echo $viewdata->a559; ?>" name="a559" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a560; ?>" name="a560" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a561; ?>" name="a561" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a562; ?>" name="a562" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td>Echocardiogram machine</td>
                                                <td><input value="<? echo $viewdata->a563; ?>" name="a563" type="text" class="span12 onlynumber" id="a323" /></td>
                                                <td><input value="<? echo $viewdata->a564; ?>" name="a564" type="text" class="span12 onlynumber" id="a324" /></td>
                                                <td><input value="<? echo $viewdata->a565; ?>" name="a565" type="text" class="span12 onlynumber" id="a325" /></td>
                                                <td><input value="<? echo $viewdata->a566; ?>" name="a566" type="text" class="span12 onlynumber" id="a315" /></td>
                                              </tr>
                                              <tr>
                                                <td>Cardiac monitor</td>
                                                <td><input value="<? echo $viewdata->a567; ?>" name="a567" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a568; ?>" name="a568" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a569; ?>" name="a569" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a570; ?>" name="a570" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Holter monitor</td>
                                                <td><input value="<? echo $viewdata->a571; ?>" name="a571" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a572; ?>" name="a572" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a573; ?>" name="a573" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a574; ?>" name="a574" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Nebulizer machine</td>
                                                <td><input value="<? echo $viewdata->a575; ?>" name="a575" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a576; ?>" name="a576" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a577; ?>" name="a577" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a578; ?>" name="a578" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Pulse oximeter</td>
                                                <td><input value="<? echo $viewdata->a579; ?>" name="a579" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a580; ?>" name="a580" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a581; ?>" name="a581" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a582; ?>" name="a582" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              <thead><tr>
                                                <th colspan="5">Dental equipment</th>
                                              </tr></thead>
                                              <tr>
                                                <td>Dental unit</td>
                                                <td><input value="<? echo $viewdata->a583; ?>" name="a583" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a584; ?>" name="a584" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a585; ?>" name="a585" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a586; ?>" name="a586" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              <thead><tr>
                                                <th colspan="5">Gastroeneterology equipment</th>
                                              </tr></thead>
                                              <tr>
                                                <td>Endoscopy machine</td>
                                                <td><input value="<? echo $viewdata->a587; ?>" name="a587" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a588; ?>" name="a588" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a589; ?>" name="a589" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a590; ?>" name="a590" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td>Laparoscopic machine</td>
                                                <td><input value="<? echo $viewdata->a591; ?>" name="a591" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a592; ?>" name="a592" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a593; ?>" name="a593" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a594; ?>" name="a594" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              <thead><tr>
                                                <th colspan="5">Lab equipment</th>
                                              </tr></thead>
                                              <tr>
                                                <td>Biochemical auto-analyzer</td>
                                                <td><input value="<? echo $viewdata->a595; ?>" name="a595" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a596; ?>" name="a596" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a597; ?>" name="a597" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a598; ?>" name="a598" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td>Centrifuge machine (electric)</td>
                                                <td><input value="<? echo $viewdata->a599; ?>" name="a599" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a600; ?>" name="a600" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a601; ?>" name="a601" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a602; ?>" name="a602" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td>Colorimeter</td>
                                                <td><input value="<? echo $viewdata->a603; ?>" name="a603" type="text" class="span12 onlynumber" id="a323" /></td>
                                                <td><input value="<? echo $viewdata->a604; ?>" name="a604" type="text" class="span12 onlynumber" id="a324" /></td>
                                                <td><input value="<? echo $viewdata->a605; ?>" name="a605" type="text" class="span12 onlynumber" id="a325" /></td>
                                                <td><input value="<? echo $viewdata->a606; ?>" name="a606" type="text" class="span12 onlynumber" id="a315" /></td>
                                              </tr>
                                              <tr>
                                                <td>Electrolyte analyzer</td>
                                                <td><input value="<? echo $viewdata->a607; ?>" name="a607" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a608; ?>" name="a608" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a609; ?>" name="a609" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a610; ?>" name="a610" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>ELISA machine</td>
                                                <td><input value="<? echo $viewdata->a611; ?>" name="a611" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a612; ?>" name="a612" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a613; ?>" name="a613" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a614; ?>" name="a614" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Gas analyzer</td>
                                                <td><input value="<? echo $viewdata->a615; ?>" name="a615" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a616; ?>" name="a616" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a617; ?>" name="a617" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a618; ?>" name="a618" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Hormone analyzer</td>
                                                <td><input value="<? echo $viewdata->a619; ?>" name="a619" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a620; ?>" name="a620" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a621; ?>" name="a621" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a622; ?>" name="a622" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Blood cell counter</td>
                                                <td><input value="<? echo $viewdata->a623; ?>" name="a623" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a624; ?>" name="a624" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a625; ?>" name="a625" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a626; ?>" name="a626" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td>Microscope (binocular)</td>
                                                <td><input value="<? echo $viewdata->a627; ?>" name="a627" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a628; ?>" name="a628" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a629; ?>" name="a629" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a630; ?>" name="a630" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              <thead><tr>
                                                <th colspan="5">Obstetric equipment</th>
                                              </tr></thead>
                                              <tr>
                                                <td>Fetal monitor</td>
                                                <td><input value="<? echo $viewdata->a631; ?>" name="a631" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a632; ?>" name="a632" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a633; ?>" name="a633" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a634; ?>" name="a634" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              <thead><tr>
                                                <th colspan="5">Ophthalmic equipment</th>
                                              </tr></thead>
                                              <tr>
                                                <td>FACO machine</td>
                                                <td><input value="<? echo $viewdata->a635; ?>" name="a635" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a636; ?>" name="a636" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a637; ?>" name="a637" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a638; ?>" name="a638" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td>Retinoscope</td>
                                                <td><input value="<? echo $viewdata->a639; ?>" name="a639" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a640; ?>" name="a640" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a641; ?>" name="a641" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a642; ?>" name="a642" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              <thead><tr>
                                                <th colspan="5">Pediatric equipment</th>
                                              </tr></thead>
                                              <tr>
                                                <td>Baby incubator</td>
                                                <td><input value="<? echo $viewdata->a643; ?>" name="a643" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a644; ?>" name="a644" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a645; ?>" name="a645" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a646; ?>" name="a646" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td>Phototherapy unit</td>
                                                <td><input value="<? echo $viewdata->a647; ?>" name="a647" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a648; ?>" name="a648" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a649; ?>" name="a649" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a650; ?>" name="a650" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              <thead><tr>
                                                <th colspan="5">Blood bank equipment</th>
                                              </tr></thead>
                                              <tr>
                                                <td>Blood bag centrifuge</td>
                                                <td><input value="<? echo $viewdata->a651; ?>" name="a651" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a652; ?>" name="a652" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a653; ?>" name="a653" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a654; ?>" name="a654" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td>Laminar flow hood</td>
                                                <td><input value="<? echo $viewdata->a655; ?>" name="a655" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a656; ?>" name="a656" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a657; ?>" name="a657" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a658; ?>" name="a658" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td>pH meter</td>
                                                <td><input value="<? echo $viewdata->a659; ?>" name="a659" type="text" class="span12 onlynumber" id="a323" /></td>
                                                <td><input value="<? echo $viewdata->a660; ?>" name="a660" type="text" class="span12 onlynumber" id="a324" /></td>
                                                <td><input value="<? echo $viewdata->a661; ?>" name="a661" type="text" class="span12 onlynumber" id="a325" /></td>
                                                <td><input value="<? echo $viewdata->a662; ?>" name="a662" type="text" class="span12 onlynumber" id="a315" /></td>
                                              </tr>
                                              <tr>
                                                <td>Hemoglobin photometer</td>
                                                <td><input value="<? echo $viewdata->a663; ?>" name="a663" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a664; ?>" name="a664" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a665; ?>" name="a665" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a666; ?>" name="a666" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Blood bank refrigerator</td>
                                                <td><input value="<? echo $viewdata->a667; ?>" name="a667" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a668; ?>" name="a668" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a669; ?>" name="a669" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a670; ?>" name="a670" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Blood plasma separating machine</td>
                                                <td><input value="<? echo $viewdata->a671; ?>" name="a671" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a672; ?>" name="a672" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a673; ?>" name="a673" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a674; ?>" name="a674" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Platelet separating machine</td>
                                                <td><input value="<? echo $viewdata->a675; ?>" name="a675" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a676; ?>" name="a676" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a677; ?>" name="a677" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a678; ?>" name="a678" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Deep freeze (plasma)</td>
                                                <td><input value="<? echo $viewdata->a679; ?>" name="a679" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a680; ?>" name="a680" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a681; ?>" name="a681" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a682; ?>" name="a682" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td>Deep freeze (RBC)</td>
                                                <td><input value="<? echo $viewdata->a683; ?>" name="a683" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a684; ?>" name="a684" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a685; ?>" name="a685" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a686; ?>" name="a686" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td>Refrigerator</td>
                                                <td><input value="<? echo $viewdata->a687; ?>" name="a687" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a688; ?>" name="a688" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a689; ?>" name="a689" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a690; ?>" name="a690" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              <thead><tr>
                                                <th colspan="5">Psychiatry equipment</th>
                                              </tr></thead>
                                              <tr>
                                                <td>ECT machine</td>
                                                <td><input value="<? echo $viewdata->a691; ?>" name="a691" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a692; ?>" name="a692" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a693; ?>" name="a693" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a694; ?>" name="a694" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td>EEG machine</td>
                                                <td><input value="<? echo $viewdata->a695; ?>" name="a695" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a696; ?>" name="a696" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a697; ?>" name="a697" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a698; ?>" name="a698" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              <thead><tr>
                                                <th colspan="5">Urology equipment</th>
                                              </tr></thead>
                                              <tr>
                                                <td>Cystoscopic machine</td>
                                                <td><input value="<? echo $viewdata->a699; ?>" name="a699" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a700; ?>" name="a700" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a701; ?>" name="a701" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a702; ?>" name="a702" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              <thead><tr>
                                                <th colspan="5">Vehicles</th>
                                              </tr></thead>
                                              <tr>
                                                <td>Ambulance</td>
                                                <td><input value="<? echo $viewdata->a703; ?>" name="a703" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a704; ?>" name="a704" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a705; ?>" name="a705" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a706; ?>" name="a706" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td>Bus</td>
                                                <td><input value="<? echo $viewdata->a707; ?>" name="a707" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a708; ?>" name="a708" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a709; ?>" name="a709" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a710; ?>" name="a710" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td>Jeep</td>
                                                <td><input value="<? echo $viewdata->a711; ?>" name="a711" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a712; ?>" name="a712" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a713; ?>" name="a713" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a714; ?>" name="a714" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td>Microbus</td>
                                                <td><input value="<? echo $viewdata->a715; ?>" name="a715" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a716; ?>" name="a716" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a717; ?>" name="a717" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a718; ?>" name="a718" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td>Pickup</td>
                                                <td><input value="<? echo $viewdata->a719; ?>" name="a719" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a720; ?>" name="a720" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a721; ?>" name="a721" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a722; ?>" name="a722" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              <thead><tr>
                                                <th colspan="5">Air conditioner</th>
                                              </tr></thead>
                                              <tr>
                                                <td>Air conditioner (split type)</td>
                                                <td><input value="<? echo $viewdata->a723; ?>" name="a723" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a724; ?>" name="a724" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a725; ?>" name="a725" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a726; ?>" name="a726" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td>Air conditioner (window)</td>
                                                <td><input value="<? echo $viewdata->a727; ?>" name="a727" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a728; ?>" name="a728" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a729; ?>" name="a729" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a730; ?>" name="a730" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              <thead><tr>
                                                <th colspan="5">Generator</th
                                              ></tr></thead>
                                              <tr>
                                                <td>Generator (diesel/petrol)</td>
                                                <td><input value="<? echo $viewdata->a731; ?>" name="a731" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a732; ?>" name="a732" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a733; ?>" name="a733" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a734; ?>" name="a734" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td>Generator (Gas)</td>
                                                <td><input value="<? echo $viewdata->a735; ?>" name="a735" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a736; ?>" name="a736" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a737; ?>" name="a737" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a738; ?>" name="a738" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td>Solar panel</td>
                                                <td><input value="<? echo $viewdata->a739; ?>" name="a739" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a740; ?>" name="a740" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a741; ?>" name="a741" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a742; ?>" name="a742" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td>IPS</td>
                                                <td><input value="<? echo $viewdata->a743; ?>" name="a743" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a744; ?>" name="a744" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a745; ?>" name="a745" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a746; ?>" name="a746" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              <thead><tr>
                                                <th colspan="5">ICT equipment</th>
                                              </tr></thead>
                                              <tr>
                                                <td>Computer (desktop)</td>
                                                <td><input value="<? echo $viewdata->a747; ?>" name="a747" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a748; ?>" name="a748" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a749; ?>" name="a749" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a750; ?>" name="a750" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td>Laptop</td>
                                                <td><input value="<? echo $viewdata->a751; ?>" name="a751" type="text" class="span12 onlynumber" id="a323" /></td>
                                                <td><input value="<? echo $viewdata->a752; ?>" name="a752" type="text" class="span12 onlynumber" id="a324" /></td>
                                                <td><input value="<? echo $viewdata->a753; ?>" name="a753" type="text" class="span12 onlynumber" id="a325" /></td>
                                                <td><input value="<? echo $viewdata->a754; ?>" name="a754" type="text" class="span12 onlynumber" id="a315" /></td>
                                              </tr>
                                              <tr>
                                                <td>Printer (dot matrix)</td>
                                                <td><input value="<? echo $viewdata->a755; ?>" name="a755" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a756; ?>" name="a756" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a757; ?>" name="a757" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a758; ?>" name="a758" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Printer (inkjet)</td>
                                                <td><input value="<? echo $viewdata->a759; ?>" name="a759" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a760; ?>" name="a760" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a761; ?>" name="a761" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a762; ?>" name="a762" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Printer (laser)</td>
                                                <td><input value="<? echo $viewdata->a763; ?>" name="a763" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a764; ?>" name="a764" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a765; ?>" name="a765" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a766; ?>" name="a766" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Scanner</td>
                                                <td><input value="<? echo $viewdata->a767; ?>" name="a767" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a768; ?>" name="a768" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a769; ?>" name="a769" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a770; ?>" name="a770" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>UPS</td>
                                                <td><input value="<? echo $viewdata->a771; ?>" name="a771" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a772; ?>" name="a772" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a773; ?>" name="a773" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a774; ?>" name="a774" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td>Fax</td>
                                                <td><input value="<? echo $viewdata->a775; ?>" name="a775" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a776; ?>" name="a776" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a777; ?>" name="a777" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a778; ?>" name="a778" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td>Intercom</td>
                                                <td><input value="<? echo $viewdata->a779; ?>" name="a779" type="text" class="span12 onlynumber" id="a323" /></td>
                                                <td><input value="<? echo $viewdata->a780; ?>" name="a780" type="text" class="span12 onlynumber" id="a324" /></td>
                                                <td><input value="<? echo $viewdata->a781; ?>" name="a781" type="text" class="span12 onlynumber" id="a325" /></td>
                                                <td><input value="<? echo $viewdata->a782; ?>" name="a782" type="text" class="span12 onlynumber" id="a315" /></td>
                                              </tr>
                                              <tr>
                                                <td>Internet fixed line</td>
                                                <td><input value="<? echo $viewdata->a783; ?>" name="a783" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a784; ?>" name="a784" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a785; ?>" name="a785" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a786; ?>" name="a786" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Internet wireless line (Modem)</td>
                                                <td><input value="<? echo $viewdata->a787; ?>" name="a787" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a788; ?>" name="a788" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a789; ?>" name="a789" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a790; ?>" name="a790" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Multimedia</td>
                                                <td><input value="<? echo $viewdata->a791; ?>" name="a791" type="text" class="span12 onlynumber" id="a302" /></td>
                                                <td><input value="<? echo $viewdata->a792; ?>" name="a792" type="text" class="span12 onlynumber" id="a316" /></td>
                                                <td><input value="<? echo $viewdata->a793; ?>" name="a793" type="text" class="span12 onlynumber" id="a317" /></td>
                                                <td><input value="<? echo $viewdata->a794; ?>" name="a794" type="text" class="span12 onlynumber" id="a310" /></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              <thead><tr>
                                                <th colspan="5">OHP</th>
                                              </tr></thead>
                                              <tr>
                                                <td>PA system</td>
                                                <td><input value="<? echo $viewdata->a795; ?>" name="a795" type="text" class="span12 onlynumber" id="a319" /></td>
                                                <td><input value="<? echo $viewdata->a796; ?>" name="a796" type="text" class="span12 onlynumber" id="a320" /></td>
                                                <td><input value="<? echo $viewdata->a797; ?>" name="a797" type="text" class="span12 onlynumber" id="a321" /></td>
                                                <td><input value="<? echo $viewdata->a798; ?>" name="a798" type="text" class="span12 onlynumber" id="a314" /></td>
                                              </tr>
                                              <tr>
                                                <td>Land phone</td>
                                                <td><input value="<? echo $viewdata->a799; ?>" name="a799" type="text" class="span12 onlynumber" id="a323" /></td>
                                                <td><input value="<? echo $viewdata->a800; ?>" name="a800" type="text" class="span12 onlynumber" id="a324" /></td>
                                                <td><input value="<? echo $viewdata->a801; ?>" name="a801" type="text" class="span12 onlynumber" id="a325" /></td>
                                                <td><input value="<? echo $viewdata->a802; ?>" name="a802" type="text" class="span12 onlynumber" id="a315" /></td>
                                              </tr>
                                              <tr>
                                                <td>Mobile phone</td>
                                                <td><input value="<? echo $viewdata->a303; ?>" name="a803" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a804; ?>" name="a804" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a805; ?>" name="a805" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a806; ?>" name="a806" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Photocopier machine</td>
                                                <td><input value="<? echo $viewdata->a807; ?>" name="a807" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a808; ?>" name="a808" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a809; ?>" name="a809" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a810; ?>" name="a810" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Digital camera</td>
                                                <td><input value="<? echo $viewdata->a811; ?>" name="a811" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a812; ?>" name="a812" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a813; ?>" name="a813" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a814; ?>" name="a814" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>Video camera</td>
                                                <td><input value="<? echo $viewdata->a815; ?>" name="a815" type="text" class="span12 onlynumber" id="a327" /></td>
                                                <td><input value="<? echo $viewdata->a816; ?>" name="a816" type="text" class="span12 onlynumber" id="a328" /></td>
                                                <td><input value="<? echo $viewdata->a817; ?>" name="a817" type="text" class="span12 onlynumber" id="a329" /></td>
                                                <td><input value="<? echo $viewdata->a818; ?>" name="a818" type="text" class="span12 onlynumber" id="a318" /></td>
                                              </tr>
                                              <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                              </tr>
                                        </table>
                               		  </div>
										
									</div>
                                    <div class="tab-pane" id="page_13">
										<p>
                                        <div class="span11 form-horizontal well">
                                            
                                          <fieldset>
                                            <p class="f_legend">Additional information (Year <? echo ($openyear-1); ?>)</p>
<div class="span12" style="font-size:18px; color:#006; line-height:3;">Special Services/Status of the Hospital</div>
                                                        <div class="span12">
                                                        	Multiple Selects from the list
                                                            <select class='selects' multiple='multiple' name="a819[]">
                                                              <?
                                                            $special_services_sql=mysql_query("SELECT * FROM special_services ORDER BY special_services_id ASC");
															  while($special_services_r=mysql_fetch_object($special_services_sql)){
															$a819all=$viewdata->a819;
															$a819ps=explode(",",$a819all);
															
															foreach ($a819ps as $a819p){
																if($a819p==$special_services_r->special_services_id){
																	$as819{$special_services_r->special_services_id}=" selected "; }
															}
?>
<option value="<? echo $special_services_r->special_services_id;?>" <? echo $as819{$special_services_r->special_services_id}; ?> ><? echo $special_services_r->special_services_id.$slct.")".$special_services_r->special_services;?></option>
															<?															
                                                              }
															  ?>
                                                            </select>
                                                        <hr />
                                                        </div>

                                                        <div class="span12" style="font-size:18px; color:#006; line-height:3;">Main source of Electricity</div>
                                                        <div class="span12">
                                                            <select  name="a820">
                                                            <?
                                                            $source_electricity_sql=mysql_query("SELECT * FROM source_electricity ORDER BY source_electricity_id ASC");								
															  while($source_electricity_r=mysql_fetch_object($source_electricity_sql)){
																  if($viewdata->a820==$source_electricity_r->source_electricity_id){
																	  $slct=" SELECTED ";
																  } else{ $slct=""; }
?>
<option value="<? echo $source_electricity_r->source_electricity_id;?>" <? echo $slct;?> ><? echo $source_electricity_r->source_electricity_id.")".$source_electricity_r->source_electricity;?></option>
<?															  }
															  ?>
                                                            </select>
                                                            <hr />
                                                        </div>
<div class="span12" style="font-size:18px; color:#006; line-height:3;">Alternate source of Electricity</div>
                                                        <div class="span12">
                                                        	Multiple Selects from the list
                                                            <select class='selects' multiple='multiple' name="a821[]">
                                                            <?
                                                            $source_electricity_sql_2=mysql_query("SELECT * FROM source_electricity ORDER BY source_electricity_id ASC");
															
															  while($source_electricity_r2=mysql_fetch_object($source_electricity_sql_2)){
																 
															$a821all=$viewdata->a821;
															$a821ps=explode(",",$a821all);
															
															foreach ($a821ps as $a821p){
																if($a821p==$source_electricity_r2->source_electricity_id){
																	$as821{$source_electricity_r2->source_electricity_id}=" selected "; }
															}
?>
<option value="<? echo $source_electricity_r2->source_electricity_id;?>" <? echo $as821{$source_electricity_r2->source_electricity_id};?> ><? echo $source_electricity_r2->source_electricity_id.")".$source_electricity_r2->source_electricity;?></option>
<?															  }
															  ?>
                                                            </select>
                                                        <hr />
                                                        </div>
                                                        <div class="span12" style="font-size:18px; color:#006; line-height:3;">Main water supply</div>
                                                        <div class="span12">
                                                            <select  name="a822">
                                                              <?
                                                            $water_supply_sql=mysql_query("SELECT * FROM water_supply ORDER BY water_supply_id ASC");
															  while($water_supply_r=mysql_fetch_object($water_supply_sql)){
																  if($viewdata->a822==$water_supply_r->water_supply_id){
																	  $slct=" SELECTED ";
																  } else{ $slct=""; }
?>
<option value="<? echo $water_supply_r->water_supply_id;?>" <? echo $slct; ?> ><? echo $water_supply_r->water_supply_id.")".$water_supply_r->water_supply;?></option>
<?															  }
															  ?> 
                                                            </select>
                                                            <hr />
                                                        </div>

<div class="span12" style="font-size:18px; color:#006; line-height:3;">Toilet type</div>
                                                        <div class="span12">
                                                        	Multiple Selects from the list
                                                            <select class='selects' multiple='multiple' name="a823[]">
                                                            <?
                                                            $toilet_type_sql=mysql_query("SELECT * FROM toilet_type ORDER BY toilet_type_id ASC");
															  while($toilet_type_r=mysql_fetch_object($toilet_type_sql)){
															$a823all=$viewdata->a823;
															$a823ps=explode(",",$a823all);
															
															foreach ($a823ps as $a823p){
																if($a823p==$toilet_type_r->toilet_type_id){
																	$as823{$toilet_type_r->toilet_type_id}=" selected "; }
															}
?>
<option value="<? echo $toilet_type_r->toilet_type_id;?>" <? echo $as823{$toilet_type_r->toilet_type_id};?> ><? echo $toilet_type_r->toilet_type_id.")".$toilet_type_r->toilet_type;?></option>
<?															  }
															  ?>  
                                                            </select>
                                                        <hr />
                                                        </div>

<div class="span12" style="font-size:18px; color:#006; line-height:3;">Toilet adequacy for Male</div>
                                                        <div class="span12">
                                                        	Multiple Selects from the list
                                                            <select class='selects' multiple='multiple' name="a824[]">
                                                              <?php
                                                              $toilet_adequacy_sql=mysql_query("SELECT * FROM toilet_adequacy ORDER BY toilet_adequacy_id ASC");
															  while($toilet_adequacy_r=mysql_fetch_object($toilet_adequacy_sql)){
															$a824all=$viewdata->a824;
															$a824ps=explode(",",$a824all);
															
															foreach ($a824ps as $a824p){
																if($a824p==$toilet_adequacy_r->toilet_adequacy_id){
																	$as824{$toilet_adequacy_r->toilet_adequacy_id}=" selected "; }
															}
?>
<option value="<? echo $toilet_adequacy_r->toilet_adequacy_id;?>" <? echo $as824{$toilet_adequacy_r->toilet_adequacy_id}; ?> ><? echo $toilet_adequacy_r->toilet_adequacy_id.")".$toilet_adequacy_r->toilet_adequacy;?></option>
<?															  }
															  ?>
                                                            </select>
                                                        <hr />
                                                        </div>

<div class="span12" style="font-size:18px; color:#006; line-height:3;">Toilet adequacy for Female</div>
                                                        <div class="span12">
                                                        	Multiple Selects from the list
                                                            <select class='selects' multiple='multiple' name="a825[]">
                                                              <?php
                                                              $toilet_adequacy_sql=mysql_query("SELECT * FROM toilet_adequacy ORDER BY toilet_adequacy_id ASC");
															  while($toilet_adequacy_r=mysql_fetch_object($toilet_adequacy_sql)){
															$a825all=$viewdata->a825;
															$a825ps=explode(",",$a825all);
															
															foreach ($a825ps as $a825p){
																if($a825p==$toilet_adequacy_r->toilet_adequacy_id){
																	$as825{$toilet_adequacy_r->toilet_adequacy_id}=" selected "; }
															}
?>
<option value="<? echo $toilet_adequacy_r->toilet_adequacy_id;?>" <? echo $as825{$toilet_adequacy_r->toilet_adequacy_id}; ?> ><? echo $toilet_adequacy_r->toilet_adequacy_id.")".$toilet_adequacy_r->toilet_adequacy;?></option>
<?															  }
															  ?>
                                                            </select>
                                                        <hr />
                                                        </div>
                                                        
<div class="span12" style="font-size:18px; color:#006; line-height:3;">Autoclave</div>
                                                        <div class="span12">
                                                        	Multiple Selects from the list
                                                            <select class='selects' multiple='multiple' name="a826[]">
                                                              <?php
                                                              $autoclave_sql=mysql_query("SELECT * FROM autoclave ORDER BY autoclave_id ASC");
															  while($autoclave_r=mysql_fetch_object($autoclave_sql)){
																																													 															$a826all=$viewdata->a826;
															$a826ps=explode(",",$a826all);
															
															foreach ($a826ps as $a826p){
																if($a826p==$autoclave_r->autoclave_id){
																	$as826{$autoclave_r->autoclave_id}=" selected "; }
															}
?>
<option value="<? echo $autoclave_r->autoclave_id;?>" <? echo $as826{$autoclave_r->autoclave_id};?> ><? echo $autoclave_r->autoclave_id.")".$autoclave_r->autoclave;?></option>
<?															  }
															  ?>                       
                                                            </select>
                                                        <hr />
                                                        </div>
                                                        
<div class="span12" style="font-size:18px; color:#006; line-height:3;">Waste disposal</div>
                                                        <div class="span12">
                                                        	Multiple Selects from the list
                                                            <select class='selects' multiple='multiple' name="a827[]">
                                                             <?php
                                                              $waste_disposal_sql=mysql_query("SELECT * FROM waste_disposal ORDER BY waste_disposal_id ASC");
															  while($waste_disposal_r=mysql_fetch_object($waste_disposal_sql)){
															  
															$a827all=$viewdata->a827;
															$a827ps=explode(",",$a827all);
															
															foreach ($a827ps as $a827p){
																if($a827p==$waste_disposal_r->waste_disposal_id){
																	$as827{$waste_disposal_r->waste_disposal_id}=" selected "; }
															}
?>
<option value="<? echo $waste_disposal_r->waste_disposal_id;?>" <? echo $as827{$waste_disposal_r->waste_disposal_id}; ?> ><? echo $waste_disposal_r->waste_disposal_id.")".$waste_disposal_r->waste_disposal;?></option>
<?															  }
															  ?>
                                                            </select>
                                                        <hr />
                                                        </div>                                                                                                                          
                                                </fieldset>
                                            
                                		</div>
										</p>
									</div>
									<div class="tab-pane" id="page_14">
										<p>
                                        <div class="span11 form-horizontal well">
                                            
                                                <fieldset>
                                                    <p class="f_legend">Important information and necessary issues you want to raise (Year <? echo ($openyear-1); ?>)</p>
                                                            <textarea name="a1100" cols="30" rows="10" class="span12" id="lastcomments_char_limit" placeholder="Maximum 3000 characters"><? echo $viewdata->a1100; ?></textarea>
                                                </fieldset>
                                            
                                		</div>
										</p>
									</div>
								</div>
							 </div>
						
                            
							
						</div>
						
					</div>
					
                        
                
            </div>
            </div>
            </form>