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
	
   
    $(".buttonFinish").click(function(){
      alert('คุณต้องการบันทึกข้อมูลใช่หรือไม่');
      $("#form_3").submit();
        
    });
    $(".buttonNext").click(function(){
        //alert('คุณต้องการกดปุ่มถัดไปใช่หรือไม่');
        //$("#form_1");
    	set_step5();
        
        
          
      });
  


</script>
<?php $rowmoveq = $move_queue-> row(); ?>
                        		
<div class="right_col" role="main">
	
		<font color="black"><div class="page-title">
			<div class="title_left">
				<h3><font color="black">บันทึกการเลื่อนคิว</font></h3>
			</div>
			<div class="title_right">
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
                       			<form class="form-horizontal form-label-left" id="form_3" 
               						action="<?php echo (site_url("Createq/changequeue")); ?>" method="post">
                        			
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
                    							<div  class="dataTables_wrapper form-inline dt-bootstrap no-footer">
  													<div class="row">
                     									<div class="col-sm-12">
                     										<table class="table table-striped table-bordered dataTable no-footer" >
                      											<thead>
                        											<tr role="row" align="center">
                                                						<th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 20px;">วันที่</th>
                                                						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 10px;">ช่วงที่</th>
                                                						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;">เวลา</th>
                                                						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 30px;">จำนวนนักศึกษา</th>
                                                						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 60px;">เปลี่ยนแปลงคิว</th>
                        											</tr>
                      											</thead>
                      											<?php $i=1; ?>
                                                  				<?php foreach ($move_date as $rowqd){?>
                            									<tbody>
                                               						<tr role="row" class="odd">
                                                  						<td class="sorting_1"><?php echo  $this->Util_model->convertDateToView("$rowqd->Date_usedate") ; ?></td>
                                                  						<td><?php echo $i;?></td>
                                                  						<td><?php echo  $this->Util_model->convertTimeToView("$rowqd->Time_usedate ") ; ?><?php echo " - ";?><?php echo  $this->Util_model->convertTimeToView("$rowqd->Time_lastuse") ; ?><?php echo " น.";?></td>
                                                  						<td><?php echo  $rowqd->amount_std ; ?></td>
                                                  						<td>
                          													<label class="control-label col-md-2 col-sm-1 col-xs-1"><font color="black">วันที่</font></label>
                          													<div class='col-sm-5'>
                  																<div class='input-group date' id='datemoveq'>
                                                    						 		<input type='text' class="form-control" name = 'datemoveq' />
                                                    								<span class="input-group-addon">
                                                       									<span class="glyphicon glyphicon-calendar"></span>
                                                    								</span>
                                                								</div>
                        													</div>
                          						  							<br><br><br>
                          						    						<label class="control-label col-md-3 col-sm-1 col-xs-1"><font color="black">เวลาที่เริ่มต้น </font></label>
                                                   							<div class='col-sm-4'>
                                                  								<div class='input-group date' id='starttime'>
                                                        							<input type='text' class="form-control" placeholder="00:00" name='starttime' />
                                                        							<span class="input-group-addon">
                                                           								<span class="glyphicon glyphicon-calendar"></span>
                                                        							</span>
                                                    							</div>
                                                    						</div>
                                                  							<div>
                                                    							<label class="control-label col-md-1 col-sm-1 col-xs-1"><font color="black"> ถึง</font></label>
                                                  							</div>
                                                  							<div class='col-sm-4'>
                                                  								<div class='input-group date' id='endtime'>
                                                        							<input type='text' class="form-control"  placeholder="00:00" name='endtime'/>
                                                        							<span class="input-group-addon">
                                                           								<span class="glyphicon glyphicon-calendar"></span>
                                                       	 							</span>
                                                    							</div>
                                                    						</div>
                                                    					</td>
                                                    				</tr>
																	<?php $i++; ?>
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
								</form>
                            </div>
                            <!-- End SmartWizard Content -->
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

    $('#datemoveq').datetimepicker({
    	format: 'DD/MM/YYYY'
    });

    $('#starttime').datetimepicker({
        format: 'HH:mm'
    });
    $('#endtime').datetimepicker({
        format: 'HH:mm'
    });
    
    <!-- /Initialize datetimepicker -->
</script>


        
       


