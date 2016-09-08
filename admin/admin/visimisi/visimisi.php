

<?php
$menu = $_GET['menu'];
$query = mysql_query("select * from isi where jenis='visi'");

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
     
        <div class="col-md-8" >
            <div class="panel panel-default" >
                <img src="../../img/loteng.png" style="width: 4%;height: 4%;margin-left:20px; "> <span><b>VISI DESA PENDEM</b></span>             

            </div>

        </div>

        <div class="col-md-8"  >
            <!-- general form elements -->
            <div class="panel panel-default" >
                <div class="row">
                    <div class="col-xs-12">

                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th> Visi</th>                                
                                    <th> Action</th>

                                </tr>

                                <?php
                                while ($data = mysql_fetch_object($query)) {
                                    ?>

                                    <tr>
                                        <td><?php echo $data->isi ?></td>

                                        <td> 
                                            <a href="index.php?menu=edit_visi&&id=<?php echo $data->idisi ?>"><button  class="btn btn-primary btn-sm pull-right"  data-toggle="tooltip" title="Ubah" style="margin-right: 5px;"><i class="fa fa-edit"></i></button></a></td>
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
$query = mysql_query("select * from isi where jenis='misi'");
$jumlah = mysql_num_rows($query);
?>

    <div class="col-md-8" >
        <div class="panel panel-default"  >
            <img src="../../img/loteng.png" style="width: 4%;height: 4%;margin-left:20px; "> <span><b>MISI DESA PENDEM </b></span>   

        </div>

    </div>

    <div class="col-md-8" >
        <!-- general form elements -->
        <div class="panel panel-default" >
            <div class="row">
                <div class="col-xs-12">

                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                                             
                                <th> MISI</th>

                                <th align="center"> Action</th>
                            </tr>

                            <?php
                            $i = 1;
                            while ($data = mysql_fetch_object($query)) {
                                ?>

                                <tr >
                                   
                                    <td><?php echo "<pre>" .$data->isi."</pre>" ?></td>

                                    <td align="left"> 
                                        <a href="index.php?menu=edit_visi&&id=<?php echo $data->idisi ?>"><button  class="btn btn-primary btn-sm pull-right"  data-toggle="tooltip" title="Ubah" style="margin-right: 5px;"><i class="fa fa-edit"></i></button></a>
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
