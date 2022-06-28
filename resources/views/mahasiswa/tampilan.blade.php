@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row my-5">
            <div class="col-md-12 d-flex align-content-center justify-content-center">
                {!! \SimpleSoftwareIO\QrCode\Facades\QrCode::size(500)->generate($siswa->qr_code) !!}
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-12 d-flex align-content-center justify-content-center">
                <a class="btn btn-danger" href="{{ route('mahasiswa.index') }}">Back</a>
            </div>
        </div>
    </div>



@endsection
