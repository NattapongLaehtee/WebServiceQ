<!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>Q_css/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url();?>Q_css/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="<?php echo base_url();?>Q_css/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Q_css/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Q_css/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
 <!-- page content -->
	<font color="black">
	<div class="right_col" role="main">
		<div class="">
			<div class="page-title">
          		<div class="title_left">
                	<h3>กำหนดการใช้งานอุปกรณ์</h3>
              	</div>
            </div>
			<div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="x_panel">
               		<div class="x_content">
                    	<br>
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ชื่อคิว 
                        </label>
                        <label class="control-label col-md-3 col-sm-2 col-xs-12" for="first-name">กองทุนกู้ยืมเพื่อการศึกษา (รายเก่า)
                        </label>
                        
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">วันที่ใช้คิว 
                        </label>
                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">08/08/2561
                        </label>
                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">ถึง 
                        </label>
                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">12/08/2561
                        </label>
                        
                      </div>
                     <div class="form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                          				   <font color="black">ชื่ออุปกรณ์</font>
                            				</label>
                           					<div class="col-md-6 col-sm-6 col-xs-12">
                              					<font color="black"><select name = ‘many’>	
                              					<option value = ‘1’>Raspberry pi</option> 
                              						<option value = ‘2’>ปุ่มกด </option> 
                              						<option value = ‘3’>จอ LCD</option> 
                              						
                              				</select></font>
                             				</div> 
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">จำนวนที่ใช้อุปกรณ์ 
                        </label>
                      <div class="col-md-2 col-sm-2 col-xs-2">
                         <input type="text" id="first-name" required="required" class="form-control col-md-2 col-xs-12">
                        
                        </div>
                 
                        
                      </div>
                    
                         			
                          				<div class="form-group">
                            				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">วันที่ใช้คิว
                        					</label>
											<div class='col-sm-2'>
                  								<div class='input-group date' id='myDatepicker4'>
                            						<input type='text' class="form-control" />
                            						<span class="input-group-addon">
                               							<span class="glyphicon glyphicon-calendar"></span>
                            						</span>
                        						</div>
                        					</div>
                        					<label class="control-label col-md-1 col-sm-1 col-xs-12" for="last-name">ถึง
                        					</label>
											<div class='col-sm-2'>
                  								<div class='input-group date' id='myDatepicker5'>
                            						<input type='text' class="form-control" />
                            						<span class="input-group-addon">
                               							<span class="glyphicon glyphicon-calendar"></span>
                            						</span>
                        						</div>
                        					</div>
                         				</div>
                          		
                      
  
                      <br></br>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">บันทึก</button>
                          <button class="btn btn-primary" type="reset">ยกเลิก</button>
                          
                        </div>
                      </div>

                    </form>
                	</div>
              	</div>
      		</div>
       	</div>
	</div>
	</font>
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


        
       


	
	<!-- /page content -->
