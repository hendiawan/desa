<?php

if (isset($_GET['menu'])) {
    $menu = $_GET['menu'];
} else {
    $menu = "";
}
if (isset($_GET['jenis'])) {
    $jenis = $_GET['jenis'];
} else {
    $jenis = "";
}
if ($menu == '') {?>
    <script>
        window.location='index.php?menu=berita&jenis=umum';
    </script>
    <?php
} else if ($menu == 'cover') {
    include "./cover_edit.php";
} else if ($menu == 'cover1') {
    include "./cover1_edit.php";
} else if ($menu == 'cover2') {
    include "./cover2_edit.php";
} else if ($menu == 'input') {
    include "./penduduk/penduduk_view.php";
} else if ($menu == 'kades') {
    include "./kades_edit.php";
} else if ($menu == 'sekdes') {
    include "./sekdes_edit.php";
} else if ($menu == 'stu') {
    include "./stu/lembaga.php";
} else if ($menu == 'stu_add') {
    include "./stu/struktur_input.php";
} else if ($menu == 'lpmd') {
    include "./lembagadesa/lembaga.php";
} else if ($menu == 'lembagaadat') {
    include "./lembagadesa/lembaga.php";
} else if ($menu == 'pkk') {
    include "./lembagadesa/lembaga.php";
} else if ($menu == 'bkd') {
    include "./lembagadesa/lembaga.php";
} else if ($menu == 'krtaruna') {
    include "./lembagadesa/lembaga.php";
} else if ($menu == 'add_stu') {
    include "./lembagadesa/lembaga.add.php";
} else if ($menu == 'add_des') {
    include "./lembagadesa/proker.add.php";
} else if ($menu == 'berita'&&$jenis=='umum') {
    include "./berita/berita.php";
} else if ($menu == 'berita'&&$jenis=='desa') {
    include "./berita/berita.php";
} else if ($menu == 'berita'&&$jenis=='produk') {
    include "./berita/berita.php";
} else if ($menu == 'berita'&&$jenis=='agenda') {
    include "./berita/berita.php";
} else if ($menu == 'berita'&&$jenis=='apbdes') {
    include "./berita/berita.php";
} else if ($menu == 'berita'&&$jenis=='rkpdes') {
    include "./berita/berita.php";
} else if ($menu == 'berita'&&$jenis=='spj') {
    include "./berita/berita.php";
} else if ($menu == 'berita'&&$jenis=='lkpj') {
    include "./berita/berita.php";
} else if ($menu == 'berita'&&$jenis=='lppdes') {
    include "./berita/berita.php";
} else if ($menu == 'berita'&&$jenis=='rpjmdes') {
    include "./berita/berita.php";
} else if ($menu == 'berita'&&$jenis=='rapbdes') {
    include "./berita/berita.php";
} else if ($menu == 'berita'&&$jenis=='rkpdes') {
    include "./berita/berita.php";
} else if ($menu == 'berita'&&$jenis=='peta') {
    include "./berita/berita.php";
} else if ($menu == 'add_berita'&&$jenis=='umum') {
    include "./berita/berita_add.php";
} else if ($menu == 'add_berita'&&$jenis=='desa') {
    include "./berita/berita_add.php";
} else if ($menu == 'add_berita'&&$jenis=='produk') {
    include "./berita/berita_add.php";
} else if ($menu == 'add_berita'&&$jenis=='agenda') {
    include "./berita/berita_add.php";
} else if ($menu == 'add_berita'&&$jenis=='apbdes') {
    include "./berita/berita_add.php";
} else if ($menu == 'add_berita'&&$jenis=='rkpdes') {
    include "./berita/berita_add.php";
} else if ($menu == 'add_berita'&&$jenis=='lppdes') {
    include "./berita/berita_add.php";
} else if ($menu == 'add_berita'&&$jenis=='rpjmdes') {
    include "./berita/berita_add.php";
} else if ($menu == 'add_berita'&&$jenis=='rapbdes') {
    include "./berita/berita_add.php";
} else if ($menu == 'add_berita'&&$jenis=='rkpdes') {
    include "./berita/berita_add.php";
} else if ($menu == 'add_berita') {
    include "./berita/berita_add.php";
} else if ($menu == 'visimisi') {
    include "./visimisi/visimisi.php";
} else if ($menu == 'add_misi') {
    include "./visimisi/visi.add.php";
} else if ($menu == 'edit_visi') {
    include "./visimisi/visi.add.php";
} else if ($menu == 'profil') {
    include "./profil_desa/profil.php";
} else if ($menu == 'edit_sambutan') {
    include "./profil_desa/profil_input.php";
} else if ($menu == 'koment') {
    include "./berita/berita_comment.php";
} else if ($menu == 'update_dp') {
    include "./penduduk/penduduk_input.php";
} else {
    ?>
    <script>
        window.location='index.php?menu=berita&jenis=umum';
    </script>
    <?php

}