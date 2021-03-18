@extends('layouts.template')

@section('content')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Pengaduan Kerusakan Aset Jaringan</h4>
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
                        <a href="/pengaduan">Pengaduan Kerusakan</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/pengaduan/view">Pengaduan Kerusakan Aset Jaringan</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Daftar Pengaduan</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <a href="{{route('add.pengaduan_jaringan')}}" class="btn btn-info btn-lg btn-block"
                                    ><i class="fa fa-plus"></i> Tambah Pengaduan</button>
                                </a>
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Pengadu</th>
                                            <th scope="col">No.Seri Aset</th>
                                            <th scope="col">Nama Aset</th>
                                            <th scope="col">Tgl Pengaduan</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection
