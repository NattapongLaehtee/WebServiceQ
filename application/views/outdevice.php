
    <!-- page content -->
	<div class="right_col" role="main">
	<font color="black">
	<div class="">
			<div class="page-title">
          		<div class="title_left">
                	<h3>แสดงข้อมูลอุปกรณ์</h3>
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
                        						
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">ชื่ออุปกรณ์</th>
                        					    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 150px;">รายละเอียดอุปกรณ์</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 150px;">รหัสบาร์โค้ดอุปกรณ์</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 90px;"></th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 155px;"></th>
                        					</tr>
                      					</thead>
										<tbody>
                       						 <?php  
                       						
                       						 
                       						 foreach ($device_res as $row){?>
                          				<tr class="even pointer">
                            
                           					 <td class=" "><?php echo $row->Tool_name; ?></td>
                        				    <td class=" "><?php echo $row->Tool_detail; ?> </td>
                            <td class=" "><?php echo $row->Tool_barcode; ?></td>
                            <td class=" "><a href="<?php echo site_url("Devices_control/editdevice/".$row->Tool_id);?>"><button type="submit" class="btn btn-success">แก้ไข</button></a></td>
                               <td class=" "><a href="<?php echo site_url("Devices_control/delete_device/".$row->Tool_id);?>"><button type="submit" class="btn btn-success">ยกเลิกการใช้งาน</button></a></td>
                          				</tr>
                          			<?php }?>
                        				</tbody>
                    				</table>
                    			</div>
                    		</div>
                    	</div>
                	</div>
              	</div>
      		</div>
       	</div>
       	</font>
	</div>
	<!-- /page content -->
</form>
          
     
                
        
        

        

   