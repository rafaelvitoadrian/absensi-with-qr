<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $datasiswa = Mahasiswa::sortable()->paginate(5);
        // return view('mahasiswa.index',['siswa' => $datasiswa]);

        $cari = $request->query('cari');

        if(!empty($cari)){
            $datauser = Mahasiswa::where('nama','like',"%".$cari."%")
                ->sortable()
                ->paginate(5);
//            dd($datauser);
        }else{
            $datauser = Mahasiswa::sortable()->paginate(5);
        }
        return view('mahasiswa.index')->with([
            'siswa' => $datauser,
            'cari' => $cari,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $qr_code = Str::random(20);
        Mahasiswa::create([
            'qr_code' => $qr_code,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi
        ]);

        return redirect()->route('mahasiswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Mahasiswa::where('id',$id)->first();
        return view('mahasiswa.tampilan',['siswa' => $siswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datasiswa = Mahasiswa::find($id);
        return view('mahasiswa.ubah', ['siswa'=>$datasiswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $siswa= Mahasiswa::find($id);
        $siswa->nim = $request->nim;
        $siswa->nama = $request->nama;
        $siswa->prodi = $request->prodi;
        $siswa->save();

        return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index');
    }

    public function validasiQR(Request $request)
    {
//        dd($request->qr_code);
        $absen = "hadir";

        $mahasiswa = Mahasiswa::where('qr_code', $request->qr_code)->first();
        $mahasiswa->absen1 = $absen;
        $mahasiswa->save();

        if($mahasiswa==null){
            return response()->json([
                "status_error" => "Gagal Absen"
            ]);
        }

        return response()->json([
            "berhasil" => "Berhasil absen"
        ]);
    }

    public function validasiQR2(Request $request)
    {
//        dd($request->qr_code);
        $absen = "hadir";

        $mahasiswa = Mahasiswa::where('qr_code', $request->qr_code)->first();
        $mahasiswa->absen2 = $absen;
        $mahasiswa->save();

        if($mahasiswa==null){
            return response()->json([
                "status_error" => "Gagal Absen"
            ]);
        }

        return response()->json([
            "berhasil" => "Berhasil absen"
        ]);
    }

    public function validasiQR3(Request $request)
    {
//        dd($request->qr_code);
        $absen = "hadir";

        $mahasiswa = Mahasiswa::where('qr_code', $request->qr_code)->first();
        $mahasiswa->absen3 = $absen;
        $mahasiswa->save();

        if($mahasiswa==null){
            return response()->json([
                "status_error" => "Gagal Absen"
            ]);
        }

        return response()->json([
            "berhasil" => "Berhasil absen"
        ]);
    }
    
    public function scan1()
    {
        return view('operator.scan1');
    }

    public function scan2()
    {
        return view('operator.scan2');
    }

    public function scan3()
    {
        return view('operator.scan3');
    }
}
