

<?php
include '../../config/config.php';
$menu = $_GET['menu'];
$query = mysql_query("select * from struktur where jenis='$menu'");
$jumlah = mysql_num_rows($query);

if ($jumlah > 0) {
    ?>
    <br>
     

        <div class="col-md-12" >
            <a href="index.php?menu=stu_add"   ><button  class="btn btn-primary btn-sm pull-right"  data-toggle="tooltip" title="Tambah Data" style="margin-right: 5px;"><i class="fa fa-plus"></i></button></a>
        </div><br>
        <br>
         
        <div class="col-md-12" >
            <div class="panel panel-default" >
                <img src="../../img/loteng.png" style="width: 4%;height: 4%;margin-left:20px; "> <span><b>STRUKTUR PEMERINTAHAN DESA PENDEM</b></span>             
            </div>
        </div>

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="panel panel-default" >
                <div class="row">
                    <div class="col-xs-12">
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th> NAMA</th>                                
                                    <th> JABATAN</th>
                                    <th> TEMPAT LAHIR</th>
                                    <th> PENDIDIKAN</th>
                                    <th> ALAMAT</th>
                                    <td align="center"> <b>Action</b></td>
                                </tr>

                                <?php
                                while ($data = mysql_fetch_object($query)) {
                                    ?>

                                    <tr>
                                        <td><?php echo $data->nama ?></td>
                                        <td><?php echo $data->jabatan ?></td>
                                        <td><?php echo $data->tempat ?></td>
                                        <td><?php echo $data->pendidikan ?></td>
                                        <td><?php echo $data->tempat ?></td>
                                        <td style="width: 150px;" align="center">
                                            <div class="btn btn-group-justified ">
                                                <form method="POST">
                                                    <div hidden="">
                                                        <input name="idhapus" value="<?php echo $data->idstruktur ?>" />
                                                        <input name="foto" value="<?php echo $data->url_foto ?>" />
                                                    </div>
                                                    <a><button name="hapus" onclick="return confirm('Apakah anda yakin menghapus data ini ? ')"  class="btn btn-primary btn-sm pull-right"  data-toggle="tooltip" title="Hapus" style="margin-right: 5px;"><i class="fa fa-trash-o"></i></button></a>
                                                </form>
                                                <a href="index.php?menu=stu_add&id=<?php echo $cipher->encrypt($data->idstruktur, $kunci); ?>"><button  class="btn btn-primary btn-sm pull-right"  data-toggle="tooltip" title="Ubah" style="margin-right: 5px;"><i class="fa fa-edit"></i></button></a>
                                            </div>

                                        </td>
                                    </tr>  
                                    <?php
                                }
                                ?>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
        </div>
         



    <?php
} else {
    
}

if (isset($_POST['hapus'])) {

    $idhapus = $_POST['idhapus'];
    $foto = $_POST['foto'];
    $query_hapus = mysql_query("delete from struktur where idstruktur='$idhapus'");

    if ($query_hapus) {
        unlink("../../gambar/$foto");
    }
}