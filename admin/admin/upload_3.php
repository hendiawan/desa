<?php

include '../../library.php';

$max = 1 * 1024 * 1024;

$tanggal = date("Y-m-d");
$ket = $_POST['ket'];
$file = $_FILES['gambar']['name'];
$size = $_FILES['gambar']['size'];
$tmp = $_FILES['gambar']['tmp_name'];
$extensi = pathinfo($file, PATHINFO_EXTENSION);

if ($size > $max) {
    $size = 0;
} else {
    $size = 1;
}


echo "Keterangan : " . $ket . "<br>";
echo "Nama File : " . $file . "<br>";
echo "Nama Ukuran : " . $size . "<br>";
echo "Nama Tmp : " . $tmp . "<br>";
echo "Exstensi : " . $extensi . "<br>";

if (file_exists('../../gambar/' . $file) || $size != 1 || $extensi != "jpg" && $extensi != "JPG") {
    echo 'Cek Kembali Tipe File';
} else {
//    echo 'Belum Ada';

    $data = mysql_fetch_object(mysql_query("select header2 from konten"));

    unlink("../../gambar/$data->header2");

    $sinopsis_upload = move_uploaded_file($tmp, "../../gambar/$file");
    $mysql_query = mysql_query("update konten set header2='$file',ket2='$ket' ");

    if ($mysql_query) {
        ?>
        <script>
        alert("Gambar Berhasil Di Update ");
        window.location='index.php';
        </script>
        <?php

    } else {
        echo mysql_error();
    }
}
?>
