    <!-- page content -->
        <div class="right_col"  role="main" >
         <div class="">
    <?php //var_dump($qstudent);
   
    
//var_dump($datastep);
//var_dump($datatime);
    $rowqstu = $qstudent-> row();?>
            

                <div class="x_panel">
                <div class="x_content">
         
                   
                    <h2 ><div><?php echo $rowqstu->Cq_name; ?></div></h2>
             
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>วันที่ทำการจองคิว</th>
                          
                          <th></th>
                          
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>Tiger Nixon</td>
                          <td><button type="submit" class="btn btn-success">พิมพ์</button></td>
                          
                        </tr>
                        
  
                      </tbody>
                    </table>
                  </div>
                  </div>
            </div>
                  </div>
        
        <!-- /page content -->