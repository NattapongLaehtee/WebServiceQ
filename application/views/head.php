<!DOCTYPE html>
<html>
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<title>Web Service Q </title>

        <!-- Bootstrap -->
    	<link href="<?php echo base_url();?>Q_css/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
    	<link href="<?php echo base_url();?>Q_css/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
    	<link href="<?php echo base_url();?>Q_css/vendors/nprogress/nprogress.css" rel="stylesheet">

        <!-- Custom Theme Style -->
    	<link href="<?php echo base_url();?>Q_css/build/css/custom.min.css" rel="stylesheet">
	</head>
   <body class="nav-md">
<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a class="site_title"><font align="center">ระบบการจัดการแถวคอย</font></a>
            </div>
<?php 

    if($this -> session -> userdata ( 'userautority' )=="2") {?>


            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              
              <div class="profile_info" >
                 <h2><?php echo ($this -> session -> userdata ( 'userfname' )." ".$this -> session -> userdata ( 'userlname' )) ; ?></h2>
                 <span>ผู้ดูแลระบบ</span>
              </div>
            </div>
            <!-- /menu profile quick info -->
           
           <br />  <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                <li><a><i class="fa fa-edit"></i>การจัดการข้อมูลผู้ใช้งาน<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url("Createq/staff")?>">บันทึกข้อมูลเจ้าหน้าที่</a></li>
                       <li><a href="<?php echo site_url("Createq/outstaff")?>">แสดงข้อมูลเจ้าหน้าที่</a></li>
                       <li><a href="<?php echo site_url("Createq/outstudent1")?>">แสดงข้อมูลนักศึกษา</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-eyedropper"></i>ข้อมูลอุปกรณ์<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url("Devices_control/device")?>">บันทึกอุปกรณ์</a></li>
                       <li><a href="<?php echo site_url("Devices_control/out_device")?>">แสดงข้อมูลอุปกรณ์</a></li>
                   <li><a href="<?php echo site_url("Devices_control/setdevice")?>">กำหนดอุปกรณ์</a></li>   
                     <li><a href="<?php echo site_url("Devices_control/statusdevice")?>">สถานะการใช้งานอุปกรณ์</a></li> 
                    </ul>
                  </li>           
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Home" href="<?php echo site_url("Createq/indexad")?>">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
              </a>
              
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo site_url("Login/loginfrom")?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
 
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    	<?php echo ($this -> session -> userdata ( 'userfname' )." ".$this -> session -> userdata ( 'userlname' )) ; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                   
                   
                    <li><a href="<?php echo site_url("Login/loginfrom")?>"><i class="fa fa-sign-out pull-right"></i>ออกจากระบบ</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url();?>Q_css/images/img.jpg" alt="Profile Image" /></span>
                    
                      </a>
                    </li>
                    
                  </ul>
                </li>
              </ul>
            </nav>
      
     
        <!-- /top navigation -->
        
            <?php }else if($this -> session -> userdata ( 'userautority' )=="1"){ ?>
            
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info" >
                 <h2><?php echo ($this -> session -> userdata ( 'userfname' )." ".$this -> session -> userdata ( 'userlname' )) ; ?></h2>
                 <span>ผู้จัดการคิว</span>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i>การบันทึกการสร้างคิว <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url("Createq/content")?>">การสร้างคิว</a></li>
                      <li><a href="<?php echo site_url("Createq/content3")?>">แสดงผลข้อมูลคิว</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> การจัดการงานคิว <span class="fa fa-chevron-down "></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url("Createq/content2")?>">การเลื่อนคิว</a></li>
                      <li><a href="<?php echo site_url("Createq/openq")?>">สถานะการใช้งานคิว</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i>ออกรายงาน <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="<?php echo site_url("Student_controller/outstudent")?>">พิมพ์รายชื่อนักศึกษา</a></li>
                      <li><a href="<?php echo site_url("Student_controller/student")?>">แสดงรายชื่อนักศึกษาจองคิว</a></li>
                      
                      
                    </ul>
                  </li>
                  
                  
                  
                </ul>
              </div>
              

            </div>
            
              <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Home" href="<?php echo site_url("Createq/indexqm")?>">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
              </a>
           		
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo site_url("Login/loginfrom")?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    	<?php echo ($this -> session -> userdata ( 'userfname' )." ".$this -> session -> userdata ( 'userlname' )) ; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   
                   
                    <li><a href="<?php echo site_url("Login/loginfrom")?>"><i class="fa fa-sign-out pull-right"></i>ออกจากระบบ</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
        
        <!-- /top navigation -->
            <?php }?>
            </div>
        </div>
        
       </body>     