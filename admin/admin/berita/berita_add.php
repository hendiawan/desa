

<?php
if (isset($_GET['id'])) {
    include '../../config/config.php';



    $id = $_GET['id'];
    $id = $cipher->decrypt($id, $kunci);
    $tampil = mysql_query("select * from berita where idberita='$id'");
    $data = mysql_fetch_object($tampil);

    $jumlah = mysql_num_rows($tampil);
    if ($jumlah > 0) {
        $judul = "value= '$data->judul'";
        $konten = $data->konten;
        $foto = "value='$data->url_gambar'";
    } else {
        ?>
        <script>
            window.location = './';
        </script>
        <?php
    }
} else {
    $judul = "";
    $konten = "";
}
?>

<br>
 

    <div class="col-md-12" >

        <div class="box" >

            <form class="form-horizontal" action="./berita/upload.php" method="post" name="pengajuan" enctype="multipart/form-data" >
                <div class="box-body">

                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-12">


                            </div>                                               
                        </div>

                    </div>
                    <?php ?>


                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-7">
                                <label >Header Berita</label><br>
                                <input <?php echo $judul ?> required="" style="width:170%"  name="header" type="text" class="form-control" id="exampleInputEmail1" placeholder="Header Berita" >

                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-7">
                                <label >Text</label><br>
                                <textarea required="" name="isi" rows="5" cols="66"  ><?php echo $konten ?></textarea>    
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-7">

                                <?php
                                if (isset($_GET['id'])) {
                                    $foto = '';
                                    echo "<div hidden=''>";
                                    echo "<input value='$id' name='edit'>";
                                    echo "</div>";
                                } else {
                                    $foto = 'required=""';
                                }
                                if (isset($_GET['jenis'])) {
                                    $jenis = $_GET['jenis'];
                                    echo "<div hidden=''>";
                                    echo "<input value='$jenis' name='jenis'>";
                                    echo "</div>";
                                }
                                ?>

                                <label >Upload Gambar</label><br>
                                <input <?php echo $foto ?> class="tultip form-control" id="inputFile" type="file" name="gambar" data-placement="right" title="" data-toggle="tooltip" data-original-title="Format Image File(.jpg) " />

                            </div>
                        </div>
                    </div>



                    <div class="box-body">
                        <div class="row">
                            <center>
                                <div class="col-xs-12">
                                    <input   id="upload"  type="submit"  value="simpan" name="simpan_mhs" class="btn btn-primary" >
                                </div>    
                            </center>

                        </div>
                    </div>

                </div> 
            </form>

        </div>
    </div>

 
