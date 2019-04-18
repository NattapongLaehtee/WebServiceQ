<!DOCTYPE html>
<html lang="en">  
<head>
  <link rel="stylesheet" href="<?php echo base_url();?>Q_css/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>Q_css/assets/css/bootstrap.min.css">
</head>
<title>How to export data in PDF format in Codeigniter using MPDF Library</title>
<body>
 
<div class="table-responsive">
    <table class="table table-hover tablesorter pdf_border">
        <thead>
            <tr class="pdf_border">
                <th class="header pdf_border">Model No.</th>
                <th class="header pdf_border">Mobile Name</th> 
                <th class="header pdf_border">Price</th>
                <th class="header pdf_border">Company</th>                      
                <th class="header pdf_border">Category</th>
            </tr>
        </thead>
        <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?php echo site_url()?>pdfs/save_pdf"><i class="fa fa-file-excel-o"></i> PDF Data</a>
        <tbody>
           
                    <tr class="pdf_border">
                        <td class="pdf_border"><?php echo $val['model_no']; ?></td>   
                        <td class="pdf_border"><?php echo $val['mobile_name']; ?></td> 
                        <td class="pdf_border"><?php echo $val['price']; ?></td>
                        <td class="pdf_border"><?php echo $val['company']; ?></td>                    <td class="pdf_border"><?php echo $val['mobile_category']; ?></td>
                    </tr>
                  
        </tbody>
    </table>
    
</div> 
</body>
</html>