<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Menu</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                User
            </li>

             <li class="sidebar-item">
                <a class="sidebar-link" href="<?=base_url('/dashboard')?>">
                    <i class="align-middle" data-feather="dashboard"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="<?=base_url('/user/index')?>">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="<?=base_url('/transaksi')?>">
                    <i class="align-middle" data-feather="transaksi"></i> <span class="align-middle">Transaksi</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="<?=base_url('/produk')?>">
                    <i class="align-middle" data-feather="produk"></i> <span class="align-middle">Produk</span>
                </a>
            </li>

              <li class="sidebar-item">
                <a class="sidebar-link" href="<?=base_url('/login')?>">
                    <i class="align-middle" data-feather="logout"></i> <span class="align-middle">Logout</span>
                </a>
            </li>


    </div>
</nav>