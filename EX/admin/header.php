
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        

        
       <link href="../css/bootstrap.min.css" rel="stylesheet">

    
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        
        <link href="../css/timeline.css" rel="stylesheet">

        
        <link href="../css/startmin.css" rel="stylesheet">

        
        <link href="../css/morris.css" rel="stylesheet">

        
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

         <link href="../css/sb-admin-2.css" rel="stylesheet">
         <link href="../css/sb-admin-2.min.css" rel="stylesheet">
         <link href="../css/style.css" rel="stylesheet">

    </head>
    <body>

        <div id="wrapper" >

            
            <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #1055e0" role="navigation">
                  <ul class="nav navbar-right navbar-top-links">

               
                 <li class="dropdown">
                                              <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: #1055e0; color: #fff;">
                            <i class="fa fa-user fa-fw"></i>
                              <?php
      if(isset ($_SESSION['email']))
      {
        echo $_SESSION['email'];

      }
      else
      {
        echo '';
      }

    ?>
    <?php
                        if(isset ($_SESSION['email']))
      {
                        ?>
       
  <b class="caret"></b>
                        </a>

                                         <ul class="dropdown-menu dropdown-user">
                         
                      
                            <li><a href="profile.php" style="background-color: #1055e0; color: #fff;"><i class="fa fa-user fa-fw"></i>  Profile</a>
                            </li>
                            <li><a href="changepass.php" style="background-color: #1055e0; color: #fff;"><i class="fa fa-edit icon"></i> Change Password</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="logout.php" style="background-color: #1055e0; color: #fff;"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                            
                            
                        </ul>
                        <?php }
                        ?>
                    </li>
                </ul>

               
                

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search" style="background-color: #1055e0">
                               <div class="input-group custom-search-form">
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            
                                          </li>


                                                        
                    <?php 
if(isset($_SESSION['email']))
{ ?>
   


                             <li>
                                <a href="home.php" class="active" style="background-color: #1055e0; color: #fff;"><i class="fa fa-home fa-fw"></i> Home</a></li>
                               <?php } else { ?>  <li>
                                <a href="index.php" class="active" style="background-color: #1055e0; color: #fff;"><i class="fa fa-home fa-fw"></i> Home</a></li>
      <?php } ?>
                      
                                           <?php 
if(isset($_SESSION['email']))
{ ?>
                            <li>
                                <a href="upload.php" style="background-color: #1055e0; color: #fff;"><i class="fa fa-file-archive-o fa-fw" ></i >Upload Material</a>
                            </li>
                             <li>
                            <a href="select.php" style="background-color: #1055e0; color: #fff;"><i class="fa fa-table fa-fw" style="background-color: #1055e0; color: #fff;"></i> Generate Paper</a>
                            </li>
                            <li>
                            <a href="result.php" style="background-color: #1055e0; color: #fff;"><i class="fa fa- fa-list-alt" style="background-color: #1055e0; color: #fff;"></i> Examination Result</a>

                           <!-- <li><a href="changepass.php" style="background-color: #1055e0; color: #fff;"><i class="fa fa-edit icon" style="background-color: #1055e0; color: #fff;"></i> Change Password</a>
                            </li>-->
                            <li class="divider"></li>
                            <li><a href="logout.php" style="background-color: #1055e0; color: #fff;"><i class="fa fa-sign-out fa-fw" style="background-color: #1055e0; color: #fff;"></i> Logout</a>
                            </li>


                            
                    <?php } else { ?>

                     <li>
                            <li>
                            <a href="registration.php" style="background-color: #1055e0; color: #fff;"><i class="fa fa-table fa-fw"></i> Register</a>
                            </li>
                            <li>
                            <a href="login.php" style="background-color: #1055e0; color: #fff;"><i class="fa fa-sign-in" ></i> Login</a>
                            </li>
                            <li>
                            
                            </li>
                           <?php } ?>
                           
                    </div>
                </div>

            </nav>

                               
       