<!-- Modal -->
<div class="modal fade" id="formCreate" tabindex="-1" role="dialog" aria-labelledby="formCreateLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('permohonan.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="formCreateLabel">
                        Create Berkas
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="no_berkas">No Berkas</label>
                            <input type="text" class="form-control" id="no_berkas" placeholder="Enter No Berkas"
                                name="no_berkas" required value="{{$noberkas}}" />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="nama_pemohon">Nama Pemohon</label>
                            <input type="text" class="form-control" id="nama_pemohon" placeholder="Enter Nama Pemohon"
                                name="nama_pemohon" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="no_hp">No Wa</label>
                            <input type="text" class="form-control" id="no_hp" placeholder="Enter No Wa" name="no_hp"
                                value="+62" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="provinsi">Provinsi</label>
                            <input type="text" class="form-control" id="provinsi" placeholder="Enter Provinsi"
                                name="provinsi" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="kota">Kota</label>
                            <input type="text" class="form-control" id="kota" placeholder="Enter Kota" name="kota"
                                required />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" placeholder="Enter Kecamatan"
                                name="kecamatan" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="kelurahan">Kelurahan</label>
                            <input type="text" class="form-control" id="kelurahan" placeholder="Enter Kelurahan"
                                name="kelurahan" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="volume_awal">Volume Awal</label>
                            <input type="text" class="form-control" id="volume_awal" placeholder="Enter Volume Awal"
                                name="volume_awal" required />
                        </div>
                        <div class="col-12 form-group">
                            <label for="alamat_lengkap">Alamat Lengkap</label>
                            <textarea name="alamat_lengkap" class="form-control" id="alamat_lengkap"
                                required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>