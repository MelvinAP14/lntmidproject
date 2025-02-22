@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="text-center mb-4">Daftar Karyawan BananaCat</h1>
        <a href="{{ route('employees.create') }}" class="btn btn-primary mb-4">Tambah Karyawan BananaCat</a>
        <div class="row">
            @foreach ($employees as $employee)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $employee->nama }}</h5>
                            <p class="card-text"><strong>Umur:</strong> {{ $employee->umur }}</p>
                            <p class="card-text"><strong>Alamat:</strong> {{ $employee->alamat }}</p>
                            <p class="card-text"><strong>Nomor Telp:</strong> {{ $employee->nomor_telp }}</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection