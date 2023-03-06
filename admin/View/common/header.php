<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo"><img src="./image/loginLogo.png" id="logo" alt=""><b>ADMIN</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user-circle-o  fs-5" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="./image/<?= $adminInfo[0]["photo"] ?>" class="img-circle" alt="User Image" />
                                <p>
                                    <?php
                                    echo  $adminInfo[0]["name"];
                                    ?>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#"></a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#"></a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <!-- <a href="#">Friends</a> -->
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="../View/adminProfileVIew.php" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="../Controller/logoutController.php" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="./image/<?= $adminInfo[0]["photo"] ?>" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Welcome</p>
                    <p><?php
                        echo  $adminInfo[0]["name"];
                        ?>
                    </p>
                </div>
            </div>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="active treeview">
                    <a href="./../View/testDahboard.php">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user-md" aria-hidden="true"></i>
                        <span>Doctor</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="./AdminDoctorList.php"><i class="fa fa-circle" aria-hidden="true"></i>Doctor List</a></li>
                        <li><a href="./AdminScheduleList.php"><i class="fa fa-circle" aria-hidden="true"></i>Schedule List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="pages/widgets.html">
                        <i class="fa fa-hospital-o" aria-hidden="true"></i>
                        <span>Hospital</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="./../View/adminHospitalAdd.php"><i class="fa fa-circle" aria-hidden="true"></i>Add Hospital</a></li>
                        <li><a href="./../View/adminHospitalList.php"><i class="fa fa-circle" aria-hidden="true"></i>Hospital List</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="./adminAppointmentList.php">
                        <i class="fa fa-calendar-o" aria-hidden="true"></i>
                        <span>Appointment</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i>
                        <span>Post</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="">Condition & Service</a>
                            <ul class="treeview-menu">
                                <li><a href="./../View/(admin C&S)diseaseList.php"><i class="fa fa-circle" aria-hidden="true"></i>Disease List</a></li>
                                <li><a href="./../View/(admin C&S)addDisease.php"><i class="fa fa-circle" aria-hidden="true"></i>Add Disease</a></li>

                            </ul>
                        </li>
                        <li class="active"><a href="">Health Knowledge</a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="./../View/(admin HKNWL)addArticle.php"><i class="fa fa-circle" aria-hidden="true"></i>Add Article</a></li>
                                <li><a href="./../View/(admin HKNWL)articleList.php"><i class="fa fa-circle" aria-hidden="true"></i>Article List</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="">Mental Health</a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="./../View/(admin)MHAddVideoLink.php"><i class="fa fa-circle" aria-hidden="true"></i>Add Video</a></li>
                                <li><a href="./../View/(admin)MHVideoList.php"><i class="fa fa-circle" aria-hidden="true"></i>Viedo List</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="../View/adminUserList.php">
                        <i class="fa fa-users" aria-hidden="true"></i> <span>User</span>
                    </a>
                </li>
                <li>
                    <a href="../View/adminContactList.php">
                        <i class="fa fa-envelope"></i> <span>Mail</span>
                        <!-- <small class="label pull-right bg-yellow">12</small> -->
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-cog" aria-hidden="true"></i><span>Setting</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="./../View/adminP&Padd.php"><i class="fa fa-circle" aria-hidden="true"></i>Privacy & Policy</a></li>
                        <li><a href="./../View/adminContact.php"><i class="fa fa-circle" aria-hidden="true"></i>Contact Us</a></li>
                        <li class="active"><a href="./../View/adminAboutUs.php"><i class="fa fa-circle" aria-hidden="true"></i>About Us</a></li>
                        <li class="active"><a href="./../View/adminProfileUpdate.php"><i class="fa fa-circle" aria-hidden="true"></i>Account Setting</a></li>
                    </ul>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->