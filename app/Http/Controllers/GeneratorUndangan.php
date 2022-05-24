<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeneratorUndangan extends Controller
{
    //
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return "berhasil";
    }

    public function store(Request $request)
    {
        //validasi
        $this->validate($request, [
            'nama'     => 'required',
            'url'     => 'required',
        ]);

        // dd($request);
        DB::table('url_generator')->insert([
            'nama'=> $request->nama,
            'url' => $request->url
        ]);

        return redirect('/')->with(['message' => 'Data Berhasil Disimpan!']);
      
    }

    public function hapus($id)
    {
        $deleted = DB::table('url_generator')->where('id', $id)->delete();

        return redirect('/')->with(['urldelete' => 'Data Berhasil Dihapus!']);
      
    }

    public function lihat($nama)
    {
    
    $urltampil = DB::table('url_generator')->where('nama', $nama)->get();
    //   dd($cari);
    // return view('urlgenerator.tampilcustomer');

    return view('urlgenerator.tampilcustomer', ['urltampil' => $urltampil]);

    }
}
