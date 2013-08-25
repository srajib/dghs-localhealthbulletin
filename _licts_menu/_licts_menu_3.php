<a href="javascript:void(0)" class="sidebar_switch on_switch ttip_r" title="Hide Sidebar">Sidebar switch</a>
            <div class="sidebar">
				<div class="antiScroll">
					<div class="antiscroll-inner">
						<div class="antiscroll-content">
							<div class="sidebar_inner">
								<form action="index.php?uid=1&amp;page=search_page" class="input-append" method="post" >
									<input autocomplete="off" name="query" class="search_query input-medium" size="16" type="text" placeholder="Search..." /><button type="submit" class="btn"><i class="icon-search"></i></button>
								</form>
									<div class="accordion-group">
										<div class="accordion-heading">
											<a href="#createupdate" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
												<i class="icon-folder-close"></i> Create/Update LHB
											</a>
										</div>
										<div class="accordion-body collapse" id="createupdate">
											<div class="accordion-inner">
												<ul class="nav nav-list">
												<?
												$year_menu_q=mysql_query("SELECT year_ FROM lhb_year WHERE status_=1");
												WHILE($year_menu=mysql_fetch_object($year_menu_q)){
												?>
												<li><a href="?page=entry">Year <? echo $year_menu->year_; ?></a></li>
												<?
												}
												?>
												</ul>
											</div>
										</div>
									</div>
                                 
							<div class="accordion-group">
										<div class="accordion-heading">
											<a href="#collapseTwo" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
												<i class="icon-th"></i> Publish LHB
											</a>
										</div>
										<div class="accordion-body collapse" id="collapseTwo">
											<div class="accordion-inner">
												<ul class="nav nav-list">
													<?
													$year_pub_q=mysql_query("SELECT * FROM lhb_year");
													WHILE($year_pub=mysql_fetch_object($year_pub_q)){
													?>
												<li><a href="./publish/publish.php?org=<? echo $orgid; ?>&year=<?echo $year_pub->year_;?>" target="_blank"><? echo $year_pub->year_; ?></a></li>
													<? } ?>
                          <li><a href="http://app.dghs.gov.bd/lhb/reportbyadmin.php?yid=2012&lvl=2&om=<? echo $orgemail; ?>&oti=&organame=<? echo $org_details->name; ?>">2012</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="accordion-group">
										<div class="accordion-heading">
											<a href="#collapseThree" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
												<i class="icon-user"></i> User Manual
											</a>
										</div>
										<div class="accordion-body collapse" id="collapseThree">
											<div class="accordion-inner">
												<ul class="nav nav-list">
													<li><a href="manual.pdf" target="_blank">PDF Manual</a></li>
													<li><a href="#">Video Manual</a></li>
												</ul>
												
											</div>
										</div>
									</div>
                                    <div class="accordion-group">
										<div class="accordion-heading">
											<a href="#collapseFour" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
												<i class="icon-user"></i> Help
											</a>
										</div>
										<div class="accordion-body">
											<div class="sidebar_info">                            
                                                <ul class="unstyled">
                                                    <li><strong>System Administrator</strong></li>
                                                    <li>
                                                        <strong>Mohammad Hassanour Zaman</strong>
                                                    <!---     <span class="act act-success">01754 244 881</span> --->
                                                    </li>
                                                    <li>
                                                        <strong>Mahfizur Rahman Setu</strong>
                                                        <span class="act act-success">01816 199 919</span>
                                                    </li>                                    
                                                </ul>
                                                <ul class="unstyled">
                                                    <li>
                                                        <strong>Medical/Data Related Help</strong>									
                                                    </li>
                                                    <li>
                                                        <strong>Dr. ASM Sayem</strong><br />
                                                        <span class="act act-warning">01711 789 224</span>
                                                    </li>                                    
                                                </ul>
                                            </div> 
										</div>
									</div>
								<div class="push"></div>							
						</div>							
						</div>
					</div>
				</div>
			</div>