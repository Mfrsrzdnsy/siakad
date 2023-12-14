<?php if ($_SESSION['level'] == "admin") { ?>
<div class="card">
    <div class="card-header text-bg-warning">
        DATA DOSEN
    </div>
    <div class="card-body">
        <h5 class="card-title" style="text-align: center;">Tambah Dosen</h5>
        <hr>
        <?php
            include "koneksi.php";
            if (isset($_POST['simpan'])) {
                $nidn = $_POST['nidn'];
                $nama = $_POST['nama'];
                $pendidikan = $_POST['pendidikan'];
                $jenis_kelamin = $_POST['jenis_kelamin'];
                $alamat = $_POST['alamat'];
                $foto = $_FILES['foto']['name'];
                $tmp = $_FILES['foto']['tmp_name'];
                $a = "INSERT INTO tbldosen VALUES('$nidn', '$nama', '$pendidikan',
                 '$jenis_kelamin', '$alamat', '$foto')";
                $b = mysqli_query($koneksi, $a);
                move_uploaded_file($tmp, "foto/$foto");
                if ($b) {
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Berhasil!</strong> Data berhasil disimpan, <a href='?page=dosen'>LIHAT DATA</a>.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
                } else {
                    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Berhasil!</strong> Data gagal disimpan.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";
                }
            }
            ?>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Nomor Induk Dosen Nasional</label>
                <div class="col-sm-8">
                    <input type="text" name="nidn" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Nama Dosen</label>
                <div class="col-sm-8">
                    <input type="text" name="nama" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Pendidikan</label>
                <div class="col-sm-8">
                    <select name="pendidikan" class="form-select" aria-label="Default select example">
                        <option value="Magister Ilmu Komputer: M.Kom">Magister Ilmu Komputer: M.Kom.</option>
                        <option value="Magister Teknologi Informasi: M.TI.">Magister Teknologi Informasi: M.TI.
                        </option>
                        <option value="Master of Computer Science: M.Cs.">Master of Computer Science: M.Cs.</option>
                    </select>
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-4 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-8">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="L"
                            checked>
                        <label class="form-check-label" for="gridRadios1">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="P">
                        <label class="form-check-label" for="gridRadios2">
                            Perempuan
                        </label>
                    </div>
                </div>
            </fieldset>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Upload Foto</label>
                <div class="col-sm-8">
                    <input class="form-control" name="foto" type="file" id="formFile">
                </div>
            </div>
            <input type="submit" class="btn btn-warning" name="simpan" value="SIMPAN">
            <input type="reset" class="btn btn-dark" name="batal" value="BATAL" onclick="history.back()">
        </form>
    </div>
</div>
<?php
} else {
    echo "<font color='red'><h3>Anda bukan Admin</h3></font>";
}
?>