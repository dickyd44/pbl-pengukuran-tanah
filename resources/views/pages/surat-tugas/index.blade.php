@extends('layouts.app') @section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Surat Tugas</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    DataTables Surat Tugas
                </h6>
            </div>
            <div class="card-body">
                @if (auth()->user()->role == 'admin')
                    <a type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#formCreate">
                        <i class="fa fa-plus"></i> Tambah Surat Tugas
                    </a>
                    @include('pages.surat-tugas.create')
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Surat Tugas</th>
                                <th>Tanggal</th>
                                <th>Nama Pemohon</th>
                                <th>No WA</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->no_surat }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>{{ $item->berkas->nama_pemohon }}</td>
                                    <td>{{ $item->berkas->no_hp }}</td>
                                    <td>
                                        {{ $item->berkas->provinsi }},
                                        {{ $item->berkas->kota }},
                                        {{ $item->berkas->kecamatan }},
                                        {{ $item->berkas->kelurahan }},
                                        {{ $item->berkas->alamat_lengkap }}
                                    </td>
                                    <td>
                                        @if ($item->status == 'belum')
                                            <span class="badge badge-danger">Dalam Proses</span>
                                        @else
                                            <span class="badge badge-success">Selesai</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (auth()->user()->role == 'petugas')
                                            @if ($item->status == 'belum')
                                                <a type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#formUpdate{{ $i }}">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                                @include('pages.surat-tugas.update')
                                            @endif
                                        @endif
                                        <a href="{{ route('dokumen-surat-tugas', $item->id) }}" class="btn btn-info"
                                            target="_BLANK">
                                            <i class="fa fa-print"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
