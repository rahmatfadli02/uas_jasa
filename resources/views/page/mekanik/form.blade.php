
@extends('pages.master')
@section('mekanik')


   
<div class="container mt-3 p-4">
    <div class="card">
        <div class="card-header">
            <h4 class="float-start">TAMBAH MEKANIK</h4>
        </div>
        <div class="card-body">
            <form method="post" action="/mekanik/store">
                @csrf  
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Mekanik</label>
                    <input type="text" name="namamekanik" value="{{old('namamekanik')}}"
                     class="form-control @error('namamekanik') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                     @error('namamekanik')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" name="alamat" value="{{old('alamat')}}"
                     class="form-control @error('alamat') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                     @error('alamat')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telp/Hp</label>
                    <input type="text" name="hp" value="{{old('hp')}}"
                     class="form-control @error('nohp') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                     @error('hp')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
                <button type="submit"  class="btn btn-primary">Tambah</button>
                <a href="/mekanik/index" class="btn btn-warning text-white">Batal</a>
            </form>
        </div>

@endsection