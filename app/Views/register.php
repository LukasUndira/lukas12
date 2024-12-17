<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registrasi - Undira</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>

<style>
body {
    background-image: url(<?php echo base_url('images/image22.jpeg');
    ?>);
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;

    font-family: 'Roboto', sans-serif;
}

#tint {
    background-color: rgba(0, 0, 255, 0.2);
}

label {
    font-size: 18px;
}
</style>


<!-- ganti input jadi input-group bootstrap -->

<body class="vh-100">
    <div class="w-100 h-100 d-flex align-items-center justify-content-center position-relative" id="tint">

        <a href="/"
            class="link-primary link-offset-2 link-underline-opacity-0 link-underline-opacity-0-hover position-absolute top-0 end-0 m-5"><button
                type="button" class="btn btn-primary p-3">
                < Kembali Ke Login</button></a>

        <main class="container d-flex flex-column p-3 rounded bg-secondary-subtle" style="width: 500px">


            <h3 class="mx-auto mb-4 fw-bold">REGISTRASI</h3>

            <?php helper('form'); ?>
            <?php echo form_open_multipart('/register', ["class" => "d-flex flex-column d-flex gap-2"]) ?>

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
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_laki2" value="L"
                        checked>
                    <label class="form-check-label" for="jenis_kelamin_laki2">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_perempuan"
                        value="P">
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
            <?php echo form_close() ?>

        </main>
    </div>




</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>



</html>