<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $("#timeslot").click(function(){
        $("#slottime1").show();
    });
    $("#timeslot").click(function(){
        $("#slottime1").hide();
    });

});
</script>


<!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>Q_css/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url();?>Q_css/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="<?php echo base_url();?>Q_css/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Q_css/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Q_css/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

<font color="black">
<div class="right_col" role="main">
		<div class="page-title">
			<div class="title_left">
				<h3><font color="black">บันทึกการสร้างคิว</font></h3>
			</div>
			<div class="title_right"></div>
		</div>
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
                      <b><font color="black">ขั้นตอนที่ 1</font></b><br />
                      <small><h5><font color="black">ข้อมูลคิว</font></h5></small>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-2">
                    <span class="step_no">2</span>
                    <span class="step_descr">
                      <b><font color="black">ขั้นตอนที่ 2</font></b><br/>
                      <small><h5><font color="black">ช่วงเวลา</font></h5></small>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-3">
                    <span class="step_no">3</span>
                    <span class="step_descr">
                      <b><font color="black">ขั้นตอนที่ 3</font></b><br />
                      <font color="black"><h5>ขั้นตอนการทำงาน</h5></font>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-4">
                    <span class="step_no">4</span>
                    <span class="step_descr">
                      <b><font color="black">ขั้นตอนที่ 4</font></b><br />
                      <font color="black"><h5>สิทธิ์การจองคิว</h5></font>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-5">
                    <span class="step_no">5</span>
                    <span class="step_descr">
                      <b><font color="black">ขั้นตอนที่ 5</font></b><br />
                      <h5><font color="black">แสดงข้อมูลคิว</font></h5>
                    </span>
                  </a>
                </li>
              </ul>
              <div id="step-1">
                <form class="form-horizontal form-label-left">
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ชื่อคิว<span style="color:red" >*</span>
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <input type="text" name="qname" id="qname" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">วันที่เริ่มจอง<span style="color:red" >*</span> 
                    </label>
									  <div class='col-sm-2'>
                  	  <div class='input-group date' id='stratreserv'>
                        <input type='text' class="form-control" name='stratreserv'/>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                    </div>
                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="last-name">ถึง
                    </label>
									  <div class='col-sm-2'>
                  	  <div class='input-group date' id='endreserv'>
                        <input type='text' class="form-control" name='endreserv' />
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">วันที่ใช้คิว<span style="color:red" >*</span>
                    </label>
									  <div class='col-sm-2'>
                  	  <div class='input-group date' id='startuse'>
                        <input type='text' class="form-control" name='startuse' />
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                    </div>
                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="last-name">ถึง
                    </label>
									  <div class='col-sm-2'>
                  	  <div class='input-group date' id='enduse'>
                        <input type='text' class="form-control" name ='enduse'/>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                    </div>
                  </div>
                </form>
						  </div>
              <div id="step-2">
                <form class="form-horizontal form-label-left">
                  <div class="form-group">
                    <div class="radio ">
                      <label><input type="radio" name = "timeslot" id="slot1"><font color="black">เลือกเหมือนกันทุกช่วงเวลา</font>
                      </label>
                    </div>
                    <div class="radio ">
                      <label><input type="radio" name = "timeslot" id="slot2"><font color="black">กำหนดช่วงเวลาแต่ละวัน</font>
                      </label>
                    </div>
                    <div id="slottime1"> 
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                        <font color="black">จำนวนช่วงเวลา</font><span class="required"><font color="red">*</font></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <font color="black"><select name = ‘many’>  
                          <option value = ‘1’> 1 </option> 
                          <option value = ‘2’> 2 </option> 
                          <option value = ‘3’> 3 </option> 
                          <option value = ‘4’> 4 </option> 
                          <option value = ‘5’> 5 </option>
                          <option value = ‘6’> 6 </option>
                          <option value = ‘7’> 7 </option>
                          <option value = ‘8’> 8 </option>
                          <option value = ‘9’> 9 </option>
                          <option value = ‘10’> 10 </option></select></font>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3"><font color="black">ช่วงที่ 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; เวลาที่เริ่มต้น :</font></label>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <input type="text" name="strattime" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black">ถึง</font></label>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <input type="text" name="endtime" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div>
                          <label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">จำนวนนักศึกษา</font></label>
                        </div>
                        <div class="col-md1 col-sm-1 col-xs-1">
                          <input type="text" name="qname" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3"><font color="black">ช่วงที่ 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; เวลาที่เริ่มต้น :</font></label>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <input type="text" name="qname" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div>
                          <label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black">ถึง</font></label>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <input type="text" name="qname" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div>
                          <label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">จำนวนนักศึกษา</font></label>
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1">
                          <input type="text" name="qname" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    </div>

        
                </form>
              </div>
              <div id="step-3">
                <form class="form-horizontal form-label-left">
                    <div class="form-group">
                                  <label class="control-label col-md-2 col-sm-2 col-xs-3"><font color="black">รายละเอียดการทำงาน</font></label>
                                  <label class="control-label col-md-2 col-sm-2 col-xs-3"><font color="black">ขั้นตอนที่ 1 </font></label>
                                  <div class="col-md-2 col-sm-2 col-xs-2">
                                  
                                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                    
                                  <div>
                                    <label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">จำนวนนาที</font></label>
                                  </div><button class="fa fa-plus-square fa-1x"></button>
                                  <div class="col-md-1 col-sm-1 col-xs-1">
                                        
                                      <input type="text" id="first-name" required="required" class="form-control col-md-2 col-xs-12">
                                  </div>
                                  
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-2 col-sm-2 col-xs-3"><font color="black"></font></label>
                                  <label class="control-label col-md-2 col-sm-2 col-xs-3"><font color="black">ขั้นตอนที่ 2 </font></label>
                                  <div class="col-md-2 col-sm-2 col-xs-2">
                                  
                                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                  <div>
                                    <label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">จำนวนนาที</font></label>
                                  </div>
                                  <div class="col-md-1 col-sm-1 col-xs-1">
                                        
                                      <input type="text" id="first-name" required="required" class="form-control col-md-2 col-xs-12"> 
                                  </div>
                                  
                                </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"><font color="black">จำนวนช่องบริการ</font><span class="required"><font color="red">*</font></span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="text" id="first-name" required="required" class="form-control col-md-2 col-xs-2" >
                                    </div>
                                  </div>
                                  </form>
              </div>
                      		
                      			<div id="step-4">
                      				<div class="title_left">
                						<h4><font color="black">กำหนดสิทธิ์การจองคิวของนักศึกษา</font></h4>
              						</div>
                          			<div class="radio">
                            			<label><input type="radio" name="optradio"><font color="black">นักศึกษาทุกคนมีสิทธิ์</font></label>
                          			</div>
                          			<div class="radio ">
                            			<label><input type="radio" name="optradio"><font color="black">นักศึกษาที่มีรายชื่อในฐานข้อมูล</font></label>
                          			</div>
                          			<div class="radio ">
                            			<label><input type="radio" name="optradio"><font color="black">นักศึกษาที่ไม่มีรายชื่อในฐานข้อมูล</font></label>
                          			</div>
                          			<br>
                          			<form class="form-horizontal form-label-left">
										<div class="form-group">
                            				<input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
                          				</div>
                          			</form>
								</div>
                      			<div id="step-5">
                        			<b><font color="black">ระบบคิวกองทุนเงินให้กู้ยืมเพื่อการศึกษา</font></b></br>
                         			<font color="black">วันที่เริ่มจองคิว&nbsp;&nbsp;&nbsp;01/04/2561&nbsp;ถึง&nbsp;05/04/2561</font></br>
                         			<font color="black">วันที่ใช้คิว &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;07/04/2561&nbsp;ถึง&nbsp;09/04/2561</font></br>
                        			</br>
                        			<b><font color="black">วันที่  07/04/2561&nbsp;&nbsp; จำนวนช่วงเวลา 3 ช่วง คือ</font></b></br>
                        			
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ช่วงเวลาที่ 1&nbsp;&nbsp;เวลาที่เริ่ม&nbsp;&nbsp;09:00&nbsp;ถึง&nbsp;10:00 </font></br>
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ช่วงเวลาที่ 2&nbsp;&nbsp;เวลาที่เริ่ม&nbsp;&nbsp;10:01&nbsp;ถึง&nbsp;11:00 </font></br>
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ช่วงเวลาที่ 3&nbsp;&nbsp;เวลาที่เริ่ม&nbsp;&nbsp;11:01&nbsp;ถึง&nbsp;12:00 </font></br>
                         			<b><font color="black">วันที่  08/04/2561&nbsp;&nbsp; จำนวนช่วงเวลา 3 ช่วง คือ</font></b></br>
                        			
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ช่วงเวลาที่ 1&nbsp;&nbsp;เวลาที่เริ่ม&nbsp;&nbsp;09:00&nbsp;ถึง&nbsp;10:00 </font></br>
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ช่วงเวลาที่ 2&nbsp;&nbsp;เวลาที่เริ่ม&nbsp;&nbsp;10:01&nbsp;ถึง&nbsp;11:00 </font></br>
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ช่วงเวลาที่ 3&nbsp;&nbsp;เวลาที่เริ่ม&nbsp;&nbsp;11:01&nbsp;ถึง&nbsp;12:00 </font></br>
                         			<b><font color="black">วันที่  09/04/2561&nbsp;&nbsp; จำนวนช่วงเวลา 3 ช่วง คือ</font></b></br>
                        			
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ช่วงเวลาที่ 1&nbsp;&nbsp;เวลาที่เริ่ม&nbsp;&nbsp;09:00&nbsp;ถึง&nbsp;10:00 </font></br>
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ช่วงเวลาที่ 2&nbsp;&nbsp;เวลาที่เริ่ม&nbsp;&nbsp;10:01&nbsp;ถึง&nbsp;11:00 </font></br>
                         			<font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ช่วงเวลาที่ 3&nbsp;&nbsp;เวลาที่เริ่ม&nbsp;&nbsp;11:01&nbsp;ถึง&nbsp;12:00 </font></br>
                      			</div>
							</div>
							
                    <!-- End SmartWizard Content -->
                    	</div>
                    <!-- End SmartWizard Content -->
                  	</div>
            	</div>
		 </div>
    </div>
	</div>
</div>

</font>
   	
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
   
    $('#stratreserv').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    
    $('#endreserv').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    
    $('#startuse').datetimepicker({
    	format: 'DD/MM/YYYY'
    });

    $('#enduse').datetimepicker({
    	format: 'DD/MM/YYYY'
    });
    
</script>