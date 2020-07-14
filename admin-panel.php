
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Scheduler | Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
<?php

include './themepart/header.php'

?>
  <!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Scheduler</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <i class='fas fa-user-circle' style='font-size:32px;color:white'></i>
        </div>
        <div class="info">
            <a href="profile.php" class="d-block">Admin Profile</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
              <a href="admin-panel.php" class="nav-link active">
              <i class='fas fa-calendar-alt' style='font-size:20px'></i>
              <p>
                Time Table Update
              </p>
            </a>
            
          </li>
          
          <li class="nav-item">
              <a href="make-announcement.php" class="nav-link">
              <i class="fa fa-bullhorn" style="font-size:18px"></i>
              <p>
                Make Announcement
              </p>
            </a>
          </li>
          
          <li class="nav-item">
              <a href="reminders.php" class="nav-link">
             <i class="fa fa-print" style="font-size:20px"></i>
              <p>
                Data Base
              </p>
            </a>
          </li>
          
        <li class="nav-header">SCHEDULER</li>
          <li class="nav-item">
              <a href="http://localhost/project/calender.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt" style="font-size:22px"></i>
              <p>
                Calendar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://localhost/project/weekly-tt.php" class="nav-link">
              <i class='fas fa-chalkboard-teacher' style='font-size:20px'></i>
              <p>
                Weekly Time Table
              </p>
            </a>
          </li>
          
        <li class="nav-header">EXIT</li>
           <li class="nav-item">
               <a href="http://localhost/project/login.php" class="nav-link">
              <i class='fas fa-sign-out-alt' style='font-size:20px'></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Time Table</h1>
          </div>
                <!-- Main content -->
                <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             <div class="card-header">
                <h4 style="text-align:center">Information Technology Department</h4>
		<h5 style="text-align:center">3rd Semester</h5>
             </div>
              <!-- /.card-header -->
              <div>
                <table style="text-align:center" id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>TIME</th>
                    <th colspan="2">MONDAY</th>
                    <th colspan="2">TUESDAY</th>
                    <th colspan="2">WEDNESDAY</th>
                    <th colspan="2">THURSDAY</th>
                    <th colspan="2">FRIDAY</th>
                    <th colspan="2">SATURDAY</th>
                  </tr>
                  </thead>
                  
                  <tbody>
                  <tr>
                    <th>8:00 - 8:45</th>
                    
                    <td colspan="2"><div class="margin">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2"><div class="margin">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2"><div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2"><div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2"><div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                  </tr>
                  
                  
                  <tr>
                    <th>8:55 - 9:40</th>
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                  </tr>
                  
                  
                  <tr>
                    <tr>
                    <th>10:00 - 10:45</th>
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <th>10:55 - 11:40</th>
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td colspan="2">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                      
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">ADA</a>
                                <a class="dropdown-item" href="#">CN</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">DE - II</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">IPDC</a>
                                <a class="dropdown-item" href="#">PE</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                                <a class="dropdown-item" href="#">WD</a>
                            </div>
                        </button>
                    </div>
                    </td>
                  </tr>
                  
                  
                  
                  <tr>
                    <th>12:10 - 12:55</th>
                    
                    <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">D1 - ADA</a>
                                <a class="dropdown-item" href="#">D2 - ADA</a>
                                <a class="dropdown-item" href="#">D1 - CN</a>
                                <a class="dropdown-item" href="#">D2 - CN</a>
                                <a class="dropdown-item" href="#">D1 - CS</a>
                                <a class="dropdown-item" href="#">D2 - CS</a>
                                <a class="dropdown-item" href="#">D1 - DE - II</a>
                                <a class="dropdown-item" href="#">D2 - DE - II</a>
                                <a class="dropdown-item" href="#">D1 - WD</a>
                                <a class="dropdown-item" href="#">D2 - WD</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">D1 - ADA</a>
                                <a class="dropdown-item" href="#">D2 - ADA</a>
                                <a class="dropdown-item" href="#">D1 - CN</a>
                                <a class="dropdown-item" href="#">D2 - CN</a>
                                <a class="dropdown-item" href="#">D1 - CS</a>
                                <a class="dropdown-item" href="#">D2 - CS</a>
                                <a class="dropdown-item" href="#">D1 - DE - II</a>
                                <a class="dropdown-item" href="#">D2 - DE - II</a>
                                <a class="dropdown-item" href="#">D1 - WD</a>
                                <a class="dropdown-item" href="#">D2 - WD</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">D1 - ADA</a>
                                <a class="dropdown-item" href="#">D2 - ADA</a>
                                <a class="dropdown-item" href="#">D1 - CN</a>
                                <a class="dropdown-item" href="#">D2 - CN</a>
                                <a class="dropdown-item" href="#">D1 - CS</a>
                                <a class="dropdown-item" href="#">D2 - CS</a>
                                <a class="dropdown-item" href="#">D1 - DE - II</a>
                                <a class="dropdown-item" href="#">D2 - DE - II</a>
                                <a class="dropdown-item" href="#">D1 - WD</a>
                                <a class="dropdown-item" href="#">D2 - WD</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">D1 - ADA</a>
                                <a class="dropdown-item" href="#">D2 - ADA</a>
                                <a class="dropdown-item" href="#">D1 - CN</a>
                                <a class="dropdown-item" href="#">D2 - CN</a>
                                <a class="dropdown-item" href="#">D1 - CS</a>
                                <a class="dropdown-item" href="#">D2 - CS</a>
                                <a class="dropdown-item" href="#">D1 - DE - II</a>
                                <a class="dropdown-item" href="#">D2 - DE - II</a>
                                <a class="dropdown-item" href="#">D1 - WD</a>
                                <a class="dropdown-item" href="#">D2 - WD</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">D1 - ADA</a>
                                <a class="dropdown-item" href="#">D2 - ADA</a>
                                <a class="dropdown-item" href="#">D1 - CN</a>
                                <a class="dropdown-item" href="#">D2 - CN</a>
                                <a class="dropdown-item" href="#">D1 - CS</a>
                                <a class="dropdown-item" href="#">D2 - CS</a>
                                <a class="dropdown-item" href="#">D1 - DE - II</a>
                                <a class="dropdown-item" href="#">D2 - DE - II</a>
                                <a class="dropdown-item" href="#">D1 - WD</a>
                                <a class="dropdown-item" href="#">D2 - WD</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">D1 - ADA</a>
                                <a class="dropdown-item" href="#">D2 - ADA</a>
                                <a class="dropdown-item" href="#">D1 - CN</a>
                                <a class="dropdown-item" href="#">D2 - CN</a>
                                <a class="dropdown-item" href="#">D1 - CS</a>
                                <a class="dropdown-item" href="#">D2 - CS</a>
                                <a class="dropdown-item" href="#">D1 - DE - II</a>
                                <a class="dropdown-item" href="#">D2 - DE - II</a>
                                <a class="dropdown-item" href="#">D1 - WD</a>
                                <a class="dropdown-item" href="#">D2 - WD</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">D1 - ADA</a>
                                <a class="dropdown-item" href="#">D2 - ADA</a>
                                <a class="dropdown-item" href="#">D1 - CN</a>
                                <a class="dropdown-item" href="#">D2 - CN</a>
                                <a class="dropdown-item" href="#">D1 - CS</a>
                                <a class="dropdown-item" href="#">D2 - CS</a>
                                <a class="dropdown-item" href="#">D1 - DE - II</a>
                                <a class="dropdown-item" href="#">D2 - DE - II</a>
                                <a class="dropdown-item" href="#">D1 - WD</a>
                                <a class="dropdown-item" href="#">D2 - WD</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">D1 - ADA</a>
                                <a class="dropdown-item" href="#">D2 - ADA</a>
                                <a class="dropdown-item" href="#">D1 - CN</a>
                                <a class="dropdown-item" href="#">D2 - CN</a>
                                <a class="dropdown-item" href="#">D1 - CS</a>
                                <a class="dropdown-item" href="#">D2 - CS</a>
                                <a class="dropdown-item" href="#">D1 - DE - II</a>
                                <a class="dropdown-item" href="#">D2 - DE - II</a>
                                <a class="dropdown-item" href="#">D1 - WD</a>
                                <a class="dropdown-item" href="#">D2 - WD</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">D1 - ADA</a>
                                <a class="dropdown-item" href="#">D2 - ADA</a>
                                <a class="dropdown-item" href="#">D1 - CN</a>
                                <a class="dropdown-item" href="#">D2 - CN</a>
                                <a class="dropdown-item" href="#">D1 - CS</a>
                                <a class="dropdown-item" href="#">D2 - CS</a>
                                <a class="dropdown-item" href="#">D1 - DE - II</a>
                                <a class="dropdown-item" href="#">D2 - DE - II</a>
                                <a class="dropdown-item" href="#">D1 - WD</a>
                                <a class="dropdown-item" href="#">D2 - WD</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">D1 - ADA</a>
                                <a class="dropdown-item" href="#">D2 - ADA</a>
                                <a class="dropdown-item" href="#">D1 - CN</a>
                                <a class="dropdown-item" href="#">D2 - CN</a>
                                <a class="dropdown-item" href="#">D1 - CS</a>
                                <a class="dropdown-item" href="#">D2 - CS</a>
                                <a class="dropdown-item" href="#">D1 - DE - II</a>
                                <a class="dropdown-item" href="#">D2 - DE - II</a>
                                <a class="dropdown-item" href="#">D1 - WD</a>
                                <a class="dropdown-item" href="#">D2 - WD</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                            </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Subject</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">D1 - ADA</a>
                                <a class="dropdown-item" href="#">D2 - ADA</a>
                                <a class="dropdown-item" href="#">D1 - CN</a>
                                <a class="dropdown-item" href="#">D2 - CN</a>
                                <a class="dropdown-item" href="#">D1 - CS</a>
                                <a class="dropdown-item" href="#">D2 - CS</a>
                                <a class="dropdown-item" href="#">D1 - DE - II</a>
                                <a class="dropdown-item" href="#">D2 - DE - II</a>
                                <a class="dropdown-item" href="#">D1 - WD</a>
                                <a class="dropdown-item" href="#">D2 - WD</a>
                                <a class="dropdown-item" href="#">English Module</a>
                                <a class="dropdown-item" href="#">Sports / Club Activity</a>
                            </div>
                        </button>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <th>12:55 - 1:40</th>
                    <td><div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                    </td>
                    
                    
                    <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-default">Faculty</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">C B Sidpara</a>
                                <a class="dropdown-item" href="#">D B Rathod</a>
                                <a class="dropdown-item" href="#">D H Patel</a>
                                <a class="dropdown-item" href="#">D P Upadhyay</a>
                                <a class="dropdown-item" href="#">D V Mashru</a>
                                <a class="dropdown-item" href="#">K B Vora</a>
                                <a class="dropdown-item" href="#">P P Tank</a>
                                <a class="dropdown-item" href="#">R D Doshi</a>
                                <a class="dropdown-item" href="#">U O Mankad</a>
                                <a class="dropdown-item" href="#">V K Vyas</a>
                              </div>
                        </button>
                    </div>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               
            </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->



  <!-- /.content-wrapper -->
  <?php
  
  include './themepart/footer.php'
  
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
