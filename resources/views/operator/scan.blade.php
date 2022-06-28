@extends('layouts.app')

@section('content')
    <!-- page content -->
    <div class="container">
        <div class="row">
            <div class="d-flex  justify-content-center col-md-12">
                <div class="row align-content-center">
                    <div class="col-md-4">
                        <a href="{{ route('scan1') }}" class="btn btn-primary">Scan Hari-1</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('scan2') }}" class="btn btn-primary">Scan Hari-2</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('scan3') }}" class="btn btn-primary">Scan Hari-3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

