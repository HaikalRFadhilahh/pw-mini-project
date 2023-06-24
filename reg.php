<?php 
    include "./layout/header.php";
?>
<div class="container">
    <h1>Form Pendaftaran Siswa Baru</h1>
    <form action="aksi_daftar.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenisKelamin" id="jenisKelamin" class="form-control" required>
                <option value="Laki-laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tempatLahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" required>
        </div>
        <div class="mb-3">
            <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required></textarea>
        </div>
        <div class="mb-3">
            <label for="noHp" class="form-label">Nomer Handphone</label>
            <input type="text" class="form-control" id="noHp" name="noHp" required>
        </div>
        <div class="mb-3">
            <label for="nilaiMatematika" class="form-label">Nilai Matematika</label>
            <input type="text" class="form-control" id="nilaiMatematika" name="nilaiMatematika" required>
        </div>
        <div class="mb-3">
            <label for="nilaiIPA" class="form-label">Nilai IPA</label>
            <input type="text" class="form-control" id="nilaiIPA" name="nilaiIPA" required>
        </div>
        <div class="mb-3">
            <label for="nilaiBahasa" class="form-label">Nilai Bahasa</label>
            <input type="text" class="form-control" id="nilaiBahasa" name="nilaiBahasa" required>
        </div>
        <div class="mb-3">
            <label for="ijasah" class="form-label">Ijazah</label>
            <input type="file" class="form-control" name="ijazah" id="ijazah">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?php 
include "./layout/footer.php";
?>