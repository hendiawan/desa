

<?php
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

if ($jumlah > 0) {
    ?>
    <br>

    <div class="col-md-12">
        <div class="panel panel-default" >
            <img src=" ./img/loteng.png" style="width: 4%;height: 4%;margin-left:20px; "> <span><b>STRUKTUR <?php echo strtoupper($menu1) ?> DESA PENDEM</b></span>            

        </div>
        <div class="panel panel-default" >
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th> NO</th>                                
                        <th> NAMA</th>                                
                        <th> JABATAN</th>
                        <th> TEMPAT LAHIR</th>
                        <th> PENDIDIKAN</th>
                        <th> ALAMAT</th>

                    </tr>

                    <?php
                    $a=1;
                    while ($data = mysql_fetch_object($query)) {
                        ?>

                        <tr>
                            <td><?php echo $a ?></td>
                            <td><?php echo $data->nama ?></td>
                            <td><?php echo $data->jabatan ?></td>
                            <td><?php echo $data->tempat ?></td>
                            <td><?php echo $data->pendidikan ?></td>
                            <td><?php echo $data->tempat ?></td>

                        </tr>  
                        <?php
                        $a++;
                    }
                    ?>


                </table>
            </div>





        </div>
    </div>





    <?php
} else {
    
}
?>


<?php
$query = mysql_query("select * from isi where jenis='$menu'");

$jumlah = mysql_num_rows($query);
?>

<div class="col-md-12" >
    <div class="panel panel-default"  >
        <img src=" ./img/loteng.png" style="width: 4%;height: 4%;margin-left:20px; "> <span><b>PROGRAM KERJA <?php echo strtoupper($menu1) ?></b></span>   

    </div>


    <div class="panel panel-default" >
        <div class="row">
            <div class="col-xs-12">

                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>                                
                            <th> Nama Program Kerja</th>


                        </tr>

                        <?php
                        $i = 1;
                        while ($data = mysql_fetch_object($query)) {
                            ?>

                            <tr >
                                <td><?php echo $i ?></td>
                                <td><?php echo $data->isi ?></td>


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

