@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Ubah Data Mahasiswa Baru 2020</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('mahasiswa.update',$siswa->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="container mt-4">
                        <div class="mb-3">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" value="{{ $siswa->nim }}" id="nim" name="nim">
                        </div>
                        <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" value="{{ $siswa->nama }}" id="nama" name="nama">
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleSelectRounded0">Program Studi</label>
                            <select class="custom-select rounded-0" id="exampleSelectRounded0" name="prodi">
                                <option>{{ $siswa->prodi }}</option>
                                <option value="Teknik Informasi">Teknik Infromatika</option>
                                <option value="Sistem Informasi">Sistem Infromasi</option>
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
