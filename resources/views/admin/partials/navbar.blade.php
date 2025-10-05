<header class="mb-3 bg-white shadow-sm py-2 px-3 d-flex align-items-center justify-content-between position-sticky top-0" style="z-index: 1030;">
                <!-- Tombol sidebar kiri -->
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>

                <!-- Navbar kanan untuk profil & logout -->
                <div class="dropdown ms-auto">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('admin/assets/images/faces/1.jpg') }}" alt="User" class="rounded-circle me-2" width="35" height="35">
                        <span class="fw-semibold text-dark">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                <i class="bi bi-person-circle me-2"></i> Profil
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger">
                                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </header>