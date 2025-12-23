<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'List Mata Kuliah',
            'mks' => MataKuliah::all(),
        ];
        return view('list_mk', $data);
    }

    public function create()
    {
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        MataKuliah::create($request->only(['nama_mk', 'sks']));

        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(MataKuliah $mataKuliah)
    {
        return view('edit_mk', [
            'title' => 'Edit Mata Kuliah',
            'mk' => $mataKuliah
        ]);
    }

    public function update(Request $request, MataKuliah $mataKuliah)
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        $mataKuliah->update($request->only(['nama_mk', 'sks']));

        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(MataKuliah $mataKuliah)
    {
        $mataKuliah->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil dihapus!');
    }
}
