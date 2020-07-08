<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesan = \App\Pesans::Paginate(10);
        return view ('admin.pesan.index', compact('pesan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pesan = \App\Pesans::All();
        return view ('admin.pesan.create', compact('pesan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Kode' => 'required',
            'Nama' => 'required',
            'Bebek1' => 'required',
            'Jumlah1' => 'required',
            'Minum1' => 'required',
            'Banyak1' => 'required',
            'Bebek2' => 'nullable',
            'Jumlah2' => 'nullable',
            'Minum2' => 'nullable',
            'Banyak2' => 'nullable',
            'Bebek3' => 'nullable',
            'Jumlah3' => 'nullable',
            'Minum3' => 'nullable',
            'Banyak3' => 'nullable'
        ]);
            $pesan = \App\pesans::create([
                'Kode' => $request->Kode,
                'Nama' => $request->Nama,
                'Bebek1' => $request->Bebek1,
                'Jumlah1' => $request->Jumlah1,
                'Bebek2' => $request->Bebek2,
                'Jumlah2' => $request->Jumlah2,
                'Minum1' => $request->Minum1,
                'Banyak1' => $request->Banyak1,
                'Minum2' => $request->Minum2,
                'Banyak2' => $request->Banyak2,
                'Bebek3' => $request->Bebek3,
                'Jumlah3' => $request->Jumlah3,
                'Minum3' => $request->Minum3,
                'Banyak3' => $request->Banyak3
            ]);

        return redirect()->back()->with('success','Pesan Berhasil, Mohon Menunggu Pesanan Datang');
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
        $pesan = \App\Pesans::find($id);
        $pesan->delete(); 

        return redirect()->back()->with('success','pesanan berhasil dihapus (cek trashed pesanan)');
    }

    public function trashed()
    {
        $pesan = \App\Pesans::onlyTrashed()->paginate(10);
        return view('admin.pesan.trashed', compact('pesan'));
    }

    public function restore($id)
    {
        $pesan = \App\Pesans::withTrashed()->where('id', $id)->first();
        $pesan->restore();  

        return redirect()->back()->with('success','pesanan berhasil direstore (cek list pesanan)');
    }

    public function kill($id)
    {
        $pesan = \App\Pesans::withTrashed()->where('id', $id)->first();
        $pesan->forceDelete();  

        return redirect()->back()->with('success','pesanan berhasil dihapus permanen');
    }
    
}
