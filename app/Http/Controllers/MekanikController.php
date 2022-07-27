<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mekanik;

class MekanikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor=1;
        $mekanik =Mekanik ::all();
        return view('page.mekanik.index', compact('mekanik','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.mekanik.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mekanik= new Mekanik();
        $mekanik->namamekanik =$request->namamekanik;
        $mekanik->alamat =$request->alamat;
        $mekanik->hp =$request->hp;
        $mekanik->save();
      

        return redirect('/mekanik/index');
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
        $mekanik = Mekanik:: find ($id);

        return view('page.mekanik.edit',compact('mekanik'));
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
        $mekanik = Mekanik:: find ($id);
        $mekanik->namamekanik =$request->namamekanik;
        $mekanik->alamat =$request->alamat;
        $mekanik->hp =$request->hp;
      
        $mekanik->save();

        return redirect('/mekanik/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mekanik = Mekanik ::find($id);
        $mekanik->delete();
        return redirect('/mekanik/index');
    }
}
