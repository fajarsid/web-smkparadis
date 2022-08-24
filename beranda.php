<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <title><?= $setting['nama_sekolah'] ?></title>
    <!-- META DISKRIPSI-->
    <meta name="description"
        content="Mari bergabung Bersama Kami di <?= $setting['nama_sekolah'] ?>, Pendaftaran Peserta didik Baru Tahun <?= date('Y') ?> Kembali dibuka ">
    <meta name="keywords" content="" />

    <!-- Vendor -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />

    <link href="https://unbk.kemdikbud.go.id/vendor/chart/Chart.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/modules/izitoast/css/iziToast.min.css">

    <link href="https://unbk.kemdikbud.go.id/assets/css/front.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?= $setting['logo'] ?>" />

    <link rel="stylesheet" href="assets/css/1.css">
    <link rel="stylesheet" href="assets/css/2.css">
    <link rel="stylesheet" href="assets/css/3.css">

    <link rel="stylesheet" href="assets/css/components2.css">


    <!-- ===============FrontEnd================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" href="assets/modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">
    <!--WAKTU JALAN-->
    <link rel="stylesheet" type="text/css" href="assets/front/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/front/vendor/countdowntime/flipclock.css">
    <link rel="stylesheet" type="text/css" href="assets/front/css/main.css">
    <!--===============================================================================================-->


    <!-- whatsapp -->
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/venom-button.min.css" />
    <script type="text/javascript" src="assets/js/venom-button.min.js"></script>


    <!-- Start GA -->

    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-94034622-3');
    </script>
    <?php
	$akhir  = new DateTime($setting['tgl_pengumuman']); //Waktu awal
	$awal = new DateTime(); // Waktu sekarang atau akhir
	$diff  = $awal->diff($akhir);

	?>
</head>

