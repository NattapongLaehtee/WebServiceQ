

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>แสดงรายชื่อนักศึกษา</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                             	

                  <div class="x_content">
               	<label class="control-label col-md-2 col-sm-2 col-xs-1" for="first-name"><font color="black">ชื่อคิว</font>
                            				</label>
                           					<div class="col-md-1 col-sm-1 col-xs-1">
                              					<select name = ‘many’>	
                              					<option value = ‘1’>กองทุนกู้ยืม(รายใหม่)</option> 
                              						 </select>
                             				</div> 
                             				<br></br>
 <label class="control-label col-md-2 col-sm-2 col-xs-1" for="first-name"><font color="black">วันที่จองคิว</font>
                            				</label>
                           					<div class="col-md-1 col-sm-1 col-xs-1">
                              					<select name = ‘many’>	
                              					<option value = ‘1’>1 ธันวาคม 2561</option> 
                              						<option value = ‘2’> 2 </option> 
                              						<option value = ‘3’> 3 </option> 
                              						<option value = ‘4’> 4 </option> </select>
                             				</div> 
                             				<br></br>
  <label class="control-label col-md-2 col-sm-2 col-xs-1" for="first-name"><font color="black">สำนักวิชา</font>
                            				</label>
                           					<div class="col-md-1 col-sm-1 col-xs-1">
                              					<select name = ‘many’>	
                              					<option value = ‘1’>สำนักวิชาการจัดการ</option> 
                              						<option value = ‘2’> 2 </option> 
                              						<option value = ‘3’> 3 </option> 
                              						<option value = ‘4’> 4 </option> </select>
                             				</div> 
  
                             				<br></br>
   <label class="control-label col-md-2 col-sm-2 col-xs-1" for="first-name"><font color="black">การแสดงผล</font>
                            				</label>
                           					<div class="col-md-1 col-sm-1 col-xs-1">
                              					<select name = ‘many’>	
                              					<option value = ‘1’>ตามช่วงเวลา</option> 
                              						<option value = ‘2’>เรียงตามรหัสนักศึกษา</option> 
                              						 </select>
                             				</div> 
			
         		<br></br>
         		<p >
                    <div class="table-responsive ">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">ลำดับที่</th>
                            <th class="column-title">รหัสนักศึกษา </th>
                            <th class="column-title">ชื่อ</th>
                            <th class="column-title">นามสกุล </th>
                            <th class="column-title">สำนักวิชา </th>
                           
                          
                            
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php $i=1; foreach ($student_res as $row){?>
                          <tr class="even pointer">
                            <td class=" "><?php echo 1;?></td>
                            <td class=" "><?php echo $row->Std_Id; ?></td>
                            <td class=" "><?php echo $row->Std_Fname; ?> </td>
                            <td class=" "><?php echo $row->Std_Lname; ?></td>
                            <td class=" "><?php echo $row->Std_Sch; ?></td>
                           
                           
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
        <!-- /page content -->



	