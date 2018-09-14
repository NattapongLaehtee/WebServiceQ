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
              <a class="site_title"><font align=center>ระบบการจัดการงานคิว</font></a>
            </div>
<?php 

    if($this -> session -> userdata ( 'userautority' )=="2") {?>


            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              
              <div class="profile_info" >
                 <h2><?php echo ($this -> session -> userdata ( 'userfname' )); ?></h2>
                 <span>à¸œà¸¹à¹‰à¸”à¸¹à¹�à¸¥à¸£à¸°à¸šà¸š</span>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                <li><a><i class="fa fa-edit"></i>à¸�à¸²à¸£à¸ˆà¸±à¸”à¸�à¸²à¸£à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¸œà¸¹à¹‰à¹ƒà¸Šà¹‰à¸‡à¸²à¸™<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url("Createq/staff")?>">à¸šà¸±à¸™à¸—à¸¶à¸�à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸ˆà¹‰à¸²à¸«à¸™à¹‰à¸²à¸—à¸µà¹ˆ</a></li>
                       <li><a href="<?php echo site_url("Createq/outstaff")?>">à¹�à¸ªà¸”à¸‡à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¹€à¸ˆà¹‰à¸²à¸«à¸™à¹‰à¸²à¸—à¸µà¹ˆ</a></li>
                       <li><a href="<?php echo site_url("Createq/outstudent1")?>">à¹�à¸ªà¸”à¸‡à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¸™à¸±à¸�à¸¨à¸¶à¸�à¸©à¸²</a></li>
                      
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-eyedropper"></i>à¸­à¸¸à¸›à¸�à¸£à¸“à¹Œ <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url("Createq/device")?>">à¸šà¸±à¸™à¸—à¸¶à¸�à¸­à¸¸à¸›à¸�à¸£à¸“à¹Œ</a></li>
                       <li><a href="<?php echo site_url("Createq/outdevice")?>">à¹�à¸ªà¸”à¸‡à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¸­à¸¸à¸›à¸�à¸£à¸“à¹Œ</a></li>
                   <li><a href="<?php echo site_url("Createq/setdevice")?>">à¸�à¸³à¸«à¸™à¸”à¸­à¸¸à¸›à¸�à¸£à¸“à¹Œ</a></li>
                      
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
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
               
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
                    	à¸¡à¸™à¸±à¸ª à¹ƒà¸ˆà¸�à¸¥à¹‰à¸²
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                   
                   
                    <li><a href="<?php echo site_url("Login/loginfrom")?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
                  <li><a><i class="fa fa-home"></i>บันทึกการสร้างคิว <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url("Createq/content")?>">การบันทึกการสร้างคิว</a></li>
                      
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> การจัดการงานคิว <span class="fa fa-chevron-down "></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url("Createq/content2")?>">การเลื่อนคิว</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i>ออกรายงาน <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="<?php echo site_url("Createq/outstudent")?>">พิมพ์รายชื่อนักศึกษา</a></li>
                      <li><a href="<?php echo site_url("Createq/student")?>">แสดงรายชื่อนักศึกษาจองคิว</a></li>
                      <li><a href="<?php echo site_url("Createq/index1")?>">แสดงข้อมูลการเปรียบเทียบการจองคิว</a></li>
                      
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
           		<a data-toggle="tooltip" data-placement="top" title="Home">
                
              </a><a data-toggle="tooltip" data-placement="top" title="Home" >
               
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
                   
                   
                    <li><a href="<?php echo site_url("Login/loginfrom")?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
        
        <!-- /top navigation -->
            <?php }?>
            </div>
        </div>
        
       </body>     