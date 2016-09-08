<!DOCTYPE html>
<html>
    
    <head>
        <title>Website Resmi Desa Pendem Kecamatan Janapria</title>
        <link href="../img/loteng.png" rel="shortcut icon">
        <meta content='width=device-width, initial-scale=4, maximum-scale=4, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap time Picker -->
        <link href="../css/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
        <!-- Theme style -->
        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation"></nav>

        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side strech">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h4>
                        Halaman Admin
                        <small>Website Desa Pendem</small>
                    </h4>
                </section>
            </aside><!-- /.right-side -->
         
            <br>
            <!-- Main content -->
            <div class="container">
                <section class="right-side">
                    <div class="row" style="margin-left:15% ">
                        <div class="col-md-5">
                            <div class="box box-primary">                              

                                 
                                <div class="box-body">
                                    <!-- Date dd/mm/yyyy -->
                                    <form method="post" action="./login/proses_login.php">
                                        <?php
                                        if (isset($_GET['error'])) {
                                            echo ' <div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                                <b>Login Gagal! Cek Username Dan Password,</b></b>
                                            </div>';
                                        }
                                        ?>

                                        <div class = "form-group">
                                            <label for = "exampleInputEmail1">Username</label>
                                            <input required = "" name = "user" maxlength = "10" type = "text" class = "form-control" id = "exampleInputEmail1" placeholder = "Username" >
                                        </div>
                                        <div class = "form-group">
                                            <label for = "exampleInputEmail1">Password</label>
                                            <input required = "" name = "pass" maxlength = "30" type = "password" class = "form-control" id = "exampleInputEmail1" placeholder = "Password">
                                        </div>
                                        <input value = "login" type = "submit" name = "simpan" class = "btn btn-primary" style = "width:100%">

                                    </form>
                                </div><!--/.box-body -->
                            </div><!--/.box -->


                        </div><!--/.col (left) -->
                        <div class = "col-md-7">
                        </div><!--/.col (right) -->
                    </div><!--/.row -->

                </section><!--/.content -->

            </div>

        </div><!--./wrapper -->
    </body>
</html>
<script src="../css/bootstrap.css" type="text/css"></script>
<script src="../css/bootstrap.min.css" type="text/javascript"></script>
<script src="../css/AdminLTE.css" type="text/css"></script>
<script src="../css/font-awesome.css" type="text/javascript"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script>

