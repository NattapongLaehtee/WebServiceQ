<!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>Q_css/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url();?>Q_css/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="<?php echo base_url();?>Q_css/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Q_css/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Q_css/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

<div class="right_col" role="main">
	
		<div class="page-title">
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
                                              	<h5><font color="black">วันที่ - เวลา</font></h5>
                          				</a>
                        			</li>
                        			<li>
                          				<a href="#step-3">
                            				<span class="step_no">3</span>
                            				<span class="step_descr">
                                              	<b><font color="black">ขั้นตอนที่ 3</font></b><br />
                                              	<h5><font color="black">ขั้นตอนการทำงาน</font></h5>
                                   			</span>
                          				</a>
                        			</li>
                        			<li>
                          				<a href="#step-4">
                            				<span class="step_no">4</span>
                            				<span class="step_descr">
                                             	<b><font color="black">ขั้นตอนที่ 4</font></b><br />
                                              	<small><font color="black"><h5>สิทธิ์การจองคิว</h5></font></small>
                                          	</span>
                          				</a>
                        			</li>
                        			
                        		</ul>
                     			<div id="step-1">
                     				<form class="form-horizontal form-label-left">
                      					<div class="form-group">
                            				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ชื่อคิว<span class="required">*</span>
                            				</label>
                            				
                          				</div>
                          				
                          				
                          			</form>
								</div>
                      			<div id="step-2">
                         			<form class="form-horizontal form-label-left">
                         		
                          				<div class="form-group">
                          				
                      					</div>
                      					
                        			
                          			</form>
                        		</div>
                      			<div id="step-3">
                        			<form class="form-horizontal form-label-left">
										<div class="form-group">
                            			
                           				</div>
                                	</form>
                        		</div>
                      			<div id="step-4">
                      				
                      			
							</div>
							
                    <!-- End SmartWizard Content -->
                    	</div>
                    <!-- End SmartWizard Content -->
                  	</div>
            	</div>
		
	</div>
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


        
       


