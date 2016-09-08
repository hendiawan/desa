<?php
include '../../library.php';

session_start();
if (!isset($_SESSION['login-admin'])) {
    ?>
    <script>
        alert('Silahkan Login Terlebih Dahulu !!!');
        window.location = "../../index.php";
    </script>    
    <?php
}
header("");
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="../../desa/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../assets/libs/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../desa/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../../desa/dist/css/skins/_all-skins.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="../../desa/plugins/iCheck/flat/blue.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="../../desa/plugins/morris/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="../../desa/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="../../desa/plugins/datepicker/datepicker3.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="../../desa/plugins/daterangepicker/daterangepicker-bs3.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="../../desa/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->


                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <li>

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

                    <!-- search form -->

                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MENU UTAMA</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-image"></i> <span>Layout Website</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">

                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-circle-o"></i><span>Header Website</span>
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="index.php?menu=cover"><i class="fa fa-image"></i> Gambar 1</a></li>
                                        <li><a href="index.php?menu=cover1"><i class="fa fa-image"></i> Gambar 2</a></li>
                                        <li><a href="index.php?menu=cover2"><i class="fa fa-image"></i> Gambar 3</a></li>                                  
                                    </ul>
                                </li>

                            </ul>
                        </li>


                        <li >
                            <a href="index.php?menu=profil">
                                <i class="fa fa-pie-chart"></i>
                                <span>Profil Desa</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>

                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Pemerintahan Desa</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="index.php?menu=visimisi"><i class="fa fa-circle-o"></i> Visi Dan Misi</a></li>
                                <li><a href="index.php?menu=stu"><i class="fa fa-circle-o"></i> Struktur Pemerintahan </a></li>

                            </ul>


                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Data Desa</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="index.php?menu=input"><i class="fa fa-circle-o"></i> Data Penduduk </a></li>

                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-circle-o"></i><span> Lembaga Desa</span>
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="index.php?menu=lpmd"><i class="fa fa-image"></i> LPMD</a></li>
                                        <li><a href="index.php?menu=krtaruna"><i class="fa fa-image"></i> Karang Taruna</a></li>                                  
                                        <li><a href="index.php?menu=lembagaadat"><i class="fa fa-image"></i> Lembaga Adat</a></li>                                  
                                        <li><a href="index.php?menu=pkk"><i class="fa fa-image"></i> PKK</a></li>                                  
                                        <li><a href="index.php?menu=bkd"><i class="fa fa-image"></i> BKD</a></li>                                  
                                    </ul>
                                </li>
                                <li><a  href="index.php?menu=berita&jenis=peta"><i class="fa fa-circle-o"></i> Peta Desa </a></li>

                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-calendar"></i>
                                <span>Berita</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="index.php?menu=berita&jenis=umum"><i class="fa fa-circle-o"></i> Berita Umum</a></li>
                                <li><a href="index.php?menu=berita&jenis=desa"><i class="fa fa-circle-o"></i> Berita Desa</a></li>
                            </ul>
                        </li>
                        <li >
                            <a href="index.php?menu=koment">
                                <i class="fa fa-comments"></i>
                                <span>Komentar</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>

                        </li>
                        <li>
                            <a href="index.php?menu=berita&jenis=produk">
                                <i class="fa fa-share"></i> <span>Produk Desa</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                        </li>
                        <li >
                            <a  href="index.php?menu=berita&jenis=agenda">
                                <i class="fa fa-folder"></i> <span>Agenda Desa</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>

                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-share"></i> <span>Peraturan Desa</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="index.php?menu=berita&jenis=apbdes"><i class="fa fa-circle-o"></i> Perdes APBDES</a></li>
                                <li><a href="index.php?menu=berita&jenis=rkpdes"><i class="fa fa-circle-o"></i> Perdes RKPDes</a></li>                                
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-book"></i> <span>Laporan Desa</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="index.php?menu=berita&jenis=spj"><i class="fa fa-circle-o"></i> SPJ</a></li>
                                <li><a href="index.php?menu=berita&jenis=lkpj"><i class="fa fa-circle-o"></i> LKPJ</a></li>                                
                                <li><a href="index.php?menu=berita&jenis=lppdes"><i class="fa fa-circle-o"></i> LPPDes</a></li>                                
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-book"></i> <span>Dokumen Desa</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="index.php?menu=berita&jenis=rpjmdes"><i class="fa fa-circle-o"></i> RPJm Des</a></li>
                                <li><a href="index.php?menu=berita&jenis=rapbdes"><i class="fa fa-circle-o"></i> RAPBDes</a></li>
                                <li><a href="index.php?menu=berita&jenis=rkpdes"><i class="fa fa-circle-o"></i> RKPDes</a></li>
                                <li><a href="index.php?menu=berita&jenis=rapbdes"><i class="fa fa-circle-o"></i> RAPDes</a></li>
                                <li><a href="index.php?menu=berita&jenis=apbdes"><i class="fa fa-circle-o"></i> APBDes</a></li>
                            </ul>
                        </li>

                        <li class="header">Akun</li>
                        <li><a href="../login/logout.php"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>
<!--                        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" >
                <!-- Content Header (Page header) -->


                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <container>
                                <?php include './route.php'; ?>
                            </container>

                        </div>
                    </div>
                </section>
            </div>

            <!-- Main Isi Konten Disisi -->


            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.3.3
            </div>
            <strong>Copyright &copy; 2016-2017 <a href="">Desa Pendem</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.0 -->
    <script src="../../desa/plugins/jQuery/jQuery-2.2.0.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="../../desa/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="../../desa/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="../../desa/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../../desa/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../../desa/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../../desa/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="../../desa/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../../desa/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../../desa/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../../desa/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../desa/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../desa/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../desa/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../desa/dist/js/demo.js"></script>
</body>
</html>
