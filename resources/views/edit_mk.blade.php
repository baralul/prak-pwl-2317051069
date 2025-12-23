@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Mata Kuliah</h2>

    <form action="/matakuliah/{{ $mk->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Kode MK</label>
            <input type="text" name="kode_mk" value="{{ $mk->kode_mk }}" required>
        </div>

        <div>
            <label>Nama MK</label>
            <input type="text" name="nama_mk" value="{{ $mk->nama_mk }}" required>
        </div>

        <div>
            <label>SKS</label>
            <input type="number" name="sks" value="{{ $mk->sks }}" required>
        </div>

        <button type="submit">Update</button>
    </form>
</div>
@endsection