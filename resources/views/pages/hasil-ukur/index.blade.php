@extends('layouts.app') @section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Hasil Ukur</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    DataTables Hasil Ukur
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tableLaporan" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Berkas</th>
                                <th>Tanggal</th>
                                <th>Nama Pemohon</th>
                                <th>Alamat</th>
                                <th>Volume</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->surattugas->berkas->no_berkas }}</td>
                                    <td>{{ $item->surattugas->tanggal }}</td>
                                    <td>{{ $item->surattugas->berkas->nama_pemohon }}</td>
                               
                                    <td>
                                        {{ $item->surattugas->berkas->provinsi }},
                                        {{ $item->surattugas->berkas->kota }},
                                        {{ $item->surattugas->berkas->kecamatan }},
                                        {{ $item->surattugas->berkas->kelurahan }},
                                        {{ $item->surattugas->berkas->alamat_lengkap }}
                                    </td>
                                    <td>{{ $item->volume }}</td>

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
