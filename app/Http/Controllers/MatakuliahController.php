<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        return 'Menampilkan data matakuliah';
    }

    public function create()
    {
        return 'Menampilkan form tambah matakuliah';
    }

    public function store(Request $request)
    {
        return 'Menyimpan data matakuliah';
    }

    public function show(string $id)
    {
        return 'Menampilkan detail matakuliah ' . $id;
    }

    public function edit(string $id)
    {
        return 'Menampilkan form edit matakuliah ' . $id;
    }

    public function update(Request $request, string $id)
    {
        return 'Mengubah data matakuliah ' . $id;
    }

    public function destroy(string $id)
    {
        return 'Menghapus data matakuliah ' . $id;
    }
}