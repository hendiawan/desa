<?php

session_start();
ob_start();
include "../../library.php";
include "../../config/config.php";
$user = antiinjection($_POST['user']);
$pass = antiinjection($_POST['pass']);
//$passlog = $cipher->encrypt($pass, $kunci);

echo $sql = "select * from user where namauser='$user'  and pass='".md5($pass)."' ";
$query = mysql_query($sql);
echo $jml_data = mysql_num_rows($query);
$data = mysql_fetch_assoc($query);
if ($data['level'] == 'admin') {
    
    if ($jml_data > 0) {
        $_SESSION['login-admin'] = "";
        $_SESSION['nama'] = $data['username'];
        $_SESSION['pass'] = $data['pass'];  
        $_SESSION['jenis'] = "admin";
        $_SESSION['pesan_error'] = "eror";
        header("location:../admin/index.php");
    }
}else if($data['level'] == 'super'){
        $_SESSION['login-admin'] = "";
        $_SESSION['nama'] = $data['username'];
        $_SESSION['pass'] = $data['pass'];
        $_SESSION['jenis'] = "super";
        header("location:../admin/index.php");
}
else {
    // header("location:../../index.php?error=1");
}
?>


