

 <!-- page content -->
	<font color="black"><div class="right_col" role="main">
		<div class="">
			<div class="page-title">
          		<div class="title_left">
                	<h3>กำหนดอุปกรณ์</h3>
              	</div>
            </div>
			<div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="x_panel">
               		<div class="x_content">
                    	<div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
  							<div class="row">
                     			<div class="col-sm-12">
                     				<table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      					<thead>
                        					<tr role="row">
                        						<th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 250px;">ชื่อคิว</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">จำนวนช่องบริการ</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">อุปกรณ์ที่ใช้</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 150px;">วันที่เริ่มใช้อุปกรณ์</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 200px;">วันที่สิ้นสุดการใช้อุปกรณ์</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 130px;">จำนวนอุปกรณ์</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 90px;"></th>
                        					</tr>
                      					</thead>
                      					
										<tbody>
									
                       						
                       						 
                          				<tr class="even pointer">
                            				
                            				<?php foreach ($datasetdevice as $rowq) {?>
                            		<?php  echo '<tr><td>' . $rowq->Cq_name . '</td>
       											 	  <td>' . $rowq ->sumbox  . '</td>'; ?>
       											 	   
       									<?php $rowful = $datafullyset-> row();?>
       									 <?php  echo '<td>'.$rowful->Tool_name .'</td>';?>
	                                       
       					 				<?php  echo '  <td></td>
        											  <td></td>';?>
									
        								 <?php  echo ' <td></td>'; ?> 
        							                      				  
                        			 <td class=" "><a href="<?php echo site_url("Devices_control/setdevice1/". $rowq->Cq_id)?>"><button type="submit" class="btn btn-danger">กำหนด</button></a></td>
                          			<?php echo '</tr>';?>
                          			 <?php } ?>  	
                          		
										</tr>
                       						<tr role="row" class="odd">
                          						<td class="sorting_1">กองทุนกู้ยืมเพื่อการศึกษา (รายเก่า)</td>
                          						<td>6 </td>
                          						<td>อุปกรณ์ชุดที่  1</td>
                          						 <td>20/08/2561</td>
                          						<td>25/08/2561</td>
                          						<td>6</td>
                          						<td><button class="btn btn-success">สำเร็จ</button></td>
                        					</tr>
                       						
                        				</tbody>
                    				</table>
                    			</div>
                    		</div>
                    	</div>
                	</div>
              	</div>
      		</div>
       	</div>
	</div>
	<!-- /page content -->
	</font>
</form>	
<?php 
           function convertDBtoView($date){
            $arr= explode('-',$date);
            $re_date = $arr[2].'/'.$arr[1].'/'.$arr[0];
            return $re_date;
        }
     
      ?>    
  