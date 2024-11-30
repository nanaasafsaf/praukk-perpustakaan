@extends('auth.layouts.authCore')
@section('title')
    Halaman Register
@endsection
<!-- Content -->
@section('content')

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed"
data-header-position="fixed">
<div class="position-relative overflow-hidden radial-gradient min-vh-100">
    <div class="position-relative z-index-5">
        <div class="row">
            <div class="col-xl-4 col-xxl-4">
                <div class="d-none d-xl-flex align-items-center justify-content-center"
                    style="height: calc(100vh - 80px);">
                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/backgrounds/login-security.svg"
                        alt="" class="img-fluid" width="500" style="margin-left: 80px">
                </div>
            </div>
            <div class="col-xl-8 col-xxl-8">
                <div
                    class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                    <div class="col-sm-8 col-md-7 col-xl-9">
                        <h1>Selamat Datang Di Perpus Digital</h1>
                        <div class="wizard-content">
                            <h4 class="mb-0">Registrasi</h4>
                            <h6 class="mb-3"></h6>
                            <form id="form-register" enctype="multipart/form-data" class=""
                                action="{{ route('register') }}" method="post">
                                @csrf

                                <section>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="name">Nama</label>
                                            <input type="text" name="name" class="form-control"
                                                id="name" />
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="nisn">NISN</label>
                                            <input type="text" name="nisn" class="form-control"
                                                id="nisn" />
                                            @error('nisn')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="level_id">Kelas</label>
                                            <select name="level_id" class="form-select" id="level_id">
                                                <option value="" disabled selected>Pilih Kelas</option>
                                                    <option value=""></option>
                                            </select>
                                            @error('level_id')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="major_id">Jurusan</label>
                                            <select name="major_id" class="form-select" id="major_id">
                                                <option value="" disabled selected>Pilih Jurusan</option>
                                                    <option value=""></option>
                                            </select>
                                            @error('major_id')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                id="email" />
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                id="password" />
                                            @error('password')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input primary" type="checkbox" value=""
                                                id="flexCheckChecked">
                                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                                Tampilkan Password
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="mb-3">
                                                <label for="logo" class="d-flex align-items-center">
                                                    <span class="mr-5" style="margin-right: 2%">Foto</span>
                                                    <a href="javascript:void(0)" class="ml-2 "
                                                        data-toggle="tooltip"
                                                        title="Logo maksimal 5MB dan extensi harus jpg,jpeg atau png">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="bg-primary"
                                                            style="border-radius: 50%" width="20" height="20"
                                                            viewBox="0 0 24 24">
                                                            <path fill="none" stroke="#ffffff"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M12 8v4m0 4h.01" />
                                                        </svg>
                                                    </a>
                                                </label>
                                                <input type="file" class="form-control" name="photo"
                                                    id="photo" />
                                                @error('photo')
                                                    <ul class="text-danger">
                                                        <li>{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary w-100 py-8 mb-4 rounded-2">Register</button>
                                        </div>
                                    </div>
                                </section>
                            </form>
                            <a href="{{ route('login') }}"> Sudah Punya akun?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection