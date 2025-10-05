@extends('admin.main')
@section('content')
<div class="page-heading">
    <h3>Profile Settings</h3>
</div>

<div class="page-content">
    <section class="row">
        <div class="col-12">

            {{-- ALERT BERHASIL --}}
            @if (session('status') === 'profile-updated')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Profil berhasil diperbarui!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif (session('status') === 'password-updated')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Password berhasil diperbarui!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row g-4">

                {{-- Update Profile Card --}}
                <div class="col-12 col-lg-6">
                    <div class="card shadow-sm border-0 rounded-3">
                        <div class="card-header bg-primary text-white">
                            Update Profile
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('profile.update') }}">
                                @csrf
                                @method('PATCH')

                                {{-- Name --}}
                                <div class="mb-3 mt-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input id="name" type="text" name="name"
                                        value="{{ old('name', $user->name) }}"
                                        required
                                        class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Email --}}
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input id="email" type="email" name="email"
                                        value="{{ old('email', $user->email) }}"
                                        required
                                        class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary w-100">Update Profile</button>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Update Password Card --}}
                <div class="col-12 col-lg-6">
                    <div class="card shadow-sm border-0 rounded-3">
                        <div class="card-header bg-danger text-white">
                            Update Password
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                @method('PUT')

                                {{-- Password Sekarang --}}
                                <div class="mb-3 mt-3">
                                    <label for="current_password" class="form-label">Password Sekarang</label>
                                    <div class="input-group">
                                        <input id="current_password" type="password" name="current_password"
                                            required
                                            class="form-control @error('current_password') is-invalid @enderror">
                                        <span class="input-group-text">
                                            <i class="bi bi-eye-slash toggle-password" style="cursor: pointer;"
                                                data-target="current_password"></i>
                                        </span>
                                    </div>
                                    @error('current_password', 'updatePassword')
                                        <div class="text-danger mt-1" style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Password Baru --}}
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password Baru</label>
                                    <div class="input-group">
                                        <input id="password" type="password" name="password"
                                            required
                                            class="form-control @error('password') is-invalid @enderror">
                                        <span class="input-group-text">
                                            <i class="bi bi-eye-slash toggle-password" style="cursor: pointer;"
                                                data-target="password"></i>
                                        </span>
                                    </div>
                                    @error('password', 'updatePassword')
                                        <div class="text-danger mt-1" style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Konfirmasi Password Baru --}}
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                                    <div class="input-group">
                                        <input id="password_confirmation" type="password" name="password_confirmation"
                                            required class="form-control">
                                        <span class="input-group-text">
                                            <i class="bi bi-eye-slash toggle-password" style="cursor: pointer;"
                                                data-target="password_confirmation"></i>
                                        </span>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-danger w-100">Update Password</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

{{-- Script toggle password --}}
<script>
    document.querySelectorAll('.toggle-password').forEach(function (icon) {
        icon.addEventListener('click', function () {
            const input = document.getElementById(this.getAttribute('data-target'));
            if (input.type === "password") {
                input.type = "text";
                this.classList.remove('bi-eye-slash');
                this.classList.add('bi-eye');
            } else {
                input.type = "password";
                this.classList.remove('bi-eye');
                this.classList.add('bi-eye-slash');
            }
        });
    });

    // Optional: auto-hide alert setelah 3 detik
    setTimeout(() => {
        const alert = document.querySelector('.alert');
        if (alert) {
            alert.classList.remove('show');
            alert.classList.add('fade');
        }
    }, 3000);
</script>
@endsection
