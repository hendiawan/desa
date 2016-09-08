
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysql_query("select * from isi where idisi='$id'");
    $data = mysql_fetch_object($query);
    $isi = "$data->isi";
} else {
    $isi = '';
}
?>


<br>
<div class="col-md-8">
    <!-- general form elements -->
    <div class="panel panel-default">
        <form  method="post" enctype="multipart/form-data" >
            <div >
                <div class="box ">
                    <div class="box-header">
                        <h3 class="box-title">Input Data </h3>
                    </div>
                    <span id="pesan_gagal"></span>
                    <br>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <label>Deskripsi </label><br>
                                <textarea  required="" name="isi" type="text" class="form-control" placeholder="Deskripsi " ><?php echo $isi ?></textarea>
                            </div>
                        </div>
                    </div>


                </div>
                <br>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">
                            <center>
                                <button    id="simpan" type="submit" name="simpan" class="btn btn-primary" ><i class="fa fa-save"></i> Simpan</button>
                            </center>
                        </div>
                    </div>
                </div> 

            </div>
    </div>




</form>


</div>

<?php
if (isset($_POST['simpan'])) {
    $isi = $_POST['isi'];
    if (isset($_GET['id'])) {


        $query = mysql_query("update isi set isi='$isi' where idisi='$id' ");

        if ($query) {
            ?>
            <script>
                alert('Berhasil Ubah data !')
                window.location = 'index.php?menu=visimisi';
            </script>
            <?php
        } else {
            echo mysql_error();
        }
    } else {

        $query1 = mysql_query("insert into isi(isi,jenis) values ('$isi','misi') ");

        if ($query1) {
            ?>
            <script>
                alert('Berhasil Input Data !');
                window.location = 'index.php?menu=visimisi';
            </script>
            <?php
        } else {
            echo mysql_error();
        }
    }
}
?>