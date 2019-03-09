<div class="right_col" role="main">
<font color="black">

    <div class="page-title">
      <div class="title_left">
        <h3><font color="black">การแก้ไขข้อมูลคิว</font></h3>
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
                        <b><font color="black">ระบุขั้นตอนการทำงาน</font></b><br/>
                        
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
                  <li>
                    <a href="#step-5">
                      <span class="step_no">5</span>
                      <span class="step_descr">
                        <b><font color="black">แสดงผลข้อมูลคิว</font></b><br />
                        
                      </span>
                    </a>
                  </li>
                </ul>
               <form class="form-horizontal form-label-left" id="form_1" 
               action="<?php echo(site_url("Createq/update_queue")); ?>" method="post">
                  
                  <!-- Start Step 1 -->

                  <div id="step-1">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ชื่อคิว<span style="color:red" >*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <input type="text" name="qname" id="qname" class="form-control col-md-7 col-xs-12" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">วันที่บันทึกสถานะจองคิว<span style="color:red" >*</span> 
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
                      <label class="control-label col-md-2 col-sm-2 col-xs-3"><font color="black">รายละเอียดการทำงาน<span style="color:red" >*</span></font></label>
                      <label class="control-label col-md-2 col-sm-2 col-xs-3"><font color="black">ขั้นตอนที่  1 </font></label>
                      <div class="col-md-2 col-sm-2 col-xs-2">
                          <input type="text" id="stepname" name="stepname"required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      <div>
                        <label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">จำนวนนาที<span style="color:red" >*</span></font></label>
                      </div><button class="fa fa-plus-square fa-1x" id="add1"></button>
                      <div class="col-md-1 col-sm-1 col-xs-1">
                          <input type="text" name="amountstep" id="amountstep" required="required" class="form-control col-md-2 col-xs-12">
                      </div>              
                    </div>
                  

                 
                  </div>
                  <!-- End Step 2 -->
                  <!-- Start Step 3 -->
                  <div id="step-3">
 <div class="form-group">
                    <div class="radio ">
                      <label><input type="radio" name = "timeslot" id="slot1" checked><font color="black" >กำหนดช่วงเวลาเดียวกัน</font>
                      </label>
                    </div>
                    <div class="radio ">
                      <label><input type="radio" name = "timeslot" id="slot2"><font color="black">กำหนดช่วงเวลาแต่ละวัน</font>
                      </label>
                    </div>
                  </div>
                  <div id="slottime1"> 
                    
                    <div class="form-group slot_01" >
                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><font color="black"> เวลาที่เริ่มต้น :</font></label>
                       <div class='col-sm-2'>
                      <div class='input-group date' id='starttime'>
                            <input type='text' class="form-control" name='starttime' />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      <div>
                        <label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black"> ถึง</font></label>
                      </div>
                      <div class='col-sm-2'>
                      <div class='input-group date' id='endtime'>
                            <input type='text' class="form-control" name='endtime'/>
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      <div>
                        <label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">จำนวนนักศึกษา</font></label>
                      </div>
                      <div class="col-md1 col-sm-1 col-xs-1">
                        <input type="text" name="amount_std" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      <button class="fa fa-plus-square fa-1x" id="add"></button>
                    </div>
                    </div>

                    <div id="slottime1_001"></div>
                    
                    
                  <div id="slottime2"> 
                   <label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">วันที่ 20/09/2561</font></label>
                  
                     <div class="form-group slot_01" >
                      <label class="control-label col-md-3 col-sm-3 col-xs-3"><font color="black"> เวลาที่เริ่มต้น :</font></label>
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" name="starttime1" id="strattime"required="required" class="form-control col-md-2 col-xs-2">
                      </div>
                      <div>
                        <label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black"> ถึง</font></label>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-2">
                        <input type="text" name="endtime1" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      <div>
                        <label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">จำนวนนักศึกษา</font></label>
                      </div>
                      <div class="col-md1 col-sm-1 col-xs-1">
                        <input type="text" name="amount_std" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      <button class="fa fa-plus-square fa-1x" id="add"></button>
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
	
					<!-- File Button -->
                        <div class="importfile">
                           
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>

                  </div>
                      <!-- End Step 4 -->
                  <!-- Start Step 5 -->
                  <div id="step-5">
                  	<div class="form-group">
                  		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> ชื่อคิว  </label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                      		<div id="nameq_st_5"></div> 
                      </div>
                  	</div>
                  

                  </div>
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