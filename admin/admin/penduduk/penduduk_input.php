
<?php
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $query = mysql_query("select * from dpenduduk where iddp='$id'");
    $n = mysql_num_rows($query);

    if ($n < 1) {
        ?>
        <script>
            alert('Terimakasih !');
            window.location = 'index.php?menu=visimisi';
        </script>
        <?php
    }else{
       
    $data = mysql_fetch_object($query);
    $dusun = '<option value=' . $data->dusun . '>' . $data->dusun . '</option>';

    $jumlah_penduduk = "value=' $data->jp'";
    $jumlah_laki = "value='$data->l'";
    $jumlah_perempuan = "value='$data->p'";
   
    $jumlah_guru = "value='$data->guru'";
    $jumlah_tani = "value='$data->tani'";
    $jumlah_dagang = "value='$data->dagang'";
    $jumlah_dokter = "value='$data->dokter'";
    $jumlah_perawat = "value='$data->perawat'";
    $jumlah_bidan = "value='$data->bidan'";
    $jumlah_tni = "value='$data->tni'";
    $jumlah_polri = "value='$data->polri'";
    $jumlah_swasta = "value='$data->swasta'";
    $jumlah_tb = "value='$data->tb'";
    $jumlah_sd = "value='$data->sd'";
    $jumlah_smp = "value='$data->smp'";
    $jumlah_sma = "value='$data->sma'";
    $jumlah_s1 = "value='$data->s1'";
    $jumlah_s2 = "value='$data->s2'";
    $jumlah_s3 = "value='$data->s3'";
    $jumlah_ts = "value='$data->ts'";
    $jenis = '1'; 
    }

} else {
    
    $id='0';
    $dusun = '';
    $jumlah_penduduk = '';
    $jumlah_laki = '';
    $jumlah_perempuan = '';
    $jumlah_a = '';
    $jumlah_b = '';
    $jumlah_o = '';
    $jumlah_ab = '';
    $jumlah_a1 = '';
    $jumlah_b1 = '';
    $jumlah_o1 = '';
    $jumlah_ab1 = '';
    $jumlah_a2 = '';
    $jumlah_b2 = '';
    $jumlah_o2 = '';
    $jumlah_ab2 = '';
    $jumlah_guru = '';
    $jumlah_tani = '';
    $jumlah_dagang = '';
    $jumlah_dokter = '';
    $jumlah_perawat = '';
    $jumlah_bidan = '';
    $jumlah_tni = '';
    $jumlah_polri = '';
    $jumlah_swasta = '';
    $jumlah_tb = '';
    $jumlah_sd = '';
    $jumlah_smp = '';
    $jumlah_sma = '';
    $jumlah_s1 = '';
    $jumlah_s2 = '';
    $jumlah_s3 = '';
    $jumlah_ts = '';
    $jenis = '0';
}
?>


