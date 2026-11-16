@extends('layouts.app')

@section('content')
<div class="card shadow-sm border-0 max-width-md mx-auto" style="max-width: 650px;">
    <div class="card-header bg-info text-white py-3 d-flex justify-content-between align-items-center">
        <h4 class="mb-0 fw-bold">Detail Profil Siswa</h4>
        <span class="badge bg-light text-dark">NIS: {{ $student->nis }}</span>
    </div>
    <div class="card-body p-4">
        <table class="table table-bordered table-striped">
            <tr>
                <th width="35%">Nama Lengkap</th>
                <td>{{ $student->name }}</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td><span class="badge bg-primary">{{ $student->classroom }}</span></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ \Carbon\Carbon::parse($student->birth_date)->translatedFormat('d F Y') }}</td>
            </tr>
            <tr>
                <th>Nilai Rata-rata</th>
                <td><strong>{{ $student->average_score }}</strong></td>
            </tr>
            <tr>
                <th>No. HP Orang Tua</th>
                <td>{{ $student->parent_phone ?? '-' }}</td>
            </tr>
            <tr>
                <th>Alamat Rumah</th>
                <td>{{ $student->address ?? '-' }}</td>
            </tr>
            <tr>
                <th>Status Keaktifan</th>
                <td>
                    @if($student->is_active)
                        <span class="text-success fw-bold">Aktif</span>
                    @else
                        <span class="text-danger fw-bold">Tidak Aktif</span>
                    @endif
                </td>
            </tr>
        </table>
        
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('students.index') }}" class="btn btn-secondary px-4">Kembali ke Daftar</a>
            <div class="gap-2">
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning text-white px-4">Ubah</a>
            </div>
        </div>
    </div>
</div>
@endsection
