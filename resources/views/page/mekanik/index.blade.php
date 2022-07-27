@extends('pages.master')
@section('mekanik')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel Mekanik</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>



            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">

                <!-- Scrollable modal -->


                <table class="table table-head-fixed text-nowrap">
                    <!-- Scrollable modal -->

                    <div class="card">
                        <div class="card-header">
                            <h4 class="float-start"></h4>
                            <a href="/mekanik/form" class="float-end btn btn-secondary">Tambah Data</a>
                        </div>



                        <thead>
                            <tr>
                                <th scope="col">NO </th>
                                <th scope="col">Nama </th>
                                <th scope="col">Alaamat</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Status</th>

                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($mekanik as $item)
                                <tr>
                                    <td scope="row">{{ $nomor++ }}</td>
                                    <td>{{ $item->namamekanik }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->hp }}</td>

                                    <td>
                                        <a href="/mekanik/edit/{{ $item->id }}"
                                            class="btn btn-primary btn-sm ">Edit</a>

                                        {{-- <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop{{ $item->id }}">
                                                Hapus
                                            </button>
                                            <div class="modal fade" id="staticBackdrop{{ $item->id }}" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-black" id="staticBackdropLabel">Peringatan</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-black">
                                                            Yakin Data Pelanggan {{ $item->mekanik }} Ingin Di Hapus?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                
                                                            <form method="POST" action="/mekanik/{{ $item->id }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-primary">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}


                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#modal-default{{ $item->id }}">
                                            Hapus
                                        </button>

                                        <div class="modal fade" id="modal-default{{ $item->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Peringatan</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Yakin Data Mekanik {{ $item->namamekanik }} Ingin Di Hapus?
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>

                                                        <form method="POST" action="/mekanik/{{ $item->id }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-primary">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>

                                    </td>



                                </tr>
                            @empty
                                <td colspan="4">Tidak Ada Data</td>
                            @endforelse
                        </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example2').DataTable();
    });
</script>
@endsection
