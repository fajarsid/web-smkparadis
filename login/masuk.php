<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= $setting['logo'] ?>" />
    <link rel="stylesheet" type="text/css" href="../dist/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="../plugins/animate/animate.min.css">

    <link rel="stylesheet" type="text/css" href="../dist/bootstrap/css/util.css">
    <link rel="stylesheet" type="text/css" href="../dist/bootstrap/css/main.css">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../assets/modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="../assets/modules/izitoast/css/iziToast.min.css">
    <link href="login.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../assets/modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="../assets/modules/izitoast/css/iziToast.min.css">
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
    </script>
    <!------ Include the above in your HEAD tag ---------->
    <title>LOGIN &mdash; ADMIN <?= $setting['nama_sekolah'] ?> </title>
    <link rel="shortcut icon" href="../<?= $setting['logo'] ?>" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

</head>

<body style="background-color: #999999;">


    <div class="limiter">
        <div class="container-login100">

            <div class='candy hidden-xs'>

            </div>
            <!-- <div class="login100-more" style="background-image: url('../dist/back.jpg');"></div> -->

            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">\
                <div class='logo hidden-xs'><img src="../<?= $setting['logo'] ?>" height="75" /></div>
                <form id="form-login">
                    <div class="wrap-input100 validate-input p-t-50" data-validate="Username is required">
                        <!-- <span class="label-input100">Username</span> -->
                        <input class="input100" type="text" name="username" placeholder="Username...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <!-- <span class="label-input100">Password</span> -->
                        <input class="input100" type="password" name="password" placeholder="Masukkan Password">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" name="login" class="login100-form-btn">
                                Masuk
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <img class="login100-more img-fluid" src="./img/img-login.png"></img>
        </div>
    </div>

    <!-- Page Specific JS File -->
    <script src="../assets/modules/izitoast/js/iziToast.min.js"></script>
    <script src='../plugins/jQuery/jquery-3.2.1.min.js'></script>
    <script src='../dist/bootstrap/js/bootstrap.min.js'></script>

    <script src="../plugins/jQuery/main.js"></script>
    <!-- General JS Scripts -->
    <script src="../assets/modules/jquery.min.js"></script>
    <script src="../assets/modules/popper.js"></script>
    <script src="../assets/modules/tooltip.js"></script>
    <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../assets/modules/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
    <script src="../assets/modules/izitoast/js/iziToast.min.js"></script>
    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

</body>
<script>
$('#form-login').submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'login_cek.php?id=5448dfhcr27467576c78a50vi98j0ruv0w',
        data: $(this).serialize(),
        success: function(data) {
            if (data == "ok") {
                iziToast.success({
                    title: 'Berhasil!',
                    message: 'Anda akan dialihkan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);
            } else {
                iziToast.error({
                    title: 'Maaf !!',
                    message: 'Username atau Password Salah',
                    position: 'topCenter'
                });
            }
        }
    });
    return false;
});
</script>

</html>