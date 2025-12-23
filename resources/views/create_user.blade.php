@extends('layouts.app')

@section('content')
@vite('resources/css/form.css')

<div class="form-container">
    <div class="form-card">
        <h1>Buat Pengguna Baru</h1>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            
            <div class="input-row">
                
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Nama Lengkap">
                </div>

                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="text" id="npm" name="npm" placeholder="NPM">
                </div>

                <div class="form-group">
                    <label for="kelas_id">Kelas</label>
                    <select name="kelas_id" id="kelas_id">
                        <option value="" disabled selected>Pilih Kelas</option>
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <button type="submit" class="btn-submit">Simpan Data</button>
        </form>
    </div>
</div>

@endsection