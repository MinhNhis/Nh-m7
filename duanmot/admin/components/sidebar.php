<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= $assets.'dist/' ?>img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= $assets.'dist/' ?>img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
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

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <!--<i class="right fas fa-angle-left"></i>-->
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Loại
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/?pages=categories&action=list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách loại</p>
                                <?php
                                ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/?pages=categories&action=add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm loại</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/?pages=categories&action=edit" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sửa loại</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Sản phẩm
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/?pages=product&action=list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách sản phẩm</p>
                                <?php
                                ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/?pages=product&action=add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/?pages=product&action=edit" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sửa sản phẩm</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Khách hàng
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/?pages=user&action=list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách khách hàng</p>
                                <?php
                                ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/?pages=user&action=add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm khách hàng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/?pages=user&action=edit" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sửa khách hàng</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Bình luận
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/?pages=comment&action=list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách bình luận</p>
                                <?php
                                ?>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                          <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm sản phẩm</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sửa sản phẩm</p>
                          </a>
                        </li> -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Đơn hàng
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/?pages=order&action=list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách đơn hàng</p>
                                <?php
                                ?>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                          <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm sản phẩm</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sửa sản phẩm</p>
                          </a>
                        </li> -->
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>