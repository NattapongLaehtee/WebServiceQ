
    <!-- page content -->
    
	<div class="right_col" role="main">
		<font color="black"><div class="">
			<div class="page-title">
          		<div class="title_left">
                	<h3>============<?php 
    echo $test_data ;
    ?>พิมพ์รายชื่อ</h3>
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
                        						<th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">ชื่อคิว</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">วันที่เริ่มจองคิว<th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 200px;">วันที่สิ้นสุดจองคิว</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 130px;"></th>
                        						
                        					</tr>
                      					</thead>
										<tbody>
									<?php 
									foreach ($queue_res->result() as $row)
									{
									  
									
									
									?>
                          					<tr role="row" class="even">
                          						<td class="sorting_1"><?php echo $row->Cq_name;?></td>
                          						<td><?php echo $row->Cq_reserdate;?></td>
                          						<td><?php echo ($row->Cq_lastreser);?></td>
                          						<td>   <button type="submit" class="btn btn-success">พิมพ์</button></td>
                          					</tr>
                       					<?php 
                       					
									}
                       					?>
                          					
                        					
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

          
     
                
        
        

        

   