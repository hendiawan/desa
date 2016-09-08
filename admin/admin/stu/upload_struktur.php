<?php

include '../../../library.php';



$max = 500 * 1024;

$tanggal = date("Y-m-d");
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$tempat = $_POST['tempat'];
$tl = $_POST['tgl'];
$jk = $_POST['jk'];
$pendidikan = $_POST['pendidikan'];
$alamat = $_POST['alamat'];
$phone = $_POST['phone'];

$tgl = date('d-m-Y');
$waktu = date('H-i-s');
$isi = explode('-', $waktu);
$isi[2];

$file = $_FILES['foto']['name'];
$size = $_FILES['foto']['size'];
$tmp = $_FILES['foto']['tmp_name'];

if ($size > $max) {
    $uk = 0;
} else {
    $uk = 1;
}


if ($file != NULL) {

    $extensi = pathinfo($file, PATHINFO_EXTENSION);
    if (isset($_POST['edit'])) {
        $idstruktur = $_POST['id'];
        $tampil = mysql_query("select url_foto from struktur where idstruktur='$idstruktur'");
        $data = mysql_fetch_object($tampil);
        $foto = $data->url_foto;

        if (file_exists('../../../gambar/' . $file) || $uk != 1 || $extensi != "jpg" && $extensi != "JPG") {
            echo 'Cek Kembali Tipe File';
        } else {
          
            $file = $tgl . $waktu . $file;
            $query = mysql_query("select jabatan from struktur where jabatan='$jabatan' and jabatan not in('ptt') ");
            $ada = mysql_num_rows($query);

            unlink("../../../gambar/$foto");
            $gambar_upload = move_uploaded_file($tmp, "../../../gambar/$file");
            $update = mysql_query("update  struktur set nama='$nama',jabatan='$jabatan',tempat='$tempat',jk='$jk',pendidikan='$pendidikan',alamat='$alamat',telp='$phone',url_foto='$file' where idstruktur='$idstruktur'");

            if ($update) {
                ?>
                <script>
                    alert("Data Berhasil Di Update !");
                    window.location = '../index.php';
                </script>
                <?php

            } else {
                echo mysql_error();
            }
        }
    } else {



        if (file_exists('../../../gambar/' . $file) || $uk != 1 || $extensi != "jpg" && $extensi != "JPG") {
            echo 'Cek Kembali Tipe File';
        } else {
            $query = mysql_query("select jabatan from struktur where jabatan='$jabatan' and jabatan not in('ptt') ");
            $ada = mysql_num_rows($query);

            if ($ada > 0) {
                ?>
                <script>
                    alert("Data Ini Telah ada !! ");
                    window.location = '../index.php';
                </script>
                <?php

            } else {
                
               $file = $tgl . $waktu . $file;
                $gambar_upload = move_uploaded_file($tmp, "../../../gambar/$file");
                $mysql_query = mysql_query("insert into struktur (nama,jabatan,tempat,jk,pendidikan,alamat,telp,url_foto,jenis) values ('$nama','$jabatan','$tempat','$jk','$pendidikan','$alamat','$phone','$file','stu')  ");

                if ($mysql_query) {
                    ?>
                    <script>
                        alert("Data Berhasil Di masukkan ");
                        window.location = '../index.php';
                    </script>
                    <?php

                } else {
                    echo mysql_error();
                }
            }
        }
    }
} else {
    $idstruktur = $_POST['id'];
    $update = mysql_query("update  struktur set nama='$nama',jabatan='$jabatan',tempat='$tempat',jk='$jk',pendidikan='$pendidikan',alamat='$alamat',telp='$phone' where idstruktur='$idstruktur'");
    if ($update) {
        ?>
        <script>
            alert("Data Berhasil Di Update ");
            window.location = '../index.php';
        </script>
        <?php

    }
}
?>
