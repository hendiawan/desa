<div class="panel panel-default" >
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover"   border="1px"   width="100%"  bordercolor="black">
            <thead>   
                <tr style="background-color: rgb(139, 192, 179)">

                    <td rowspan="2" style="width: 30px" ><b><br>NO</b></td>
                    <td rowspan="2" style="width: 30px" align="center" ><b><br>Dusun</b></td>                                                                         
                    <td rowspan="2" style="width: 90px" align="center"><b><br>JUMLAH Penduduk</b></td>                                                     
                    <td align="center" colspan="2"  style="width: 90px" align="center"><b>Jenis Kelamin</b></td>                                                     
                    <td align="center" colspan="10"  style="width: 90px" align="center"><b>Pekerjaan</b></td>                                                     
                    <td align="center" colspan="7"  style="width: 90px" align="center"><b>Pendidikan</b></td>                                                     
                    <td align="center" rowspan="2" style="width: 90px" align="center"><b>ACTION</b></td>                                                     
                </tr>
                <tr style="background-color: rgb(139, 192, 179)">
                    <td align="center" style="width: 90px; background-color: rgb(248, 57, 57)"><b>L</b></td>
                    <td align="center" style="width: 90px; background-color: rgb(248, 57, 57)"><b>P</b></td>   
                    <td align="center" style="width: 90px; background-color: rgb(136, 179, 116)"><b>Guru</b></td>
                    <td align="center" style="width: 90px; background-color: rgb(136, 179, 116)"><b>Pedagang</b></td>  
                    <td align="center" style="width: 90px; background-color: rgb(136, 179, 116)"><b>Petani</b></td>  
                    <td align="center" style="width: 90px; background-color: rgb(136, 179, 116)"><b>Dokter</b></td>  
                    <td align="center" style="width: 90px; background-color: rgb(136, 179, 116)"><b>Perawat</b></td>  
                    <td align="center" style="width: 90px; background-color: rgb(136, 179, 116)"><b>Bidan</b></td>  
                    <td align="center" style="width: 90px; background-color: rgb(136, 179, 116)"><b>TNI</b></td>  
                    <td align="center" style="width: 90px; background-color: rgb(136, 179, 116)"><b>POLRI</b></td>  
                    <td align="center" style="width: 90px; background-color: rgb(136, 179, 116)"><b>SWASTA</b></td>  
                    <td align="center" style="width: 90px; background-color: rgb(136, 179, 116)"><b>TDK BEKERJA</b></td>  
                    <td align="center" style="width: 90px; background-color: #F6F757"><b>TS</b></td>  
                    <td align="center" style="width: 90px; background-color: #F6F757"><b>SD</b></td>  
                    <td align="center" style="width: 90px; background-color: #F6F757"><b>SMP</b></td>  
                    <td align="center" style="width: 90px; background-color: #F6F757"><b>SMA</b></td>  
                    <td align="center" style="width: 90px; background-color: #F6F757"><b>S1</b></td>  
                    <td align="center" style="width: 90px; background-color: #F6F757"><b>S2</b></td>  
                    <td align="center" style="width: 90px; background-color: #F6F757"><b>S3</b></td>  
                </tr>

            </thead>
            <tbody>
                <?php
                $sql = mysql_query('select * from dpenduduk');

                $i = 1;
                while ($data = mysql_fetch_object($sql)) {
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $data->dusun ?></td>
                        <td><?php echo $data->jp ?></td>
                        <td><?php echo $data->l ?></td>
                        <td><?php echo $data->p ?></td>
                        <td><?php echo $data->guru ?></td>
                        <td><?php echo $data->dagang ?></td>
                        <td><?php echo $data->tani ?></td>
                        <td><?php echo $data->dokter ?></td>
                        <td><?php echo $data->perawat ?></td>
                        <td><?php echo $data->bidan ?></td>                 
                        <td><?php echo $data->tni ?></td>
                        <td><?php echo $data->polri ?></td>
                        <td><?php echo $data->swasta ?></td>
                        <td><?php echo $data->tb ?></td>
                        <td><?php echo $data->ts ?></td>
                        <td><?php echo $data->sd ?></td>
                        <td><?php echo $data->smp ?></td>
                        <td><?php echo $data->sma ?></td>
                        <td><?php echo $data->s1 ?></td>
                        <td><?php echo $data->s2 ?></td>
                        <td><?php echo $data->s3 ?></td>

                        <td>  

                            <a type="submit"  href="?menu=update_dp&id=<?php echo $data->iddp ?>"  class="btn btn-primary btn-sm "  data-toggle="tooltip" title="Ubah" style="margin-right: 5px;"><i class="fa fa-edit"></i></a</a>
                        </td>

                    </tr>



                    <?php
                    $i++;
                }
                $sd = mysql_fetch_object(mysql_query('select sum(sd) as sd from dpenduduk '));
                $smp = mysql_fetch_object(mysql_query('select sum(smp) as smp from dpenduduk '));
                $sma = mysql_fetch_object(mysql_query('select sum(sma) as sma from dpenduduk '));
                $s1 = mysql_fetch_object(mysql_query('select sum(s1) as s1 from dpenduduk '));
                $s2 = mysql_fetch_object(mysql_query('select sum(s2) as s2 from dpenduduk '));
                $s3 = mysql_fetch_object(mysql_query('select sum(s3) as s3 from dpenduduk '));
                $ts = mysql_fetch_object(mysql_query('select sum(ts) as ts from dpenduduk '));

                $sd = $sd->sd;
                $smp = $smp->smp;
                $sma = $sma->sma;
                $s1 = $s1->s1;
                $s2 = $s2->s2;
                $s3 = $s3->s3;
                $ts = $ts->ts;

                $guru = mysql_fetch_object(mysql_query('select sum(guru) as guru from dpenduduk '));
                $dagang = mysql_fetch_object(mysql_query('select sum(dagang) as dagang  from dpenduduk '));
                $tani = mysql_fetch_object(mysql_query('select sum(tani) as tani  from dpenduduk '));
                $dokter = mysql_fetch_object(mysql_query('select sum(dokter) as dokter  from dpenduduk '));
                $perawat = mysql_fetch_object(mysql_query('select sum(perawat) as perawat  from dpenduduk '));
                $bidan = mysql_fetch_object(mysql_query('select sum(bidan) as bidan  from dpenduduk '));
                $tni = mysql_fetch_object(mysql_query('select sum(tni) as tni  from dpenduduk '));
                $polri = mysql_fetch_object(mysql_query('select sum(polri) as polri  from dpenduduk '));
                $swasta = mysql_fetch_object(mysql_query('select sum(swasta) as swasta  from dpenduduk '));
                $tb = mysql_fetch_object(mysql_query('select sum(tb) as tb  from dpenduduk '));
                $l = mysql_fetch_object(mysql_query('select sum(l) as l  from dpenduduk '));
                $p = mysql_fetch_object(mysql_query('select sum(p) as p  from dpenduduk '));
                $jp = mysql_fetch_object(mysql_query('select sum(jp) as jp  from dpenduduk '));
                
                
                
                
                ?>
                <tr style="background-color: rgb(139, 192, 179)">

                    <td colspan="2" align="center" style="width: 30px" ><b><br>Total</b></td>
                    <td style="width: 30px" align="center" ><b><br><?php echo $jp->jp ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $l->l ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $p->p ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $guru->guru ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $dagang->dagang ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $tani->tani ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $dokter->dokter ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $perawat->perawat ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $bidan->bidan ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $tni->tni ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $polri->polri ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $swasta->swasta ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $tb->tb ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $ts ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $sd ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $smp ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $sma ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $s1 ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $s2 ?></b></td>                                                                         
                    <td style="width: 30px" align="center" ><b><br><?php echo $s3 ?></b></td>                                                                         

                </tr>
            </tbody>



        </table>
    </div> 
</div>
