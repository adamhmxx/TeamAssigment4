<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
        <a class="navbar-brand" href="<?php echo URL; ?>">IndoApril</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if (isset($menu) && $menu == 'dasbor') echo 'active'; ?>">
                    <a class="nav-link" href="<?php echo URL; ?>">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php if (isset($menu) && $menu == 'barang') echo 'active'; ?>">
                    <a class="nav-link" href="<?php echo URL; ?>/barang/index">Daftar Barang</a>
                </li>
            </ul>
        </div>
    </nav>
</header>