<body data-spy="scroll" data-target="#menu" data-offset="100">
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container">
                <a class="navbar-brand" href=".">
                    <img src="<?= $setting['logo'] ?>" height="50" />
                    <div class="home-header-text d-none d-sm-block text-center">

                        <h6><?= $setting['nama_sekolah'] ?></h6>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#feature">Jurusan</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#validation">Visi Misi</a>
                        </li>
                    </ul>
                    <div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline" href="./login">Admin</a><a
                            class="btn btn-primary ms-3" href="#manager">Sign Up</a></div>
                </div>
            </div>
        </nav>
        <section class="pt-7">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-md-start text-center py-6">
                        <h1 class="mb-4 fs-9 fw-bold">Selamat Datang <br> di Website SMK Paradis</h1>
                        <p class="mb-6 lead text-secondary">Merupakan salah satu Lembaga Pendidikan Menengah Kejuruan di
                            Kabupaten Sukabumi<br class="d-none d-xl-block" />Jawa Barat yang menyelenggarakan Program
                            Pendidikan Kejuruan 4 Tahun</p>
                        <div class="text-center text-md-start"><a class="btn btn-primary me-3 btn-lg" href="#!"
                                role="button">Get started</a></div>
                    </div>
                    <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid"
                            src="assets/img/hero/hero-img.png" alt="" /></div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5 pt-md-9 mb-6" id="feature">

            <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block"
                style="background-image:url(assets/img/category/shape.png);opacity:.5;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <h1 class="fs-9 fw-bold mb-4 text-center"> Jurusan</h1>
                <div class="row">
                    <!-- <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon1.png"
                            width="75" alt="Feature" />
                        <h4 class="mb-3"><?= $jurusan['nama_jurusan'] ?></h4>
                        <p class="mb-0 fw-medium text-secondary">While most people enjoy casino gambling,</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon2.png"
                            width="75" alt="Feature" />
                        <h4 class="mb-3">Design surveys</h4>
                        <p class="mb-0 fw-medium text-secondary">Sports betting,lottery and bingo playing for the fun
                        </p>
                    </div> -->
                    <div class="col-lg-12 col-sm-6 mb-2 text-center"> <img class="mb-3 ms-n3"
                            src="assets/img/category/icon3.png" width="75" alt="Feature" />
                        <h4 class="mb-3">Komputer</h4>
                        <p class="mb-0 fw-medium text-secondary">Menghasilkan Lulusan Komputer Unggul.</p>
                    </div>
                    <!-- <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon4.png"
                            width="75" alt="Feature" />
                        <h4 class="mb-3">Five second tests</h4>
                        <p class="mb-0 fw-medium text-secondary">Personal choices and the overall personality of the
                            person.</p>
                    </div> -->
                </div>
                <div class="text-center"><a class="btn btn-primary" href="#!" role="button">SIGN UP NOW</a></div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5" id="validation">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-2 fs-7 fw-bold">Visi & Misi</h2>
                        <br>
                        <h4 class="fs-1 fw-bold">Visi</h4>
                        <p class="mb-4 fw-medium text-secondary">Menjadi Sekolah Agen Perubahan yan Berakhlak, Cerdas,
                            Terampil Dan Berdaya Guna</p>
                        <h4 class="fs-1 fw-bold">Misi</h4>
                        <p class="mb-4 fw-medium text-secondary">1. Menjungjung tinggi nilai-nilai agama, budaya dan
                            bangsa<br />.....</p>
                        <h4 class="fs-1 fw-bold">Startegi</h4>
                        <p class="mb-4 fw-medium text-secondary">1. Menyiapkan peserta didik agar menjadi manusia
                            produktif dan berdaya guna.....<br />.....</p>
                    </div>
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/validation/validation.png" alt="" />
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5" id="manager">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/manager/manager.png" alt="" /></div>
                    <div class="col-sm-6 d-flex align-items-center">
                        <div class="col-md-12 animated bounceInLeft">
                            <?php if ($setting['jenjang'] == 1) { ?>
                            <div class="card">
                                <div class="card-header bg-info">
                                    <h4>Formulir Pendaftaran</h4>
                                </div>
                                <form id="form-daftar">
                                    <div class="card-body">
                                        <input type="date" name="tgl_daftar" class="form-control datepicker"
                                            value="<?= $daftar['tgl_daftar'] ?>" hidden>
                                        <div class="form-row">
                                            <label for="asal">JURUSAN / PEMINATAN</label>
                                            <select class="form-control select2" style="width: 100%" name="jurusan"
                                                id="jurusan">
                                                <option value=""></option>
                                                <?php $qu = mysqli_query($koneksi, "select * from jurusan where id='1'");
														while ($jur = mysqli_fetch_array($qu)) {
														?>
                                                <option value="<?= $jur['id_jurusan'] ?>">
                                                    <?= $jur['nama_jurusan'] ?></option>
                                                <?php } ?>

                                            </select>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="jenis">JENIS PENDAFTARAN</label>
                                                <select class="form-control" name="jenis" id="jenis">
                                                    <option value="1">Siswa Baru</option>
                                                    <option value="2">Pindahan</option>
                                                </select>
                                            </div>
                                            <input type="hidden" class="form-control datepicker" name="tgl_daftar"
                                                required>
                                            <div class="form-group col-md-6">
                                                <label for="nisn">NISN* Sebagai Username Anda</label>
                                                <input type="number" maxlength="10" class="form-control" name="nisn"
                                                    placeholder="NISN" autocomplete="off" required>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nama">NAMA LENGKAP*</label>
                                                <input type="text" class="form-control" name="nama"
                                                    placeholder="Nama Lengkap" autocomplete="off" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nohp">NO HANDPHONE</label>
                                                <input type="number" class="form-control" name="nohp"
                                                    placeholder="No HP Whatsapp" required>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="tempat">TEMPAT LAHIR</label>
                                                <input type="text" class="form-control" name="tempat" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="tgllahir">TANGGAL LAHIR</label>
                                                <input type="date" class="form-control datepicker" name="tgllahir"
                                                    required>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword4">PASSWORD (Mohon Diingat!)</label>
                                            <input type="password" class="form-control" name="password"
                                                id="inputPassword4" placeholder="Password" required>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <a href="#"
                                                    onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">Refresh
                                                    Kode</a>

                                                <img class="p-b-5" id="captcha" src="securimage/securimage_show.php"
                                                    alt="CAPTCHA Image" style="height:70px" /><br>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input class="form-control" type="text" name="kodepengaman"
                                                    placeholder="masukan kode" required>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-header bg-white">
                                        <button id='btnsimpan' type="submit"
                                            class="btn btn-lg btn-primary">DAFTAR</button>
                                    </div>
                                </form>
                            </div>
                            <?php } else { ?>
                            <div class="card">
                                <div class="card-header bg-info">
                                    <h4>Formulir Pendaftaran</h4>
                                </div>
                                <form id="form-daftar2">
                                    <div class="card-body">
                                        <input type="date" name="tgl_daftar" class="form-control datepicker"
                                            value="<?= $daftar['tgl_daftar'] ?>" hidden>
                                        <div class="form-row">
                                            <label for="asal">JURUSAN / PROGRAM</label>
                                            <select class="form-control select2" style="width: 100%" name="jurusan"
                                                id="jurusan">
                                                <option value=""></option>
                                                <?php $qu = mysqli_query($koneksi, "select * from jurusan");
														while ($jur = mysqli_fetch_array($qu)) {
														?>
                                                <option value="<?= $jur['id_jurusan'] ?>">
                                                    <?= $jur['nama_jurusan'] ?></option>
                                                <?php } ?>

                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="jenis">JENIS PENDAFTARAN</label>
                                                <select class="form-control" name="jenis" id="jenis">
                                                    <option value="1">Siswa Baru</option>
                                                    <option value="2">Pindahan</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nisn">NISN* Sebagai Username Anda</label>
                                                <input type="number" maxlength="10" class="form-control" name="nisn"
                                                    placeholder="NISN" autocomplete="off" required>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nama">NAMA LENGKAP*</label>
                                                <input type="text" class="form-control" name="nama"
                                                    placeholder="Nama Lengkap" autocomplete="off" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nohp">NO HANDPHONE</label>
                                                <input type="number" class="form-control" name="nohp"
                                                    placeholder="No HP Whatsapp" required>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="tempat">TEMPAT LAHIR</label>
                                                <input type="text" class="form-control" name="tempat" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="tgllahir">TANGGAL LAHIR</label>
                                                <input type="date" class="form-control datepicker" name="tgllahir"
                                                    required>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword4">PASSWORD (Mohon Diingat!)</label>
                                            <input type="password" class="form-control" name="password"
                                                id="inputPassword4" placeholder="Password" required>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <a href="#"
                                                    onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">Refresh
                                                    Kode</a>

                                                <img class="p-b-5" id="captcha" src="securimage/securimage_show.php"
                                                    alt="CAPTCHA Image" style="height:70px" /><br>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input class="form-control" type="text" name="kodepengaman"
                                                    placeholder="masukan kode" required>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button id='btnsimpan' type="submit" class="btn btn-lg btn-primary">SIMPAN
                                            DATA</button>
                                    </div>
                                </form>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-2 pb-lg-5">

            <div class="container">
                <div class="row border-top border-top-secondary pt-7">
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-6 mb-lg-0 mb-sm-2 order-1 order-md-1 order-lg-1"> <a
                            class="navbar-brand" href="javascript:;">
                            <img src="<?= $setting['logo'] ?>" height="30" />
                            <div class="home-header-text d-none d-sm-block">
                                <h5><?= $setting['nama_sekolah'] ?></h5>
                            </div>
                        </a></div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 order-3 order-md-3 order-lg-2">
                        <p class="fs-2 mb-lg-4">Quick Links</p>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">About
                                    us</a></li>
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Blog</a>
                            </li>
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none"
                                    href="#!">Contact</a></li>
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 order-4 order-md-4 order-lg-3">
                        <p class="fs-2 mb-lg-4">Legal stuff</p>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none"
                                    href="#!">Disclaimer</a></li>
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Privacy
                                    Policy</a></li>
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Terms of
                                    Service</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-4 mb-lg-0 order-2 order-md-2 order-lg-4">
                        <p class="fs-2 mb-lg-4">
                            Sudah Punya Akun ?</p>

                        <form id="form-login" class="mb-3">
                            <div class="form-group">
                                <input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control"
                                    name="username" placeholder="Masukkan NISN" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="inputPassword4"
                                    placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-login" id="btnsimpan">
                                Masuk
                            </button>
                        </form>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="text-center py-0">
            <div class="container">
                <div class="container border-top py-3">
                    <div class="row justify-content-between">
                        <div class="col-12 col-md-auto mb-1 mb-md-0">
                            Copyright &copy; <?= date('Y') ?> <?= $setting['nama_sekolah'] ?>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    <!-- Whatsapp -->
    <div id="myButton"></div>

    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
        rel="stylesheet">
    <!-- Js FrontEnd AKhir -->
    <script>
    var baseURL = '/';
    var uniqueID = 'd8ac8098665d68759eeda768373bb6c2';
    var chartData = JSON.parse(
        '[{"title":"SMK","data":[91.61,7.81,0.58]},{"title":"MA","data":[88.33,11.07,0.6]},{"title":"SMA","data":[89.69,8.33,1.98]},{"title":"SMP","data":[59.15,24.1,16.75]},{"title":"MTs","data":[79.46,19.25,1.29]},{"title":"Nasional","data":[74.84,17.31,7.85]}]'
    );
    var chartLabel = JSON.parse('["Mandiri","Sekolah Lain","UNKP"]');
    </script>

    <!-- Vendor -->
    <script src="https://unbk.kemdikbud.go.id/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="https://unbk.kemdikbud.go.id/vendor/jquery/jquery.form.min.js"></script>
    <script src="https://unbk.kemdikbud.go.id/vendor/bootstrap-4/js/bootstrap.min.js"></script>
    <script src="https://unbk.kemdikbud.go.id/vendor/bootstrap-4/js/popper.min.js"></script>
    <script src="https://unbk.kemdikbud.go.id/vendor/wow/js/wow.min.js"></script>
    <script src="https://unbk.kemdikbud.go.id/vendor/chart/Chart.min.js"></script>

    <!-- Assets -->
    <script src="https://unbk.kemdikbud.go.id/assets/js/front.min.js"></script>
    <!-- Assets -->

    <script src="assets/modules/izitoast/js/iziToast.min.js"></script>
    <script src="assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="assets/modules/popper.js"></script>
    <script src="assets/modules/tooltip.js"></script>
    <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="assets/modules/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>
    <!-- JS Libraies -->
    <script src="assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="assets/modules/izitoast/js/iziToast.min.js"></script>
    <!-- Page Specific JS File -->
    <!-- JS DATATABLE -->
    <script src="assets/modules/datatables/datatables.min.js"></script>
    <script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
<!-- whatsapp -->
<script type="text/javascript">
$("#myButton").venomButton({
    phone: "6281282116880",
    popupMessage: "Hello Bunda, butuh bantuan?",
    message: "Saya mau order doodle.",
    showPopup: true,
    position: "right",
    linkButton: false,
    showOnIE: false,
    headerTitle: "Welcome!",
    headerColor: "#FEC913",
    backgroundColor: "#FEC913",
    buttonImage: '<img src="assets/img/operator.png" />',
});
</script>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(["_setAccount", "UA-36251023-1"]);
_gaq.push(["_setDomainName", "jqueryscript.net"]);
_gaq.push(["_trackPageview"]);

(function() {
    var ga = document.createElement("script");
    ga.type = "text/javascript";
    ga.async = true;
    ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") +
        ".google-analytics.com/ga.js";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(ga, s);
})();
</script>
<script>
try {
    fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", {
            method: "HEAD",
            mode: "no-cors"
        }))
        .then(function(response) {
            return true;
        })
        .catch(function(e) {
            var carbonScript = document.createElement("script");
            carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
            carbonScript.id = "_carbonads_js";
            document.getElementById("carbon-block").appendChild(carbonScript);
        });
} catch (error) {
    console.log(error);
}
</script>

