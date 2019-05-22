 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script type="text/javascript">

$(document).ready(function() {
	
	<?php if($this->session->flashdata('massageid')=='moveq'){
	    echo "alert('".$this->session->flashdata('massage')."');";
	}?>

	
	
    $("#moveq").click(function(){
    	alert("คุณต้องการเลื่อนคิว ใช่หรือไม่");
    }); 
});
</script>



 <!-- page content -->
	<div class="right_col" role="main">
	<font color="black"><div class="">
			<div class="page-title">
          		<div class="title_left">
                	<h3>การเลื่อนคิว</h3>
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
                        					<tr role="row" >
                        						<th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">ชื่อคิว</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">วันที่เริ่มบันทึกสถานะจองคิวถึงวันสิ้นสุด</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 200px;">วันที่จองคิวถึงวันที่สิ้นสุด</th>
                        						<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 90px;"></th>
                        					</tr>
                      					</thead>
										<tbody>
										 <?php  
                       						
                       						 
										       foreach ($queue_res as $row){?>
										       <tr class="even pointer">
                            
                           					 <td class=" "><?php echo $row->Cq_name; ?></td>
                        				    <td class=" "><?php echo convertDBtoDate( $row->Cq_usedate) . " ถึง " . convertDBtoDate($row->Cq_lastuse); ?> </td>
                            <td class=" "><?php echo convertDBtoDate( $row->Cq_reserdate) .  " ถึง " . convertDBtoDate( $row->Cq_lastreser); ?></td>
                            <td class=" "><a href="<?php echo site_url("Createq/moveq/".$row->Cq_id);?>"><button type="submit" class="btn btn-success" id="moveq">เลื่อนคิว</button></a></td>
                              
                          				</tr>
                           			<?php }?>
                       						
                          						
                          						
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
       	</font>
	</div>
	<!-- /page content -->
<?php 
           function convertDBtoDate($date){
            $arr= explode('-',$date);
            $re_date = $arr[2].'/'.$arr[1].'/'.$arr[0];
            return $re_date;
        }
     
      ?>          
        
    

        

   