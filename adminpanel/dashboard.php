<?php

session_start();

if (empty($_SESSION['status'])) {
    header("Location: ./index.php");
}

?>
<?php
include('./layout/header.php');
?>
<section id="news">
    <div class="container">
        <div class="row">
            <?php include('./menu_kiri.php') ?>
            <div class="col-md-9 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h2>Selamat Datang di halaman admin</h2>
                        <hr>
                        <h5>Jumlah pendaftar Sebanyak : </h5>
                        <h5>Jumlah Pendaftar yang belum di verifikasi sebanyak : </h5>
                        <h5>Jumlah pendaftar yang telah di verifikasi sebanyak :</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include('./layout/footer.php');
?>