<br>
<div class="col-md-12">
    <!-- general form elements -->
    <div class="panel panel-default" >

        <form method="post" action="./penduduk/simpan_penduduk.php" enctype="multipart/form-data" >
            <div hidden="">

                <input value="<?php echo $jenis ?>" name="jenis" />
                <input value="<?php echo $id ?>" name="id" />

            </div>
            <div>
                <div class="box ">
                    <div class="box-header">
                        <h3 class="box-title">Input Data Penduduk</h3>
                    </div>
                    <span id="pesan_gagal"></span>
                    <br>
                    <div class="box-body">
                        <div id="pesan_gagal"></div>

                        <div class="row">
                            <div class="col-xs-4">

                                <label>Nama Dusun</label>
                                <select required="" id="pilih" name="dusun" class="form-control" >
                                    <?php echo $dusun ?>
                                    <option value="maliklo">Maliklo</option>
                                    <option value="mubon"> Mubon</option>
                                    <option value="petorok"> Petorok</option>
                                    <option value="mtbile"> Mt Bile</option>
                                    <option value="napel"> Napek</option>
                                    <option value="krmajelo"> Karang Majelo</option>
                                    <option value="putara"> Pendem Utara</option>
                                    <option value="pselatan"> Pendem Selatan</option>
                                    <option value="dsbagek"> Dasan Bagek</option>
                                    <option value="dao"> Dao</option>
                                    <option value="penuntut"> Penuntut</option>
                                    <option value="kuang"> Kuang</option>
                                    <option value="gelung"> Gelung</option>
                                    <option value="pipi"> Pipi</option>
                                    <option value="piling"> Piling</option>
                                    <option value="jangka"> Jangka</option>
                                    <option value="lkbangkon"> Lekong Bangkon</option>
                                    <option value="sikep"> Sikep</option>
                                    <option value="jelitong"> Jelitong</option>
                                    <option value="gelondong"> Gelongdong</option>
                                    <option value="montor"> Montor</option>
                                </select>


                            </div> 
                            <div class="col-xs-4">
                                <label>Jumlah Penduduk</label>
                                <input <?php echo$jumlah_penduduk ?> required=""  name="jp" type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Penduduk" >
                            </div>
                            <div class="col-xs-4">
                                <label>Data Jenis Kelamin</label><br>
                                <div class="input-group">
                                    <input required="" <?php echo$jumlah_laki ?>   placeholder="Jumlah Laki Laki"  name="l" type="text" class="form-control"  />
                                    <input required="" <?php echo$jumlah_perempuan ?> placeholder="Jumlah Laki Perempuan"  name="p" type="text" class="form-control"  />
                                </div>  
                            </div>
                        </div>
                    </div>


                    <div name="nik" type="email"  id="pesan" ></div><br>


                    <div class="box-body">
                        <div class="row">
                          
                            <div class="col-xs-4">
                                <label>Data Pekerjaan</label><br>
                                <div class="input-group">
                                    <input required="" <?php echo$jumlah_guru ?> placeholder="Jumlah Guru"  name="guru" type="text" class="form-control"  />
                                    <input required="" <?php echo$jumlah_dagang ?> placeholder="Jumlah Pedagang"  name="dagang" type="text" class="form-control"  />
                                    <input required="" <?php echo$jumlah_tani ?> placeholder="Jumlah Tani"  name="tani" type="text" class="form-control"  />
                                    <input required="" <?php echo$jumlah_dokter ?> placeholder="Jumlah Dokter"  name="dokter" type="text" class="form-control"  />
                                    <input required="" <?php echo$jumlah_perawat ?> placeholder="Jumlah Perawat"  name="perawat" type="text" class="form-control"  />
                                    <input required="" <?php echo$jumlah_bidan ?> placeholder="Jumlah Bidan"  name="bidan" type="text" class="form-control"  />
                                    <input required="" <?php echo$jumlah_tni ?> placeholder="Jumlah TNI"  name="tni" type="text" class="form-control"  />
                                    <input required="" <?php echo$jumlah_polri ?> placeholder="Jumlah Polri"  name="polri" type="text" class="form-control"  />
                                    <input required="" <?php echo$jumlah_swasta ?>placeholder="Jumlah Karyawan Swasta"  name="swasta" type="text" class="form-control"  />
                                    <input required="" <?php echo$jumlah_tb ?>placeholder="Jumlah Tidak Bekerja"  name="tb" type="text" class="form-control"  />

                                </div>   
                            </div>
                            <div class="col-xs-4">
                                <label>Data Pendidikan</label><br>
                                <div class="input-group">
                                    <input required="" <?php echo$jumlah_ts ?> placeholder="Jumlah TIDAK Sekolah"  name="ts" type="text" class="form-control"  />
                                    <input required=""<?php echo$jumlah_sd ?> placeholder="Jumlah Tamatan SD"  name="sd" type="text" class="form-control"  />
                                    <input required=""<?php echo$jumlah_smp ?> placeholder="Jumlah Tamatan SMP"  name="smp" type="text" class="form-control"  />
                                    <input required=""<?php echo$jumlah_sma ?> placeholder="Jumlah Tamatan SMA"  name="sma" type="text" class="form-control"  />
                                    <input required=""<?php echo$jumlah_s1 ?> placeholder="Jumlah Tamatan S1"  name="s1" type="text" class="form-control"  />
                                    <input required=""<?php echo$jumlah_s2 ?> placeholder="Jumlah Tamatan S2"  name="s2" type="text" class="form-control"  />
                                    <input required=""<?php echo$jumlah_s3 ?> placeholder="Jumlah Tamatan S3"  name="s3" type="text" class="form-control"  />
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-7">
                        <button   id="simpan" type="submit" name="simpan" class="btn btn-primary" ><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </div>
            </div> 

    </div>
</form>

</div>
</div>






</div>

</div>


<?php
if (isset($_POST['simpan'])) {
    echo $dusun = $_POST['dusun'];
    echo $jumlah_penduduk = $_POST['jp'];
    echo $jumlah_laki = $_POST['l'];
    echo $jumlah_perempuan = $_POST['p'];
    echo $jumlah_perempuan = $_POST['p'];
    echo $jumlah_a = $_POST['a'];
    echo $jumlah_b = $_POST['b'];
    echo $jumlah_o = $_POST['o'];
    echo $jumlah_ab = $_POST['ab'];
    echo $jumlah_a1 = $_POST['a1'];
    echo $jumlah_b1 = $_POST['b1'];
    echo $jumlah_o1 = $_POST['o1'];
    echo $jumlah_ab1 = $_POST['ab1'];
    echo $jumlah_a2 = $_POST['a2'];
    echo $jumlah_b2 = $_POST['b2'];
    echo $jumlah_o2 = $_POST['o2'];
    echo $jumlah_ab2 = $_POST['ab2'];
    echo $jumlah_guru = $_POST['guru'];
    echo $jumlah_tani = $_POST['tani'];
    echo $jumlah_dagang = $_POST['dagang'];
    echo $jumlah_dokter = $_POST['dokter'];
    echo $jumlah_perawat = $_POST['perawat'];
    echo $jumlah_bidan = $_POST['bidan'];
    echo $jumlah_tni = $_POST['tni'];
    echo $jumlah_polri = $_POST['polri'];
    echo $jumlah_swasta = $_POST['swasta'];
    echo $jumlah_tb = $_POST['tb'];
    echo $jumlah_sd = $_POST['sd'];
    echo $jumlah_smp = $_POST['smp'];
    echo $jumlah_sma = $_POST['sma'];
    echo $jumlah_s1 = $_POST['s1'];
    echo $jumlah_s2 = $_POST['s2'];
    echo $jumlah_s3 = $_POST['s3'];
    echo $jumlah_ts = $_POST['ts'];
}
?>