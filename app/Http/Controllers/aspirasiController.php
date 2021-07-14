<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aspirasi;
use DB;
use Session;

class aspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function pencarian()
    {
        return view('cari');
    }

    public function caridata(Request $request){

        $cari = $request->cari;
        if (!empty($cari)) {
        
            $data = DB::table('aspirasis')
            ->where('id','like',"%".$cari."%")
            ->orWhere('nik','like',"%".$cari."%")
            ->get();
            return view('cari', ['data' => $data]);
        } else{
            return redirect('pencarian-data');
        }
        // if (!empty($request->cari)) {
        //     $cari = $request->cari;
        //     $data = DB::table('aspirasis')
        //     ->where('id','like',"%".$cari."%")
        //     ->orWhere('nik','like',"%".$cari."%")
        //     ->get();
        //     return view('cari', ['data' => $data]);
        // }else{
        //     return redirect('pencarian-data');
        // }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $nm = $request->photo;
        $status = "Proses";
        $namafile = time().rand(100,999).".".$nm->getClientOriginalName();
        // $namafile = $nm->getClientOriginalName();

        $dtupload = new aspirasi;
        $dtupload->nik = $request->nik;
        $dtupload->jenis_aspirasi = $request->jenis_aspirasi;
        $dtupload->aspirasi = $request->aspirasi;
        $dtupload->lokasi = $request->lokasi;
        $dtupload->photo = $namafile;
        $dtupload->status = $status;
        

        $nm->move(public_path().'/img', $namafile);
        $dtupload->save();

        return redirect('/')->with(['success' => 'Berhasil Mengirim Laporan/Aspirasi']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
