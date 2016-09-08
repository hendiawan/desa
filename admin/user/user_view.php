
<!-- Main content -->
<section class="right-side">
    <div class="row" style="margin-left: -100px ">

        <div class="col-md-11">                
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Mahasiswa</h3>
                            <div class="box-tools">
                                <a  class="btn btn-danger" data-toggle="tooltip" title="Tambah User"  href="index.php?menu=usra" ><i class="fa  fa-plus"></i></a>
                                             
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>   
                                    <tr>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Jenis</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $jenis = $_SESSION['jenis'];
                                    $query = mysql_query("SELECT * FROM user ");
                                    while ($row = mysql_fetch_assoc($query)) {
                                        ?>

                                        <tr>
                                            <td><?php echo $row['username'] ?></td>
                                            <td><?php echo $row['pass'] ?></td>
                                            <td><?php echo $row['jenis'] ?></td>
                                            

                                            <td>
                                                <div class=" btn-group-vertical">
                                                         <a  onclick="return confirm('Apakah Anda Yakin Menghapus <?php echo $row['username'] ?> ?')" class="btn btn-primary" data-toggle="modal" href="./user/user_delete.php?u=<?php echo $row['username']?>"><i class="fa fa-ban"></i>Hapus</a>
                                                </div>

                                                </div>                                            
                                            </td>
                                        </tr>


                                        <?php
                                    }
                                    ?>
                                </tbody>  
                            </table>

                        </div><!-- /.box-body -->
                    </div><!-- /.box -->


                </div>
            </div>





        </div><!-- /.col (right) -->
    </div><!-- /.row -->

</section><!-- /.content -->
