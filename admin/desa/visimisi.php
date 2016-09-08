

<?php
$query = mysql_query("select * from isi where jenis='visi'");

$jumlah = mysql_num_rows($query);
if ($jumlah > 0) {
    ?>
    <br>

    <div class="col-md-12" >
        <div class="panel panel-default" >
            <img src="./img/loteng.png" style="width: 4%;height: 4%;margin-left:20px; "> <span><b>VISI DESA PENDEM</b></span>             

        </div>
        <!-- general form elements -->
        <div class="panel panel-default" >
            <div class="row">
                <div class="col-xs-12">

                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th> VISI</th>                                


                            </tr>

                            <?php
                            while ($data = mysql_fetch_object($query)) {
                                ?>

                                <tr>
                                    <td><?php echo $data->isi ?></td>


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
?>


<?php
$query = mysql_query("select * from isi where jenis='misi'");
$jumlah = mysql_num_rows($query);
?>
 
    <div class="col-md-12" >
        <div class="panel panel-default"  >
            <img src="./img/loteng.png" style="width: 4%;height: 4%;margin-left:20px; "> <span><b>MISI DESA PENDEM </b></span>   

        </div>
         <!-- general form elements -->
        <div class="panel panel-default" >
            <div class="row">
                <div class="col-xs-12">

                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>

                                <th> MISI</th>


                            </tr>

                            <?php
                            $i = 1;
                            while ($data = mysql_fetch_object($query)) {
                                ?>

                                <tr >

                                    <td><?php echo "<pre style='background-color:#fff;border:#fff'>" . $data->isi . "</pre>" ?></td>


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

     
       
