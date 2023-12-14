<?php if ($_SESSION['level'] == "admin") { ?>
<div class="card">
    <div class="card-header text-bg-warning">
        DATA USER
    </div>
    <div class="card-body">
        <h5 class="card-title" style="text-align: center;">Ubah User</h5>
        <hr>
        <?php
            include "koneksi.php";
            if (isset($_GET['id_user'])) {
                $id_user = $_GET['id_user'];
                $tampil = "SELECT * FROM user WHERE id_user='$id_user'";
                $qtampil = mysqli_query($koneksi, $tampil);
                $dt = mysqli_fetch_array($qtampil);
            } else {
                header("location:?page=user");
            }
            if (isset($_POST['simpan'])) {
                $email = $_POST['email'];
                $password = md5($_POST['password']);
                $level = $_POST['level'];
                $nama_lengkap = $_POST['nama_lengkap'];
                $foto = $_FILES['foto']['name'];
                $tmp = $_FILES['foto']['tmp_name'];
                if (strlen($foto > 0)) {
                    $a = "UPDATE user SET email='$email', password='$password', level='$level', nama_lengkap='$nama_lengkap',
		        foto='$foto' where id_user='$id_user'";
                    $b = mysqli_query($koneksi, $a);
                    move_uploaded_file($tmp, "foto/$foto");
                } else {
                    $a = "UPDATE user email='$email', password='$password', level='$level', nama_lengkap='$nama_lengkap' where id_user='$id_user'";
                    $b = mysqli_query($koneksi, $a);
                }
                if ($b) {
                    header("location:?page=user");
                } else {
                    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Berhasil!</strong> Data berhasil disimpan.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
                }
            }
            ?>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-4 col-form-label">ID User</label>
                <div class="col-sm-8">
                    <input type="text" value="<?php echo $dt['id_user'] ?>" name="id_user" class="form-control"
                        id="inputEmail3" disabled>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" value="<?php echo $dt['email'] ?>" name="email" class="form-control"
                        id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                    <input type="password" value="<?php echo $dt['password'] ?>" name="password" class="form-control"
                        id="inputPassword3" disabled>
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-4 pt-0">Level</legend>
                <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="level" id="gridRadios1" value="admin"
                            <?php if ($dt['level'] == "admin") {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                        <label class="form-check-label" for="gridRadios1">
                            admin
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="level" id="gridRadios2" value="dosen"
                            <?php if ($dt['level'] == "dosen") {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                        <label class="form-check-label" for="gridRadios2">
                            dosen
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="level" id="gridRadios3" value="mahasiswa"
                            <?php if ($dt['level'] == "mahasiswa") {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                        <label class="form-check-label" for="gridRadios3">
                            mahasiswa
                        </label>
                    </div>
                </div>
            </fieldset>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Nama Lengkap</label>
                <div class="col-sm-8">
                    <input type="text" value="<?php echo $dt['nama_lengkap'] ?>" name="nama_lengkap"
                        class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Upload Foto</label>
                <div class="col-sm-8">
                    <img src="foto/<?php echo $dt['foto'] ?>" width="70px" class="img-thumbnail" alt="">
                    <input class="form-control" name="foto" type="file" id="formFile">
                </div>
            </div>
            <input type="submit" class="btn btn-warning" name="simpan" value="SIMPAN">
            <input type="reset" class="btn btn-dark" name="batal" value="BATAL">
        </form>
    </div>
</div>
<?php
} else {
    echo "<font color='red'><h3>Anda bukan Admin</h3></font>";
}
?>