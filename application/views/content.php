﻿<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script>

$(document).ready(function(){
	
    $("#slottime1").show();
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
        alert('คุณต้องการบันทึกข้อมูลใช่หรือไม่');
        $("#form_1").submit();
          
      });
    $(".buttonNext").click(function(){
        //alert('คุณต้องการกดปุ่มถัดไปใช่หรือไม่');
        //$("#form_1");
    	set_step4();
     });
    $(".buttonPrevious").click(function(){
        alert('คุณต้องการกดปุ่มย้อนกลับใช่หรือไม่');
        $("#form_1");
          
      });
    $("#add").click(function(){
    // $('#slottime1_001').before('<div class="form-group slot_01" > <label class="control-label col-md-3 col-sm-3 col-xs-3"><font color="black">เวลาที่เริ่มต้น :</font></label><div class="col-md-2 col-sm-2 col-xs-2"><input type="text" name="starttime[]" required="required" class="form-control col-md-7 col-xs-12"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div><div><label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black">ถึง </font></label></div><div class="col-md-2 col-sm-2 col-xs-2"><input type="text" name="endtime[]" required="required" class="form-control col-md-7 col-xs-12"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div><div><label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">จำนวนนักศึกษา</font></label></div><div class="col-md1 col-sm-1 col-xs-1"><input type="text" name="amountstdf1[]" required="required" class="form-control col-md-7 col-xs-12"></div> </div>');

       //$('#slottime1').after('<div class="form-group slot_01" ><label class="control-label col-md-3 col-sm-3 col-xs-3"><font color="black"> เวลาที่เริ่มต้น </font></label><div class="col-sm-2"><div class="input-group date starttime" id="starttime"><input type="text" class="form-control" placeholder="00:00" name="starttime[]" /><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div> </div><div> <label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black"> ถึง</font></label></div><div class="col-sm-2"><div class="input-group date endtime" id="endtime"><input type="text" class="form-control"  placeholder="00:00" name="endtime[]"/><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div></div><div><label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">จำนวนนักศึกษา</font></label></div><div class="col-md1 col-sm-1 col-xs-1"><input type="text" maxlength="3" name="amountstdf1[]" required="required" class="form-control col-md-7 col-xs-12"></div></div>');
	});
    $("#add2").click(function(){
        $('#slottime1_002').before('<div class="form-group slot_01" > <label class="control-label col-md-3 col-sm-3 col-xs-3"><font color="black">เวลาที่เริ่มต้น :</font></label><div class="col-md-2 col-sm-2 col-xs-2"><input type="text" name="starttime1[]" required="required" class="form-control col-md-7 col-xs-12"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div><div><label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black">ถึง </font></label></div><div class="col-md-2 col-sm-2 col-xs-2"><input type="text" name="endtime1[]" required="required" class="form-control col-md-7 col-xs-12"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div><div><label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">จำนวนนักศึกษา</font></label></div><div class="col-md1 col-sm-1 col-xs-1"><input type="text" name="amountstdf2[]" required="required" class="form-control col-md-7 col-xs-12"></div> </div>');
   	});


	

    	
   
	
   // function set_step5(){
     //   $('#nameq_st_5').html($('#qname').val());
       //$('#datereserv_st_5').html($('#stratreserv').val(format: 'DD/MM/YYYY'));
       // $("#datereserv_st_5").innerHTML  ($('#stratreserv').val()); 
                
        	
   

             
    //}


});

function addstep() {

	$('#step').before('<div class="form-group"><label class="control-label col-md-2 col-sm-1 col-xs-1"></label><label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black">ขั้นตอนที่   </font></label><div class="col-md-2 col-sm-2 col-xs-2"><input type="text" id="stepname" name="stepname[]"required="required" class="form-control col-md-7 col-xs-12"></div><label class="control-label col-md-2 col-sm-1 col-xs-1"><font color="black">จำนวนช่องบริการ  </font></label><div class="col-md-1 col-sm-1 col-xs-1"><input type="text" id="stepbox" name="stepbox[]"required="required" class="form-control col-md-7 col-xs-12"></div><div><label class="control-label col-md-2 col-sm-1 col-xs-1"><font color="black">จำนวนนาที<span style="color:red" >*</span></font></label></div><div class="col-md-1 col-sm-1 col-xs-1"><input type="text" maxlength="2"   name="amountstep[]" id="amountstep" required="required" class="form-control col-md-2 col-xs-12"></div> ');
       }

