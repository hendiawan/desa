<?php

include '../../../library.php';
if (isset($_POST['simpan'])) {

    $id = $_POST['id'];
    $jenis = $_POST['jenis'];
    $dusun = $_POST['dusun'];
    $jumlah_penduduk = $_POST['jp'];
    $jumlah_laki = $_POST['l'];
    $jumlah_perempuan = $_POST['p'];
    $jumlah_perempuan = $_POST['p'];
    $jumlah_guru = $_POST['guru'];
    $jumlah_tani = $_POST['tani'];
    $jumlah_dagang = $_POST['dagang'];
    $jumlah_dokter = $_POST['dokter'];
    $jumlah_perawat = $_POST['perawat'];
    $jumlah_bidan = $_POST['bidan'];
    $jumlah_tni = $_POST['tni'];
    $jumlah_polri = $_POST['polri'];
    $jumlah_swasta = $_POST['swasta'];
    $jumlah_tb = $_POST['tb'];
    $jumlah_sd = $_POST['sd'];
    $jumlah_smp = $_POST['smp'];
    $jumlah_sma = $_POST['sma'];
    $jumlah_s1 = $_POST['s1'];
    $jumlah_s2 = $_POST['s2'];
    $jumlah_s3 = $_POST['s3'];
    $jumlah_ts = $_POST['ts'];

    if ($jenis == '0') {

        $query = mysql_query("select dusun from dpenduduk where dusun='$dusun' ");
        echo "dusun: " . $cek = mysql_num_rows($query);

        if ($cek > 0) {
            ?>
            <script>
                alert('Silahkan Pilih Dusun Yang Belum Di Input !');
            </script><?php

        } else {
            $sql = "INSERT INTO `desa`.`dpenduduk` (`iddp`, `dusun`, `jp`, `l`, `p`, `guru`, `dagang`, `tani`, `dokter`, `perawat`, `bidan`, `tni`, `polri`, `swasta`, `tb`, `sd`, `smp`, `sma`, `s1`, `s2`, `s3`, `ts`)"
                    . " VALUES (NULL, '$dusun', '$jumlah_penduduk', '$jumlah_laki', '$jumlah_perempuan' ,"
                    . "'$jumlah_guru', '$jumlah_dagang', '$jumlah_tani', '$jumlah_dokter', '$jumlah_perawat', '$jumlah_bidan', '$jumlah_tni', '$jumlah_polri', '$jumlah_swasta', '$jumlah_tb', '$jumlah_sd', '$jumlah_sma', '$jumlah_sma', '$jumlah_s1', '$jumlah_s2', '$jumlah_s3', '$jumlah_ts');";

            $simpan = mysql_query($sql);
            if ($simpan) {
                ?>
                <script>
                    alert('Berhasil Simpan Data !');
                    window.location = '../index.php?';
                </script><?php

            }
        }
    } else {
        $sql = "update dpenduduk set dusun='$dusun',jp='$jumlah_penduduk',l='$jumlah_laki',p='$jumlah_perempuan',guru='$jumlah_guru',dagang='$jumlah_dagang',tani='$jumlah_tani',dokter='$jumlah_dokter',perawat='$jumlah_perawat',bidan='$jumlah_bidan',tni='$jumlah_tni',polri='$jumlah_polri',swasta='$jumlah_swasta',tb='$jumlah_tb', sd='$jumlah_sd',smp='$jumlah_smp', sma='$jumlah_sma', `s1`='$jumlah_s1', `s2`='$jumlah_s2', `s3`='$jumlah_s3', `ts`='$jumlah_ts'"
                . "where iddp='$id'";
                
        $simpan = mysql_query($sql);
        if ($simpan) {
            ?>
            <script>
                alert('Berhasil Simpan Data !');
                window.location = '../index.php?';
            </script><?php

        }
    }
}
?>