<?php

if (isset($_GET['menu'])) {
    $menu = $_GET['menu'];
} else {
    $menu = "";
}
if ($menu == '') {
    include "./admin/desa/desa_view.php";
} else if ($menu == 'pendataan') {
    include "./admin/desa/penduduk_input.php";
} else if ($menu == 'gallery') {
    include "./admin/desa/gallery_view.php";
} else if ($menu == 'cover') {
    include "./admin/desa/cover_edit.php";
} else if ($menu == 'stu') {
    include "./admin/desa/struktur_view.php";
} else if ($menu == 'sekdes') {
    include "./admin/desa/sekdes_edit.php";
} else if ($menu == 'chart') {
    include "./admin/desa/chart_view.php";
} else if ($menu == 'sejarah') {
    include "./admin/desa/profil_view.php";
} else if ($menu == 'profilwil') {
    include "./admin/desa/profil_wilayah_desa/profil_wilayah.php";
} else if ($menu == 'potensi') {
    include "./admin/desa/profil_wilayah_desa/potensi_desa.php";
} else if ($menu == 'struktur_desa') {
    include "./admin/desa/profil_wilayah_desa/struktur_desa.php";
} else if ($menu == 'bl') {
    include "./admin/desa/berita_view.php";
} else if ($menu == 'chart1') {
    include "./admin/desa/chart_view1.php";
} else if ($menu == 'chart2') {
    include "./admin/desa/chart_view2.php";
} else if ($menu == 'sambutan') {
    include "./admin/desa/profil_view.php";
} else if ($menu == 'wilayah') {
    include "./admin/desa/profil_view.php";
} else if ($menu == 'visimisi') {
    include "./admin/desa/visimisi.php";
} else if ($menu == 'lpmd') {
    include "./admin/desa/lembaga.php";
} else if ($menu == 'krtaruna') {
    include "./admin/desa/lembaga.php";
} else if ($menu == 'lembagaadat') {
    include "./admin/desa/lembaga.php";
} else if ($menu == 'pkk') {
    include "./admin/desa/lembaga.php";
} else if ($menu == 'bkd') {
    include "./admin/desa/lembaga.php";
} else if ($menu == 'desa') {
    include "./admin/desa/dokumen_view.php";
} else if ($menu == 'produk') {
    include "./admin/desa/dokumen_view.php";
} else if ($menu == 'agenda') {
    include "./admin/desa/dokumen_view.php";
} else if ($menu == 'apbdes') {
    include "./admin/desa/dokumen_view.php";
} else if ($menu == 'rkpdes') {
    include "./admin/desa/dokumen_view.php";
} else if ($menu == 'spj') {
    include "./admin/desa/dokumen_view.php";
} else if ($menu == 'lkpj') {
    include "./admin/desa/dokumen_view.php";
} else if ($menu == 'lppdes') {
    include "./admin/desa/dokumen_view.php";
} else if ($menu == 'rpjmdes') {
    include "./admin/desa/dokumen_view.php";
} else if ($menu == 'rkpdes') {
    include "./admin/desa/dokumen_view.php";
} else if ($menu == 'rapbdes') {
    include "./admin/desa/dokumen_view.php";
} else if ($menu == 'rapdes') {
    include "./admin/desa/dokumen_view.php";
} else if ($menu == 'peta') {
    include "./admin/desa/dokumen_view.php";
} else if ($menu == 'apbdes') {
    include "./admin/desa/dokumen_view.php";
} else if ($menu == 'kontak') {
    include "./admin/desa/kontak.php";
}else{
     include "./admin/desa/desa_view.php";
} 