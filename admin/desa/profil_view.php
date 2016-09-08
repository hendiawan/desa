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
<?php
$jenis = $_GET['menu'];
$mysql_query = mysql_query("select * from berita where jenis = '$jenis' ");
$mysql_query1 = mysql_query("select * from berita where jenis = '$jenis' ");
$data1 = mysql_fetch_object($mysql_query);
//  print_r($data);
$number = mysql_num_rows($mysql_query);

if ($number > 0) {
    ?>

    <div class="col-md-6">
        <div class="panel panel-default" >                <img src="./img/loteng.png" style="width: 4%;height: 4%;margin-left:20px; "> <span><b><?php echo strtoupper($data1->judul) ?></b></span>             
        </div>
        <!-- general form elements -->               

        <?php
        while ($data = mysql_fetch_object($mysql_query1)) {
            ?>
            <div class="box box-primary">
                <div class="box-header">

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
                <p style=" font-size:15px;  color:black;  margin-left: 10px; text-align: justify; margin-right:15px" >

                    <?php
                    echo"<pre style='background-color:#fff;border:#fff'>" . $data->konten . "</pre><br>";
                    ?>

                </p>

                <br>

            </div><!-- /.box -->    
            <?php
        }
        ?>


    </div> 

    <div class="col-md-3">
        <!-- general form elements -->
        <?php
        $query1 = mysql_query("select * from struktur where jabatan='sekdes'");
        $data_kades = mysql_fetch_object($query1);
        ?>
        <div class="box box-primary" >
            <center>
                <img class="img-thumbnail" src="./gambar/<?php echo $data_kades->url_foto ?>" style="width:199px; height:235px">

                <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="left" width="100%" height="20" align="center" style="height: 20px; width: 100%;"><font color="#393E3B" size="3"><strong>SEKDES DESA PENDEM <?php echo strtoupper($data->nama1) ?></strong></font> 
                </marquee>    
            </center>
            <!-- form start -->

        </div><!-- /.box -->
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