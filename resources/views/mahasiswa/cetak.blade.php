<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cetak</title>
</head>
<body>

    <!-- page content -->
    <div class="container">

                <h2 class="text-center mt-4 mb-4">Data Mahasiswa Baru Ilmu Komputer 2022</h2>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Prodi</th>
                            <th>Kelompok</th>
                            <th>Absen 1</th>
                            <th>Absen 2</th>
                            <th>Absen 3</th>
                        </tr>
                            @foreach($datasiswa as $s)
                                <tr>
                                    <td>{{$s->nim}}</td>
                                    <td>{{$s->nama}}</td>
                                    <td>{{$s->prodi}}</td>
                                    <td>{{$s->kelompok}}</td>
                                    <td>{{$s->absen1}}</td>
                                    <td>{{$s->absen2}}</td>
                                    <td>{{$s->absen3}}</td>
                                </tr>
                            @endforeach
                    </table>

                    <br/>
                    {{-- <div class="col mb-2">
                        <div class="row-4">
                            Halaman : {{ $datasiswa->currentPage() }}
                        </div>
                        <div class="row-4">
                            Jumlah Data : {{ $datasiswa->total() }}
                        </div>
                        <div class="row-4">
                            Data Per Halaman : {{ $datasiswa->perPage() }}
                        </div>
                    </div> --}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-4">--}}
{{--                        <div id="reader" width="600px"></div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <input type="text" id="result">--}}
{{--                    </div>--}}
{{--                </div>--}}
        </div>

    <script type="text/javascript">
        window.print();
    </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>