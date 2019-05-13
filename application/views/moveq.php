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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    	set_step5();
        
        
          
      });
    $(".buttonPrevious").click(function(){
        alert('คุณต้องการกดปุ่มย้อนกลับใช่หรือไม่');
        $("#form_1");
          
      });
    $("#add").click(function(){
     $('#slottime1_001').before('<div class="form-group slot_01" > <label class="control-label col-md-3 col-sm-3 col-xs-3"><font color="black">เวลาที่เริ่มต้น :</font></label><div class="col-md-2 col-sm-2 col-xs-2"><input type="text" name="starttime[]" required="required" class="form-control col-md-7 col-xs-12"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div><div><label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black">ถึง </font></label></div><div class="col-md-2 col-sm-2 col-xs-2"><input type="text" name="endtime[]" required="required" class="form-control col-md-7 col-xs-12"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div><div><label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">จำนวนนักศึกษา</font></label></div><div class="col-md1 col-sm-1 col-xs-1"><input type="text" name="amountstdf1[]" required="required" class="form-control col-md-7 col-xs-12"></div> </div>');
	});
    $("#add2").click(function(){
        $('#slottime1_002').before('<div class="form-group slot_01" > <label class="control-label col-md-3 col-sm-3 col-xs-3"><font color="black">เวลาที่เริ่มต้น :</font></label><div class="col-md-2 col-sm-2 col-xs-2"><input type="text" name="starttime1[]" required="required" class="form-control col-md-7 col-xs-12"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div><div><label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black">ถึง </font></label></div><div class="col-md-2 col-sm-2 col-xs-2"><input type="text" name="endtime1[]" required="required" class="form-control col-md-7 col-xs-12"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div><div><label class="control-label col-md-2 col-sm-2 col-xs-2"><font color="black">จำนวนนักศึกษา</font></label></div><div class="col-md1 col-sm-1 col-xs-1"><input type="text" name="amountstdf2[]" required="required" class="form-control col-md-7 col-xs-12"></div> </div>');
   	});


	
    $("#add1").click(function(){
        $('#step').before('<div class="form-group"><label class="control-label col-md-2 col-sm-1 col-xs-1"></label><label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black">ขั้นตอนที่   </font></label><div class="col-md-2 col-sm-2 col-xs-2"><input type="text" id="stepname" name="stepname[]"required="required" class="form-control col-md-7 col-xs-12"></div><label class="control-label col-md-2 col-sm-1 col-xs-1"><font color="black">จำนวนช่องบริการ  </font></label><div class="col-md-1 col-sm-1 col-xs-1"><input type="text" id="stepbox" name="stepbox[]"required="required" class="form-control col-md-7 col-xs-12"></div><div><label class="control-label col-md-2 col-sm-1 col-xs-1"><font color="black">จำนวนนาที<span style="color:red" >*</span></font></label></div><div class="col-md-1 col-sm-1 col-xs-1"><input type="text" maxlength="2"   name="amountstep[]" id="amountstep" required="required" class="form-control col-md-2 col-xs-12"></div> ');
      });
    
	
    function set_step5(){
        $('#nameq_st_5').html($('#qname').val());
      //  $('#datereserv_st_5').html($('#stratreserv').val(format: 'DD/MM/YYYY'));
       // $("#datereserv_st_5").innerHTML  ($('#stratreserv').val()); 
                
        	
   

             
    }

});
</script>

   <?php $rowmoveq = $move_queue-> row(); ?>
  

    <div class="right_col" role="main">
