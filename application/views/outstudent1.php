
    <!-- page content -->
	<div class="right_col" role="main">
		<font color="black"><div class="">
			<div class="page-title">
          		<div class="title_left">
                	<h3>แสดงรายชื่อนักศึกษา</h3>
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
                        					<tr role="row" color="black">
                        						<th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">รหัสนักศึกษา</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">ชื่อ - นามสกุล</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 200px;">หลักสูตร</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 130px;">สำนักวิชา</th>
                        						
                        					</tr>
                      					</thead>
										<tbody>
									<?php  
                       						
                       						 
									foreach ($student_res as $row){?>
										       <tr class="even pointer">
                            
                           					 <td class=" "><?php echo $row->Studentid; ?></td>
                        				    <td class=" "><?php echo  $row->Studentname . "   " . $row->Studentsurname; ?> </td>
                            <td class=" "><?php echo  $row->Programname; ?></td>
                           <td class=" "><?php echo  $row->Facultyname; ?></td>
                              
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

          
     
                
        
        

        

   