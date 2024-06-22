@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>{{ __('Detail Brand') }}</span>
                        <a href="{{ route('brand.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <h4 class="card-title">{{ $brand->nama_brand }}</h4>
                    <hr>
                    <!-- Tambahkan konten detail brand di sini -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
