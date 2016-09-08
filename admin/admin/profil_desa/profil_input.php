
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysql_query("select * from berita where idberita='$id'");
    $data = mysql_fetch_object($query);
    $isi = "$data->konten";
    $header = "value='$data->judul'";
} else {
    $isi = '';
}
?>

<br>
<div class="container">
    <span id="pesan_gagal"></span>



    <div class="col-md-8"  >

        <div class="box" >

            <form method="post"  enctype="multipart/form-data" >
                <div class="box-body">


                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-7">
                                <label >Header Berita</label><br>
                                <input <?php echo $header; ?> required="" style="width:170%"  name="header" type="text" class="form-control" id="exampleInputEmail1" placeholder="Header Berita" >

                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-7">
                                <label >Text</label><br>
                                <textarea required="" name="isi" rows="5" cols="66"  ><?php echo $isi ?></textarea>    
                            </div>
                        </div>
                    </div>




                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <center>
                                    <input    type="submit"  value="simpan" name="simpan" class="btn btn-primary" >

                                </center>
                            </div>
                        </div>
                    </div>

                </div> 
            </form>

        </div>
    </div

</div>

<?php
if (isset($_POST['simpan'])) {
   
    $isi = $_POST['isi'];
    if (isset($_GET['id'])) {


        $query = mysql_query("update berita set konten='$isi' where idberita='$id' ");

        if ($query) {
            ?>
            <script>
                alert('Berhasil Ubah data !')
                window.location = 'index.php?menu=profil';
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