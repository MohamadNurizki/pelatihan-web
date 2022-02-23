<?php
session_start();
error_reporting(0);
if(isset($_SESSION['user_level'])){
    if($_SESSION['user_level'] == 0){
        header('location:admin/admin-home.php');
    }
    if($_SESSION['user_level'] == 1){
        header('location:user/user-home.php');
    }
}
else{
   

include('layout-head.php');
?>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <?php
                                        if($_GET['auth'] =='false'){
                                            ?>
                                            <div class="container-fluid">
                                                <div class="row" style="display: flex; justify-content: flex-end">
                                                    <div class="alert alert-danger alert-dismissible fade show alertnotif" role="alert">
                                                    <strong>Username / Password salah!</strong>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    ?>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login!</h1>
                                    </div>
                                    <form class="user" method="POST" action="login-proses.php">
                                        <div class="form-group">
                                            <input type="text" name="user_name" class="form-control form-control-user" required="true" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="user_pass" class="form-control form-control-user" required="true" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" name="proses_login" class="btn btn-primary btn-user btn-block" value="Login">
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
        <!-- Additional Script -->

<?php 
}
    include('layout-foot.php');
?>