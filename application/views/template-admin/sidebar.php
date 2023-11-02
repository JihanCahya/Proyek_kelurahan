<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="brand-link">
            <div class="image">
                <img src="<?= base_url() ?>assets/image/logo.png" style="width:100%" alt="Brawijaya_logo">
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2">
            <div class="info">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <?php foreach ($get_menu as $menu) : ?>
                        <li class="nav-header">
                            <h4>
                                <?php echo $menu->name ?>
                            </h4>
                        </li>

                        <?php foreach ($get_sub_menu as $sub_menu) : ?>
                            <li class="nav-item">
                                <?php if ($sub_menu->id_parent === $menu->id_parent) : ?>
                                    <a class="nav-link" href="<?php echo base_url($sub_menu->link) ?>">
                                        <?= $sub_menu->icon ?>
                                        <p>
                                            <?= $sub_menu->name ?>
                                        </p>
                                    </a>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>

                </ul>
            </div>
        </nav>

        <!-- Sidebar Menu -->
        <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
</aside>

<!-- sidebar lama -->
<!-- Main Sidebar Container
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <div class="brand-link">
                <div class="image">
                    <img src="<?= base_url() ?>assets/image/logo.png" style="width:100%" alt="Brawijaya_logo">
                </div>
            </div>
            Sidebar
            <div class="sidebar">
                Sidebar user (optional)
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('assets/image/user/') . $user['image']; ?>"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            <?= $user['name']; ?>
                        </a>
                    </div>
                </div>

                SidebarSearch Form
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                Sidebar Menu
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard') ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-house fa-lg"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">KELOLA</li>
                        <li class="nav-item">
                            <a href="<?= base_url('Manage_admin') ?>" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Kelola Admin
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    Mailbox
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../mailbox/mailbox.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inbox</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../mailbox/compose.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Compose</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../mailbox/read-mail.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Read</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                /.sidebar-menu
            </div>
            /.sidebar
        </aside> -->