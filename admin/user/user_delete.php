<?php
    include '../../library.php';
    $username=$_GET['u'];
    $sql_hapus_user    = "delete from user where username='$username'";
    $query_delete      = mysql_query($sql_hapus_user);
    if ($query_delete) {
        ?>
        <script>
            alert("Data User Berhasil Di Hapus !!");
            window.location="../index.php"
        </script>    
        <?php
    }

?>