@extends('admin.layouts.appAdmin')

@section('title')
    Add Library Officer
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout -->
    <div class="row justify-content-center">
        <div class="col-xl-6 col-md-8">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Tambah Petugas Perpus</h5>
                    <a href="{{ route('admin.libraryOfficer.list') }}">
                        <button class="btn btn-info">Kembali</button>
                    </a>
                </div>

                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Nama</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Masukkan Nama Buku" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Email</label>
                            <input type="email" class="form-control" id="Email" name="Email"
                                placeholder="Masukkan Nama Penulis" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Profile</label>
                            <input type="file" class="form-control" id="profile" name="profile"
                                placeholder="Masukkan Nama Tahun Terbit"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection