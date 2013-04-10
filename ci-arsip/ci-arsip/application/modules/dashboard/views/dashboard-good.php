<?php $this->load->view('main/header');?>
<?php
$usernm=$this->session->userdata['username'];

?>
<!-- main content -->
            <div id="contentwrapper">
                <div class="main_content">
                    
					<div class="row-fluid">
						<div class="span12 tac">
							<ul class="ov_boxes">
								<li>
									<div class="p_bar_up p_canvas">2,4,9,7,12,8,16</div>
									<div class="ov_text">
										<strong>$3 458,00</strong>
										Weekly Sale
									</div>
								</li>
								<li>
									<div class="p_bar_down p_canvas">20,15,18,14,10,13,9,7</div>
									<div class="ov_text">
										<strong>$43 567,43</strong>
										Monthly Sale
									</div>
								</li>
								<li>
									<div class="p_line_up p_canvas">3,5,9,7,12,8,16</div>
									<div class="ov_text">
										<strong>2304</strong>
										Unique visitors (last 24h)
									</div>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<ul class="dshb_icoNav tac">
								<li><a href="javascript:void(0)" style="background-image: url(<?php echo base_url();?>assets/img/gCons/multi-agents.png)"><span class="label label-info">+10</span>Pengguna</a></li>
								<li><a href="javascript:void(0)" style="background-image: url(<?php echo base_url();?>assets/img/gCons/happy-face.png)"><span class="label label-info">+10</span>Konsumen</a></li>
								<li><a href="javascript:void(0)" style="background-image: url(<?php echo base_url();?>assets/img/gCons/tree.png)">Kategori</a></li>
								<li><a href="javascript:void(0)" style="background-image: url(<?php echo base_url();?>assets/img/gCons/apple.png)">Barang</a></li>
								<li><a href="javascript:void(0)" style="background-image: url(<?php echo base_url();?>assets/img/gCons/configuration.png)">Pengaturan</a></li>

								<li><a href="javascript:void(0)" style="background-image: url(<?php echo base_url();?>assets/img/gCons/van.png)"><span class="label label-success">$2851</span> Pengiriman</a></li>
								<li><a href="javascript:void(0)" style="background-image: url(<?php echo base_url();?>assets/img/gCons/pie-chart.png)">Charts</a></li>
								<li><a href="javascript:void(0)" style="background-image: url(<?php echo base_url();?>assets/img/gCons/dollar.png)">Pembayaran</a></li>

							</ul>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span5">
							<h3 class="heading">Visitors by Country <small>last week</small></h3>
							<div id="fl_2" style="height:200px;width:80%;margin:50px auto 0"></div>
						</div>
						<div class="span7">
							<div class="heading clearfix">
								<h3 class="pull-left">Another Chart</h3>
								<span class="pull-right label label-info ttip_t" title="Here is a sample info tooltip">Info</span>
							</div>
							<div id="fl_1" style="height:270px;width:100%;margin:15px auto 0"></div>
						</div>
					</div>
                    <div class="row-fluid">
                        <div class="span12">
							<div class="heading clearfix">
								<h3 class="pull-left">Latest Orders</h3>
								<span class="pull-right label label-important">5 Orders</span>
							</div>
							<table class="table table-striped table-bordered mediaTable">
								<thead>
									<tr>
										<th class="optional">id</th>
										<th class="essential persist">Customer</th>
										<th class="optional">Status</th>
										<th class="optional">Date Added</th>
										<th class="essential">Total</th>
										<th class="essential">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>134</td>
										<td>Summer Throssell</td>
										<td>Pending</td>
										<td>24/04/2012</td>
										<td>$120.23</td>
										<td>
											<a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
											<a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
											<a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
										</td>
									</tr>
									<tr>
										<td>133</td>
										<td>Declan Pamphlett</td>
										<td>Pending</td>
										<td>23/04/2012</td>
										<td>$320.00</td>
										<td>
											<a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
											<a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
											<a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
										</td>
									</tr>
									<tr>
										<td>132</td>
										<td>Erin Church</td>
										<td>Pending</td>
										<td>23/04/2012</td>
										<td>$44.00</td>
										<td>
											<a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
											<a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
											<a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
										</td>
									</tr>
									<tr>
										<td>131</td>
										<td>Koby Auld</td>
										<td>Pending</td>
										<td>22/04/2012</td>
										<td>$180.20</td>
										<td>
											<a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
											<a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
											<a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
										</td>
									</tr>
									<tr>
										<td>130</td>
										<td>Anthony Pound</td>
										<td>Pending</td>
										<td>20/04/2012</td>
										<td>$610.42</td>
										<td>
											<a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
											<a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
											<a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
                        </div>
                       
                    </div>
                    
                     <div class="row-fluid">
                        <div class="span12">
                            <h3 class="heading">Column show/hide</h3>
                            <div class="clearfix sepH_b">
                                <div class="btn-group pull-right">
                                    <a href="#" data-toggle="dropdown" class="btn btn-inverse dropdown-toggle">Columns <span class="caret"></span></a>
                                    <ul class="dropdown-menu tableMenu" id="dt_d_nav">
                                        <li><label class="checkbox" for="dt_col_1"><input type="checkbox" value="0" id="dt_col_1" name="toggle-cols" checked="checked"/> Rendering engine</label></li>
                                        <li><label class="checkbox" for="dt_col_2"><input type="checkbox" value="1" id="dt_col_2" name="toggle-cols" checked="checked"/> Browser</label></li>
                                        <li><label class="checkbox" for="dt_col_3"><input type="checkbox" value="2" id="dt_col_3" name="toggle-cols" checked="checked"/> Platform(s)</label></li>
                                        <li><label class="checkbox" for="dt_col_4"><input type="checkbox" value="3" id="dt_col_4" name="toggle-cols" checked="checked"/> Engine version</label></li>
                                        <li><label class="checkbox" for="dt_col_5"><input type="checkbox" value="4" id="dt_col_5" name="toggle-cols" checked="checked"/> CSS grade</label></li>
                                    </ul>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered dTableR" id="dt_d">
                                <thead>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                             Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td class="center"> 4</td>
                                        <td class="center">X</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                             Explorer 5.0</td>
                                        <td>Win 95+</td>
                                        <td class="center">5</td>
                                        <td class="center">C</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                             Explorer 5.5</td>
                                        <td>Win 95+</td>
                                        <td class="center">5.5</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                             Explorer 6</td>
                                        <td>Win 98+</td>
                                        <td class="center">6</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet Explorer 7</td>
                                        <td>Win XP SP2+</td>
                                        <td class="center">7</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>AOL browser (AOL desktop)</td>
                                        <td>Win XP</td>
                                        <td class="center">6</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Firefox 1.0</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td class="center">1.7</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Firefox 1.5</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td class="center">1.8</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Firefox 2.0</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td class="center">1.8</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Firefox 3.0</td>
                                        <td>Win 2k+ / OSX.3+</td>
                                        <td class="center">1.9</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Camino 1.0</td>
                                        <td>OSX.2+</td>
                                        <td class="center">1.8</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Camino 1.5</td>
                                        <td>OSX.3+</td>
                                        <td class="center">1.8</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Netscape 7.2</td>
                                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                                        <td class="center">1.7</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Netscape Browser 8</td>
                                        <td>Win 98SE+</td>
                                        <td class="center">1.7</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Netscape Navigator 9</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td class="center">1.8</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.0</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td class="center">1</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.1</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td class="center">1.1</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.2</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td class="center">1.2</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.3</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td class="center">1.3</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.4</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td class="center">1.4</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.5</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td class="center">1.5</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.6</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td class="center">1.6</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.7</td>
                                        <td>Win 98+ / OSX.1+</td>
                                        <td class="center">1.7</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.8</td>
                                        <td>Win 98+ / OSX.1+</td>
                                        <td class="center">1.8</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Seamonkey 1.1</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td class="center">1.8</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Epiphany 2.20</td>
                                        <td>Gnome</td>
                                        <td class="center">1.8</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Webkit</td>
                                        <td>Safari 1.2</td>
                                        <td>OSX.3</td>
                                        <td class="center">125.5</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Webkit</td>
                                        <td>Safari 1.3</td>
                                        <td>OSX.3</td>
                                        <td class="center">312.8</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Webkit</td>
                                        <td>Safari 2.0</td>
                                        <td>OSX.4+</td>
                                        <td class="center">419.3</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Webkit</td>
                                        <td>Safari 3.0</td>
                                        <td>OSX.4+</td>
                                        <td class="center">522.1</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Webkit</td>
                                        <td>OmniWeb 5.5</td>
                                        <td>OSX.4+</td>
                                        <td class="center">420</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Webkit</td>
                                        <td>iPod Touch / iPhone</td>
                                        <td>iPod</td>
                                        <td class="center">420.1</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Webkit</td>
                                        <td>S60</td>
                                        <td>S60</td>
                                        <td class="center">413</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Opera 7.0</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td class="center">-</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Opera 7.5</td>
                                        <td>Win 95+ / OSX.2+</td>
                                        <td class="center">-</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Opera 8.0</td>
                                        <td>Win 95+ / OSX.2+</td>
                                        <td class="center">-</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Opera 8.5</td>
                                        <td>Win 95+ / OSX.2+</td>
                                        <td class="center">-</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Opera 9.0</td>
                                        <td>Win 95+ / OSX.3+</td>
                                        <td class="center">-</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Opera 9.2</td>
                                        <td>Win 88+ / OSX.3+</td>
                                        <td class="center">-</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Opera 9.5</td>
                                        <td>Win 88+ / OSX.3+</td>
                                        <td class="center">-</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Opera for Wii</td>
                                        <td>Wii</td>
                                        <td class="center">-</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Nokia N800</td>
                                        <td>N800</td>
                                        <td class="center">-</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Nintendo DS browser</td>
                                        <td>Nintendo DS</td>
                                        <td class="center">8.5</td>
                                        <td class="center">C/A<sup>1</sup></td>
                                    </tr>
                                    <tr>
                                        <td>KHTML</td>
                                        <td>Konqureror 3.1</td>
                                        <td>KDE 3.1</td>
                                        <td class="center">3.1</td>
                                        <td class="center">C</td>
                                    </tr>
                                    <tr>
                                        <td>KHTML</td>
                                        <td>Konqureror 3.3</td>
                                        <td>KDE 3.3</td>
                                        <td class="center">3.3</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>KHTML</td>
                                        <td>Konqureror 3.5</td>
                                        <td>KDE 3.5</td>
                                        <td class="center">3.5</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Tasman</td>
                                        <td>Internet Explorer 4.5</td>
                                        <td>Mac OS 8-9</td>
                                        <td class="center">-</td>
                                        <td class="center">X</td>
                                    </tr>
                                    <tr>
                                        <td>Tasman</td>
                                        <td>Internet Explorer 5.1</td>
                                        <td>Mac OS 7.6-9</td>
                                        <td class="center">1</td>
                                        <td class="center">C</td>
                                    </tr>
                                    <tr>
                                        <td>Tasman</td>
                                        <td>Internet Explorer 5.2</td>
                                        <td>Mac OS 8-X</td>
                                        <td class="center">1</td>
                                        <td class="center">C</td>
                                    </tr>
                                    <tr>
                                        <td>Misc</td>
                                        <td>NetFront 3.1</td>
                                        <td>Embedded devices</td>
                                        <td class="center">-</td>
                                        <td class="center">C</td>
                                    </tr>
                                    <tr>
                                        <td>Misc</td>
                                        <td>NetFront 3.4</td>
                                        <td>Embedded devices</td>
                                        <td class="center">-</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr>
                                        <td>Misc</td>
                                        <td>Dillo 0.8</td>
                                        <td>Embedded devices</td>
                                        <td class="center">-</td>
                                        <td class="center">X</td>
                                    </tr>
                                    <tr>
                                        <td>Misc</td>
                                        <td>Links</td>
                                        <td>Text only</td>
                                        <td class="center">-</td>
                                        <td class="center">X</td>
                                    </tr>
                                    <tr>
                                        <td>Misc</td>
                                        <td>Lynx</td>
                                        <td>Text only</td>
                                        <td class="center">-</td>
                                        <td class="center">X</td>
                                    </tr>
                                    <tr>
                                        <td>Misc</td>
                                        <td>IE Mobile</td>
                                        <td>Windows Mobile 6</td>
                                        <td class="center">-</td>
                                        <td class="center">C</td>
                                    </tr>
                                    <tr>
                                        <td>Misc</td>
                                        <td>PSP browser</td>
                                        <td>PSP</td>
                                        <td class="center">-</td>
                                        <td class="center">C</td>
                                    </tr>
                                    <tr class="gradeU">
                                        <td>Other browsers</td>
                                        <td>All others</td>
                                        <td>-</td>
                                        <td class="center">-</td>
                                        <td class="center">U</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>   
                </div>
            </div>
            <?php $this->load->view('main/sidebar');?>
<?php $this->load->view('main/footer');?>