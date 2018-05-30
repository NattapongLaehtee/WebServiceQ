

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

         
                    <div class="table-responsive">
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



	