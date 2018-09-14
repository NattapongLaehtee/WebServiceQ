

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
                  
                             	

                  <div class="x_content">
               	<label class="control-label col-md-2 col-sm-2 col-xs-1" for="first-name"><font color="black">ชื่อคิว</font>
                            				</label>
                           					<div class="col-md-1 col-sm-1 col-xs-1">
                              					<select name = ‘many’>	
                              					<option value = ‘1’>กองทุนกู้ยื่มเพื่อการศึกษา (รายใหม่)</option> 
                              					<option value = ‘1’>กองทุนกู้ยื่มเพื่อการศึกษา (รายเก่า)</option> 
                              						 </select>
                             				</div> 
                             				

                             				<br></br>
  <label class="control-label col-md-2 col-sm-2 col-xs-1" for="first-name"><font color="black">สำนักวิชา</font>
                            				</label>
                           					<div class="col-md-1 col-sm-1 col-xs-1">
                              					<select name = ‘many’>	
                              					<option value = ‘1’>สำนักวิชาการจัดการ</option> 
                              						<option value = ‘2’>สำนักวิชาเทคโนโลยีการเกษตร</option> 
                              						<option value = ‘3’>สำนักวิชาพยาบาลศาสตร์</option> 
                              						<option value = ‘4’>สำนักวิชาแพทยศาสตร์</option>
                              						<option value = ‘5’>สำนักวิชาเภสัชศาสตร์</option>
                              						<option value = ‘6’>สำนักวิชาวิทยาศาสตร์</option>
                              						<option value = ‘7’>สำนักวิชาวิศวกรรมศาสตร์และทรัพยากร</option>
                              						<option value = ‘8’>สำนักวิชาสถาปัตยกรรมศาสตร์และการออกแบบ</option>
                              						<option value = ‘9’> สำนักวิชาสหเวชศาสตร์</option>
                              						<option value = ‘10’> สำนักวิชาสารสนเทศศาสตร์</option>
                              						<option value = ‘11’>สำนักวิชาศิลปศาสตร์</option>
                              						<option value = ‘12’> สำนักวิชาสาธารณสุขศาสตร์</option>
                              						<option value = ‘13’>สำนักวิชารัฐศาสตร์และนิติศาสตร์</option> 
                              						<option value = ‘14’>วิทยาลัยสัตวแพทยศา​สตร์อัครราชกุมารี</option> 
                              						<option value = ‘15’>วิทยาลัยทันตแพทยศาสตร์นานาชาติ</option> 
                              						<option value = ‘16’> วิทยาลัยนานาชาติ</option> </select>
                             				</div> 
  
                             				<br></br>
<button type="submit" class="btn btn-success">ค้นหา</button>
         		<p >
                    <div class="table-responsive ">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
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
          </font>
        </div>
        <!-- /page content -->



	