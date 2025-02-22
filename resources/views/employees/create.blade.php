@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center mb-4">Tambah Karyawan BananaCat</h1>
                <form action="{{ route('employees.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" required minlength="5" maxlength="20">
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" name="umur" id="umur" class="form-control" required min="20">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" required minlength="10" maxlength="40">
                    </div>
                    <div class="mb-3">
                        <label for="nomor_telp" class="form-label">Nomor Telp</label>
                        <input type="text" name="nomor_telp" id="nomor_telp" class="form-control" required minlength="9" maxlength="12" pattern="^08.*">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection