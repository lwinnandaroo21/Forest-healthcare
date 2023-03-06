<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo"><img src="./image/<?= $hospitalInfo[0]["photo"] ?>" id="" alt="" width="40px"><b>HOSPITAL</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <!-- <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                    </li> -->
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="./image/<?= $hospitalInfo[0]["photo"] ?>" class="img-circle" alt="User Image" />
                                <p>
                                    <?php
                                    echo  $hospitalInfo[0]["name"];
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
                                    <a href="#"></a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="../View/hospitalProfileEdit.php" class="btn btn-default btn-flat">Profile</a>
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
                    <img src="./image/<?= $hospitalInfo[0]["photo"] ?>" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Welcome</p>
                    <p><?php
                        echo  $hospitalInfo[0]["name"];
                        ?>
                    </p>
                </div>
            </div>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="active treeview">
                    <a href="../view/hospitalDashboard.php">
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
                        <li class="active"><a href="./../View/addDoctor.php"><i class="fa fa-circle" aria-hidden="true"></i>Add Doctor</a></li>
                        <li class="active"><a href="../View/hospitalDoctorList.php"><i class="fa fa-circle" aria-hidden="true"></i>Doctor List</a></li>
                        <li><a href="../View/hospitalScheduleList.php"><i class="fa fa-circle" aria-hidden="true"></i>Schedule List</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="../view/hospitalAppointmentList.php">
                        <i class="fa fa-calendar-o" aria-hidden="true"></i>
                        <span>Appointment</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="./../View/departmentAdd.php">
                        <i class="fa fa-calendar-o" aria-hidden="true"></i>
                        <span>Department Add</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="">
                        <i class="fa fa-envelope"></i> <span>Mail</span>
                        <small class="label pull-right bg-yellow">12</small>
                    </a>
                </li> -->
                <li class="treeview">
                    <a href="./../View/hospitalProfileEdit.php">
                        <i class="fa fa-cog" aria-hidden="true"></i><span>Account Setting</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- <section class="content-header">
            <i class="fa fa-dashboard icon"></i>
            <span>
                <span class="content-header-text1">Dashboard</span>
                <p class="content-header-text2"><small>Dashboard Features</small></p>
            </span>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section> -->