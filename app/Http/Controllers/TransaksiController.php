<?php

namespace App\Http\Controllers;

use App\Models\Mekanik;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor=1;
        $transaksi =Transaksi ::all();
        
        return view('page.transaksi.index', compact('transaksi','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mekanik =Mekanik ::all();
        return view('page.transaksi.form',compact('mekanik'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi= new Transaksi();
        $transaksi->nofak =$request->nofak;
        $transaksi->tanggal =$request->tanggal;
        $transaksi->jnslayanan =$request->jnslayanan;
        $transaksi->mekaniks_id =$request->namamekanik;
        $transaksi->ket =$request->ket;

        $transaksi->save();
      

        return redirect('/transaksi/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mekanik =Mekanik ::all();
        
        return view('page.transaksi.edit',compact('mekanik'));
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
        $transaksi = Transaksi:: find ($id);
        $transaksi->nofak =$request->nofak;
        $transaksi->tanggal =$request->tanggal;
        $transaksi->jnslayanan =$request->jnslayanan;
        $transaksi->mekaniks_id =$request->namamekanik;
        $transaksi->ket =$request->ket;

        $transaksi->save();

        return redirect('/transaksi/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi ::find($id);
        $transaksi->delete();
        return redirect('/transaksi/index');
    }
}
