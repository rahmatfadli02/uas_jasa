
@extends('pages.master')
@section('mekanik')



    <div class="card">
        <div class="card-header">
            <h4 class="float-start">EDIT TRANSAKSI</h4>
        </div>
        <div class="card-body">
            <form method="post" action="/transaksi/{{$transaksi->id}}">
                @csrf   
               
                
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nofak</label>
                    <input type="text" name="nofak" value="{{old('nofak')}}"
                     class="form-control @error('kode') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                     @error('nofak')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Jenis Layanan</label>
                    <select name="jnslayanan" id="" class="form-control">
                        <option value="" >Pilih Jenis Layanan</option>
                        <option value="kulkas" >Kulkas</option>
                        <option value="strika" >Strika</option>
                        <option value="blender" >Blender</option>
                        <option value="despenser" >Despenser</option>
                       
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Layanan</label>
                    <input type="date" name="tanggal" value="{{old('tanggal')}}"
                     class="form-control @error('tanggal') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                     @error('tanggal')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Mekanik</label>
                    <select name="namamekanik" id="" class="form-control">
                        <option value="mekanik" >-Pilih Mekanik-</option>
                        @foreach ( $mekanik as $item)
                           <option value="{{$item->id}}">{{$item->namamekanik}}</option> 
                        @endforeach
                    </select>  
                </div> 
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="text" name="harga" value="{{old('harga')}}"
                     class="form-control  @error('harga') is-invalid @enderror"  id="exampleInputPassword1">
                     @error('harga')
                     <div class="text-danger">{{$message}}</div>
                     @enderror

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                    <input type="text" name="ket" value="{{old('ket')}}"
                     class="form-control  @error('ket') is-invalid @enderror"  id="exampleInputPassword1">
                     @error('ket')
                     <div class="text-danger">{{$message}}</div>
                     @enderror

                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
                <a href="/mekanik/index" class="btn btn-warning text-white">Batal</a>
             
            </form>
            
        </div>
  
@endsection