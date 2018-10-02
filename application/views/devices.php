 
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>Q_css/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url();?>Q_css/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="<?php echo base_url();?>Q_css/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Q_css/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Q_css/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
 
        <!-- page content -->
<div class="right_col" role="main">
	<font color="black">
		<div class="">
			<div class="page-title">
         		<div class="title_left">
                	<h3><font color="black">บันทึกข้อมูลอุปกรณ์</font></h3>
              	</div>
              	<div class="title_right">
           	</div>
			<div>
            	<div class="clearfix"></div>
	            <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
                		<div class="x_panel">
                  			<div class="x_title">
                  				<br>
                    			<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                     			action="<?php echo(site_url("Devices_control/insert_device")); ?>" method="post">
									<div class="form-group">
                        				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">ชื่ออุปกรณ์<span style="color:red" >*</span>
                        				</label>
                        				<div class="col-md-3 col-sm-3 col-xs-">
                          					<input type="text" id="last-name" name="devicename" required="required" class="form-control col-md-7 col-xs-12">
                        				</div>
                      				</div>
                     				<div class="form-group">
                        				<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">รายละเอียด<span style="color:red" >*</span></label>
                  						<div class="col-md-6 col-sm-6 col-xs-12">
                      						<textarea class="resizable_textarea form-control" name="devicedetail" placeholder=""></textarea>
                    					</div>
                    				</div>
                    				<div class="form-group">
                        				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">รหัสอุปกรณ์<span style="color:red" >*</span>
                        				</label>
                        				<div class="col-md-3 col-sm-3 col-xs-">
                          					<input type="text" id="barcodedevice" name="barcodedevice" required="required" class="form-control col-md-7 col-xs-12">
                       					</div>
                      				</div>
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



