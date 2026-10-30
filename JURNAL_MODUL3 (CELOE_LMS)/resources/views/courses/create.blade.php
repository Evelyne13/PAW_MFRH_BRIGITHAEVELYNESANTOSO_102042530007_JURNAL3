@extends('layouts.app')

@section('title', 'Tambah Mata Kuliah Baru')

@section('content')
<div style="max-width: 760px; margin: 0 auto;">
    <div style="margin-bottom: 1.25rem;">
        <a href="{{ route('courses.index') }}" class="btn btn-secondary btn-sm">
            Kembali ke Daftar Mata Kuliah
        </a>
    </div>

    <div class="card">
        <div class="card-header">
            <div>
                <h1 class="card-title">Tambah Mata Kuliah Baru</h1>
                <p class="card-subtitle">Buat mata kuliah baru yang akan Anda ampu pada semester aktif ini.</p>
            </div>
        </div>

        <div class="card-body">
            <form action="{{ route('courses.store') }}" method="POST">
                @csrf

                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 1.25rem;">
                   <!-- TODO 6: Buat input untuk data mata kuliah. -->
                {{-- Hint:
                - Buat field untuk kode MK, nama MK, SKS, dan semester.
                - Gunakan jenis elemen form yang sesuai dengan tiap data.
                - Sesuaikan atribut name dengan nama field yang dibaca controller.
                - Gunakan old() agar isian tidak hilang setelah validasi gagal.
                - Tampilkan pesan error validasi menggunakan directive Blade.
                - Pola umum input teks: <input type="text" name="nama_field"> --}}

                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 1.25rem; margin-bottom: 1.25rem;">
                    <!-- Kode Mata Kuliah -->
                    <div class="form-group">
                        <label for="kode" class="form-label">Kode Mata Kuliah</label>
                        <input 
                            type="text" 
                            name="kode" 
                            id="kode" 
                            class="form-control @error('kode') is-invalid @enderror" 
                            value="{{ old('kode') }}" 
                            placeholder="Contoh: DPH2A3"
                            required
                        >
                        @error('kode')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Nama Mata Kuliah -->
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama Mata Kuliah</label>
                        <input 
                            type="text" 
                            name="nama" 
                            id="nama" 
                            class="form-control @error('nama') is-invalid @enderror" 
                            value="{{ old('nama') }}" 
                            placeholder="Contoh: Pemrograman Web"
                            required
                        >
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem; margin-bottom: 1.25rem;">
                    <!-- SKS -->
                    <div class="form-group">
                        <label for="sks" class="form-label">Jumlah SKS</label>
                        <input 
                            type="number" 
                            name="sks" 
                            id="sks" 
                            min="1" 
                            max="6" 
                            class="form-control @error('sks') is-invalid @enderror" 
                            value="{{ old('sks') }}" 
                            placeholder="1 - 6"
                            required
                        >
                        @error('sks')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Semester -->
                    <div class="form-group">
                        <label for="semester" class="form-label">Semester Perkuliahan</label>
                        <input 
                            type="text" 
                            name="semester" 
                            id="semester" 
                            class="form-control @error('semester') is-invalid @enderror" 
                            value="{{ old('semester') }}" 
                            placeholder="Contoh: Ganjil 2026/2027"
                            required
                        >
                        @error('semester')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>