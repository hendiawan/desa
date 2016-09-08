
<br>
<div class="col-md-12" >
    <div class="panel panel-default">
        <div class="box-header">
            <center>    
                <h4   class="box-title">Gallery Foto <i class="fa fa-camera"></i> </h4> 
            </center>
        </div>
    </div>
    <div class="panel panel-default" >
        <div style="margin-left:10%">
            <?php
            if (isset($_POST['next'])) {
                $dari = $_POST['nilai'];
                $dari = $dari + 9;
            } else {
                $dari = 0;
            }



            $mysql_query = mysql_query("select * from berita order by idberita desc limit $dari,9");

//          echo "Record".  mysql_num_rows($mysql_query);
//          echo "Dari ".  $dari."<br>";
//             

            if (mysql_num_rows($mysql_query) < 9 && mysql_num_rows($mysql_query) != 0) {
                $dari = $dari - (mysql_num_rows($mysql_query));
                $mysql_query = mysql_query("select * from berita order by idberita desc limit $dari,9");
            }

            if (mysql_num_rows($mysql_query) == 0) {

                $mysql_query = mysql_query("select * from berita order by idberita desc limit 0,9");
                $dari = 0;
            }


// $data = mysql_fetch_object($mysql_query);
//  print_r($data);
            ?>
            <?php
            while ($data = mysql_fetch_object($mysql_query)) {
                ?>


                <!-- form start -->

                <?php
                $tipe = $FileType_gambar = pathinfo($data->url_gambar, PATHINFO_EXTENSION);

                if ($tipe != "jpg" && $tipe != "JPG") {
                    $a = 'hidden=""';
                } else {
                    $a = '';
                }
                ?>
                <a <?php echo $a ?> href="index.php?menu=bl&idb=<?php echo $data->idberita ?>" >  
                    <img  class="img-thumbnail" alt="140x140" src="./gambar/<?php echo $data->url_gambar ?>"style="width: 30%; height: 20%;  ">
                </a>  


                <?php
            }
            ?>
        </div>

    </div>   



    <div class="panel panel-default">
        <form action="index.php?menu=gallery" method="post" >
            <div hidden="">
                <input  required="" name="nilai" value="<?php echo $dari; ?>" placeholder="Nama" class="form-control" type="text">
            </div>
            <center>
                <button name="next" type="submit" class="btn btn-primary btn-flat" >More</button>
            </center>
        </form>

    </div><!-- /.box -->



</div>
<!-- /.box -->   