<?=$this->extend('components/main')?>
<?=$this->section('content')?>

<body class="vh-100">
    <div class="w-100 h-100 d-flex align-items-center justify-content-center position-relative" id="tint">

        <div>

            <?php $session = service('session'); if($session->getFlashdata()) : ?>
            <div class="toast position-absolute top-0 start-0 m-5" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="toast-header 
        <?php if($session->getFlashdata("success")){ echo "bg-primary";} else {echo "bg-danger";} ?>">
                    <strong class="me-auto">Info</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">

                    <?php
            if ($session->getFlashdata("success")) {
              echo $session->getFlashdata("success");
            } else if ($session->getFlashdata("error")) {
              echo $session->getFlashdata("error");
            }
          ?>

                </div>
            </div>
            <?php endif; ?>


        </div>

        <main class="container d-flex flex-column p-3 rounded bg-secondary-subtle" style="width: 500px">

            <img src="<?php echo base_url('images/warung.jpeg'); ?>" class="img-fluid mb-3">

            <form action="<?= base_url('/dashboard');?>" method="POST" class="d-flex flex-column d-flex gap-2">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-success mt-2">Login</button>

                <div class="container d-flex flex-row align-items-center justify-content-evenly my-2">
                    <a href="#" class="link-warning  link-underline-opacity-0 link-underline-opacity-0-hover ">Lupa
                        Password ?</a>
                    <a href="/register"
                        class="link-warning  link-underline-opacity-0 link-underline-opacity-0-hover ">Buat Akun
                        Baru</a>
                </div>


            </form>
        </main>



    </div>




</body>

<script>
window.onload = (event) => {
    let myAlert = document.querySelectorAll('.toast')[0];
    if (myAlert) {
        let bsAlert = new bootstrap.Toast(myAlert);
        bsAlert.show();
    }
};
</script>

<?=$this->endSection()?>