function addtime(){
    // $('#slottime1_001').before('<div class="form-group slot_01" > <label class="control-label col-md-3 col-sm-3 col-xs-3"><font color="black">เวลาที่เริ่มต้น :</font></label><div class="col-md-2 col-sm-2 col-xs-2"><input type="text" name="starttime[]" required="required" class="form-control col-md-7 col-xs-12"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div><div><label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black">ถึง </font></label></div><div class="col-md-2 col-sm-2 col-xs-2"><input type="text" name="endtime[]" required="required" class="form-control col-md-7 col-xs-12"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div><div><label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">จำนวนนักศึกษา</font></label></div><div class="col-md1 col-sm-1 col-xs-1"><input type="text" name="amountstdf1[]" required="required" class="form-control col-md-7 col-xs-12"></div> </div>');

       $('#slottime1_001').before('<div class="form-group slot_01" ><label class="control-label col-md-3 col-sm-3 col-xs-3"><font color="black"> เวลาที่เริ่มต้น </font></label><div class="col-sm-2"><div class="input-group date starttime" id="starttime"><input type="text" class="form-control" placeholder="00:00" name="starttime[]" /><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div> </div><div> <label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black"> ถึง</font></label></div><div class="col-sm-2"><div class="input-group date endtime" id="endtime"><input type="text" class="form-control"  placeholder="00:00" name="endtime[]"/><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div></div><div><label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">จำนวนนักศึกษา</font></label></div><div class="col-md1 col-sm-1 col-xs-1"><input type="text" maxlength="3" name="amountstdf1[]" required="required" class="form-control col-md-7 col-xs-12"></div></div>');
	}
</script>


<!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>Q_css/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url();?>Q_css/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="<?php echo base_url();?>Q_css/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Q_css/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Q_css/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
 <!-- Bootstrap Colorpicker -->
    <link href="<?php echo base_url();?>Q_css/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>Q_css/vendors/cropper/dist/cropper.min.css" rel="stylesheet">
   
  

    <div class="right_col" role="main">
<font color="black">

    <div class="page-title">
      <div class="title_left">
        <h3><font color="black">บันทึกการสร้างคิว</font></h3>
     </div>
			
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
                        
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="#step-2">
                      <span class="step_no">2</span>
                      <span class="step_descr">
                        <b><font color="black">ระบุขั้นตอนการบริการ</font></b><br/>
                        
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="#step-3">
                      <span class="step_no">3</span>
                      <span class="step_descr">
                        <b><font color="black">ระบุช่วงเวลา</font></b><br />
                       
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="#step-4">
                      <span class="step_no">4</span>
                      <span class="step_descr">
                        <b><font color="black">กำหนดสิทธิ์ผู้ใช้งาน</font></b><br />
                       
                      </span>
                    </a>
                  </li>
                  <!--   <li>
                    <a href="#step-5">
                      <span class="step_no">5</span>
                      <span class="step_descr">
                        <b><font color="black">แสดงผลข้อมูลคิว</font></b><br />
                        
                      </span>
                    </a>
                  </li>--> 
                </ul>
               <form class="form-horizontal form-label-left" id="form_1" 
               action="<?php echo(site_url("Createq/insert_queue")); ?>" method="post" enctype="multipart/form-data" >
                  
                  <!-- Start Step 1 -->

                  <div id="step-1"  >

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ชื่อคิว<span style="color:red" >*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <input type="text" maxlength="50"name="qname" id="qname" class="form-control col-md-7 col-xs-12"   >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">วันที่บันทึกสถานะจองคิว<span style="color:red" >*</span> 
                      </label>
                      <div class='col-sm-2'>
                        <div class='input-group date' id='stratreserv'>
                          <input type='text'  class="form-control" name='startreserv'/>
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                        </div>
                      </div>
                      <label class="control-label col-md-1 col-sm-1 col-xs-12" for="last-name">ถึง
                      </label>
                      <div class='col-sm-2'>
                        <div class='input-group date' id='endreserv'>
                          <input type='text'  class="form-control" name='endreserv' />
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">วันที่จองคิว<span style="color:red" >*</span>
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
              
       </div>
            
                  <!-- End Step 1 -->
                  <!-- Start Step 2 -->
                  <div id="step-2">
				<div class="form-group">
                      <label class="control-label col-md-2 col-sm-1 col-xs-1"><font color="black">รายละเอียดการทำงาน<span style="color:red" >*</span></font></label>
                      <label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black">ขั้นตอนที่   </font></label>
                      <div class="col-md-2 col-sm-2 col-xs-2">
                          <input type="text" id="stepname" name="stepname[]"required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                         <label class="control-label col-md-2 col-sm-1 col-xs-1"><font color="black">จำนวนช่องบริการ </font></label>
                      <div class="col-md-1 col-sm-1 col-xs-1">
                          <input type="text" id="stepbox" name="stepbox[]"required="required" class="form-control col-md-7 col-xs-12" >
                        </div>
                      <div>
                        <label class="control-label col-md-2 col-sm-1 col-xs-1"><font color="black">จำนวนนาที<span style="color:red" >*</span></font></label>
                      </div><button  onclick="addstep()" id="add1"><div  class="fa fa-plus fa-1px" ></div></button>
                      <div class="col-md-1 col-sm-1 col-xs-1">
                          <input type="text" maxlength="2"   name="amountstep[]" id="amountstep" required="required" class="form-control col-md-2 col-xs-12" >
                      </div>              
                    </div>
                    
                <div id="step"></div>
                  </div>
                  
                  <!-- End Step 2 -->
                  <!-- Start Step 3 -->
                  <div id="step-3">
                   
 					<div class="form-group">
                    <div class="radio ">
                      <label><input type="radio" name = "timeslot" id="slot1" checked><font color="black" >กำหนดช่วงเวลาเดียวกัน</font>
                      </label>
                    </div>
                   
                  </div> 
                  <p align="right"> <button onclick="addtime()"id="add"><div  class="fa fa-plus fa-1px" ></div></button></p>
                  <div id="slottime1"> 
                     
                    <div class="form-group slot_01" >
                  
                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><font color="black"> เวลาที่เริ่มต้น </font></label>
                       <div class='col-sm-2'>
                      <div class='input-group date starttime' id='starttime'>
                            <input type='text' class="form-control" placeholder="00:00" name='starttime[]' />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      <div>
                        <label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black"> ถึง</font></label>
                      </div>
                      <div class='col-sm-2'>
                      <div class='input-group date endtime' id='endtime'>
                            <input type='text' class="form-control"  placeholder="00:00" name='endtime[]'/>
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      <div>
                        <label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">จำนวนนักศึกษา</font></label>
                      </div>
                      <div class="col-md1 col-sm-1 col-xs-1">
                        <input type="text" maxlength="3" name="amountstdf1[]" required="required" class="form-control col-md-7 col-xs-12" onkeypress="return keynum(event)">
                      </div>
                    
                    </div>
                    </div>

                    <div id="slottime1_001"></div>                      
                    
                 
					
                     

                  </div>
                      <!-- End Step 3 -->
                      
                  <!-- Start Step 4 -->
                  <div id="step-4">

					<div class="form-group">
                    <div class="radio ">
                      <label><input type="radio" name = "import" id="import1" checked><font color="black">นักศึกษาทั้งหมด</font>
                      </label>
                    </div>
                    <div class="radio ">
                      <label><input type="radio" name = "import" id="import2"><font color="black">นักศึกษาแต่ละสำนักวิชา</font>
                      </label>
                    </div>
                    <div class="radio ">
                      <label><input type="radio" name = "import" id="import3"><font color="black">นักศึกษาแต่ละหลักสูตร</font>
                      </label>
                    </div>
                  </div>
				
                        <div class="importfile">
                           
                            <div class="col-md-4">
                                 <input type="file" name="csv_file"  id="csv_file" required="" accept=".csv" />
                            </div>
                            <div id="imported_csv_data"></div>
                        </div>

                  </div>
                      <!-- End Step 4 -->
                  <!-- Start Step 5 -->
                 <!--  <div id="step-5">
                  	<div class="form-group">
                  		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> ชื่อคิว  </label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                      		<div id="nameq_st_5"></div>
                      		</div> 
                      		</div>
                      		<div class="form-group">
                  		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">   </label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                      		<div id="nameq_st_5"></div>
                      		</div> 
                      		</div>
                      		 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">วันที่บันทึกสถานะจองคิว  
                      </label>
                      <div class='3'>
                      <div id="datereserv_st_5"></div>
                       
                      </div>
                      <label class="control-label col-md-1 col-sm-1 col-xs-12" for="last-name">ถึง
                      </label>
                      <div class='col-sm-2'>
                       
                      </div>
                    </div>

                  </div> -->
                  <!-- End Step 5 -->
                </form>

              
            <!-- End SmartWizard Content -->
           
            </div>
          </div>
          </div>
        </div>
      </div>
    
  
