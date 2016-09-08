<?php

include '../../../library.php';
echo $id = $_POST['id'];

$query =  mysql_query("update komentar set status='OK' where idkomentar='$id'") ;

if ($query) {
    ?>
    <script>
        alert('Berhasil Update Data !');
        window.location = '../index.php?menu=koment';
        //            document.getElementById("pesan_gagal").innerHTML = "Gagal Menyimpan Data Password Tidak Valid !";
        //            document.getElementById("pesan_gagal").style.color = "rgb(204, 144, 144)";
    </script><?php

}

