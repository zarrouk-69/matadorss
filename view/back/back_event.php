<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php 
    
    require_once('../.././config/dbconfig.php');  
    $db = new event();
    $db1 =  new ticket();

?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link rel="icon" href="../.././assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../.././assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../.././assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="../.././assets/css/argon.css?v=1.2.0" type="text/css">
  </head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../.././assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.html">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="back_event.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">events</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="back_ticket.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">tickets</span>
              </a>
            </li>
           
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Foundation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                <i class="ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Plugins</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active-pro" href="upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade to PRO</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../.././assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../.././assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../.././assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../.././assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../.././assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../.././assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tables</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              
              <a href="add_event.php" class="btn btn-sm btn-neutral">Add event</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
           
      <!-- Dark table -->
      <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
             <!-- <h3 class="text-white mb-0">Dark table</h3>-->
            </div>
            <?php $result=$db->view_record();
             $db->display_message(); 
             $db->display_message(); ?>
             <div class="container-fluid">
             <div class="row">
             <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">total events</h5>
                      <span class="h2 font-weight-bold mb-0"> <?php echo($db->total_events(0))?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                   
                    <span class="text-nowrap"> </span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0"> Full  events</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo($db->total_events(1))?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> <?php echo((100/$db->total_events(0))*($db->total_events(1)))?>%</span>
                    <span class="text-nowrap">of total events</span>
                  </p>
                </div>
              </div>
            </div>
            
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0"> inactive events</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo($db->total_events(2))?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i><?php echo((100/$db->total_events(0))*($db->total_events(2)))?>%</span>
                    <span class="text-nowrap">of total events </span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0"> active events</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo($db->total_events(3))?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i><?php echo((100/$db->total_events(0))*($db->total_events(3)))?>%</span>
                    <span class="text-nowrap">of total events </span>
                  </p>
                </div>
              </div>
            </div>
        </div>
                            <form method="POST">
                            <input type="number" name="ide" placeholder="ide" class="form-control mb-2">
                            <input type="text" name="titre" placeholder="titre" class="form-control mb-2">
                            <input type="date" name="date_d" class="form-control mb-2" >
                            <input type="date" name="date_f" class="form-control mb-2">
                            <input type="number" name="nbp" placeholder="nb place" class="form-control mb-2" >
                            <input type="number" name="ids" placeholder="Sponsor Id" class="form-control mb-2">
                            
                            <button class="btn btn-success" name="btn_filter"> Filter </button>
                            </form>
                            
                            
                            </div>
            <div class="row">
            
            <div class="table-responsive">

            
            
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                  <?php if(isset($_GET['ASC_ID']))
                  {
                    ?>
                    <th scope="col" class="sort" data-sort="title" ><a href="back_event.php?DESC_ID">ide</a></th> 
                    <?php
                  }
                  else
                  {
                    ?>
                    <th scope="col" class="sort" data-sort="title" ><a href="back_event.php?ASC_ID">ide</a></th> 
                    <?php
                  }
                  ?>


                  <?php if(isset($_GET['DESC_TITLE']))
                  {
                    ?>
                    <th scope="col" class="sort" data-sort="title" ><a href="back_event.php?ASC_TITLE">nom evenement</a></th> 
                    <?php
                  }
                  else
                  {
                    ?>
                    <th scope="col" class="sort" data-sort="title" ><a href="back_event.php?DESC_TITLE">nom evenement</a></th> 
                    <?php
                  }
                  ?>

                  <?php if(isset($_GET['DESC_DATED']))
                  {
                    ?>
                    <th scope="col" class="sort" data-sort="title" ><a href="back_event.php?ASC_DATED">date debut</a></th> 
                    <?php
                  }
                  else
                  {
                    ?>
                    <th scope="col" class="sort" data-sort="title" ><a href="back_event.php?DESC_DATED">date debut</a></th> 
                    <?php
                  }
                  ?>
                   <?php if(isset($_GET['DESC_FIN']))
                  {
                    ?>
                    <th scope="col" class="sort" data-sort="title" ><a href="back_event.php?ASC_FIN">date fin</a></th> 
                    <?php
                  }
                  else
                  {
                    ?>
                    <th scope="col" class="sort" data-sort="title" ><a href="back_event.php?DESC_FIN">date fin</a></th> 
                    <?php
                  }
                  ?>
                  <th scope="col" class="sort" data-sort="status">status</th>
                    <th scope="col">Sponsors</th>
                    
                    <?php if(isset($_GET['DESC_NBP']))
                  {
                    ?>
                    <th scope="col" class="sort" data-sort="title" ><a href="back_event.php?ASC_NBP">nbr de place</a></th> 
                    <?php
                  }
                  else
                  {
                    ?>
                    <th scope="col" class="sort" data-sort="title" ><a href="back_event.php?DESC_NBP">nbp de place</a></th> 
                    <?php
                  }
                  ?>

                    <?php if(isset($_GET['DESC_DESCP']))
                  {
                    ?>
                    <th scope="col" class="sort" data-sort="title" ><a href="back_event.php?ASC_DESCP">description</a></th> 
                    <?php
                  }
                  else
                  {
                    ?>
                    <th scope="col" class="sort" data-sort="title" ><a href="back_event.php?DESC_DESCP">description</a></th> 
                    <?php
                  }
                  ?>
                  <?php if(isset($_GET['DESC_IMG']))
                  {
                    ?>
                    <th scope="col" class="sort" data-sort="title" ><a href="back_event.php?ASC_IMG">Img</a></th> 
                    <?php
                  }
                  else
                  {
                    ?>
                    <th scope="col" class="sort" data-sort="title" ><a href="back_event.php?DESC_IMG">Img</a></th> 
                    <?php
                  }
                  ?>


                  
                    
                    <th scope="col" class="sort" data-sort="img">actions </th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php 
                                    foreach($result as $data)
                                    {
                                ?>
                  <tr>
                    
                    <td class="budget">
                    <?php echo $data['ide'] ?>
                    </td>
                    <th scope="row">
                      <div class="media align-items-center">
                        
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../.././img/<?php echo $data['img'] ?>">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?php echo $data['titre'] ?></span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                    <?php echo $data['date_d'] ?>
                    </td>
                    <td class="budget">
                    <?php echo $data['date_f'] ?>
                     </td>
                    <td>
                        <?php if ($data['state'] == 1)
                        {
                            if ($db1->search_by_event($data['ide'])==$data['nbp'])
                            {
                                ?>
                                <span class="badge badge-dot mr-4">
                        <i class="bg-danger"></i>
                        <span class="status">full</span>
                      </span>
                      <?php
                            }
                            else
                            {
                            ?>
                            <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">active</span>
                      </span>
                      <?php 
                            }
                        }
                        else
                        {
                            ?>
                             <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">inactive</span>
                      </span>
                      <?php

                        }
                     ?>
                    </td>
                    <td>
                      <!--<div class="avatar-group">
                      <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="<?php echo $data['ids'] ?>">
                          <img alt="Image placeholder" src="./assets/img/theme/team-1.jpg"> 
                          
                        </a>
                        
                      </div>
                      -->
                      <?php echo $data['ids'] ?>
                    </td>
                    <td class="budget">
                    <?php echo $db1->search_by_event($data['ide']) ?> /
                    <?php echo $data['nbp'] ?>
                     </td>
                     <td class="budget">
                     <?php echo $data['description'] ?>
                     </td>
                     <td class="budget">
                     <?php echo $data['img'] ?>
                     </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="edit_event.php?U_ID=<?php echo $data['ide'] ?>">edit</a>
                          <a class="dropdown-item" href="del_event.php?D_ID=<?php echo $data['ide'] ?>">delete</a>
                          <a class="dropdown-item"  href="act_event.php?E_ID=<?php echo $data['ide'] ?>">activate/desactivate</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php
                                    }
                                ?>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer 
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
      -->
    </div>
  </div>

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../.././assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../.././assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../.././assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../.././assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../.././assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../.././assets/js/argon.js?v=1.2.0"></script>
</body>

</html>