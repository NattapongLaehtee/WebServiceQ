    <!-- page content -->
        <div class="right_col"  role="main" >
         <div class="">
         <font color="black">
    <?php //var_dump($qstudent);
   
    
//var_dump($datastep);
//var_dump($datatime);
    $rowqstu = $qstudent-> row();?>
            

                <div class="x_panel">
                <div class="x_content">
         
                   
                    <h3  ><div>ชื่อคิว " <?php echo $rowqstu->Cq_name; ?> "</div></h2>
             
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>วันที่ทำการจองคิว</th>
                          
                          <th></th>
                          
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                        <?php foreach($qdatestudent as $row){?>
                        
                          <td><?php echo convertDBtoDate( $row->Date_usedate);?></td>
                         
                          <td><a href="<?php echo site_url("Report/callpdf/".$row->Date_usedate);?>"><button type="submit" class="btn btn-success">พิมพ์</button></a></td>
                          
                        </tr>
                         <?php }?>
  
                      </tbody>
                    </table>
                  </div>
                  </div>
                  </font>
            </div>
                  </div>
        
        <!-- /page content -->
        
        <?php 
       
      
   
      
           function convertDBtoDate($date){
            $arr= explode('-',$date);
            $re_date = $arr[2].'/'.$arr[1].'/'.$arr[0];
            return  $re_date;
        }
     
      ?>    