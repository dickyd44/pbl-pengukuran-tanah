@extends('layouts.app') @section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Permohonan</h1>
        </div>
        @include('includes.error-card')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    DataTables Permohonan
                </h6>
            </div>
            <div class="card-body">
                @if (auth()->user()->role == 'admin')
                    <a type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#formCreate">
                        <i class="fa fa-plus"></i> Tambah Berkas
                    </a>
                    @include('pages.permohonan.create')
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Berkas</th>
                                <th>Nama Pemohon</th>
                                <th>No WA</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->no_berkas }}</td>
                                    <td>{{ $item->nama_pemohon }}</td>
                                    <td>{{ $item->no_hp }}</td>
                                    <td>
                                        {{ $item->provinsi }},
                                        {{ $item->kota }},
                                        {{ $item->kecamatan }},
                                        {{ $item->kelurahan }},
                                        {{ $item->alamat_lengkap }}
                                    </td>
                                    <td>
                                        @if ($item->status == 'belum')
                                            <form id="formDelete{{ $item->id }}"
                                                action="{{ route('permohonan.destroy', $item->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                            <a type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#formUpdate{{ $i }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                @include('pages.permohonan.update')
                                <?php $i++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
