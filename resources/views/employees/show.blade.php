@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center mb-4">Detail Karyawan BananaCat</h1>
                <div class="mb-3">
                    <p><strong>Nama:</strong> {{ $employee->nama }}</p>
                    <p><strong>Umur:</strong> {{ $employee->umur }}</p>
                    <p><strong>Alamat:</strong> {{ $employee->alamat }}</p>
                    <p><strong>Nomor Telp:</strong> {{ $employee->nomor_telp }}</p>
                </div>
                <a href="{{ route('employees.index') }}" class="btn btn-primary w-100">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection