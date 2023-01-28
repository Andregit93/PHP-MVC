<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal"
            data-bs-target="#formModal">
            Tambah Data Mahasiswa
        </button>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <h3 class="my-4">Daftar Mahasiswa</h3>
        <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
            <div class="input-group mb-2">
                <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword">
                <button class="btn btn-primary float-end" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
            </div>
        </form>
        <ul class="list-group">
            <?php foreach( $data['mhs'] as $mhs ) : ?>
            <li class="list-group-item">
                <?= $mhs['nama']; ?>
                <a style="text-decoration: none;" href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>"
                    class="badge mx-2 text-bg-danger float-end" onclick="return confirm('yakin?');">hapus</a>
                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="float-start pe-3 tampilModalUbah"
                    data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>"><i
                        class="bi bi-pencil-square"></i></a>
                <a style="text-decoration: none;" href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"
                    class="badge mx-2 text-bg-primary float-end">detail</a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Koservasi Sumber Daya Alam">Koservasi Sumber Daya Alam</option>
                            <option value="Pendidikan Jasmani, Kesehatan, dan Rohani">Pendidikan Jasmani, Kesehatan, dan
                                Rohani
                            </option>
                            <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>
                            <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                            <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
