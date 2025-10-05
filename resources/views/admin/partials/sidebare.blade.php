<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header" style="padding: 0; margin: 0;">
                    <div class="d-flex flex-column align-items-center" style="padding: 0; margin: 0;">
                        <div class="logo" 
                            style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; display: flex; justify-content: center; align-items: center; margin: 5px auto 0 auto;">
                            <a href="index.html">
                                <img src="{{ asset('admin/assets/images/logo.jpg') }}" 
                                    alt="Logo" 
                                    style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
                            </a>
                        </div>
                        <div class="toggler" style="position: absolute; right: 10px; top: 10px;">
                            <a href="#" class="sidebar-hide d-xl-none d-block">
                                <i class="bi bi-x bi-middle"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="index.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="/user" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Pengguna</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="/gejala" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Gejala</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="/Penyakit" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Penyakit</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="Penanganan Pertama" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Penanganan Pertama</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="Basis Pengetahuan" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Basis Pengetahuan</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>