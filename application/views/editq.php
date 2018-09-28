<!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>Q_css/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url();?>Q_css/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="<?php echo base_url();?>Q_css/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Q_css/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Q_css/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

<div class="right_col" role="main">
	
		<font color="black"><div class="page-title">
			<div class="title_left">
				<h3><font color="black">บันทึกการเลื่อนคิว</font></h3>
			</div>
			<div class="title_right">
            </div>
		</div>
		<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
                	<div class="x_panel">
                  		<div class="x_title">
                            <!-- Smart Wizard -->
                   			<div id="wizard" class="form_wizard wizard_horizontal">
                      			<ul class="wizard_steps">
                       				<li>
                          				<a href="#step-1">
                            				<span class="step_no">1</span>
                            				<span class="step_descr">
                                            	<b><font color="black">ขั้นตอนที่  1</font></b><br />
                                              	<small><h5><font color="black">ข้อมูลคิว</font></h5></small>
                                       		</span>
                          				</a>
                        			</li>
                        			<li>
                          				<a href="#step-2">
                            				<span class="step_no">2</span>
                            				<span class="step_descr">
                                            	<b><font color="black">ขั้นตอนที่  2</font></b><br/>
                                              	<h5><font color="black">แสดงช่วงเวลา</font></h5>
                          				</a>
                        			</li>
                        			<li>
                          				<a href="#step-3">
                            				<span class="step_no">3</span>
                            				<span class="step_descr">
                                              	<b><font color="black">ขั้นตอนที่  3</font></b><br />
                                              	<h5><font color="black">เปลี่ยนแปลงช่วงเวลา</font></h5>
                                   			</span>
                          				</a>
                        			</li>
                        			<li>
                          				<a href="#step-4">
                            				<span class="step_no">4</span>
                            				<span class="step_descr">
                                             	<b><font color="black">ขั้นตอนที่  4</font></b><br />
                                              	<font color="black"><h5>ผลการเลื่อนคิว</h5></font>
                                          	</span>
                          				</a>
                        			</li>
                        			
                        		</ul>
                     			<div id="step-1">
                     				<form class="form-horizontal form-label-left">
                      					<font color="black"><div class="form-group">
                            				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ชื่อคิว :
                            				</label>
                            				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">กองทุนกู้ยื่มเพื่อการศึกษา (รายใหม่)
                            				</label>
                            			</div></font>
                            			<font color="black"><div class="form-group">
                            				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">วันที่  02/03/2561
                            				</label>
                            				<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">จำนวนทั้งหมด 7 ช่วง
                            				</label>
                            			</div></font>
                            			<font color="black"><div class="form-group">
                            				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">วันที่  03/03/2561
                            				</label>
                            				<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">จำนวนทั้งหมด 2 ช่วง 
                            				</label>
                            			</div></font>
                            			<font color="black"><div class="form-group">
                            				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">วันที่  04/03/2561
                            				</label>
                            				<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">จำนวนทั้งหมด 5 ช่วง
                            				</label>
                            			</div></font>
                          				
                          			</form>
								</div>
                      			<div id="step-2">
                         			<form class="form-horizontal form-label-left">
                         			
                          			
                         		<div class="col-md-12 col-sm-12 col-xs-12">
            	
               		<div class="x_content">
                    	<div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
  							<div class="row">
                     			<div class="col-sm-12">
                     				<table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      					<thead>
                        					<tr role="row" align="center">
                        						<th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px;">วันที่</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 60px;">ช่วงที่</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 150px;">เวลา</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 150px;">จำนวนนักศึกษา</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 90px;">เลือกคิว</th>
                        						
                        					</tr>
                      					</thead>
										<tbody>
                       						<tr role="row" class="odd">
                          						<td class="sorting_1">02/03/2561</td>
                          						<td>1</td>
                          						<td>08:00-09:00  น.</td>
                          						<td>150</td>
                          						<td><div class="checkbox">
  <label><input type="checkbox" value=""></label>
</div></td>
                          						
                        					</tr>
                       						<tr role="row" class="even">
                          						<td class="sorting_1"></td>
                          						<td>2</td>
                          						<td>09:00-10:00  น.</td>
                          						<td>70</td>
                          						<td><div class="checkbox">
  <label><input type="checkbox" value=""></label>
</div></td>
                        					</tr>
                        					<tr role="row" class="even">
                          						<td class="sorting_1"></td>
                          						<td>3</td>
                          						<td>10:00-11:00  น.</td>
                          						<td>150</td>
                          						<td><div class="checkbox">
  <label><input type="checkbox" value=""></label>
</div></td>
                        					</tr>
                        					<tr role="row" class="even">
                          						<td class="sorting_1"></td>
                          						<td>4</td>
                          						<td>11:00-12:00  น.</td>
                          						<td>150</td>
                          					<td><div class="checkbox">
  <label><input type="checkbox" value=""></label>
</div></td>
                        					</tr>
                        					<tr role="row" class="even">
                          						<td class="sorting_1"></td>
                          						<td>5</td>
                          						<td>13:00-14:00  น.</td>
                          						<td>100</td>
                          					<td><div class="checkbox">
  <label><input type="checkbox" value=""></label>
</div></td>
                        					</tr>
                        					<tr role="row" class="even">
                          						<td class="sorting_1"></td>
                          						<td>6</td>
                          						<td>14:00-15:00 น.</td>
                          						<td>90</td>
                          					<td><div class="checkbox">
  <label><input type="checkbox" value=""></label>
</div></td>
                        					</tr>
                        					<tr role="row" class="even">
                          						<td class="sorting_1"></td>
                          						<td>7</td>
                          						<td>15:00-16:00  น.</td>
                          						<td>80</td>
                          					<td><div class="checkbox">
  <label><input type="checkbox" value=""></label>
</div></td>
                        					</tr>
                        					<tr role="row" class="odd">
                          						<td class="sorting_1">03/03/2561</td>
                          						<td>1</td>
                          						<td>08:00-12:00  น.</td>
                          						<td>300</td>
                          						<td><div class="checkbox">
  <label><input type="checkbox" value=""></label>
 </div></td></tr>
 							<tr role="row" class="even">
                          						<td class="sorting_1"></td>
                          						<td>2</td>
                          						<td>13:00-17:00  น.</td>
                          						<td>300</td>
                          					<td><div class="checkbox">
  <label><input type="checkbox" value=""></label>
</div></td>
                        					</tr>
                        					           					<tr role="row" class="odd">
                          						<td class="sorting_1">04/03/2561</td>
                          						<td>1</td>
                          						<td>09:00-10:00 น.</td>
                          						<td>150</td>
                          						<td><div class="checkbox">
  <label><input type="checkbox" value=""></label>
 </div></td></tr>
 <tr role="row" class="even">
                          						<td class="sorting_1"></td>
                          						<td>2</td>
                          						<td>10:00-11:00  น.</td>
                          						<td>100</td>
                          					<td><div class="checkbox">
  <label><input type="checkbox" value=""></label>
</div></td>
                        					</tr>
                        					<tr role="row" class="even">
                          						<td class="sorting_1"></td>
                          						<td>3</td>
                          						<td>11:00-12:00  น.</td>
                          						<td>80</td>
                          					<td><div class="checkbox">
  <label><input type="checkbox" value=""></label>
</div></td>
                        					</tr>
                        					<tr role="row" class="even">
                          						<td class="sorting_1"></td>
                          						<td>4</td>
                          						<td>13:00-14:00 น.</td>
                          						<td>90</td>
                          					<td><div class="checkbox">
  <label><input type="checkbox" value=""></label>
</div></td>
                        					</tr>
                        					<tr role="row" class="even">
                          						<td class="sorting_1"></td>
                          						<td>5</td>
                          						<td>14:00-15:00 น.</td>
                          						<td>150</td>
                          					<td><div class="checkbox">
  <label><input type="checkbox" value=""></label>
</div></td>
                        					</tr>
 
                        				</tbody>
                    				</table>
                    			</div>
                    		</div>
                    	</div>
                	</div>
              	</div>
      		
                          			</form>
                        		</div>
                      			<div id="step-3">
                        			<form class="form-horizontal form-label-left">
										<div class="col-md-12 col-sm-12 col-xs-12">
            	
               		<div class="x_content">
                    	<div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
  							<div class="row">
                     			<div class="col-sm-12">
                     				<table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      					<thead>
                        					<tr role="row" align="center">
                        						<th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">วันที่และช่วงเวลา </th>
	                       						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 500px;">กำหนดวันที่และช่วงเวลาใหม่</th>
                        					
          
                        					</tr>
                      					</thead>
										<tbody>
                       						<tr role="row" class="odd">
                          						
                          						<td class="sorting_1">02/03/2561
                          						 เวลา 10:00-11:00  น.</td>
                          						
                          						<td><label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black">วันที่</font></label><div class='col-sm-8'>
                  								<div class='input-group date' id='myDatepicker5'>
                            						 <input type='text' class="form-control" />
                            						<span class="input-group-addon">
                               							<span class="glyphicon glyphicon-calendar"></span>
                            						</span>
                        						</div>
                        					</div>
                          						
                          						<br><div class="form-group">
                       						<label class="control-label col-md-4 col-sm-4 col-xs-4"><font color="black">เวลาที่เริ่มต้น :</font></label>
                        					<div class="col-md-1 col-sm-1 col-xs-1">
                          						<input type="text" name="qname" required="required" class="form-control col-md-7 col-xs-12">
                          					</div>
                          					
                       						</div>
                       						<div class="form-group">
                       						<label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black">ถึง</font></label>
                        					<div class="col-md-1 col-sm-1 col-xs-1">
                          						<input type="text" name="qname" required="required" class="form-control col-md-7 col-xs-12">
                          					</div>
                          					</div>
                       						<br>
                        					
                        					<br><div  class="form-group">
                        						<label class="control-label col-md-5 col-sm-5 col-xs-5"><font color="black">จำนวนนักศึกษา</font></label>
                        					
                        					<div class="col-md1 col-sm-1 col-xs-1">
                                				<input type="text" name="qname" required="required" class="form-control col-md-7 col-xs-12">
                        					</div></div>
                      					</td>
                          						
                        					</tr>
                       						
 
                        				</tbody>
                    				</table>
                    			</div>
                    		</div>
                    	</div>
                	</div>
              	</div>
                                	</form>
                        		</div>
                      			<div id="step-4">
                      				<b><font color="black">à¸§à¸±à¸™à¸—à¸µà¹ˆ 02/03/2561 &nbsp;&nbsp;&nbsp;&nbsp;à¸—à¸±à¹‰à¸‡à¸«à¸¡à¸” 7 à¸Šà¹ˆà¸§à¸‡ &nbsp;&nbsp;&nbsp;&nbsp;à¹€à¸›à¸¥à¸µà¹ˆà¸¢à¸™à¹�à¸›à¸¥à¸‡à¹€à¸›à¹‡à¸™</font></b>
                      				
                        			<b><font color="black">&nbsp;&nbsp; à¸§à¸±à¸™à¸—à¸µà¹ˆ  15/03/2561&nbsp;&nbsp; à¸ˆà¸³à¸™à¸§à¸™à¸Šà¹ˆà¸§à¸‡à¹€à¸§à¸¥à¸² 3 à¸Šà¹ˆà¸§à¸‡ à¸„à¸·à¸­</font></b></br>
                        			
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;à¸Šà¹ˆà¸§à¸‡à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆ 1&nbsp;&nbsp;à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆà¹€à¸£à¸´à¹ˆà¸¡&nbsp;&nbsp;08:00&nbsp;à¸–à¸¶à¸‡&nbsp;11:00 </font></br>
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;à¸Šà¹ˆà¸§à¸‡à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆ 2&nbsp;&nbsp;à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆà¹€à¸£à¸´à¹ˆà¸¡&nbsp;&nbsp;13:00&nbsp;à¸–à¸¶à¸‡&nbsp;16:00 </font></br>
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;à¸Šà¹ˆà¸§à¸‡à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆ 3&nbsp;&nbsp;à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆà¹€à¸£à¸´à¹ˆà¸¡&nbsp;&nbsp;16:00&nbsp;à¸–à¸¶à¸‡&nbsp;19:00 </font></br>
                         			<b><font color="black">à¸§à¸±à¸™à¸—à¸µà¹ˆ 03/03/2561 &nbsp;&nbsp;&nbsp;&nbsp;à¸—à¸±à¹‰à¸‡à¸«à¸¡à¸” 2 à¸Šà¹ˆà¸§à¸‡ &nbsp;&nbsp;&nbsp;&nbsp;à¹€à¸›à¸¥à¸µà¹ˆà¸¢à¸™à¹�à¸›à¸¥à¸‡à¹€à¸›à¹‡à¸™</font></b>
                         			<b><font color="black"> &nbsp;&nbsp; à¸§à¸±à¸™à¸—à¸µà¹ˆ  16/03/2561&nbsp;&nbsp; à¸ˆà¸³à¸™à¸§à¸™à¸Šà¹ˆà¸§à¸‡à¹€à¸§à¸¥à¸² 3 à¸Šà¹ˆà¸§à¸‡ à¸„à¸·à¸­</font></b></br>
                         			
                         			
                        			
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;à¸Šà¹ˆà¸§à¸‡à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆ 1&nbsp;&nbsp;à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆà¹€à¸£à¸´à¹ˆà¸¡&nbsp;&nbsp;09:00&nbsp;à¸–à¸¶à¸‡&nbsp;10:00 </font></br>
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;à¸Šà¹ˆà¸§à¸‡à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆ 2&nbsp;&nbsp;à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆà¹€à¸£à¸´à¹ˆà¸¡&nbsp;&nbsp;10:01&nbsp;à¸–à¸¶à¸‡&nbsp;12:00 </font></br>
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;à¸Šà¹ˆà¸§à¸‡à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆ 3&nbsp;&nbsp;à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆà¹€à¸£à¸´à¹ˆà¸¡&nbsp;&nbsp;13:01&nbsp;à¸–à¸¶à¸‡&nbsp;14:00 </font></br>
                         			<b><font color="black">à¸§à¸±à¸™à¸—à¸µà¹ˆ 04/03/2561 &nbsp;&nbsp;&nbsp;&nbsp;à¸—à¸±à¹‰à¸‡à¸«à¸¡à¸” 5 à¸Šà¹ˆà¸§à¸‡ &nbsp;&nbsp;&nbsp;&nbsp;à¹€à¸›à¸¥à¸µà¹ˆà¸¢à¸™à¹�à¸›à¸¥à¸‡à¹€à¸›à¹‡à¸™</font></b>
                         			<b><font color="black">&nbsp;&nbsp; à¸§à¸±à¸™à¸—à¸µà¹ˆ  17/03/2561&nbsp;&nbsp; à¸ˆà¸³à¸™à¸§à¸™à¸Šà¹ˆà¸§à¸‡à¹€à¸§à¸¥à¸² 3 à¸Šà¹ˆà¸§à¸‡ à¸„à¸·à¸­</font></b></br>
                        			
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;à¸Šà¹ˆà¸§à¸‡à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆ 1&nbsp;&nbsp;à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆà¹€à¸£à¸´à¹ˆà¸¡&nbsp;&nbsp;08:00&nbsp;à¸–à¸¶à¸‡&nbsp;10:00 </font></br>
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;à¸Šà¹ˆà¸§à¸‡à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆ 2&nbsp;&nbsp;à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆà¹€à¸£à¸´à¹ˆà¸¡&nbsp;&nbsp;10:01&nbsp;à¸–à¸¶à¸‡&nbsp;12:00 </font></br>
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;à¸Šà¹ˆà¸§à¸‡à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆ 3&nbsp;&nbsp;à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆà¹€à¸£à¸´à¹ˆà¸¡&nbsp;&nbsp;13:01&nbsp;à¸–à¸¶à¸‡&nbsp;15:00 </font></br>
                      			
							</div>
							
                    <!-- End SmartWizard Content -->
                    	</div>
                    <!-- End SmartWizard Content -->
                  	</div>
            	</div>
		</div>
	</div>
</font>
</div>
   	
      
          
       
        <!-- /page content -->
           <!-- jQuery -->
    <script src="<?php echo base_url();?>Q_css/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>Q_css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>Q_css/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>Q_css/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>Q_css/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>Q_css/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url();?>Q_css/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="<?php echo base_url();?>Q_css/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
   
    <!-- jquery.inputmask -->
    <script src="<?php echo base_url();?>Q_css/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
   

    
    <!-- Initialize datetimepicker -->
<script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    
    $('#myDatepicker4').datetimepicker({
    	format: 'DD/MM/YYYY'
    });

    $('#myDatepicker5').datetimepicker({
    	format: 'DD/MM/YYYY'
    });
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>


        
       


