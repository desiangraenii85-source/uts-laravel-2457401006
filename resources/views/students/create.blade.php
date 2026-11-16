@extends('layouts.app')

@section('content')
<div class="card shadow-sm border-0 max-width-md mx-auto" style="max-width: 700px;">
    <div class="card-header bg-success text-white py-3">
        <h4 class="mb-0 fw-bold">Form Tambah Siswa Baru</h4>
    </div>
    <div class="card-body p-4">
        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">NIS</label>
                    <input type="text" name="nis" class="form-control @error('nis') is-invalid @enderror" value="{{ old('nis') }}">
                    @error('nis') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Kelas</label>
                    <select name="classroom" class="form-select @error('classroom') is-invalid @enderror">
                        <option value="">-- Pilih Kelas --</option>
                        <option value="X IPA 1" {{ old('classroom') == 'X IPA 1' ? 'selected' : '' }}>X IPA 1</option>
                        <option value="X IPS 1" {{ old('classroom') == 'X IPS 1' ? 'selected' : '' }}>X IPS 1</option>
                        <option value="XI IPA 2" {{ old('classroom') == 'XI IPA 2' ? 'selected' : '' }}>XI IPA 2</option>
                    </select>
                    @error('classroom') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Tanggal Lahir</label>
                    <input type="date" name="birth_date" class="form-control @error('birth_date') is-invalid @enderror" value="{{ old('birth_date') }}">
                    @error('birth_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Nilai Rata-rata</label>
                    <input type="number" step="0.01" name="average_score" class="form-control @error('average_score') is-invalid @enderror" value="{{ old('average_score') }}">
                    @error('average_score') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">No. HP Orang Tua (Kolom Migrasi Baru)</label>
                    <input type="text" name="parent_phone" class="form-control @error('parent_phone') is-invalid @enderror" value="{{ old('parent_phone') }}">
                    @error('parent_phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Alamat Rumah</label>
                <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="3">{{ old('address') }}</textarea>
                @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-4 form-check form-switch">
                <input type="checkbox" name="is_active" class="form-check-input" id="is_active" value="1" {{ old('is_active') ? 'checked' : '' }}>
                <label class="form-check-label fw-semibold" for="is_active">Siswa Berstatus Aktif</label>
            </div>

            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('students.index') }}" class="btn btn-secondary px-4">Batal</a>
                <button type="submit" class="btn btn-success px-4">Simpan Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