</font>
</div>

       
        <!-- /page content -->
          
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>Q_css/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>Q_css/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url();?>Q_css/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="<?php echo base_url();?>Q_css/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
   
    <!-- jquery.inputmask -->
    <script src="<?php echo base_url();?>Q_css/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="<?php echo base_url();?>Q_css/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    
   
    
    
    <!-- jQuery Knob -->
    <script src="<?php echo base_url();?>Q_css/vendors/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- Cropper -->
    <script src="<?php echo base_url();?>Q_css/vendors/cropper/dist/cropper.min.js"></script>

   
   
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
    $('#starttime').datetimepicker({
        format: 'HH:mm'
    });
    $('#endtime').datetimepicker({
        format: 'HH:mm'
    });

</script>
<script>
$(document).ready(function(){

 load_data();

 function load_data()
 {
  $.ajax({
   url:"<?php echo base_url(); ?>Createq/load_data",
   method:"POST",
   success:function(data)
   {
    $('#imported_csv_data').html(data);
   }
  })
 }

 $('#import_csv_data').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"<?php echo base_url(); ?>Createq/insert_queue",
   method:"POST",
   data:new FormData(this),
   contentType:false,
   cache:false,
   processData:false,
   beforeSend:function(){
    $('#import_csv_btn').html('Importing...');
   },
   success:function(data)
   {
    $('#import_csv_data')[0].reset();
    $('#import_csv_btn').attr('disabled', false);
    $('#import_csv_btn').html('Import Done');
    load_data();
   }
  })
 });
 
});
</script>
