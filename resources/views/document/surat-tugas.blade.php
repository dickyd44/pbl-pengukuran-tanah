<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Format Dokumen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid">
        <!-- KOP SURAT -->
        <div class="d-flex align-items-center pb-2 mb-4" style="border-bottom: double black; display:flex">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Logo_BPN-KemenATR_%282017%29.png"
                alt="Logo BPN" width="70" height="70" style="float: left" />
            <div class="text-center w-100">
                <h4 class="h4 mb-0"><b>BADAN PERTANAHAN NASIONAL</b></h4>
                <h2 class="h5 mb-0">KANTOR PERTANAHAN KOTA BATAM</h2>
                <p class="mb-0">
                    JL. Jaksa Agung R. Soeprapto, Sungai Harapan, Kec.
                    Sekupang
                </p>
            </div>
            <br>
        </div>
        <!-- KONTEN SURAT -->
        <h3 class="text-center h5"><b>SURAT TUGAS PENGUKURAN</b></h3>
        <p class="text-center">Nomor : {{ $data->no_surat }}/{{ date('Y', strtotime($data->tanggal)) }}</p>
        <p>
            Penanggung jawab Perkerjaan Pekerjaan Lain (PPL) dalam
            Pelaksanaan Pengukuran dan Pemetaan pada kantor Pertanahan KOTA
            BATAM
        </p>
        <ol>
            <li>
                <ul style="list-style: lower-alpha">
                    <li>
                        <table>
                            <tr>
                                <td style="width: 200px">Nama / NIP</td>
                                <td style="width: 20px">:</td>
                                <td>{{ $data->koordinator->nama }} / {{ $data->koordinator->nip }}</td>
                            </tr>
                            <tr>
                                <td>Pangkat / Golongan</td>
                                <td>:</td>
                                <td>{{ $data->koordinator->pangkat }} / {{ $data->koordinator->golongan }}</td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td>{{ $data->koordinator->jabatan }}</td>
                            </tr>
                        </table>
                    </li>
                    <li>
                        Dengan Tugas <br />
                        {{ $data->tugas_koordinator }}
                    </li>
                </ul>
            </li>
            <li>
                <ul style="list-style: lower-alpha">
                    <li>
                        <table>
                            <tr>
                                <td style="width: 200px">Nama / NIP</td>
                                <td style="width: 20px">:</td>
                                <td>{{ $data->petugas->nama }} / {{ $data->petugas->nip }}</td>
                            </tr>
                            <tr>
                                <td>Pangkat / Golongan</td>
                                <td>:</td>
                                <td>{{ $data->petugas->pangkat }} / {{ $data->petugas->golongan }}</td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td>{{ $data->petugas->jabatan }}</td>
                            </tr>
                        </table>
                    </li>
                    <li>
                        Dengan Tugas <br />
                        Melaksanakan Pengukuran Pekerjaan Pekerjaan Lain
                        dalam Pelaksanaan Pengukuran dan Pemetaan <br />
                        - {{ $data->tugas_petugas }}
                    </li>
                </ul>
            </li>
            <li>
                Lokasi dan Volume Kegiatan <br />
                <ul style="list-style: none">
                    <li>
                        <table>
                            <tr>
                                <td style="width: 200px">Alamat</td>
                                <td style="width: 20px">:</td>
                                <td>
                                    {{ $data->berkas->provinsi }},
                                    {{ $data->berkas->kota }},
                                    {{ $data->berkas->kecamatan }},
                                    {{ $data->berkas->kelurahan }},
                                    {{ $data->berkas->alamat_lengkap }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Volume</td>
                                <td style="width: 20px">:</td>
                                <td>
                                    {{ $data->berkas->volume_awal }} m<sup>2</sup>
                                </td>
                            </tr>
                        </table>
                    </li>
                </ul>
            </li>
            <li>
                Waktu <br />
                <ul style="list-style: none">
                    <li>
                        <table>
                            <tr>
                                <td style="width: 200px">Tanggal Mulai</td>
                                <td style="width: 20px">:</td>
                                <td>{{ $data->tanggal }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Selesai</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                        </table>
                    </li>
                </ul>
            </li>
            <li>
                Biaya dibebankan pada <br />
                <ul style="list-style: none">
                    <li>
                        {{ $data->beban_biaya }}
                    </li>
                </ul>
            </li>
            <li>Hasil Pelaksanaan Tugas Supaya dilaporkan</li>
        </ol>
        <p>
            Demikian Surat Tugas ini dibuat untuk dilaksanakan dengan penuh
            tanggung jawab dan dipergunakan sebagai mestinya
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script>
        window.print();
    </script>
</body>

</html>
