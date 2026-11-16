@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-secondary fw-bold">Daftar Siswa Terdaftar</h2>
    <a href="{{ route('students.create') }}" class="btn btn-success shadow-sm">+ Tambah Siswa Baru</a>
</div>

<!-- Alert Pesan Sukses -->
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover table-striped mb-0 align-middle">
                <thead class="table-dark">
                    <tr>
                        <th class="ps-3">NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Nilai Rata-rata</th>
                        <th>Status</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($students as $student)
                        <tr>
                            <td class="ps-3 fw-semibold">{{ $student->nis }}</td>
                            <td>{{ $student->name }}</td>
                            <td><span class="badge bg-secondary">{{ $student->classroom }}</span></td>
                            <td><strong class="text-primary">{{ $student->average_score }}</strong></td>
                            <td>
                                @if($student->is_active)
                                    <span class="badge bg-success">Aktif</span>
                                @else
                                    <span class="badge bg-danger">Tidak Aktif</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-info text-white me-1">Detail</a>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-warning text-white me-1">Ubah</a>
                                
                                <!-- Form Hapus dengan Konfirmasi -->
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data siswa {{ $student->name }}?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-5 text-muted">
                                <p class="mb-0 fs-5 fw-medium">Belum ada data siswa di dalam sistem.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
