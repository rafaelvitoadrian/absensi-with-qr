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
                            <label for="exampleSelectRounded0">Kelompok</label>
                            <select class="custom-select rounded-0" id="exampleSelectRounded0" name="kelompok">
                                <option value="Ilmu Komputer" disabled>-----Pilih Kelompok-----</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="6">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleSelectRounded0">Program Studi</label>
                            <select class="custom-select rounded-0" id="exampleSelectRounded0" name="prodi">
                                <option value="Ilmu Komputer" disabled>-----Pilih Prodi-----</option>
                                <option value="Teknik Informatika">Teknik Infromatika</option>
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
