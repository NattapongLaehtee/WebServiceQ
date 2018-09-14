<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $("#slottime1").hide();
    $("#slottime2").hide();
    $("#slot1").click(function(){
        $("#slottime1").show();
        $("#slottime2").hide();
    });
    $("#slot2").click(function(){
        $("#slottime1").hide();
        $("#slottime2").show();
    });

    $(".buttonFinish").click(function(){
      alert(6666);
      $("#form_1").submit();
        
    });
    $("#add").click(function(){
      $('#slottime1_001').before('<div class="form-group slot_01" > <label class="control-label col-md-3 col-sm-3 col-xs-3"><font color="black"> à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆà¹€à¸£à¸´à¹ˆà¸¡à¸•à¹‰à¸™ :</font></label><div class="col-md-2 col-sm-2 col-xs-2"><input type="text" name="strattime" required="required" class="form-control col-md-7 col-xs-12"></div><div><label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black">à¸–à¸¶à¸‡</font></label></div><div class="col-md-2 col-sm-2 col-xs-2"><input type="text" name="endtime" required="required" class="form-control col-md-7 col-xs-12"></div><div><label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">à¸ˆà¸³à¸™à¸§à¸™à¸™à¸±à¸�à¸¨à¸¶à¸�à¸©à¸²</font></label></div><div class="col-md1 col-sm-1 col-xs-1"><input type="text" name="amount_std" required="required" class="form-control col-md-7 col-xs-12"></div> </div>');
      
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
                        <b><font color="black">กรอกข้อมูลคิว</font></b><br />
                        <small><h5><font color="black">-------</font></h5></small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="#step-2">
                      <span class="step_no">2</span>
                      <span class="step_descr">
                        <b><font color="black">ระบุช่วงเวลา</font></b><br/>
                        <small><h5><font color="black">-------</font></h5></small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="#step-3">
                      <span class="step_no">3</span>
                      <span class="step_descr">
                        <b><font color="black">ระบุขั้นตอนการทำงาน</font></b><br />
                        <font color="black"><h5>-------</h5></font>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="#step-4">
                      <span class="step_no">4</span>
                      <span class="step_descr">
                        <b><font color="black">กำหนดสิทธิ์ผู้ใช้งาน</font></b><br />
                        <font color="black"><h5>-------</h5></font>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="#step-5">
                      <span class="step_no">5</span>
                      <span class="step_descr">
                        <b><font color="black">แสดงผลข้อมูลคิว</font></b><br />
                        <h5><font color="black">-------</font></h5>
                      </span>
                    </a>
                  </li>
                </ul>
               <form class="form-horizontal form-label-left" id="form_1" 
               action="<?php echo(site_url("Createq/insert_queue")); ?>" method="post">
                  
                  <!-- Start Step 1 -->

                  <div id="step-1">
=========================
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ชื่อคิว<span style="color:red" >*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <input type="text" name="qname" id="qnameID" class="form-control col-md-7 col-xs-12" value="xxxxx">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">วันที่เริ่มจองคิว<span style="color:red" >*</span> 
                      </label>
                      <div class='col-sm-2'>
                        <div class='input-group date' id='stratreserv'>
                          <input type='text' class="form-control" name='startreserv'/>
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
=========================
                  </div>
                  <!-- End Step 1 -->
                  <!-- Start Step 2 -->
                  <div id="step-2">
                    2
=========================
                  <div class="form-group">
                    <div class="radio ">
                      <label><input type="radio" name = "timeslot" id="slot1"><font color="black">กำหนดเหมือนกันทุกช่วงเวลา</font>
                      </label>
                    </div>
                    <div class="radio ">
                      <label><input type="radio" name = "timeslot" id="slot2"><font color="black">กำหนดช่วงเวลาแต่ละวัน</font>
                      </label>
                    </div>
                  </div>
                  <div id="slottime1"> 
                    
                    <div class="form-group slot_01" >à¹€à¸§à¸¥à¸²à¸—à¸µà¹ˆ
                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><font color="black"> เวลาที่เริ่มต้น :</font></label>
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" name="strattime" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      <div>
                        <label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black"> ถึง</font></label>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" name="endtime" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      <div>
                        <label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">จำนวนนักศึกษา</font></label>
                      </div>
                      <div class="col-md1 col-sm-1 col-xs-1">
                        <input type="text" name="amount_std" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      <button class="fa fa-plus-square fa-1x" id="add"></button>
                    </div>

                    <div id="slottime1_001"></div>
                    
                    
                  <div id="slottime2"> 
                    XxxxxxX
                  </div>
                 
=========================
                  </div>
                  </div>
                  <!-- End Step 2 -->
                  <!-- Start Step 3 -->
                  <div id="step-3">
                    3
=========================
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-3"><font color="black">รายละเอียดการทำงาน</font></label>
                      <label class="control-label col-md-2 col-sm-2 col-xs-3"><font color="black">ขั้นตอนที่  1 </font></label>
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
                                  
                                  
                                  
                                  <div class="col-md-1 col-sm-1 col-xs-1">
                                        
                                      <input type="text" id="first-name" required="required" class="form-control col-md-2 col-xs-12"> 
                                  </div>
                                  
                                </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"><font color="black">à¸ˆà¸³à¸™à¸§à¸™à¸Šà¹ˆà¸­à¸‡à¸šà¸£à¸´à¸�à¸²à¸£</font><span class="required"><font color="red">*</font></span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="text" id="first-name" required="required" class="form-control col-md-2 col-xs-2" >
                                    </div>
                                  </div>
=========================
                  </div>
                  <div id="step-4">
                    4
=========================
=========================
                  </div>
                  <div id="step-5">
                    5
=========================
=========================
                  </div>
                </form>

              
            <!-- End SmartWizard Content -->
            xxx
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
