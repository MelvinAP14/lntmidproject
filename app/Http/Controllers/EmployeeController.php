<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5|max:20',
            'umur' => 'required|integer|min:20',
            'alamat' => 'required|min:10|max:40',
            'nomor_telp' => 'required|min:9|max:12|starts_with:08',
        ]);

        $data = $request->only(['nama', 'umur', 'alamat', 'nomor_telp']);
        Employee::create($data);

        return redirect()->route('employees.index')->with('success', 'Karyawan berhasil ditambahkan.');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'nama' => 'required|min:5|max:20',
            'umur' => 'required|integer|min:20',
            'alamat' => 'required|min:10|max:40',
            'nomor_telp' => 'required|min:9|max:12|starts_with:08',
        ]);

        $data = $request->only(['nama', 'umur', 'alamat', 'nomor_telp']);
        $employee->update($data);

        return redirect()->route('employees.index')->with('success', 'Karyawan berhasil diperbarui.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Karyawan berhasil dihapus.');
    }
}
