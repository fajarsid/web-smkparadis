<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>



<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
        <div class="card author-box card-primary">


            <div class="card-header">
                <h2 class="section-title">Info PPDB <?= date('Y') ?></h2>

            </div>
            <div class="card-body">

                <?php if ($siswa['konfirmasi'] == 1) { ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Terimakasih !!!<br />
                    Data Anda Telah Berhasil <button class="badge badge-danger"> Dikonfirmasi Pada Tanggal
                        <?= $siswa['tgl_konfirmasi'] ?></button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">

                            <div class="activities">
                                <div class="activity">
                                    <div class="activity-detail">
                                        <h5>Formulir</h5>
                                        <a target="_blank"
                                            href="mod_formulir/print_daftar.php?id=<?= enkripsi($siswa['id_daftar']) ?>"
                                            type="button" class="badge badge-primary"><i
                                                class="fas fa-download    "></i> Download</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4">

                            <div class="activities">
                                <div class="activity">
                                    <div class="activity-detail">
                                        <h5>Kartu Pendaftar</h5>
                                        <a href="?pg=kartu" type="button" class="badge badge-success"><i
                                                class="fas fa-eye    "></i> Lihat Kartu </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4">

                            <div class="activities">
                                <div class="activity">
                                    <div class="activity-detail">
                                        <h5>Berkas Lainnya</h5>
                                        <p><span class="badge badge-warning"><i class="fas fa-download    "></i>
                                                Download</span></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <?php } else { ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                    Hai <?= $siswa['nama'] ?> !!!<br />
                    <?php if ($siswa['status'] == 0) { ?>
                    Status Pendaftaran Kamu Saat ini <button class="badge badge-warning"> Belum Diproses </button>
                    <?php } ?><?php if ($siswa['status'] == 1) { ?>
                    Status Pendaftaran Kamu Saat ini <button class="badge badge-danger"> Sudah Diproses, </button>
                    Silahkan Segera Cetak Bukti Pendaftaran
                    <?php } ?>
                </div>


                <div class="row">
                    <div class="col-lg-4">

                        <div class="activities">
                            <div class="activity">
                                <div class="activity-detail">
                                    <h5>Lengkapi Formulir</h5>
                                    <a target="" href="?pg=formulir" type="button" class="badge badge-primary"><i
                                            class="fas fa-book    "></i> Lengkapi</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">

                        <div class="activities">
                            <div class="activity">
                                <div class="activity-detail">
                                    <h5>Upload Berkas</h5>
                                    <a target="" href="?pg=berkas" type="button" class="badge badge-success"><i
                                            class="fas fa-upload    "></i> Lengkapi</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">

                        <div class="activities">
                            <div class="activity">
                                <div class="activity-detail">
                                    <h5>Daftar Ulang</h5>
                                    <?php if ($siswa['status'] == 1) { ?>
                                    <a target="" href="?pg=df_ulang" type="button" class="badge badge-info"><i
                                            class="fas fa-eye    "></i> Konfirmasi</a>
                                    <?php } else { ?>
                                    <a target="" type="button" class="badge badge-info"
                                        data-confirm="Maaf Konfirmasi Daftar Ulang Belum bisa di lakukan !!|Status anda Masih Proses.."><i
                                            class="fas fa-eye    "></i>Konfirmasi</a <!-- Modal -->


                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="alert alert-info alert-has-icon">
                                <div class="alert-icon"><i class=""></i></div>
                                <div class="alert-body">
                                    <div class="alert-body">Pengumuman</div>

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="activities">
                                                    <?php $query = mysqli_query($koneksi, "SELECT * FROM pengumuman where jenis='1'");
								while ($data = mysqli_fetch_array($query)) {
								?>
                                                    <div class="activity">
                                                        <div class="activity-icon bg-primary text-white shadow-primary">
                                                            <i class="fas fa-bullhorn"></i>
                                                        </div>
                                                        <div class="activity-detail">
                                                            <div class="mb-2">
                                                                <span
                                                                    class="text-job text-primary"><?= $data['tgl'] ?></span>
                                                                <span class="bullet"></span>
                                                                <a class="text-job" href="#"></a>

                                                            </div>
                                                            <h5><?= $data['judul'] ?></h5>
                                                            <p><?= $data['pengumuman'] ?></p>
                                                        </div>
                                                    </div>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>