</html>
<script type="text/javascript">
$('.loader').fadeOut('slow');
$(document).ready(function() {
    $('.klikmenu').click(function() {
        var menu = $(this).data('id');
        if (menu == "beranda") {
            $('#btndaftar').show();
            $('#isi_load').load('home.php');
        } else if (menu == "pendaftaran") {
            $('#btndaftar').hide();
            $('#isi_load').load('pendaftaran.php');
        } else if (menu == "daftar") {
            $('#isi_load').load('datadaftar.php');
        } else if (menu == "siswa") {
            $('#isi_load').load('siswa.php');
        } else if (menu == "pengumuman") {
            $('#isi_load').load('pengumuman.php');
        } else if (menu == "login") {
            $('#isi_load').load('login.php');
        }
    });
    // halaman yang di load default pertama kali
    $('#isi_load').load('home.php');
});
</script>
<script>
$('#form-login').submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'crud_web.php?pg=login',
        data: $(this).serialize(),
        beforeSend: function() {
            $('#btnsimpan').prop('disabled', true);
        },
        success: function(data) {
            var json = $.parseJSON(data);
            $('#btnsimpan').prop('disabled', false);
            if (json.pesan == 'ok') {
                iziToast.success({
                    title: 'Mantap!',
                    message: 'Login Berhasil',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.href = "user";
                }, 2000);

            } else {
                iziToast.error({
                    title: 'Maaf!',
                    message: json.pesan,
                    position: 'topCenter'
                });
            }
            //$('#bodyreset').load(location.href + ' #bodyreset');
        }
    });
    return false;
});
if (jQuery().daterangepicker) {
    if ($(".datepicker").length) {
        $('.datepicker').daterangepicker({
            locale: {
                format: 'YYYY-MM-DD'
            },
            singleDatePicker: true,
        });
    }
    if ($(".datetimepicker").length) {
        $('.datetimepicker').daterangepicker({
            locale: {
                format: 'YYYY-MM-DD hh:mm'
            },
            singleDatePicker: true,
            timePicker: true,
            timePicker24Hour: true,
        });
    }
    if ($(".daterange").length) {
        $('.daterange').daterangepicker({
            locale: {
                format: 'YYYY-MM-DD'
            },
            drops: 'down',
            opens: 'right'
        });
    }
}
if (jQuery().select2) {
    $(".select2").select2();
}
</script>
<script>
$('#form-daftar').submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'crud_web.php?pg=simpan',
        data: $(this).serialize(),
        beforeSend: function() {
            $('#btnsimpan').prop('disabled', true);
        },
        success: function(data) {
            var json = $.parseJSON(data);
            $('#btnsimpan').prop('disabled', false);
            if (json.pesan == 'ok') {
                iziToast.success({
                    title: 'Mantap!',
                    message: 'Data berhasil disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    $('#home').load('konfirmasi.php?id=' + json.id + '&nisn=' + json.nisn +
                        '&pass=' + json.pass + '&nama=' + json.nama);
                }, 2000);

            } else {
                iziToast.error({
                    title: 'Maaf!',
                    message: json.pesan,
                    position: 'topCenter'
                });
                document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math
                    .random();

            }
            //$('#bodyreset').load(location.href + ' #bodyreset');
        }
    });
    return false;
});
if (jQuery().daterangepicker) {
    if ($(".datepicker").length) {
        $('.datepicker').daterangepicker({
            locale: {
                format: 'YYYY-MM-DD'
            },
            singleDatePicker: true,
        });
    }
    if ($(".datetimepicker").length) {
        $('.datetimepicker').daterangepicker({
            locale: {
                format: 'YYYY-MM-DD hh:mm'
            },
            singleDatePicker: true,
            timePicker: true,
            timePicker24Hour: true,
        });
    }
    if ($(".daterange").length) {
        $('.daterange').daterangepicker({
            locale: {
                format: 'YYYY-MM-DD'
            },
            drops: 'down',
            opens: 'right'
        });
    }
}
if (jQuery().select2) {
    $(".select2").select2();
}
</script>
<script>
$('#form-daftar2').submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'crud_web.php?pg=simpan2',
        data: $(this).serialize(),
        beforeSend: function() {
            $('#btnsimpan').prop('disabled', true);
        },
        success: function(data) {
            var json = $.parseJSON(data);
            $('#btnsimpan').prop('disabled', false);
            if (json.pesan == 'ok') {
                iziToast.success({
                    title: 'Mantap!',
                    message: 'Data berhasil disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    $('#home').load('konfirmasi.php?id=' + json.id + '&nisn=' + json.nisn +
                        '&pass=' + json.pass + '&nama=' + json.nama);
                }, 2000);

            } else {
                iziToast.error({
                    title: 'Maaf!',
                    message: json.pesan,
                    position: 'topCenter'
                });
                document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math
                    .random();

            }
            //$('#bodyreset').load(location.href + ' #bodyreset');
        }
    });
    return false;
});
if (jQuery().daterangepicker) {
    if ($(".datepicker").length) {
        $('.datepicker').daterangepicker({
            locale: {
                format: 'YYYY-MM-DD'
            },
            singleDatePicker: true,
        });
    }
    if ($(".datetimepicker").length) {
        $('.datetimepicker').daterangepicker({
            locale: {
                format: 'YYYY-MM-DD hh:mm'
            },
            singleDatePicker: true,
            timePicker: true,
            timePicker24Hour: true,
        });
    }
    if ($(".daterange").length) {
        $('.daterange').daterangepicker({
            locale: {
                format: 'YYYY-MM-DD'
            },
            drops: 'down',
            opens: 'right'
        });
    }
}
if (jQuery().select2) {
    $(".select2").select2();
}
</script>
<!--WAKTU JALAN-->
<script src="assets/front/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/front/vendor/bootstrap/js/popper.js"></script>
<script src="assets/front/vendor/countdowntime/flipclock.min.js"></script>
<script src="assets/front/vendor/countdowntime/moment.min.js"></script>
<script src="assets/front/vendor/countdowntime/moment-timezone.min.js"></script>
<script src="assets/front/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
<script src="assets/front/vendor/countdowntime/countdowntime.js"></script>

<script>
$('.cd100').countdown100({
    /*Set Endtime here*/
    /*Endtime must be > current time*/
    endtimeMonth: <?= $diff->m ?>,
    endtimeDate: <?= $diff->d ?>,
    endtimeHours: <?= $diff->h ?>,
    endtimeMinutes: <?= $diff->i ?>,
    endtimeSeconds: <?= $diff->s ?>,
    timeZone: ""
    // ex:  timeZone: "America/New_York"
    //go to " http://momentjs.com/timezone/ " to get timezone
});
</script>