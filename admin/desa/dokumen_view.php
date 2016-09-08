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


    $jenis=$_GET['menu'];
    $mysql_query = mysql_query("select * from berita where jenis='$jenis' order by idberita desc limit $dari,5");

//          echo "Record".  mysql_num_rows($mysql_query);
//          echo "Dari ".  $dari;
//             

    if (mysql_num_rows($mysql_query) < 1 && mysql_num_rows($mysql_query) != 0) {
        $dari = $dari - (mysql_num_rows($mysql_query));
        $mysql_query = mysql_query("select * from berita where jenis='$jenis' order by idberita desc limit $dari,5");
    }

    if (mysql_num_rows($mysql_query) == 0) {

        $mysql_query = mysql_query("select * from berita where jenis='$jenis' order by idberita desc limit 0,5");
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




 





