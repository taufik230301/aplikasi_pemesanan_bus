<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-DAMRI | Registration Page</title>

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
</head>

<body class="hold-transition register-page">
    <?php if ($this->session->flashdata('eror_register')){ ?>
    <script>
    swal({
        title: "Error!",
        text: "Terjadi Kesalahan, Silahkan Daftar Ulang !",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('error_password')){ ?>
    <script>
    swal({
        title: "Error!",
        text: "Password Tidak Sama, Silahkan Daftar Ulang !",
        icon: "error"
    });
    </script>
    <?php } ?>
    <div class="register-box">
        <div class="register-logo">
            <a href="<?=base_url();?>assets/admin/index2.html"><b>Aplikasi </b>E-BUS</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Silahkan Daftar !</p>

                <form action="<?=base_url();?>Auth/proses_register" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="pass" type="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="re_pass" type="password" class="form-control" placeholder="Retype password"
                            required>
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
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>



                <a href="<?=base_url();?>Auth/login" class="text-center">Saya sudah punya akun</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="<?=base_url();?>assets/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?=base_url();?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url();?>assets/admin/dist/js/adminlte.min.js"></script>
</body>

</html>