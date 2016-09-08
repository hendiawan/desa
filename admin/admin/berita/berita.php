

<?php
include '../../config/config.php';
$menu = $_GET['jenis'];
$query = mysql_query("select * from berita where jenis='$menu'");
$data = mysql_fetch_object($query);
$jumlah = mysql_num_rows($query);
echo "<div class='col-md-12' >";
echo "<a href='index.php?menu=add_berita&jenis=$menu'   ><button  class='btn btn-primary btn-sm pull-right'  data-toggle='tooltip' title='Tambah Berita' style='margin-right: 5px;'><i class='fa fa-plus'></i></button></a>";
echo "</div>";
echo "<br>";


if ($jumlah == '1') {
    $aktif = 'disabled=""';
} else {
    $aktif = '';
}

if ($jumlah > 0) {
    ?>
    <br>
     
        <div class="col-md-12" >
            <div class="panel panel-default" >
                <img src="../../img/loteng.png" style="width: 4%;height: 4%;margin-left:20px; "> <span><b>DATA BERITA</b></span>            

            </div>

        </div>
        <div class="col-md-12"      >

            <?php
            if (isset($_POST['next'])) {
                $dari = $_POST['nilai'];
                $dari = $dari + 5;
            } else {
                $dari = 0;
            }



            $mysql_query = mysql_query("select * from berita where jenis='$menu' order by idberita desc limit $dari,5");

//          echo "Record".  mysql_num_rows($mysql_query);
//          echo "Dari ".  $dari;
//             

            if (mysql_num_rows($mysql_query) < 1 && mysql_num_rows($mysql_query) != 0) {
                $dari = $dari - (mysql_num_rows($mysql_query));
                $mysql_query = mysql_query("select * from berita where jenis='$menu' order by idberita desc limit $dari,5");
            }

            if (mysql_num_rows($mysql_query) == 0) {

                $mysql_query = mysql_query("select * from berita where jenis='$menu' order by idberita desc limit 0,5");
                $dari = 0;
            }


// $data = mysql_fetch_object($mysql_query);
//  print_r($data);
            ?>

            <?php
            ?>

            <div class="panel panel-default" >
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                                                       
                            <th> JUDUL BERITA</th>                                
                            <th> KONTEN</th>
                            <th> TANGGAL</th>
                            <th> JAM</th>
                            <th> PENULIS</th>
                            <th> ACTION</th>
                        </tr>

                        <?php
                        $i = 1;
                        while ($data = mysql_fetch_object($mysql_query)) {
                            ?>

                            <tr>
                              
                                <td><?php echo $data->judul ?></td>
                                <td><?php echo substr($data->konten, 0, 200) ?></td>
                                <td><?php echo $data->tanggal ?></td>
                                <td><?php echo $data->jam ?></td>
                                <td><?php echo $data->penulis ?></td>
                                <td style="width: 150px;" align="center">
                                    <div class="btn btn-group-vertical">
                                        <form method="post">
                                            <div hidden="">
                                                <input name="id" value="<?php echo $data->idberita ?>"/>
                                                <input name="foto" value="<?php echo $data->url_gambar ?>"/>
                                            </div>
                                            <a><button <?php echo $aktif ?> name="hapus" onclick="return confirm('Apakah anda yakin menghapus berita ini ? ')"  class="btn btn-primary btn-sm "  data-toggle="tooltip" title="Hapus" style="margin-right: 5px;"><i class="fa fa-trash"></i></button></a>
                                        </form>

                                    </div>
                                    <a href="index.php?menu=add_berita&id=<?php echo $cipher->encrypt($data->idberita, $kunci) ?>"> <button  class="btn btn-primary btn-sm "  data-toggle="tooltip" title="Ubah" style="margin-right: 5px;"><i class="fa fa-edit"></i></button></a>

                                </td>
                            </tr>  
                            <?php
                            $i++;
                        }
                        ?>


                    </table>
                </div> 
            </div>

            <?php
            ?>

            <div class="panel panel-default" style=" width:100%;  margin-left:-02px; " >
                <form action="index.php?menu=berita&jenis=<?php echo $menu ?>" method="post" >
                    <div hidden="">
                        <input  required="" name="nilai" value="<?php echo $dari; ?>" placeholder="Nama" class="form-control" type="text">

                    </div>
                    <center>
                        <button name="next" type="submit" class="btn btn-primary btn-flat"  >Berita Sebelumnya</button>
                    </center>
                </form>

            </div><!-- /.box -->   
            <!-- general form elements -->               

        </div>


 



    <?php
} else {
    
}

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $foto = $_POST['foto'];
    $query = mysql_query("delete from berita where idberita ='$id'");
    $query2 = mysql_query("delete from komentar where idberita ='$id'");
    unlink("../../gambar/$foto");
}
?>

