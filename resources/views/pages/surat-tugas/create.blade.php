<!-- Modal -->
<div class="modal fade" id="formCreate" tabindex="-1" role="dialog" aria-labelledby="formCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('surat-tugas.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="formCreateLabel">
                        Entri Surat Tugas
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="no_surat">No Surat</label>
                            <input type="text" class="form-control" id="no_surat" placeholder="Enter No Surat" name="no_surat" required value="{{$nosurat}}" />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="tanggal">Tanggal Surat</label>
                            <input type="date" class="form-control" id="tanggal" placeholder="Enter Tanggal Surat" name="tanggal" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="no-berkas">No Berkas</label>
                            <select class="form-control" id="no-berkas" name="id_berkas" required>
                                <option value="" selected>-- pilih berkas --</option>
                                @foreach ($list_berkas as $l)
                                <option value="{{ $l->id }}">{{ $l->no_berkas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="koordinator">Koordinator</label>
                            <select class="form-control" id="koordinator" name="id_koordinator" required>
                                <option value="" selected>-- pilih koordinator --</option>
                                @foreach ($list_koordinator as $l)
                                <option value="{{ $l->id }}">{{ $l->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="petugas">Petugas</label>
                            <select class="form-control" id="petugas" name="id_petugas" required>
                                <option value="" selected>-- pilih petugas --</option>
                                @foreach ($list_petugas as $l)
                                <option value="{{ $l->id }}">{{ $l->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="tugas_koordinator">Tugas Koordinator</label>
                            <input type="text" class="form-control" id="tugas_koordinator" placeholder="Enter Tugas Koordinator" name="tugas_koordinator" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="tugas_petugas">Tugas Petugas Ukur</label>
                            <input type="text" class="form-control" id="tugas_petugas" placeholder="Enter Tugas Petugas Ukur" name="tugas_petugas" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="beban_biaya">Beban Biaya</label>
                            <input type="text" class="form-control" id="beban_biaya" placeholder="Enter Beban Biaya" name="beban_biaya" required />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>