
@extends('pages.master')
@section('mekanik')



    <div class="card">
        <div class="card-header">
            <h4 class="float-start">EDIT MEKANIK</h4>
        </div>
        <div class="card-body">
            <form method="post" action="/mekanik/{{$mekanik->id}}">
                @csrf   
               
                
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Mekanik</label>
                    <input type="text" name="namamekanik"  value="{{$mekanik->namamekanik}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" name="alamat"  value="{{$mekanik->alamat}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telp/hp</label>
                    <input type="text" name="hp"  value="{{$mekanik->hp}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
                <a href="/mekanik/index" class="btn btn-warning text-white">Batal</a>
             
            </form>
            
        </div>
  
@endsection