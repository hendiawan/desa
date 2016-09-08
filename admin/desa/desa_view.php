<?php
$query1 = mysql_query("select * from struktur where jabatan='kades'");
$data_kades = mysql_fetch_object($query1);
?>

<div class="col-md-3">
    <!-- general form elements -->
    <div class="box box-primary" > 
        <!-- form start -->
        <center>
            <img class="img-thumbnail" alt="140x140"  class="img-thumbnail" src="./gambar/<?php echo $data_kades->url_foto ?>" style="width:199px; height:235px" >
        </center>
        <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="left" width="100%" height="20" align="center" style="height: 20px; width: 100%;"><font color="#393E3B" size="3"><strong>KEPALA DESA PENDEM <?php echo strtoupper($data->nama1) ?></strong></font> 
        </marquee>                    
    </div><!-- /.box -->
</div> 


<div class="col-md-6">

    <?php
    if (isset($_POST['next'])) {
        $dari = $_POST['nilai'];
        $dari = $dari + 5;
    } else {
        $dari = 0;
    }



    $mysql_query = mysql_query("select * from berita where jenis='umum' order by idberita desc limit $dari,5");

//          echo "Record".  mysql_num_rows($mysql_query);
//          echo "Dari ".  $dari;
//             

    if (mysql_num_rows($mysql_query) < 1 && mysql_num_rows($mysql_query) != 0) {
        $dari = $dari - (mysql_num_rows($mysql_query));
        $mysql_query = mysql_query("select * from berita where jenis='umum' order by idberita desc limit $dari,5");
    }

    if (mysql_num_rows($mysql_query) == 0) {

        $mysql_query = mysql_query("select * from berita where jenis='umum' order by idberita desc limit 0,5");
        $dari = 0;
    }


// $data = mysql_fetch_object($mysql_query);
//  print_r($data);
    ?>

    <?php
    while ($data = mysql_fetch_object($mysql_query)) {
        ?>
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo strtoupper($data->judul) ?></h3>

                <br>
                <br>
                <br>
                <a style="margin-left: 10px;"><i class="fa fa-calendar"></i><b> <?php echo date('d-M-Y', strtotime($data->tanggal)) ?> <i class="fa fa-clock-o"></i><b> <?php echo $data->jam ?>  <i class="fa fa-user"></i> Oleh: <?php echo $data->penulis ?></b></a>

            </div><!-- /.box-header -->
            <!-- form start -->

            <?php
            $tipe = $FileType_gambar = pathinfo($data->url_gambar, PATHINFO_EXTENSION);

            if ($tipe != "jpg" && $tipe != "JPG") {
                $a = 'hidden=""';
            } else {
                $a = '';
            }
            ?>
            <div <?php echo $a ?>><img  class="img-thumbnail" alt="140x140"  data-holder-rendered="true"  style="margin-left: 10px" src="./gambar/<?php echo $data->url_gambar ?>" width="80%" height="80%">
            </div>
            <br>
            <br>
            <p style=" color:black;  margin-left: 10px; text-align: justify; margin-right:15px" >
                <?php echo substr($data->konten, 0, 500) ?>

                <br>
                <br>
                <b><a href="index.php?menu=bl&idb=<?php echo $data->idberita ?>">Berita Selengkapnya</a></b>
                <br>
                <br>
            </p>
        </div><!-- /.box -->    
        <?php
    }
    ?>

    <div class="panel panel-default"  >
        <form action="index.php" method="post" >
            <div hidden="">
                <input  required="" name="nilai" value="<?php echo $dari; ?>" placeholder="Nama" class="form-control" type="text">

            </div>
            <center>
                <button name="next" type="submit" class="btn btn-primary btn-flat" >Berita Sebelumnya</button>
            </center>
        </form>

    </div><!-- /.box -->   
    <!-- general form elements -->               

</div>


<?php
$query1 = mysql_query("select * from struktur where jabatan='sekdes'");
$data_sekdes = mysql_fetch_object($query1);
?>

