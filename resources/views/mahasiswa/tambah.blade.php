@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Tambah Data Mahasiswa Baru 2020</h2>
            </div>
            <div class="card-body">
                <form action="{{route('mahasiswa.store')}}" method="post">
                    @csrf
                    <div class="container mt-4">
                        <div class="form-floating mb-3">
                            <p><b>NIM</b></p>
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="">
                        </div>    
                        <div class="form-floating mb-3">
                            <p><b>Nama</b></p>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleSelectRounded0">Program Studi</label>
                            <select class="custom-select rounded-0" id="exampleSelectRounded0" name="prodi">
                                <option value="Teknik Informasi">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                            </select>
                        </div>
                        <button class="btn btn-primary mr-1" name="submit" type="submit">Submit</button>
                        <a href="{{route('mahasiswa.index')}}" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


@endsection
