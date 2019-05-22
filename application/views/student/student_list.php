

        <!-- page content -->
        <div class="right_col" role="main">
        <font color="black"><div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>แสดงรายชื่อนักศึกษา</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
         <form action="<?php echo site_url("Student_controller/selectqstudent"); ?>" method="post" >
                  <div class="x_content">
               	<label class="control-label col-md-2 col-sm-2 col-xs-1" for="first-name"><font color="black">ชื่อคิว</font>
                            				</label>
                            				<div class="col-md-4 col-sm-2 col-xs-4">
                            					<select name="selectqueue" id="selectqueue" class="form-control-sm form-control"> 
													<option value="" disabled selected hidden>กรุณาเลือกคิวที่ต้องการ</option>
															 <?php foreach ($dataq as $rowq){?>
                                                           <option <?php echo ($selectqueue!=$rowq->Cq_id)?:" selected ","" ?>  value="<?php echo  $rowq->Cq_id; ?>"> <?php echo $rowq->Cq_name;  ?> </option>
                                                          <?php }?> 
														 </select>
														 </div>

                             				<br></br>
  <label class="control-label col-md-2 col-sm-2 col-xs-1" for="first-name"><font color="black">สำนักวิชา</font>
                            				</label>
                           					<div class="col-md-4 col-sm-2 col-xs-4">
                              					<select name="selectfac" id="selectfac" class="form-control-sm form-control"> 
													<option value="" disabled selected hidden>กรุณาเลือกสำนักวิชาที่ต้องการ</option>
															 <?php foreach ($datafac as $rowfac){?>
                                                           <option <?php echo ($selectfac!=$rowfac->Facultyid)?:" selected ","" ?> value="<?php echo $rowfac->Facultyid; ?>" > <?php echo $rowfac->Facultyname ;  ?> </option>
                                                          <?php }?> 
														 </select>
                             				</div> 
  
                             				<br></br>
                             				
                             				 
							<button type="submit" class="btn btn-success">ค้นหา</button>
				</form>                    	
					
         		<p >
                    <div class="table-responsive ">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                             <th class="column-title">ลำดับที่</th>
                            <th class="column-title">รหัสนักศึกษา </th>
                            <th class="column-title">ชื่อ - สกุล</th>
                            <th class="column-title">หลักสูตร </th>
                            <th class="column-title">วันที่จองคิว</th>
                           
                          
                            
                            <th class="bulk-actions" colspan="7">
                             
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                  
                            <?php $i=1?>
  							<?php foreach ($dataqs as $row){?>
  							<tr>
  							<td ><?php echo  $i;?></td>
                            <td ><?php echo  $row->Studentid;?></td>
                            <td><?php echo $row->Prefixname. "  ". $row->Studentname. "  ".$row->Studentsurname ; ?></td>
                            <td><?php echo $row->Programname;?></td>
                            <td><?php echo $this->Util_model->convertDateToView("$row->Date_usedate"); ?></td>
                            </tr>
                              <?php $i++;?>
                            <?php }?>
                          
                          
                         
                         
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
            </div>
          </div>
          </font>
        </div>
        <!-- /page content -->



	