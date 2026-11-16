@extends('layouts.app')

@index_active
@stop

@section('content')
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm border text-center">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold text-primary">Aplikasi Manajemen Data Siswa</h1>
        <p class="col-md-8 fs-4 mx-auto text-muted">Selamat datang di platform administrasi sekolah terpadu untuk pencatatan, pembaruan, dan pengelolaan data akademik siswa secara efisien.</p>
        <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg mt-3 px-5 shadow">Buka Daftar Siswa</a>
    </div>
</div>
@endsection
