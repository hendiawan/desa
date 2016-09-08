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
}
?>


<br>
<div class="col-md-8">
    <!-- general form elements -->
    <div class="panel panel-default" style="margin-left: 30%">
        <form method="post" action="./stu/upload_struktur.php" enctype="multipart/form-data" >
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
                                    <select id="pilih" name="jabatan" class="form-control" >
                                        <?php
                                        if (isset($_GET['id'])) {
                                            echo $jabatan;
                                        } else {
                                            echo '<option value="">Pilih</option>';
                                        }
                                        ?>
                                        <option value="kades">Kades</option>
                                        <option value="sekdes">Sekdes</option>
                                        <option value="kaurpem">KAUR Pemerintahan</option>
                                        <option value="kaurkesra">KAUR Kesra</option>
                                        <option value="kaurkeuangan">KAUR Keuangan</option>
                                        <option value="kaurpembangunan">KAUR Pembangunan</option>
                                        <option value="kaurumum">KAUR Umum</option>
                                        <option value="maliklo">KADUS Maliklo</option>
                                        <option value="mubon">KADUS Mubon</option>
                                        <option value="petorok">KADUS Petorok</option>
                                        <option value="mtbile">KADUS Mt Bile</option>
                                        <option value="napek">KADUS Napek</option>
                                        <option value="krmajelo">KADUS Karang Majelo</option>
                                        <option value="putara">KADUS Pendem Utara</option>
                                        <option value="pselatan">KADUS Pendem Selatan</option>
                                        <option value="dsbagek">KADUS Dasan Bagek</option>
                                        <option value="dao">KADUS Dao</option>
                                        <option value="penuntut">KADUS Penuntut</option>
                                        <option value="kurang">KADUS Kuang</option>
                                        <option value="gelung">KADUS Gelung</option>
                                        <option value="pipi">KADUS Pipi</option>
                                        <option value="piling">KADUS Piling</option>
                                        <option value="jangka">KADUS Jangka</option>
                                        <option value="lkbangkon">KADUS Lekong Bangkon</option>
                                        <option value="sikep">KADUS Sikep</option>
                                        <option value="jelitong">KADUS Jelitong</option>
                                        <option value="gelondong">KADUS Gelongdong</option>
                                        <option value="montor">KADUS Montor</option>
                                        <option value="ptt">PTT</option>
                                        <option value="tukangkebun">Tukang Kebun</option>
                                        <option value="jagamalam">Tukang Kebun</option>

                                    </select>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-6">
                                <label>Tempat Lahir</label><br>
                                <input maxlength="10" required="" <?php echo $ttl ?> name="tempat" type="text" class="form-control" placeholder="Tempat Lahir" >
                            </div>
                            <div class="col-xs-6">
                                <label>Tanggal Lahir</label><br>
                                <div class="input-group">
                                    <input <?php echo $tgl ?>  required="" name="tgl" type="text" class="form-control" id="nik" placeholder="Tempat Lahir" >
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
                                    <input  <?php echo $tel ?> required="" name="phone"  type="tel" class="form-control" data-inputmask="'mask': ['9999-9999-9999']" data-mask/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-7">                                
                                <?php
                                if (isset($_GET['id'])) {
                                    $foto = '';
                                    echo "<div hidden='' ><input name='edit' value='1'></div>";
                                } else {
                                    $foto = 'required=""';
                                }
                                ?>
                                <label >Upload Foto</label><br>
                                <input <?php echo $foto ?> class="tultip form-control" id="inputFile" type="file" name="foto" data-placement="right" title="" data-toggle="tooltip" data-original-title="Format Image File(.jpg) Ukuran Width: 972px Height:235px" />
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-7">
                            <button  style="width:180%"  id="simpan" type="submit" name="simpan" class="btn btn-primary" ><i class="fa fa-save"></i> Simpan</button>
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