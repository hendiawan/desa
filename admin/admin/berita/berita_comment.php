

<?php
$query = mysql_query("select * from komentar inner join berita where berita.idberita=komentar.idberita order by komentar.idkomentar ");
$data = mysql_fetch_object($query);
$jumlah = mysql_num_rows($query);


if ($jumlah > 0) {
    ?>
    <br>

    <div class="col-md-12">
        <a href="index.php?menu=add_berita"   ><button  class="btn btn-primary btn-sm pull-right"  data-toggle="tooltip" title="Tambah Berita" style="margin-right: 5px;"><i class="fa fa-plus"></i></button></a>
    </div><br>
    <br>
    <div class="col-md-12">
        <div class="panel panel-default" >
            <img src="../../img/loteng.png" style="width: 4%;height: 4%;margin-left:20px; "> <span><b>DATA KOMENTAR TENTANG BERITA</b></span>          
        </div>
    </div>
    <div class="col-md-12">

        <?php
        if (isset($_POST['next'])) {
            $dari = $_POST['nilai'];
            $dari = $dari + 5;
        } else {
            $dari = 0;
        }



        $mysql_query = mysql_query("select * from komentar inner join berita where berita.idberita=komentar.idberita  order by komentar.idkomentar desc limit $dari,5");

        mysql_num_rows($mysql_query);
        $dari;
//             

        if (mysql_num_rows($mysql_query) < 3 && mysql_num_rows($mysql_query) != 0) {
            $dari = $dari - (mysql_num_rows($mysql_query));
            $mysql_query = mysql_query("select * from komentar inner join berita where berita.idberita=komentar.idberita order by komentar.idkomentar desc limit $dari,5");
        }

        if (mysql_num_rows($mysql_query) == 0) {

            $mysql_query = mysql_query("select * from komentar inner join berita where berita.idberita=komentar.idberita order by komentar.idkomentar desc limit 0,5");
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
                        <th> KOMENTAR</th>
                        <th> DARI</th>
                        <th> STATUS</th>
                        <th> Action</th>
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
                            <td><?php echo $data->komentar ?></td>
                            <td><?php echo $data->username ?></td>
                            <td><?php echo $data->status ?></td>
                            <td> 
                                <div class="btn btn-group">
                                    <form action="./berita/berita_comment_update.php" method="POST">
                                        <div hidden="">  
                                            <input value="<?php echo $data->idkomentar ?>" name="id">
                                        </div>
                                        <a> <button type="submit"  class="btn btn-primary btn-sm "  data-toggle="tooltip" title="Terima" style="margin-right: 5px;"><i class="fa fa-plus"></i></button></a>
                                    </form>
                                    <form action="./berita/berita_comment_hapus.php" method="POST">
                                        <div hidden="">  
                                            <input value="<?php echo $data->idkomentar ?>" name="id">
                                        </div>
                                        <a href="berita/berita_comment_hapus.php?id=<?php echo $data->idkomentar ?>"> <button  class="btn btn-danger btn-sm "  data-toggle="tooltip" title="Tolak" style="margin-right: 5px;"><i class="fa fa-times"></i></button></a>
                                    </form>
                                </div>
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

        <div class="panel panel-default">
            <center>
                <form action="index.php?menu=koment" method="post" >
                    <div hidden="">
                        <input  required="" name="nilai" value="<?php echo $dari; ?>" placeholder="Nama" class="form-control" type="text">
                    </div>
                    <button name="next" type="submit" class="btn btn-primary btn-flat"  >Berita Sebelumnya</button>
                </form>
            </center>
        </div><!-- /.box -->   
        <!-- general form elements -->               
    </div>




    <?php
} else {
    
}
?>

