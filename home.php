<div class="card">
    <div class="card-header text-bg-warning text-center">
        Selamat Datang <?php echo $_SESSION['nama_lengkap']; ?>
    </div>
    <div class="card-body">
        <?php
        if ($_SESSION['level'] == "admin") { ?>
        <h5 class="card-title">Anda adalah Administrator!</h5>
        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
            into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
            release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
            software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <a href="#" class="btn btn-warning">Go somewhere</a>
        <?php } elseif ($_SESSION['level'] == "dosen") { ?>
        <h5 class="card-title">Anda adalah Dosen!</h5>
        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
            into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
            release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
            software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <?php } elseif ($_SESSION['level'] == "mahasiswa") { ?>
        <h5 class="card-title">Anda adalah Mahasiswa!</h5>
        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
            into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
            release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
            software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <?php } ?>
    </div>
</div>