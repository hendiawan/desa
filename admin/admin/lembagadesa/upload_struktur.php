<?php
include '../../../library.php';


include '../../../config/config.php';
$tanggal = date("Y-m-d");
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$tempat = $_POST['tempat'];
$tl = $_POST['tgl'];
$jk = $_POST['jk'];
$pendidikan = $_POST['pendidikan'];
$alamat = $_POST['alamat'];
$phone = $_POST['phone'];

if (isset($_POST['edit'])) {
    $id = $_POST['edit'];
}

if (isset($_POST['jenis'])) {
    $jenis = $_POST['jenis'];
}

if (isset($_POST['edit'])) {

    $update = mysql_query("update  struktur set nama='$nama',jabatan='$jabatan',tempat='$tempat',jk='$jk',pendidikan='$pendidikan',alamat='$alamat',telp='$phone' where idstruktur='$id'");

    if ($update) {
        ?>
        <script>
            alert("Data Berhasil Di Update !");
            window.location = '../index.php?menu=<?php echo $jenis ?>';
        </script>
        <?php
    } else {
        echo mysql_error();
    }
} else {


    $jumlah = mysql_num_rows(mysql_query("SELECT * FROM `struktur` WHERE jenis='$jenis' and jabatan='$jabatan' and jabatan not in('anggota')"));

    if ($jumlah > 0) {
        ?>
        <script>
            alert("Data ini telah ada ");
            window.location = '../index.php?menu=add_stu&jenis=<?php echo $jenis ?>';
        </script>
        <?php
    } else {

        $mysql_query = mysql_query("insert into struktur (nama,jabatan,tempat,jk,pendidikan,alamat,telp,jenis) values ('$nama','$jabatan','$tempat','$jk','$pendidikan','$alamat','$phone','$jenis')  ");

        if ($mysql_query) {
            ?>
            <script>
                alert("Data Berhasil Di masukkan ");
                window.location = '../index.php?menu=<?php echo $jenis ?>';
            </script>
            <?php
        } else {
            echo mysql_error();
        }
    }
}
?>
