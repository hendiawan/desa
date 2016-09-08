<?php

function antiinjection($data) {
    $filter_sql = stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES)));
    return $filter_sql;
}

include "cipher.php"; // panggil file nya
$cipher = new Cipher(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
$kunci = "bismillaahirrohmaa nirrohiim"; // kunci
?>