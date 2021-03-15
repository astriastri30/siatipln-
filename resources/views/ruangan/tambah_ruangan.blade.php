@extends('layouts.template')

@section('content')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Ruangan</h4>
                <ul class="breadcrumbs">
							<li class="nav-home">
								<a href="/home">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="/home">Kelola Data Master</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="/daftarruangan">Daftar Ruangan</a>
							</li>
						</ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Daftar Ruangan</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal"
                                    data-target="#addRuangan"><i class="fa fa-plus"></i> Tambah Ruangan</button>
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Ruangan</th>
                                            <th>Nama Unit</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($ruangan as $ruang)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$ruang->nama_ruangan}}</td>
                                            <td>{{$ruang->unit->nama_unit}}</td>
                                            <td>
                                               
                                                    <button class="btn btn-primary" data-toggle="modal"
                                                        data-original-title="Edit" data-target="#editRuangan"
                                                        id="editButton" data-id_ruangan="{{$ruang->id_ruangan}}"
                                                        data-nama_ruangan="{{$ruang->nama_ruangan}}"
                                                        data-unit_id="{{$ruang->unit_id}}">
                                                        <i class="fa fa-edit"></i>
                                                        Edit
                                                    </button>

                                                    <form action="{{route('delete.ruangan', [$ruang->id_ruangan]) }}"
                                                        method="post"
                                                        onclick="return confirm('Anda yakin menghapus data ?')"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                        Hapus
                                                    </button>

                                                    </form>
                                                
                                            </td>    
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Input -->
        <div class="modal fade" id="addRuangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ruangan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('store.ruangan')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Ruangan</label>
                                <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Nama Unit</label>
                                <select name="unitselect" class="form-control" id="id_unit">
                                    @foreach($units as $unit)
                                    <option value="{{$unit->id_unit}}">{{$unit->nama_unit}}</option>
                                    @endforeach
                                </select>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal EDIT Ruangan-->
    <div class="modal fade" id="editRuangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Ruangan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('update.ruangan')}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" class="form-control" id="edit_id_ruangan" name="id_ruangan">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ruangan</label>
                            <input type="text" class="form-control" id="edit_nama_ruangan" name="nama_ruangan" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Nama Unit</label>
                            <select name="unitselect" class="form-control" id="edit_id_unit">
                                @foreach($units as $unit)
                                <option value="{{$unit->id_unit}}">{{$unit->nama_unit}}</option>
                                @endforeach
                            </select>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
    $(document).ready(function () {
        $(document).on("click", "#editButton", function () {
            var id_ruangan = $(this).data("id_ruangan");
            var nama_ruangan = $(this).data("nama_ruangan");
            var unit_id = $(this).data("unit_id");

            $("#edit_id_ruangan").val(id_ruangan);
            $("#edit_nama_ruangan").val(nama_ruangan);


            console.log(id_ruangan);

            $("#edit_id_unit > option").each(function () {
                if (this.value == unit_id) {
                    $(this).attr("selected", "selected");
                }
            });
        })
    })

</script>
@endsection
