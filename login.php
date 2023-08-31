<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="img/logo-htci.png">
    <title>HTCI - Honda Tiger Club Indonesia</title>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background: url(https://images.unsplash.com/photo-1561211974-8a2737b4dcac?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80); background-size: cover;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                                        <div class="form-group">
                                            <input id="username" type="text" class="form-control form-control-user" name="username" placeholder="Masukan Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control form-control-user" name="password" placeholder="Masukan Password" required>
                                        </div>

                                        <button type="submit" onclick="validate();" class="btn btn-primary btn-user btn-block">Login</button>
                                        <a href="index.php" class="btn btn-primary btn-block" style="margin-top: 10px;">
                                            Halaman Dashboard
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- validasi login-->
    <script>
        function validate() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username == "admin" && password == "admin") {
                alert("Login Berhasil");
            } else {
                alert("Wrong username or password. Please try again.");
            }
        }
    </script>
    <!-- validasi end-->
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>