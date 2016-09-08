<br>
<div class="col-md-8">
    <!-- general form elements -->
    <div class="panel panel-default" style="margin-left: 30%">
        <form method="post" action="upload_struktur.php" enctype="multipart/form-data" >
            <div >
                <div class="box ">
                    <div class="box-header">
                        <h3 class="box-title">Input Data </h3>
                    </div>
                    <span id="pesan_gagal"></span>
                    <br>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-6">
                                <label>Nama</label><br>
                                <input  required="" name="nama" type="text" class="form-control" placeholder="Nama" >
                            </div>
                            <div class="col-xs-6">
                                <label>Jabatan</label><br>
                                <div class="input-group">
                                    <select id="pilih" name="jabatan" class="form-control" >
                                        <option value="">Pilih</option>
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
                                <input maxlength="10" required="" name="tempat" type="text" class="form-control" placeholder="Tempat Lahir" >
                            </div>
                            <div class="col-xs-6">
                                <label>Tanggal Lahir</label><br>
                                <div class="input-group">
                                    <input   required="" name="tgl" type="text" class="form-control" id="nik" placeholder="Tempat Lahir" >

                                </div>   
                            </div>
                        </div>
                    </div>

                    <div name="nik" type="email"  id="pesan" ></div><br>


                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-6">
                                <label>Jenis Kelamin</label><br>
                                <label>
                                    <input required="" value="l"type="radio" name="jk" class="flat-red" />
                                    Laki Laki
                                </label>
                                <label>
                                    <input required="" value="p" type="radio" name="jk" class="flat-red"/>
                                    Perempuan
                                </label>
                            </div>

                            <div class="col-xs-6">
                                <label>Pilih Riwayat Pendidikan</label><br>
                                <div class="input-group">
                                    <select id="pilih" name="pendidikan" class="form-control" >
                                        <option value="">Pilih</option>
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
                                <input required=""  name="alamat" type="text" class="form-control" placeholder="RT/RW" />
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
                                    <input  required="" name="phone"  type="tel" class="form-control" data-inputmask="'mask': ['9999-9999-9999']" data-mask/>
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

            </div>
    </div>




</form>


</div>

</div>