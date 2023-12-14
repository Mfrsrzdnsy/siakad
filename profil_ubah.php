<div class="card">
    <div class="card-header text-bg-warning">
        DATA USER
    </div>
    <div class="card-body">
        <h5 class="card-title" style="text-align: center;">Ubah User</h5>
        <hr>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-4 col-form-label">ID User</label>
                <div class="col-sm-8">
                    <input type="text" value="" name="id_user" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" value="" name="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Level</label>
                <div class="col-sm-8">
                    <input type="text" value="" name="level" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Nama Lengkap</label>
                <div class="col-sm-8">
                    <input type="text" value="" name="nama_lengkap" class="form-control" id="inputPassword3">
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
            <input type="reset" class="btn btn-dark" name="batal" value="BATAL" onclick="history.back()">
        </form>
    </div>
</div>