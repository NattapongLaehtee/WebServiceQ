
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>Q_css/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>Q_css/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>Q_css/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>Q_css/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>Q_css/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
  <form action="<?php echo site_url("Login/checklogin")?>" method="post">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
           
            <font color="black"> <h3 >ระบบเว็บเซอร์วิสการจัดการแถวคอย</h3></font>
          	<br>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" />
              </div>
              <br>
              <div>
                <input type="password" class="form-control" placeholder="Password"  name="password" />
              </div>
              <br>
              <div>
                <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
               
                
              </div>
              <br>
             <font color="black"> 
			<div>
			
                <lable> Web Service for Queue Management</lable>
                  <p>©2018 All Rights Reserved. By Division of Student Affairs Walailak University </p>
                </div> 
                </font>
                    </section>
           </div>
        
             </div>
             </div>
            </form>
        
        
        


     
   
   
  </body>
</html>
