<?php
include('../../../koneksi.php');
session_start();
       if (!isset($_SESSION['id_admin'])){
     header( 'Location:../../index.php');
 } else {
$jut = $_SESSION['id_admin'];
$query = "SELECT * FROM tb_user where a_id_user='$jut'";
           $result = $dbh->query($query)->fetch();
           $query1 = "SELECT * FROM tb_feed_back";
           $result1 = $dbh->query($query1)->fetchAll();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Halaman Admin</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- fullCalendar 2.2.5-->
        <link rel="stylesheet" href="../../plugins/fullcalendar/fullcalendar.min.css">
        <link rel="stylesheet" href="../../plugins/fullcalendar/fullcalendar.print.css" media="print">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="../../index.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <!-- logo for regular state and mobile devices --><span class="logo-lg"><b>Halaman Admin</b></span> </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <!-- Tasks: style can be found in dropdown.less -->
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu"> <a>Hi, <?php echo $result['a_user_name'];?></a> </li>
                            <li class="dropdown user user-menu"> <a href="../../logout.php" onclick="return confirm('Yakin ingin Logout?')">Logout</a> </li>
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
                        <div class="pull-left image"> <img src="avatar5.png" class="img-circle" alt="User Image"> </div>
                        <div class="pull-left info">
                            <p>Admin</p> <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="../../dashboard.php"> <i class="fa fa-anchor"></i> <span>Dashboard</span> </a>
                        </li>
                        <li class="active treeview">
                            <a href="#"> <i class="fa fa-cloud-upload"></i> <span>Upload</span> <i class="fa fa-angle-left pull-right"></i> </a>
                            <ul class="treeview-menu">
                                <li><a href="upl_produk.php"><i class="fa fa-circle-o"></i> Upload Koleksi Produk</a></li>
                                <li><a href="upl_works.php"><i class="fa fa-circle"></i> Upload Koleksi Workshop</a></li>
                            </ul>
                        </li>
                        <!--<li>
          <a href="../calendar.php">
            <i class="fa fa-calendar"></i> <span>Events Schedule</span>
          </a>
        </li>-->
                        <li>
                            <a href="s_fdback.php"> <i class="fa fa-feed"></i> <span>Feedback</span> </a>
                        </li>
                        <li>
                            <a href="product.php"> <i class="fa fa-ship"></i> <span>Product</span> </a>
                        </li>
						<li>
                        <a href="workshop.php"> <i class="fa fa-gears"></i> <span>Workshop</span> </a>
                        </li>
                        <li>
                        <a href="category.php"> <i class="fa fa-list-ul"></i> <span>Product Category</span> </a>
                    </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
      Upload Workshop
      </h1>
                    <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Upload Workshop</li>
                </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Upload Workshop Baru</h3> </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form action="upl_a_works.php" method="POST" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Judul Foto</label>
                                            <input class="form-control" type="text" id="example-text-input" name="m_judul" required><small class="text-muted">  ex. Adam Johnson </small> </div>
                                        <!-- Buat textarea -->
                                        <div class="form-group">
                                            <label>Deskripsi (Indonesia)</label>
                                            <textarea class="form-control" name="deskripsi_id" rows="3" placeholder="Masukan Deskripsi (Bahasa Indonesia)..." required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi (Inggris)</label>
                                            <textarea class="form-control" name="deskripsi_en" rows="3" placeholder="Masukan Deskripsi (Bahasa Inggris) ..." required></textarea>
                                        </div>
                                        <!-- Buat Upload File -->
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <input type="file" name="upload" id="exampleInputFile" required>
                                            <p class="help-block">tipe file : .jpg ; .png : .png ; .jpg ; .jpeg </p>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- jQuery 2.2.0 -->
                <script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
                <!-- Bootstrap 3.3.6 -->
                <script src="../../bootstrap/js/bootstrap.min.js"></script>
                <!-- DataTables -->
                <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
                <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
                <!-- SlimScroll -->
                <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
                <!-- FastClick -->
                <script src="../../plugins/fastclick/fastclick.js"></script>
                <!-- AdminLTE App -->
                <script src="../../dist/js/app.min.js"></script>
                <!-- AdminLTE for demo purposes -->
                <script src="../../dist/js/demo.js"></script>
                <!-- page script -->
                <script>
                    $(function () {
                        $("#example1").DataTable();
                        $('#example2').DataTable({
                            "paging": true
                            , "lengthChange": false
                            , "searching": false
                            , "ordering": true
                            , "info": true
                            , "autoWidth": false
                        });
                    });
                </script>
            </div>
        </div>
    </body>

    </html>
    <?php } ?>