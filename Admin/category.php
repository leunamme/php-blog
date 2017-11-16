<?php
    require_once('inc/db.php');
    require_once('inc/function.php');
    require_once('core/core_category.php');
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ThemeSonyX">
    <meta name="description" content="Admin Dashboard">

    <title>E3 Blog | Add Category</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Dropzone -->
    <link rel="stylesheet" href="css/dropzone.css">
    <!-- Summernote -->
    <link rel="stylesheet" href="js/summernote/summernote.css">
    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- Favicon -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Preloader -->
    <div class="load-bar">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
    <!-- Header -->
    <nav class="nav-top navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <div class="nav-top-mobile">
            <div class="mobile-user">
              <ul>
                <li class="dropdown">
                  <a href="#" class="mobile-user-profile dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i></a>
                  <ul class="mobile-user-dropdown dropdown-menu animated fadeInDown">
                    <li><a href="my-profile.html">View Profle</a></li>
                    <li><a href="javascript:;">Notification</a></li>
                    <li><a href="javascript:;">Privacy settings</a></li>
                    <li><a href="javascript:;">Activity Log</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="lock.html"><i class="fa fa-lock" aria-hidden="true"></i>Lock</a></li>
                    <li><a href="log-in.html"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="mobile-search">
              <a href="#" class="mobile-search-trigger" role="button"><i class="fa fa-search" aria-hidden="true"></i></a>
              <div class="mobile-search-active animated fadeInDown">
                  <form class="mobile-search-box">
                      <i class="glyphicon glyphicon-search"></i>
                      <input class="mobile-search-input" autofocus type="text" spellcheck="false" placeholder="Search...">   
                      <button type="button" class="close">
                        <span>&times;</span>
                      </button> 
                  </form>
              </div>
            </div>
          </div><!-- end .nav-top-mobile -->
          <div class="logo ">
            <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" alt="Rocket Logo">
              <span>E3 Blog</span>
              <small class="hidden-xs">Raise your standards</small>
            </a>
          </div>
        </div>
        <!-- Collect the nav links, forms, and other content and hide -->
        <div  class="collapse navbar-collapse hidden-xs">
          <ul class="user-profile nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="user-block dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="user-name">Hi, James</span>
                <span class="caret"></span>
                <img src="img/users/user01.jpg" alt="User image">
              </a>
              <ul class="user-profile-dropdown dropdown-menu animated fadeInDown">
                <li>
                  <a href="my-profile.html"><i class="fa fa-user" aria-hidden="true"></i>View Profle</a>
                </li>
                <li>
                  <a href="javascript:;"><i class="fa fa-cog" aria-hidden="true"></i>Privacy settings</a>
                </li>
                <li>
                  <a href="javascript:;"><i class="fa fa-file-text" aria-hidden="true"></i>Activity Log</a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a href="lock.html"><i class="fa fa-lock" aria-hidden="true"></i>Lock</a>
                </li>
                <li>
                  <a href="log-in.html"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                </li>                
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right notify">
            <li class="dropdown">
              
              
            </li>
            <li class="dropdown">
              <a href="#" class="notification dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell" aria-hidden="true"></i></a>
              <ul class="notification-dropdown dropdown-menu animated flipInX">
                <li><a class="notification-item" href="javascript:;">
                    <span class="notification-item-content">
                      <i class="fa fa-users" aria-hidden="true"></i>
                      15 users joined today
                    </span>
                    <span class="notification-item-time">3h ago</span>
                  </a>
                </li>
                <li><a class="notification-item" href="javascript:;">
                    <span class="notification-item-content">
                      <i class="fa fa-key" aria-hidden="true"></i>
                      Password is changed
                    </span>
                    <span class="notification-item-time">5h ago</span>
                  </a>
                </li>
                <li><a class="notification-item" href="javascript:;">
                    <span class="notification-item-content">
                      <i class="fa fa-line-chart" aria-hidden="true"></i>
                       Daily report is available
                    </span>
                    <span class="notification-item-time">1d ago</span>
                  </a>
                </li>
                <li><a class="notification-link" href="javascript:;">See Notification History</a></li>
              </ul>
            </li>
              
            <li class="dropdown">
              <a href="#" class="messages dropdown-toggle pull-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-envelope" aria-hidden="true"></i></a>
              <ul class="messages-dropdown dropdown-menu animated fadeInDown">
                <li><a class="message-item" href="view-message.html">
                      <span class="message-item-img">
                        <img src="img/users/user02.jpg" alt="User image">
                      </span>
                      <div class="message-block">
                        <div class="message-item-from">John Doe</div>
                        <div class="message-item-content">Let me know what</div>
                      </div>
                      <span class="message-item-time">1h ago</span>
                    </a>
                </li> 
                <li><a class="message-item" href="view-message.html">
                      <span class="message-item-img">
                        <img src="img/users/user03.jpg" alt="User image">
                      </span>
                      <div class="message-block">
                        <div class="message-item-from">Kimbery Yearta</div>
                        <div class="message-item-content">Hi, can you tell me</div>
                      </div>
                      <span class="message-item-time">3h ago</span>
                    </a>
                </li>
                <li><a class="message-item" href="view-message.html">
                      <span class="message-item-img">
                        <img src="img/users/user04.jpg" alt="User image">
                      </span>
                      <div class="message-block">
                        <div class="message-item-from">Clare Cuenca</div>
                        <div class="message-item-content">Call Jenny ! Don't forget</div>
                      </div>
                      <span class="message-item-time">6h ago</span>
                    </a>
                </li>
                <li><a class="message-item" href="view-message.html">
                      <span class="message-item-img">
                        <img src="img/users/user05.jpg" alt="User image">
                      </span>
                      <div class="message-block">
                        <div class="message-item-from">Brandon Gorby</div>
                        <div class="message-item-content">This is great</div>
                      </div>
                      <span class="message-item-time">1d ago</span>
                    </a>
                </li>
                <li><a class="messages-link" href="messages.html">View All messages</a></li> 
              </ul>
            </li>
          </ul>
          <form class="nav-search">
              <input class="nav-search-input" type="text" spellcheck="false" placeholder="Search...">
              <i class="glyphicon glyphicon-search" aria-hidden="true"></i>
          </form>
        </div><!-- end .navbar-collapse -->
      </div><!-- end .container-fluid -->
    </nav><!-- end .nav-top -->
            
      
      <br>
    <!-- Page content -->
    <div class="contentWrapper">
      
                <!-- add category form --->
      <div class="row form-wrapper">
        <div class="basic-from col-sm-5 col-xs-12">
            
            
          <h3>Add Category</h3>
          <form action="category.php" method="post">
            <div class="form-group">
                <!-- alert -->
            <div class="text-center"><?php echo $err_msg;
                            echo $succ_msg;
                     ?>
             </div><!-- end of alert -->
              <label for="email1">New Category: *</label>
              <input type="text" class="form-control" id="email1" name="category" required>
            </div>
              <button type="submit" name="submit" class="btn btn-success"> Add New Category</button>
          </form>
        </div><!-- form ending -->
          
          
            <!-- list of category --->
        <div class="horizontal-form col-sm-7 col-xs-12">
          
          <div class="ticketBox">
            <div class="ticket-header">
              <h2>All Category</h2>
              <i class="hideTickets pull-right fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="ticket-body animated zoomIn">
                
              <table class="table">
                  
                <thead>
                  <tr>
                    <th>Category</th>
                    <th class="hide-row">Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                  
                  <?php 
                  
                        //SQL TO EXTRACT db_TABLE PARAMETERS
                        $Query = "SELECT * FROM category ORDER BY id desc";
                        $Execute = $conn->query($Query);
                        $SrNo=0;

                        while($rows = $Execute->fetch_assoc()){
                            $id = $rows['id'];
                            $category = $rows['category'];
                            $creatorname = $rows['creatorName'];
                            $time = $rows['time'];
                            $date = $rows['date'];
                            $SrNo++;

                  ?>
                  
                <tbody>
                  <tr>
                      <td><a href="#"><strong><?php echo $category; ?></strong></a><br>
                        <small class="ticket-from">From: <?php echo $creatorname; ?></small>
                      </td>
                      <td class="hide-row"><?php echo $time; ?><br><small class="text-muted"><?php echo $date; ?></small></td>
                      
                      <td>
                          <div class="ticket-status">
                            <h4><span class="btn btn-danger">Delete</span></h4>
                          </div>
                     </td>
                      
                  </tr>
                                                                   
                </tbody>
                  <?php } ?>
              </table>
            </div>
          </div>
        </div><!-- end of list of category -->
          
        
    </div><!-- end .contentWrapper -->

    <!-- Footer -->
    <footer>
      <div class="nav-bottom navbar nav-fixed">
        <div class="row">
            <a class="col-xs-2 nav-dash" href="index.html">
              <i class="fa fa-rocket" aria-hidden="true"></i><br>
              <span class="hidden-xs">Dashboard</span>
            </a>
            <a class="col-xs-2 nav-inbox" href="messages.html">
              <i class="fa fa-envelope-o" aria-hidden="true"></i><br>
              <span class="hidden-xs">Messages</span>
            </a>
            <a class="col-xs-2 nav-myProfile" href="my-profile.html">
              <i class="fa fa-user" aria-hidden="true"></i><br>
              <span class="hidden-xs">My Profile</span>
            </a>
            <a class="col-xs-2 nav-calendar" href="calendar.html">
              <i class="fa fa-calendar-check-o" aria-hidden="true"></i><br>
              <span class="hidden-xs">Calendar</span>
            </a>
            <a class="col-xs-2 nav-users" href="users.html">
              <i class="fa fa-users" aria-hidden="true"></i><br>
              <span class="hidden-xs">Users</span>
            </a>
            <a class="col-xs-2 nav-more dropdown currentPage" href="#">
              <i class="fa fa-plus" aria-hidden="true"></i><br>
              <span class="hidden-xs">More</span>
            </a>
        </div>
      </div>
      <div id="box" class="nav-moreBox animated fadeInDown">
        <div class="moreBox-item" data-toggle="collapse" data-target="#uiElements">
          <i class="fa fa-desktop" aria-hidden="true"></i>
          UI Elements
          <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
          <div id="uiElements" class="collapse">
            <ul>
              <li><a href="alerts.html">Alerts</a></li>
              <li><a href="animations.html">Animations</a></li>
              <li><a href="buttons.html">Buttons</a></li>
              <li><a href="grid-system.html">Grid System</a></li>
              <li><a href="pagination.html">Pagination</a></li>
              <li><a href="progress-bars.html">Progress Bars</a></li>
              <li><a href="typography.html">Typography</a></li>
            </ul>
          </div>
        </div> 
        <div class="moreBox-item" data-toggle="collapse" data-target="#charts">
          <i class="fa fa-line-chart" aria-hidden="true"></i>
          Charts
          <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
          <div id="charts" class="collapse">
            <ul>
              <li><a href="chartJs.html">Chart.js</a></li>
              <li><a href="morrisJs.html">morris.js</a></li>
            </ul>
          </div>
        </div>
        <div class="moreBox-item" data-toggle="collapse" data-target="#icons">
          <i class="fa fa-fort-awesome" aria-hidden="true"></i>
          Icons
          <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
          <div id="icons" class="collapse">
            <ul>
              <li><a href="icons-fontawesome.html">Font Awesome</a></li>
              <li><a href="icons-glyphicon.html">Glyphicons</a></li>
            </ul>
          </div>
        </div>
        <a href="widgets.html">
          <div class="moreBox-item">
            <i class="fa fa-cube" aria-hidden="true"></i>
            <span class="moreBox-item-name">Widgets</span>
          </div>
        </a>
        <a href="forms.html">
          <div class="moreBox-item">
            <i class="fa fa-check-square-o" aria-hidden="true"></i>
            <span class="moreBox-item-name">Forms</span>
          </div>
        </a>
        <a href="tables.html">
          <div class="moreBox-item">
            <i class="fa fa-table" aria-hidden="true"></i>
            <span class="moreBox-item-name">Tables</span>
          </div>
        </a>
        <a href="map.html">
          <div class="moreBox-item">
            <i class="fa fa-globe" aria-hidden="true"></i>
            <span class="moreBox-item-name">Map</span>
          </div>
        </a>
        <div class="moreBox-item" data-toggle="collapse" data-target="#pages">
          <i class="fa fa-tags" aria-hidden="true"></i>
          Special Pages
          <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
          <div id="pages" class="collapse">
            <ul>
              <li><a href="blank.html">Blank Page</a></li>
              <li><a href="log-in.html">Login Page</a></li>
              <li><a href="lock.html">Lock</a></li>
              <li><a href="forgot-password.html">Recover Password</a></li>
              <li><a href="sign-up.html">Sign Up</a></li>
              <li><a href="view-message.html">View Email</a></li>
              <li><a href="user-profile.html">User Profile</a></li>
              <li><a href="edit-profile.html">Edit Profile</a></li>
              <li><a href="404.html">Error 404</a></li>
              <li><a href="500.html">Error 500</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer><!-- end .nav-bottom -->

    <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Dropzone -->
    <script type="text/javascript" src="js/dropzone.js"></script>
    <!-- Summernote -->
    <script type="text/javascript" src="js/summernote/summernote.min.js"></script>
    <script type="text/javascript" src="js/summernote/summernoteConfig.js"></script>

    <!--Custom script -->
    <script type="text/javascript" src="js/preloader.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $(this).scrollTop(0);
      });
    </script>
 </body>

<!-- Mirrored from themesonyx.com/preview/rocket/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Sep 2017 02:17:22 GMT -->
</html>