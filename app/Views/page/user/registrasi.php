<?=$this->extend('components/main')?>
<?=$this->section('content')?>

<div class="w-100 h-100 d-flex align-items-center justify-content-center position-relative" id="tint">

    <a href="<?= base_url('/user/login');?>"
        class="link-primary link-offset-2 link-underline-opacity-0 link-underline-opacity-0-hover position-absolute top-0 end-0 m-5"><button
            type="button" class="btn btn-primary p-3">
            < Kembali Ke Login</button> </a> <main class="container d-flex flex-column p-3 rounded bg-secondary-subtle"
                style="width: 500px">


                <h3 class="mx-auto mb-4 fw-bold">REGISTRASI</h3>
                <form action="<?= base_url('/register');?>" method="post" enctype="multipart/form-data">
                    <?=csrf_field() ?>

                    <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Lengkap" required>

                    <div class="d-flex flex-row gap-2">
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                        <input type="text" name="kontak" class="form-control" placeholder="Kontak" required>
                    </div>


                    <div class="d-flex flex-row justify-content-evenly align-items-center py-2" required>
                        <label>
                            <p class="mb-0">Jenis Kelamin:</p>
                        </label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_laki2"
                                value="L" checked>
                            <label class="form-check-label" for="jenis_kelamin_laki2">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                id="jenis_kelamin_perempuan" value="P">
                            <label class="form-check-label" for="jenis_kelamin_perempuan" required>
                                Perempuan
                            </label>
                        </div>
                    </div>

                    <input type="date" name="tanggal_lahir" class="form-control" required>

                    <div class="d-flex flex-row gap-2">
                        <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>

                    <input type="password" name="password" class="form-control" placeholder="Password" required>

                    <label for="foto_profil">Foto Profil: </label>
                    <input class="form-control" name="foto_profil" type="file" id="foto_profil">

                    <button type="submit" class="btn btn-success mt-2">Register</button>

                </form>


                </main>
</div>

<?=$this->endSection()?>