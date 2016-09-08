<?php

include '../../../library.php';

$max = 1 * 1024 * 1024;

$tanggal = date("Y-m-d");
$jam = date('h:i');
$header = $_POST['header'];
$isi = $_POST['isi'];
if (isset($_POST['jenis'])) {
    $jenis = $_POST['jenis'];
} else {
    $jenis = 'umum';
}
$file = $_FILES['gambar']['name'];
$size = $_FILES['gambar']['size'];
$tmp = $_FILES['gambar']['tmp_name'];
$FileType_gambar = pathinfo($file, PATHINFO_EXTENSION);

if ($size > $max) {
    $ukuran = 0;
} else {
    $ukuran = 1;
}


if (isset($_POST['edit'])) {
    $id = $_POST['edit'];
    if ($file != NULL) {

        if (file_exists('../../../gambar/' .$file) || $ukuran != 1) {
            ?>
            <script>
                alert("Cek Kembali Ukuran File Yang Di Upload Max : 1Mb ");
                window.location = '../';
            </script>
            <?php

        } else {

            $query = mysql_query("select url_gambar from berita where idberita='$id'");
            $data = mysql_fetch_object($query);
            unlink("../../../gambar/$data->url_gambar");
            $file = date('d-m-y') .date('h-m-s'). $file;
            $sinopsis_upload = move_uploaded_file($tmp, "../../../gambar/$file");
            $mysql_query = mysql_query("update berita set judul='$header',tanggal='$tanggal',jam='$jam',penulis='admin',konten='$isi',url_gambar='$file' where idberita=$id");


            if ($mysql_query) {
                ?>
                <script>
                    alert("Berita Berhasil Di Update ");
                    window.location = '../';
                </script>
                <?php

            } else {
                echo mysql_error();
            }
        }
    } else {
        $mysql_query = mysql_query("update berita set judul='$header',tanggal='$tanggal',jam='$jam',penulis='admin',konten='$isi' where idberita=$id");
        if ($mysql_query) {
            ?>
            <script>
                alert("Berita Berhasil Di Update ");
                window.location = '../';
            </script>
            <?php

        } else {
            echo mysql_error();
        }
    }
} else {
    if (file_exists('../../../gambar/' .$file) || $ukuran != 1) {
        ?>
        <script>    
            alert("Ukuran File: <?php echo $size ?> Cek Kembali Ukuran File Yang Di Upload Max : <?php echo $max ?>  MB ");
            window.location = '../';
        </script>
        <?php

    } else {
     $file = date('d-m-y') . date('h-m-s').$file;
        $sinopsis_upload = move_uploaded_file($tmp, "../../../gambar/$file");
        $mysql_query = mysql_query("insert into berita (judul,tanggal,jam,penulis,konten,url_gambar,jenis) values ('$header','$tanggal','$jam','admin','$isi','$file','$jenis')");

        if ($mysql_query) {
            ?>
            <script>
                alert("Berita Berhasil Di Update ");
                window.location = '../';
            </script>
            <?php

        } else {
            echo mysql_error();
        }
    }
}
?>