<font color="black">

    <div class="page-title">
      <div class="title_left">
        <h3><font color="black">บันทึกการเลื่อนคิว</font></h3>
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
                                               <b><font color="black">แสดงข้อมูลคิว</font></b><br />
                                          </span>
                                  </a>
                              </li>
                              <li>
                                  <a href="#step-2">
                                    <span class="step_no">2</span>
                                    <span class="step_descr">
                                              <b><font color="black">เปลี่ยนแปลงช่วงเวลา</font></b><br/>
                                      </a>
                              </li>
                              <li>
                                  <a href="#step-3">
                                    <span class="step_no">3</span>
                                    <span class="step_descr">
                                              <b><font color="black">แสดงผลการเลื่อนคิว</font></b><br />
                                            </span>
                                  </a>
                              </li>
                            
                                </ul>
               <form class="form-horizontal form-label-left" id="form_1" 
               action="<?php echo(site_url("Createq/changequeue")); ?>" method="post">
                  
                  
                              <input type="hidden" name="queueid" id ="queueid" value="<?php echo $rowmoveq->Cq_id;?>" >
                              <!-- Start Step 1 -->
                              <div id="step-1">
                             
                                <font color="black">
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12"> <?php echo "ชื่อคิว :";?>
                                      </label>
                                      <label class="control-label col-md-2 col-sm-2 col-xs-12"> <?php echo $rowmoveq->Cq_name;?>
                                      </label>
                                    </div>
                                  </font>
                                  <?php foreach ($move_countdate as $row){?>
                                  <font color="black">
                                    <div class="form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo  $this->Util_model->convertDateToView("$row->Date_usedate") ; ?>
                                      </label>
                                      <label class="control-label col-md-2 col-sm-1 col-xs-12" ><?php echo "จำนวนทั้งหมด ". $row->countqdate." ช่วง ";?>
                                      </label>
                                    </div>
                                  </font>
                                  <?php }?>
                                
                                </div>
                                <!-- End Step 1 -->
                                <!-- Start Step 2 -->
                              <div id="step-2">
                            
                                <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_content">
                                  <div  >
                            <div class="row">
                                      <div class="col-sm-12">
                                        <table  class="table table-striped table-bordered dataTable no-footer">
                                            <thead  >
                                              <tr role="row" align="center"  >
                                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 20px;" ali>วันที่</th>
                                                          
                                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;">ช่วงเวลา</th>
                                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 30px;">จำนวนนักศึกษา</th>
                                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 60px;">เปลี่ยนแปลงคิว</th>
                                              </tr>
                                            </thead>
                                        				
                                                          <?php foreach ($move_date as $rowqd){?>
                                              <tbody>
                                                          <tr role="row" class="odd">
                                                             <input type="hidden" name="datetimeid[]" id ="datetimeid" value="<?php echo $rowqd->Datetime_id;?>" > 
                                                              <td class="sorting_1"><?php echo  $this->Util_model->convertDateToView("$rowqd->Date_usedate") ; ?></td>
                                                     	
                                                              <td><?php echo  $this->Util_model->convertTimeToView("$rowqd->Time_usedate ") ; ?><?php echo " - ";?><?php echo  $this->Util_model->convertTimeToView("$rowqd->Time_lastuse") ; ?><?php echo " น.";?></td>
                                                              <td><?php echo  $rowqd->amount_std ; ?></td>
                                                              <td>
                                                    <label class="control-label col-md-2 col-sm-1 col-xs-1"><font color="black">วันที่</font></label>
                                                    <div class='col-sm-5'>
                                                  <div class='input-group date datemoveq' id='datemoveq'>
                                                                    <input type='text' class="form-control" name = 'datemoveq[]' />
                                                                    <span class="input-group-addon">
                                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                                    </span>
                                                                </div>
                                                  </div>
                                                      <br><br><br>
                                                      <label class="control-label col-md-3 col-sm-1 col-xs-1"><font color="black">เวลาที่เริ่มต้น </font></label>
                                                                <div class='col-sm-4'>
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
                                                                <div class='col-sm-4'>
                                                                  <div class='input-group date endtime' id='endtime'>
                                                                      <input type='text' class="form-control"  placeholder="00:00" name='endtime[]'/>
                                                                      <span class="input-group-addon">
                                                                          <span class="glyphicon glyphicon-calendar"></span>
                                                                      </span>
                                                                  </div>
                                                                </div>
                                                              </td>
                                                               
                                                            </tr>
                                                       
                                                      	
                                            </tbody>
                                            <?php }?> 
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                            
                      </div>
                    <!-- End Step 2 -->
                                <!-- Start Step 3 -->
                              <div id="step-3">
                              
                  </div>
                  
                  <!-- End Step 3 -->
               
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

    $('.datemoveq').datetimepicker({
      format: 'DD/MM/YYYY'
    });

    $('.starttime').datetimepicker({
        format: 'HH:mm'
    });
    $('.endtime').datetimepicker({
        format: 'HH:mm'
    });
    
   
</script>

 <!-- /Initialize datetimepicker -->
