

<html lang="en">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <main role="main" class="container">
    <?php 
    $rowq = $q_res->row();
    $rowqd = $qd_res->row();
    ?>
    
    <div align="center"><b><?php echo "รายชื่อผู้จองคิว   ".($rowq->Cq_name); ?></b></div>
     <div align="center"><b><?php echo "ประจำวันที่  ". (convertdateDBtoreport($rowqd->Date_usedate)); ?></b></div>
     <p align="left"><?php echo "เวลา  ". (converttimeDBtoreport($rowqd->Time_usedate)). "  -  " .(converttimeDBtoreport($rowqd->Time_lastuse)) ; ?></p>
     
       <br>
       	<table class="table table-hover tablesorter pdf_border" border="1">
        <thead>
        
            <tr class="pdf_border" align="center">
                <th class="header pdf_border"  style="width: 50px;">ลำดับที่</th>
                <th class="header pdf_border" style="width: 90px;">รหัสนักศึกษา</th> 
                <th class="header pdf_border" style="width: 200px;">ชื่อ - สกุล</th> 
                <th class="header pdf_border" style="width: 220px;">สำนักวิชา</th>
                  <th class="header pdf_border" style="width: 150px;">ลายมือชื่อ</th>
            </tr>
        </thead>
        
 		<tbody >
        			<?php $i = 1; ?>
           			<?php foreach ($stdqd_res as $rowstd){?>
           			
                    <tr class="pdf_border">
                        <td class="pdf_border" align="center"  style="width: 50px;"><?php echo $i; ?></td>   
                        <td class="pdf_border" align="center" style="width: 90px;" ><?php echo $rowstd->Studentid; ?></td> 
                        <td class="pdf_border" style="width: 200px;"><?php echo "   ".($rowstd->Prefixname). "".($rowstd->Studentname). "  ".($rowstd->Studentsurname);   ?> </td> 
                        <td class="pdf_border" align="center" style="width: 220px;"><?php echo " ".($rowstd->Facultyname); ?></td>
                                  
                        <td class="pdf_border" style="width: 150px;" ></td>
                    </tr>
                    <?php $i++;?>
                    <?php }?>
                  
        </tbody>
    </table>
        
    </main>

</body>

</html>

<?php 
           function convertdateDBtoreport($date){
          //  $arr= explode('-',$date);
          //  $re_date = $arr[2].'/'.$arr[1].'/'.$arr[0];
               $strYear = date("Y",strtotime($date))+543;
          
               $strMonth= date("n",strtotime($date));
          
               $strDay= date("j",strtotime($date));
          
           
            $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฏาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
           
            $strMonthThai=$strMonthCut[$strMonth];
         
            return "$strDay $strMonthThai $strYear";
          
        }
        function converttimeDBtoreport($time){
            $strHour= date("H",strtotime($time));
      
        $strMinute= date("i",strtotime($time));
     
  
        return " $strHour:$strMinute";
        }
     
      ?>    