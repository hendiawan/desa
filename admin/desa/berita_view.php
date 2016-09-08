<?php
$query1 = mysql_query("select * from struktur where jabatan='kades'");
$data_kades = mysql_fetch_object($query1);
?>
<div class="col-md-3">
    <!-- general form elements -->
    <div class="box box-primary">
        <center>
            <!-- form start -->
            <img  class="img-thumbnail" src="./gambar/<?php echo $data_kades->url_foto ?>" style="width:199px; height:235px" >
            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="left" width="100%" height="20" align="center" style="height: 20px; width: 100%;"><font color="#393E3B" size="3"><strong>KEPALA DESA PENDEM <?php echo strtoupper($data->nama1) ?></strong></font> 
            </marquee>        
        </center>

    </div><!-- /.box -->
</div>  
<?php
$idberita = $_GET['idb'];
$mysql_query = mysql_query("select * from berita where idberita = $idberita ");
// $data = mysql_fetch_object($mysql_query);
//  print_r($data);
$number = mysql_num_rows($mysql_query);

if ($number > 0) {
    ?>

    <div class="col-md-6">
        <!-- general form elements -->               

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
                    $a = 'hidden=" "';
                } else {
                    $a = '';
                }
                ?>
                <div <?php echo $a ?>  >
                    <img  class="img-thumbnail" alt="140x140"  data-holder-rendered="true"  style="margin-left: 10px" src="./gambar/<?php echo $data->url_gambar ?>" width="80%" height="80%">
                </div>



                <br>
                <br>
                <p style=" color:black;  margin-left: 10px; text-align: justify; margin-right:15px" >

                    <?php
                    echo $data->konten . "<br>";

                    $tipe = $FileType_gambar = pathinfo($data->url_gambar, PATHINFO_EXTENSION);

                    if ($tipe != "jpg" && $tipe != "JPG") {
                        ?>
                        <a href="./admin/desa/profil_wilayah_desa/simpan.php?file=<?php echo $data->url_gambar ?>">Download File</a><hr><br>

                    <?php
                }
                ?>

                </p>

                <br>

            </div><!-- /.box -->    
            <?php
        }
        ?>


        <div class="box box-warning direct-chat direct-chat-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Komentar</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Komentar Pembaca" data-widget="chat-pane-toggle">
                        <i class="fa fa-comments"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->

            <?php
            $query = mysql_query("select * from komentar where  idberita='$idberita' and status='OK'");

            while ($row = mysql_fetch_object($query)) {
                ?>
                <img src="./gambar/14-vector-artwork.preview.jpg" alt="user image" class="img-circle" style=" margin-left:5%;  width: 10%; height:10%; " ><b class="box-title" style="color: black;" > <?php echo strtoupper(substr($row->username, 0, 30)) ?></b></a><br><br>

                <div class="panel panel-default" style="margin-left:5%; margin-right: 5%; " >
                    <div style="margin-left:10% " >
                        <i class="fa fa-calendar"></i><b> <?php echo date('d-M-Y', strtotime($row->tanggal)) ?>  <i class="fa fa-clock-o"></i><b> <?php echo $row->jam ?>  
                                </div>     
                                <h5 style=" color:black; margin-left:10%"><?php echo $row->komentar ?></h5>
                                </div><br>

                                <?php
                            }
                            ?>
                            </div>
                            <div class="panel panel-default">
                                <div class="box-footer">
                                    <?php
                                    if (isset($_POST['komen'])) {
                                        $isi1 = 'hidden=""';
                                    } else {
                                        $isi1 = '';
                                    }
                                    ?>
                                    <form action="index.php?menu=bl&idb=<?php echo $idberita ?>" method="post">
                                        <div <?php echo $isi1 ?>>
                                            <center>
                                                <input name="komen" type="submit" class="btn btn-warning btn-flat"  value="Berikan Komentar" />

                                            </center>

                                        </div>
                                    </form>

                                    <form action="index.php?menu=bl&idb=<?php echo $idberita ?>" method="post">
                                        <div class="input-group">



                                        </div>
                                        <?php
                                        if (isset($_POST['komen'])) {
                                            $isi = '';
                                        } else {
                                            $isi = 'hidden=""';
                                        }
                                        ?>

                                        <div <?php echo $isi ?> >
                                            <input required="" name="nama" placeholder="Nama" class="form-control" type="text">
                                            <input required=""  name="email" placeholder="Email" class="form-control" type="email">
                                            <textarea required=""  name="komentar" placeholder="Komentar" class="form-control" type="text"></textarea>
                                            <center>
                                                <span class="input-group-btn">
                                                    <input name="simpan" type="submit" class="btn btn-warning btn-flat" value="Kirim"   >
                                                </span> 
                                            </center>

                                        </div>

                                    </form>

                                    <?php
                                    if (isset($_POST['simpan'])) {
                                        $username = $_POST["nama"];
                                        $mail = $_POST["email"];
                                        $komentar = $_POST["komentar"];
                                        $tgl = date('Y-m-d');
                                        $jam = date('h:i');

                                        $query = mysql_query("insert into komentar (username,komentar,idberita,tanggal,jam,status) values ('$username','$komentar','$idberita','$tgl','$jam','T')");

                                        if ($query) {
                                            ?>
                                            <script>
                                                alert("Pengajuan Komentar Di ajukan !!!");
                                            </script>
                                            <?php
                                        } else {

                                            echo mysql_error();
                                        }
                                    }
                                    ?>

                                </div>
                            </div><!-- /.box -->   
                            </div> 

                            <div class="col-md-3">
                                <!-- general form elements -->
                                <?php
                                $query1 = mysql_query("select * from struktur where jabatan='sekdes'");
                                $data_sekdes = mysql_fetch_object($query1);
                                ?>
                                <center>
                                    <div class="box box-primary">
                                        <!-- form start -->
                                        <img class="img-thumbnail" src="./gambar/<?php echo $data_sekdes->url_foto ?>" style="width:199px; height:235px">

                                        <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="left" width="100%" height="20" align="center" style="height: 20px; width: 100%;"><font color="#393E3B" size="3"><strong>SEKDES DESA PENDEM <?php echo strtoupper($data->nama1) ?></strong></font> 
                                        </marquee>
                                    </div>
                                </center>
                                <!-- /.box -->
                            </div> 

                            <?php
                        } else {
                            ?>
                            <script>
                                window.location = 'index.php';
                            </script>
                            <?php
                        }
                        ?>