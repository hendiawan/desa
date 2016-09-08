

<?php
$jabatan = $_GET['jb'];
$query = mysql_query("select * from struktur where jabatan='$jabatan'");
$query1 = mysql_query("select * from struktur where jabatan='$jabatan'");
$data = mysql_fetch_object($query);
$jumlah = mysql_num_rows($query);

if ($jumlah > 0) {
    ?>
    <div class="col-md-12" >
        <div class="panel panel-default" >
            <img src="./img/loteng.png" style="width: 4%;height: 4%;margin-left:20px; "> <span><b>STRUKTUR PEMERINTAHAN DESA PEMDEM KECAMATAN JANAPRIA KABUPATEN LOMBOK TENGAH NUSA TENGGARA BARAT</b></span>
        </div>

    </div>

    <?php
    while ($data = mysql_fetch_object($query1)) {
        ?>

<div class="col-md-12">
            <div class="panel panel-default" >

                <center>
                    <img  class="img-thumbnail" src="./gambar/<?php echo $data->url_foto ?>" style="width:199px; height:235px" >

                </center>
                 
            </div>

        </div>
        <div class="col-md-12">
            <div class="panel panel-default" >

                 
                <table class="table table-hover">
                    <tr>
                        <th>  

                        </th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>NAMA</th>
                        <th>:</th>
                        <th><?php echo $data->nama ?></th>
                    </tr>
                    <tr>
                        <th > JABATAN</th>
                        <th>:</th>
                        <th><?php echo $data->jabatan ?></th>

                    </tr>
                    <tr>
                        <th> TEMPAT LAHIR</th>
                        <th>:</th>
                        <th><?php echo $data->tempat ?></th>


                    </tr>
                    <tr>                
                        <th> PENDIDIKAN TERAKHIR</th>
                        <th>:</th>
                        <th><?php echo $data->pendidikan ?></th> 
                    </tr>
                    <tr>        
                        <th> ALAMAT</th>
                        <th>:</th>
                        <th><?php echo $data->alamat ?></th>                    
                    </tr>
                </table>
            </div>

        </div>





        <?php
    }
    ?>





    <?php
} else {
    ?>
    <script>
        window.location = 'index.php';
    </script>
    <?php
}
?>
