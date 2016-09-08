<!DOCTYPE html>

<html>
    <head>
        <title>Halaman Administrator Website Desa Pendem</title>
        <link href="./img/loteng.png" rel="shortcut icon">
        <!--        <meta content='width=device-width, initial-scale=4, maximum-scale=4, user-scalable=no' name='viewport'>-->
        <link href="./css/css_select2/select2.css" rel="stylesheet" type="text/css" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php include './admin/View/header_komponen.php'; ?>
    </head>
    <body class="skin-blue " >
        <!-- header logo: style can be found in header.less -->
        <header class="header ">
            <script type="text/javascript" src="./js/jquery-2.1.3.js"></script>
            <?php
            include './admin/View/header.php';
            include 'library.php';
            ?>

        </header>

        <div class="wrapper row-offcanvas row-offcanvas-left">           

            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="container">
                            <br>
                            <div class="col-md-12">
                                <!-- Carusel -->
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    </ol>

                                    <?php
                                    $data = mysql_fetch_object(mysql_query("select * from konten"));
                                    ?>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img style="width: 1111px; height:335px; alignment-adjust: central"  src="./gambar/<?php echo $data->header ?>" alt="...">
                                            <div class="carousel-caption">
                                                <?php echo $data->ket ?>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="./gambar/<?php echo $data->header1 ?>" style="width: 1111px; height:335px; alignment-adjust: central"   alt="...">
                                            <div class="carousel-caption">
                                                <?php echo $data->ket1 ?>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="./gambar/<?php echo $data->header2 ?>" style="width: 1111px; height:335px; alignment-adjust: central"  alt="...">
                                            <div class="carousel-caption">
                                                <?php echo $data->ket2 ?>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>


                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <!-- form start -->
                                    <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="4" direction="left" width="100%" height="20" align="center" style="height: 20px; width: 100%;"><font color="#618E91" size="3"><strong>SELAMAT DATANG DI WEBSITE RESMI PEMERINTAH DESA PENDEM KECAMATAN JANAPRIA LOMBOK TENGAH NUSA TENGGARA BARAT</strong></font> 
                                    </marquee>
                                </div><!-- /.box -->

                                <nav class="navbar navbar-static-top fixed " role="navigation">


                                    <div class="navbar-right">
                                        <ul class="nav navbar-nav">
                                            <li class="dropdown user user-menu notifications-menu" style="">
                                                <a href="./">
                                                    <i class="fa fa-home"></i>
                                                    <span>Home</span>
                                                </a>

                                            </li> 

                                            <li class="dropdown user user-menu notifications-menu">
                                <!--                                <i class="glyphicon glyphicon-book"></i>-->
                                                <a href="index.php?menu=desa"class="dropdown-toggle" >
                                                    <i class="fa fa-archive"></i>
                                                    <span>Berita Desa </span>
                                                </a>

                                            </li>
                                            <li class="dropdown user user-menu notifications-menu" style="">
                                                <a href="index.php?menu=produk"class="dropdown-toggle" >
                                                    <i class="fa fa-suitcase"></i>
                                                    <span>Produk Desa</span>
                                                </a>
                                            </li>


                                            <li class="dropdown user user-menu notifications-menu">
                                                <a href="index.php?menu=agenda" class="dropdown-toggle" >
                                                    <i class="fa fa-clock-o"></i>
                                                    <span>Agenda Desa </span>
                                                </a>

                                            </li>
                                            <li class="dropdown user user-menu notifications-menu">
                                                <a href="index.php?menu=peraturan" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-key"></i>
                                                    <span>Peraturan Desa </span>
                                                    <ul class="dropdown-menu" style=" width: 190px; height: 230px;">

                                                        <li>
                                                            <!-- inner menu: contains the actual data -->
                                                            <ul class="menu" >
                                                                <li id="lihat_user" >
                                                                    <a href="index.php?menu=apbdes">
                                                                        <i class="fa fa-users"></i>Perdes APBDes
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="index.php?menu=rkpdes">
                                                                        <i class="fa fa-key"></i>Perdes RKPDes
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </li>

                                                    </ul>
                                                </a>

                                            </li>
                                            <li class="dropdown user user-menu notifications-menu">
                                                <a href="index.php?menu=laporan" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-building-o"></i>
                                                    <span>Laporan Desa </span>
                                                    <ul class="dropdown-menu" style=" width: 190px; height: 230px;">

                                                        <li>
                                                            <!-- inner menu: contains the actual data -->
                                                            <ul class="menu" >
                                                                <li id="lihat_user" >
                                                                    <a href="index.php?menu=spj">
                                                                        <i class="fa fa-users"></i>SPJ
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="index.php?menu=lkpj">
                                                                        <i class="fa fa-key"></i>LKPJ
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="index.php?menu=lppdes">
                                                                        <i class="fa fa-key"></i>LPPDes
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </a>
                                            </li>
                                            <li class="dropdown user user-menu notifications-menu">

                                                <a href="index.php?menu=dokumen" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-building-o"></i>
                                                    <span>Dokumen Desa </span>

                                                    <ul class="dropdown-menu" style=" width: 190px; height: 230px;">

                                                        <li>
                                                            <!-- inner menu: contains the actual data -->
                                                            <ul class="menu" >
                                                                <li id="lihat_user" >
                                                                    <a href="index.php?menu=rpjmdes">
                                                                        <i class="fa fa-users"></i>RPJMDes
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="index.php?menu=rkpdes">
                                                                        <i class="fa fa-key"></i>RKPDes
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="index.php?menu=rapbdes">
                                                                        <i class="fa fa-key"></i>RAPBDes
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="index.php?menu=rapbdes">
                                                                        <i class="fa fa-key"></i>RAPDes
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="index.php?menu=apbdes">
                                                                        <i class="fa fa-key"></i>APBDes
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </li>


                                                    </ul>

                                                </a>

                                            </li>




                                        </ul>
                                    </div>


                                </nav>


                            </div>

                            <?php include './route.php' ?>
                            <div class="col-xs-12">
                                <footer class="main-footer">
                                    <div class="panel panel-default"  >
                                        <br>
                                        <div class="pull-right hidden-xs">
                                            <b>Version</b> 1.0.1
                                        </div>
                                        <strong>Copyright &copy; 2016-2017 <a href="">Lalu Hendiawan Dipa</a>.</strong> All rights
                                        reserved.
                                        <br>
                                        <br>
                                    </div>

                                </footer>
                            </div>
                        </div>  
                    </div>
                </div>
            </section>
        </div>
    </div>
    <br>





</body>

</html>
<?php include './admin/View/footer_scrip.php'; ?>



