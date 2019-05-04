<!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>Q_css/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url();?>Q_css/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="<?php echo base_url();?>Q_css/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Q_css/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Q_css/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
 <!-- page content -->
 <?php $rowq = $dataqdevice->row();?>
	<font color="black">
	<div class="right_col" role="main">
		<div class="">
			<div class="page-title">
          		<div class="title_left">
                	<h3>กำหนดอุปกรณ์</h3>
              	</div>
            </div>
			<div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="x_panel">
               		<div class="x_content">
                    	<br>
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                    action ="<?php echo site_url("Devices_control/setusingdevice");?>" method="post">

                      <div class="form-group">
                      <input type="hidden" name="queueid" id="queueid" value="<?php echo $rowq->Cq_id; ?>">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo "ชื่อคิว "?>  
                        </label>
                        <label class="control-label col-md-2  col-xs-12" for="first-name"> <?php echo  $rowq->Cq_name;?>  
                        </label>
                        
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"><?php echo "วันที่ใช้คิว "?> 
                        </label>
                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name"> <?php echo $this->Util_model->convertDateToView("$rowq->Cq_usedate"); ?>
                        </label>
                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name"><?php echo "ถึง "?> 
                        </label>
                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name"><?php echo $this->Util_model->convertDateToView("$rowq->Cq_lastuse")  ;?> 
                        </label>
                        
                      </div>
							<?php $s=1;?>
                       <?php foreach ($datadevice as $rowdev){?>
                
                   
                    		<input type="hidden" name="stepid" id="stepid" value=<?php echo $rowdev->Step_id;?>> 
                  			 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"><?php echo "ขั้นตอนบริการที  ". $s; ?> 
                       
                        </label>
                   
                    
                          <?php echo ("<br/><br/>"); ?>
                          
                         <?php for ($i=1; $i<= $rowdev->Step_box; $i++){?>
                      
                      <input type="hidden"  name="boxname" id="boxname" value="<?php echo "ช่องบริการที  ".  $i;?>">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" ><?php echo "ช่องบริการที  ".  $i;?>
                      
                        </label>
                          <label class="control-'label col-md-3 col-sm-3 col-xs-12" for="last-name">Barcode อุปกรณ์ </label>   
                             <div class=" col-sm-2  ">
                     <input type='text' class="form-control" name='barcode' id='barcode' />
         </div>
                   
                       
           <?php echo ("<br/><br/>"); ?> 
			
                    <?php }?>
                  	 <?php $i++;?>
                  	 <?php $s++;?>
                  
                          
                
                      <?php }?>
                      
                         		<input type="hidden" name="usingid" id="usingid">
                          				<div class="form-group">
                            				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">วันที่ใช้อุปกรณ์
                        					</label>
											<div class='col-sm-2'>
                  								<div class='input-group date' id='startdevice'>
                            						<input type='text' class="form-control" name='startdevice' />
                            						<span class="input-group-addon">
                               							<span class="glyphicon glyphicon-calendar"></span>
                            						</span>
                        						</div>
                        					</div>
                        					<label class="control-label col-md-1 col-sm-1 col-xs-12" for="last-name">ถึง
                        					</label>
											<div class='col-sm-2'>
                  								<div class='input-group date' id='enddevice'>
                            						<input type='text' class="form-control" name='enddevice' />
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
	  $('#startdevice').datetimepicker({
	        format: 'DD/MM/YYYY'
	    });
	    
	    $('#enddevice').datetimepicker({
	        format: 'DD/MM/YYYY'
	    });
	    
	   
</script>


        
       


	
	<!-- /page content -->
