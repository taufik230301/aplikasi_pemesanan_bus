<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Damri Unsri | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="icon" type="image/png" href="<?= base_url();?>assets/img/logo_damri.ico" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/dist/css/adminlte.min.css">
    <script src="<?=base_url();?>node_modules/sweetalert/dist/sweetalert.min.js"></script>

    <style>
    body {
        background-image: url("http://localhost/pemesanan_damri_unsri/assets/img/damri_background.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
        background-attachment: fixed;
        background-position: center;

    }

    .login-logo{
        background-color: white;
    }
    </style>
</head>

<body class="hold-transition login-page">
    <?php if ($this->session->flashdata('register')){ ?>
    <script>
    swal({
        title: "Success!",
        text: "Anda Telah Berhasil Registrasi, Silahkan Login !",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('error_no_session')){ ?>
    <script>
    swal({
        title: "Error!",
        text: "Sesi anda habis, silahkan login ulang !",
        icon: "error"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('eror_register')){ ?>
    <script>
    swal({
        title: "Error!",
        text: "Password Tidak Sama, Silahkan Ketik Ulang !",
        icon: "error"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('loggin_err_no_user')) {
    $message = $this->session->flashdata('loggin_err_no_user');
    ?>
    <script>
    swal({
        title: "Error!",
        text: "<?=$message?>",
        icon: "error"
    });
    </script>
    <?php }?>
    <?php if ($this->session->flashdata('loggin_err_no_pass')) {
    $message = $this->session->flashdata('loggin_err_no_pass');
    ?>
    <script>
    swal({
        title: "Error!",
        text: "<?=$message?>",
        icon: "error"
    });
    </script>
    <?php }?>
    <div class="login-box">
        <div class="login-logo">
            <a href="<?=base_url();?>assets/admin/index2.html"><b>Aplikasi </b>Damri Unsri </b><img
                    src="<?=base_url();?>assets/img/logo_damri.jpg" style="width:25%" alt="Damri"></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Silahkan Login !</p>

                <form action="<?=base_url();?>Auth/proses_login" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email" name="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">

                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mb-0">
                    <a href="<?=base_url();?>Auth/register" class="text-center">Buat Akun Baru ?</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?=base_url();?>assets/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?=base_url();?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url();?>assets/admin/dist/js/adminlte.min.js"></script>
</body>

</html>