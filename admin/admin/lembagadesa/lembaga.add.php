<?php
if (isset($_GET['id'])) {
    include '../../config/config.php';
    $id = $_GET['id'];
    $id = $cipher->decrypt($id, $kunci);
    $query = mysql_query("select * from struktur where idstruktur='$id'");
    $data = mysql_fetch_object($query);

    $jumlah = mysql_num_rows($query);

    if ($jumlah > 0) {
        $idstruktur = 'value= "$data->idstruktur"';
        $nama = "value='$data->nama'";
        $jabatan = "<option value='$data->jabatan'>$data->jabatan</option>";
        $ttl = "value= '$data->tempat'";
        $jk = $data->jk;
        $pendidikan = "<option value='$data->pendidikan'>$data->pendidikan</option>";
        $alamat = "value='$data->alamat'";
        $tel = "value='$data->telp'";
        $foto = $data->url_foto;
        $tgl = "value='$data->tgl'";
        $jenis = "value='$data->jenis'";
    } else {
        ?>
        <script>
            window.location = '../../index.php';
        </script>
        <?php
    }
} else {
    $nama = '';
    $jabatan = '';
    $ttl = '';
    $jk = '';
    $pendidikan = '';
    $alamat = '';
    $tel = '';
    $foto = '';
    $tgl = '';
    $jenis = '';
}
?>


<br>
<div class="col-md-12">
    <!-- general form elements -->
    <div class="panel panel-default">
        <form method="post" action="./lembagadesa/upload_struktur.php" enctype="multipart/form-data" >
            <div>
                <div class="box ">
                    <div class="box-header">
                        <h3 class="box-title">Input Data Struktur Desa</h3>
                    </div>
                    <span id="pesan_gagal"></span>
                    <br>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-6">
                                <label>Nama</label><br>
                                <input <?php echo $nama ?> required="" name="nama" type="text" class="form-control" placeholder="Nama" >
                            </div>
                            <div class="col-xs-6">
                                <label>Jabatan</label><br>
                                <div class="input-group">
                                    <?php
                                    if (isset($_GET['id'])) {

                                        $d = 'disabled=""';
                                    } else {

                                        $d = '';
                                    }
                                    ?>
                                    <select <?php echo $d ?> id="pilih" name="jabatan" class="form-control" >
                                        <?php
                                        if (isset($_GET['id'])) {
                                            echo $jabatan;
                                        } else {
                                            echo '<option value="">Pilih</option>';
                                        }
                                        ?>

                                        <option value="ketua">KETUA</option>
                                        <option value="wakil">WAKIL KETUA</option>
                                        <option value="sekretaris">SEKRETARIS</option>
                                        <option value="bendahara">BENDAHARA</option>
                                        <option value="anggota">ANGGOTA</option>                                

                                    </select>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-6">
                                <label>Tempat Lahir</label><br>
                                <input  required="" <?php echo $ttl ?> name="tempat" type="text" class="form-control" placeholder="Tempat Lahir" >
                            </div>
                            <div class="col-xs-6">
                                <label>Tanggal Lahir</label><br>
                                <div class="input-group">
                                    <input <?php echo $tgl ?>  required="" name="tgl" type="text" class="form-control" id="nik" placeholder="Tanggal Lahir" >
                                </div>   
                            </div>
                        </div>
                    </div>




                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-6">
                                <label>Jenis Kelamin</label><br>
                                <label>
                                    <?php
                                    if ($jk == 'l') {
                                        $l = 'checked=""';
                                        $p = '';
                                    } else {
                                        $l = '';
                                        $p = 'checked=""';
                                    }
                                    ?>
                                    <input <?php echo $l; ?> required="" value="l"type="radio" name="jk" class="flat-red" />
                                    Laki Laki
                                </label>
                                <label>
                                    <input <?php echo $p; ?> required="" value="p" type="radio" name="jk" class="flat-red"/>
                                    Perempuan
                                </label>
                            </div>

                            <div class="col-xs-6">
                                <label>Pilih Riwayat Pendidikan</label><br>
                                <div class="input-group">
                                    <select id="pilih" name="pendidikan" class="form-control" >

                                        <?php
                                        if (isset($_GET['id'])) {
                                            echo $pendidikan;
                                        } else {
                                            echo '<option value="">Pilih</option>';
                                        }
                                        ?>

                                        <option value="ba">Buta Aksara</option>
                                        <option value="tsd">Tidak Tamat SD</option>
                                        <option value="sd">SD</option>
                                        <option value="smp">SMP</option>
                                        <option value="sma">SMA</option>
                                        <option value="s1">S1</option>
                                        <option value="s2">S2</option>
                                        <option value="s3">S3</option>
                                    </select>
                                </div>   
                            </div>

                        </div>
                    </div>


                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <label>Alamat</label>                                
                                <input required="" <?php echo $alamat ?> name="alamat" type="text" class="form-control" placeholder="RT/RW" />
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <label>No Telephone | Hp</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <?php
                                    if (isset($_GET['id'])) {
                                        echo "<div hidden=''>";
                                        echo "<input name='edit' value='$id' />";
                                        echo "<input name='jenis' $jenis />";
                                        echo "</div>";
                                    } else {
                                        $jenis = $_GET['jenis'];
                                        echo "<div hidden=''>";
                                        echo "<input name='jenis' value='$jenis' />";
                                        echo "</div>";
                                    }
                                    ?>

                                    <input  <?php echo $tel ?> required="" name="phone"  type="tel" class="form-control" data-inputmask="'mask': ['9999-9999-9999']" data-mask/>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <center>
                                <button    id="simpan" type="submit" name="simpan" class="btn btn-primary" ><i class="fa fa-save"></i> Simpan</button>
                            </center>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_GET['id'])) {
                    echo "<div hidden=''>";
                    echo "<input name='id' value='$id' />";
                    echo "</div>";
                }
                ?> 
            </div>
        </form>

    </div>





</div>

</div>