<div class="col-md-3">
    <!-- general form elements -->
    <div class="box box-primary">
        <!-- form start -->
        <center>
            <img class="img-thumbnail" src="./gambar/<?php echo $data_sekdes->url_foto ?>" style="alignment-adjust: central;  width:199px; height:235px">

        </center>

        <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="left" width="100%" height="20" align="center" style="height: 20px; width: 100%;"><font color="#393E3B" size="3"><strong>SEKDES DESA PENDEM <?php echo strtoupper($data->nama1) ?></strong></font> 
        </marquee>
    </div><!-- /.box -->
</div> 




<div class="col-md-3" >
    <!-- general form elements -->
    <div class="panel panel-default">
        <div class="box box-primary direct-chat direct-chat-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Komentar</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                        <i class="fa fa-comments"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <?php
            $query_komen = mysql_query("select * from komentar where status='OK' order by idkomentar  desc limit 0,4 ");

            while ($row = mysql_fetch_object($query_komen)) {
                ?>
                <a href="index.php?menu=bl&idb=<?php echo $row->idberita ?>">   <img src="./img/user.png" alt="user image" class="img-circle" style=" margin-left:10%;  width: 15%; height:15%; " ><b class="box-title"> <?php echo strtoupper(substr($row->username, 0, 12)); ?></b></a><br><br>

                <div class="panel panel-default" style="margin-left:10%; margin-right: 5%; " >
                    <i class="fa fa-calendar"></i><b> <?php echo date('d-M-Y', strtotime($row->tanggal)) ?>  <i class="fa fa-clock-o"></i><b> <?php echo $row->jam ?>      
                            <h5 style="margin-left:10%; color: black"><?php echo strtoupper(substr($row->komentar, 0, 50)) . "..." ?></h5>
                            </div><br>

                            <?php
                        }
                        ?>
                        </div>

                        </div><!-- /.box -->
                        </div>  


                        <div class="col-md-3" >
                            <!-- general form elements -->
                            <center>
                                <div class="box box-primary">
                                    <!-- form start -->
                                    <div class="box-body">
                                        <a href="https://www.facebook.com/" target="_blank"><img class="img-thumbnail" src="./gambar/icon/fb.png" alt="Facebook" style="width:37px;height:37px; border:"></a>
                                        <a href="https://twitter.com/" target="_blank"><img class="img-thumbnail" src="./gambar/icon/twt.png" alt="Twitter"  style="width:37px;height:37px;"></a>
                                        <a href="http://plus.google.com/" target="_blank"><img class="img-thumbnail" src="./gambar/icon/goo.png" alt="Google Pluss"  style="width:37px;height:37px;"></a>
                                        <a href="https://www.youtube.com/" target="_blank"><img class="img-thumbnail" src="./gambar/icon/yb.png" alt="Youtube"  style="width:37px;height:37px;"></a>	
                                    </div>
                                    <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="left" width="100%" height="20" align="center" style="height: 20px; width: 100%;"><font color="#393E3B" size="3"><strong>Media Sosial Desa Pendem</strong></font> 
                                    </marquee>

                                </div><!-- /.box -->    
                            </center>

                        </div> 

                        <div class="col-md-3" >
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title" style="margin-left: 10%">Galery Foto <i class="fa fa-camera"></i></h3> <br><br>
                                </div>
                                <?php
                                $query_gambar = mysql_query("Select url_gambar,idberita from berita where jenis='umum' limit 0,5 ");
                                while ($gambar = mysql_fetch_object($query_gambar)) {
                                    ?>
                                    <a href="index.php?menu=bl&idb=<?php echo $gambar->idberita ?>" >                                                <img class="img-thumbnail" alt="140x140" src="./gambar/<?php echo $gambar->url_gambar ?>" style="width: 70%; height: 20%; margin-left: 15%">
                                    </a>  
                                    <?php
                                }
                                ?>
                                <marquee  loop="-1" width="100%" height="20%" align="center">
                                </marquee>  
                                <!-- /.box-header -->
                                <!-- /.box-body -->
                                <center>
                                    <div class="box-footer">
                                        <form action="#" method="post">
                                            <div class="input-group">

                                                <span class="input-group-btn">
                                                    <a href="index.php?menu=gallery" type="button" class="btn btn-warning btn-flat" >Lihat Semua</a>
                                                </span>    

                                            </div>
                                        </form>
                                    </div>
                                </center>

                            </div>


                        </div>  





