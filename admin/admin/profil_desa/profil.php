

<?php
$query = mysql_query("select * from berita where jenis='sambutan'");
$jumlah = mysql_num_rows($query);


if ($jumlah > 0) {
    ?>
    <br>
     
        <div class="col-md-12" >
            <div class="panel panel-default" >
                <img src="../../img/loteng.png" style="width: 4%;height: 4%;margin-left:20px; "> <span><b>SAMBUTAN KADES</b></span>             

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
                                    <th> SAMBUTAN KADES</th>                                
                                    <th> Action</th>

                                </tr>
                                
                                <?php
                                while ($data = mysql_fetch_object($query)) {
                                    ?>

                                    <tr>
                                        <td><?php echo substr($data->konten, 0, 400)?></td>

                                        <td> 
                                            <a href="index.php?menu=edit_sambutan&&id=<?php echo $data->idberita ?>"><button  class="btn btn-primary btn-sm pull-right"  data-toggle="tooltip" title="Ubah" style="margin-right: 5px;"><i class="fa fa-edit"></i></button></a></td>
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
        $query = mysql_query("select * from berita where jenis='sejarah'");
        $jumlah = mysql_num_rows($query);
        ?>

        <div class="col-md-12">
            <div class="panel panel-default" >
                <img src="../../img/loteng.png" style="width: 4%;height: 4%;margin-left:20px; "> <span><b>SEJARAH DESA PENDEM</b></span>             

            </div>

        </div>
        
        <div class="col-md-12" >
            <!-- general form elements -->
            <div class="panel panel-default" >
                <div class="row">
                    <div class="col-xs-12">

                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th> SEJARAH DESA</th>                                
                                    <th> Action</th>

                                </tr>

                                <?php
                                while ($data = mysql_fetch_object($query)) {
                                    ?>

                                    <tr>
                                        <td><?php echo substr($data->konten, 0, 400)?></td>

                                        <td> 
                                            <a href="index.php?menu=edit_sambutan&&id=<?php echo $data->idberita ?>"><button  class="btn btn-primary btn-sm pull-right"  data-toggle="tooltip" title="Ubah" style="margin-right: 5px;"><i class="fa fa-edit"></i></button></a></td>
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
        $query = mysql_query("select * from berita where jenis='wilayah'");
        $jumlah = mysql_num_rows($query);
        ?>
        <div class="col-md-12" >
            <div class="panel panel-default" >
                <img src="../../img/loteng.png" style="width: 4%;height: 4%;margin-left:20px; "> <span><b>PROFIL WILYAH DESA</b></span>             

            </div>

        </div>

        <div class="col-md-12" >
            <!-- general form elements -->
            <div class="panel panel-default" >
                <div class="row">
                    <div class="col-xs-12">

                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th> PROFIL WILAYAH</th>                                
                                    <th> Action</th>

                                </tr>

                                <?php
                                while ($data = mysql_fetch_object($query)) {
                                    ?>

                                    <tr>
                                        <td><?php echo substr($data->konten, 0, 400) ?></td>

                                        <td> 
                                            <a href="index.php?menu=edit_sambutan&&id=<?php echo $data->idberita ?>"><button  class="btn btn-primary btn-sm pull-right"  data-toggle="tooltip" title="Ubah" style="margin-right: 5px;"><i class="fa fa-edit"></i></button></a></td>
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
