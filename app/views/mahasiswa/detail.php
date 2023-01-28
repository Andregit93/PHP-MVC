<div class="d-flex justify-content-start">
    <div class="card p-3" style="width: 16rem;">
        <div class="card-body">
            <h5 class="card-title text-center"><?= $data['mhs']['nama']; ?></h5>
            <hr>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nim']; ?></h6>
            <p class="card-text">Prodi : <?= $data['mhs']['jurusan']; ?></p>
            <div class="d-flex justify-content-center">
                <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-primary mt-4">Kembali</a>
            </div>
        </div>
    </div>
</div>