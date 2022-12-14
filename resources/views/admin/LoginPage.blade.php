<!DOCTYPE html>
<html lang="en">

<head>
    <title>LoginPage</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/adminlogin.css">
</head>

<body class="body">
    <!-- <div class="container-fluid logo text-center">
        <img src="images/logo.jpg" alt="">
    </div> -->

    <p> @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
     @endif</p>


     
    <div class="container-fluid login mb-3 pb-5" style="margin-top: 10%;">
        <form   method="POST"  action="{{ route('admin.login.submit') }}">
            @csrf
            <div class="form-title">
                <h4 class="text-center">Multilingual Online Auction System</h4>
                <h5>Input Your Details To Have Access To The Admin Dashboard</h5>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

            </div>
            <div class="form-group">
                <div class="input-container">
                    <i class="fas fa-sign-in-alt icon"></i>
                    <input type="text" class="form-control"  placeholder="" id="demo" name="email" >
                    <label for="">Enter Your Email</label>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-container">
                    <i class="fas fa-lock icon"></i>
                    <input type="password" class="form-control" placeholder="" name="password"  >
                    <label for="">Password</label>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>
            <button type="submit"  class="btn btn-outline-primary">Login</button>
            <!-- <button type="submit" class="btn btn-outline-primary">Login</button> -->
        </form>
    </div>
    <div class="container-fluid">
        <div class="footer text-center">
            2022 &copy; Multilingual Online Auction System.
        </div>
    </div>
    <script>
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();



        document.getElementById("numeric_input")
            .addEventListener("keypress", function(evt) {
                if (evt.which < 48 || evt.which > 57) {
                    evt.preventDefault();
                }
            });
    </script>
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <!-- <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script> -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/nice-select.js"></script> -->
    <script src="../assets/js/counterup.min.js"></script>
    <!-- <script src="assets/js/owl.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/yscountdown.min.js"></script> -->
    <script src="../assets/js/jquery-ui.min.js"></script>
    <!-- <script src="assets/js/main.js"></script> -->

    <script src="../assets/js/adminlte.min.js"></script>
    <!-- <script src="../js/jquery.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/adminlte.min.js"></script> -->
</body>

</html>