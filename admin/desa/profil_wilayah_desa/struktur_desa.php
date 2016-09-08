<?php
$query1 = mysql_query("select * from struktur where jabatan='kades'");
$data_kades = mysql_fetch_object($query1);
?>
<div class="col-md-3">
    <!-- general form elements -->
    <div class="box box-primary" >
        <center>
            <img  class="img-thumbnail" src="./gambar/<?php echo $data_kades->url_foto ?>" style="width:199px; height:235px" >
            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="left" width="100%" height="20" align="center" style="height: 20px; width: 100%;"><font color="#393E3B" size="3"><strong>KEPALA DESA PENDEM <?php echo strtoupper($data->nama1) ?></strong></font> 
            </marquee>    
        </center>
        <!-- form start -->

    </div><!-- /.box -->
</div>  
<br>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="box-header" style="margin-left: 10%">
            <img src="./img/loteng.png" style="width: 6%;height: 6%; "> <span style="margin-left: 10%"><b>STRUKTUR PEMERINTAHAN DESA PENDEM</b></span> 
        </div>
    </div>
    <div class="panel panel-default">
        <div class="box-header">
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <ul class="sidebar-menu">  

                        <li >
                            <a href="index.php?menu=stu&jb=kades">
                                <i class="fa fa-user"></i> <span>Kepala Desa</span> 
                            </a>

                        </li>

                        <li  >
                            <a href="index.php?menu=stu&jb=sekdes">
                                <i class="fa fa-user"></i> <span>Sekdes</span> <i class="fa  pull-right"></i>
                            </a>


                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Perangkat Desa</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="index.php?menu=stu&jb=kaurpem"><i class="fa fa-user"></i>KAUR Pemerintahan</a></li>
                                <li><a href="index.php?menu=stu&jb=kaurkesra"><i class="fa fa-user"></i>KAUR Kesra</a></li>
                                <li><a href="index.php?menu=stu&jb=kaurkeuangan"><i class="fa fa-user"></i>KAUR Keungan</a></li>
                                <li><a href="index.php?menu=stu&jb=kaurpembangunan"><i class="fa fa-user"></i>KAUR Pembangunan</a></li>
                                <li><a href="index.php?menu=stu&jb=kaurumum"><i class="fa fa-user"></i>KAUR Umum</a></li>
                                <li><a href="index.php?menu=stu&jb="><i class="fa fa-user"></i>KAUR Umum</a>

                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-user"></i><span>KADUS</span>
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="index.php?menu=stu&jb=maliklo"><i class="fa fa-map-marker"></i> Dusun Maliklo</a></li>
                                        <li><a href="index.php?menu=stu&jb=mubon"><i class="fa fa-map-marker"></i> Dusun Mubon</a></li>
                                        <li><a href="index.php?menu=stu&jb=petorok"><i class="fa fa-map-marker"></i> Dusun Petorok</a></li>
                                        <li><a href="index.php?menu=stu&jb=mtbile"><i class="fa fa-map-marker"></i> Dusun Mt Bile</a></li>
                                        <li><a href="index.php?menu=stu&jb=napek"><i class="fa fa-map-marker"></i> Dusun Napek</a></li>
                                        <li><a href="index.php?menu=stu&jb=krmajelo"><i class="fa fa-map-marker"></i> Dusun Karang Majelo</a></li>
                                        <li><a href="index.php?menu=stu&jb=putara"><i class="fa fa-map-marker"></i> Dusun Pendem Utara</a></li>
                                        <li><a href="index.php?menu=stu&jb=pselatan"><i class="fa fa-map-marker"></i> Dusun Pendem Selatan</a></li>
                                        <li><a href="index.php?menu=stu&jb=dsbagek"><i class="fa fa-map-marker"></i> Dusun Dasan Bagek</a></li>
                                        <li><a href="index.php?menu=stu&jb=dao"><i class="fa fa-map-marker"></i> Dusun Dao</a></li>
                                        <li><a href="index.php?menu=stu&jb=penuntut"><i class="fa fa-map-marker"></i> Dusun Penuntut</a></li>
                                        <li><a href="index.php?menu=stu&jb=kuang"><i class="fa fa-map-marker"></i> Dusun Kuang</a></li>
                                        <li><a href="index.php?menu=stu&jb=gelung"><i class="fa fa-map-marker"></i> Dusun Gelung</a></li>
                                        <li><a href="index.php?menu=stu&jb=pipi"><i class="fa fa-map-marker"></i> Dusun Pipi</a></li>
                                        <li><a href="index.php?menu=stu&jb=piling"><i class="fa fa-map-marker"></i> Dusun Piling</a></li>
                                        <li><a href="index.php?menu=stu&jb=jangka"><i class="fa fa-map-marker"></i> Dusun Jangka</a></li>
                                        <li><a href="index.php?menu=stu&jb=lkbangkon"><i class="fa fa-map-marker"></i> Dusun Lekong Bangkon</a></li>
                                        <li><a href="index.php?menu=stu&jb=sikep"><i class="fa fa-map-marker"></i> Dusun Sikep</a></li>
                                        <li><a href="index.php?menu=stu&jb=jelitong"><i class="fa fa-map-marker"></i> Dusun Jelitong</a></li>
                                        <li><a href="index.php?menu=stu&jb=gelondong"><i class="fa fa-map-marker"></i> Dusun Gelondong</a></li>
                                        <li><a href="index.php?menu=stu&jb=montor"><i class="fa fa-map-marker"></i> Dusun Montor</a></li>



                                    </ul>
                                </li>


                            </ul>
                        </li>

                        <li>
                            <a href="index.php?menu=stu&jb=ptt">
                                <i class="fa fa-user"></i><span>PTT</span>

                            </a>

                        </li>
                        <li class="treeview">
                            <a href="">
                                <i class="fa fa-user"></i><span>Tukang Kebun Dan Jaga Malam</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="index.php?menu=stu&jb=tukangkebun"><i class="fa fa-user"></i> Tukang Kebun</a></li>

                                <li><a href="index.php?menu=stu&jb=jagamalam"><i class="fa fa-user"></i> Jaga Malam</a></li>

                            </ul>
                        </li>
                    </ul>
                </section>
            </aside>
        </div>
    </div>


</div>

<div class="col-md-3">
    <!-- general form elements -->
    <?php
    $query1 = mysql_query("select * from struktur where jabatan='sekdes'");
    $data_kades = mysql_fetch_object($query1);
    ?>
    <div class="box box-primary">
        <center>
            <!-- form start -->
            <img class="img-thumbnail" src="./gambar/<?php echo $data_kades->url_foto ?>" style="width:199px; height:235px">

            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="left" width="100%" height="20" align="center" style="height: 20px; width: 100%;"><font color="#393E3B" size="3"><strong>SEKDES DESA PENDEM <?php echo strtoupper($data->nama1) ?></strong></font> 
            </marquee>   
        </center>

    </div><!-- /.box -->
</div> 
<!-- /.box -->   