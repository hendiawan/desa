

<?php
include '../../config/config.php';
$menu = $_GET['menu'];
$query = mysql_query("select * from struktur where jenis='$menu'");
$jumlah = mysql_num_rows($query);
if ($menu == 'krtaruna') {
    $menu1 = 'Karang Taruna';
} else if ($menu == 'lembagaadat') {
    $menu1 = 'Lembaga Adat';
} else {
    $menu1 = $menu;
}

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
            <img src="../../img/loteng.png" style="width: 4%;height: 4%;margin-left:20px; "> <span><b>STRUKTUR <?php echo strtoupper($menu1) ?> DESA PENDEM</b></span>           
        </div>

    </div> 

    <div class="col-md-12">
        <a href="index.php?menu=add_stu&jenis=<?php echo $menu ?>"   >   <button  class="btn btn-primary btn-sm pull-right"  data-toggle="tooltip" title="Tambah Data" style="margin-right: 5px;"><i class="fa fa-plus"></i></button></a>
        <br>
        <br>

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
                                <th > ACTION</th>
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
                                        <div class="btn btn-group-vertical">
                                            <form method="post">
                                                <div hidden="">
                                                    <input name="idstruktur" value="<?php echo $data->idstruktur ?>"/>                                                    
                                                </div>
                                                <a><button <?php echo $aktif ?> name="hapus_lembaga" onclick="return confirm('Apakah anda yakin menghapus data ini ? ')"  class="btn btn-primary btn-sm "  data-toggle="tooltip" title="Hapus" style="margin-right: 5px;"><i class="fa fa-trash"></i></button></a>
                                            </form>

                                        </div>
                                        <a href="index.php?menu=add_stu&id=<?php echo $cipher->encrypt($data->idstruktur, $kunci); ?>"> <button  class="btn btn-primary btn-sm "  data-toggle="tooltip" title="Ubah" style="margin-right: 5px;"><i class="fa fa-edit"></i></button></a>

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


    </div><br>





    <?php
} else {
    
}
?>


<?php
$query = mysql_query("select * from isi where jenis='$menu'");

$jumlah = mysql_num_rows($query);
?>

<div class="col-md-12"  >
    <div class="panel panel-default"  >
        <img src="../../img/loteng.png" style="width: 4%;height: 4%;margin-left:20px; "> <span><b>PROGRAM KERJA <?php echo strtoupper($menu1) ?></b></span>  

    </div>

</div>

<div class="col-md-12">
    <a href="index.php?menu=add_des&jenis=<?php echo $menu ?>"   ><button  class="btn btn-primary btn-sm pull-right"  data-toggle="tooltip" title="Tambah Data" style="margin-right: 5px;"><i class="fa fa-plus"></i></button></a>   
    <br>
    <br>
</div>
<div class="col-md-12"   >
    <!-- general form elements -->
    <div class="panel panel-default" >
        <div class="row">
            <div class="col-xs-12">

                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>                                
                            <th> Nama Program</th>

                            <th align="center"> Action</th>
                        </tr>

                        <?php
                        $i = 1;
                        while ($data = mysql_fetch_object($query)) {
                            ?>

                            <tr >
                                <td><?php echo $i ?></td>
                                <td><?php echo $data->isi ?></td>
                                <td style="width: 150px;" align="center">
                                    <div class="btn btn-group-vertical">
                                        <form method="post">
                                            <div hidden="">
                                                <input name="idisi" value="<?php echo $data->idisi ?>"/>                                                    
                                            </div>
                                            <a><button name="hapus" onclick="return confirm('Apakah anda yakin menghapus data ini ? ')"  class="btn btn-primary btn-sm "  data-toggle="tooltip" title="Hapus" style="margin-right: 5px;"><i class="fa fa-trash"></i></button></a>
                                        </form>

                                    </div>
                                    <a  href="index.php?menu=add_des&id=<?php echo $data->idisi ?>" > <button  class="btn btn-primary btn-sm "  data-toggle="tooltip" title="Ubah" style="margin-right: 5px;"><i class="fa fa-edit"></i></button></a>

                                </td>
                            </tr>  
                            <?php
                            $i++;
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
if (isset($_POST['hapus_lembaga'])) {
    $id = $_POST['idstruktur'];
    $query = mysql_query("delete from struktur where idstruktur ='$id'");
}
if (isset($_POST['hapus'])) {
    $id = $_POST['idisi'];
    $query = mysql_query("delete from isi where idisi ='$id'");
}
?>