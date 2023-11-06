<!-- Modal -->
<div class="modal fade" id="formCreate" tabindex="-1" role="dialog" aria-labelledby="formCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="/user" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="formCreateLabel">
                        Create User
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6 form-group">
                            <label for="email-address">Email address</label>
                            <input type="email" class="form-control" id="email-address" placeholder="Enter email"
                                name="email" required />
                        </div>
                        <div class="col-6 form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                name="password" required />
                        </div>
                        <div class="col-6 form-group">
                            <label for="namalengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="namalengkap" placeholder="Enter Nama Lengkap"
                                name="nama" required />
                        </div>
                        <div class="col-6 form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" placeholder="Enter NIP"
                                name="nip" required />
                        </div>
                        <div class="col-6 form-group">
                            <label for="no_hp">Telepon (wa)</label>
                            <input type="text" class="form-control" id="no_hp" placeholder="Enter Nomor WA"
                                name="no_hp" required />
                        </div>
                        <div class="col-6 form-group">
                            <label for="pangkat">Pangkat</label>
                            <input type="text" class="form-control" id="pangkat" placeholder="Enter pangkat"
                                name="pangkat" required />
                        </div>
                        <div class="col-6 form-group">
                            <label for="golongan">Golongan</label>
                            <input type="text" class="form-control" id="golongan" placeholder="Enter golongan"
                                name="golongan" required />
                        </div>
                        <div class="col-6 form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" placeholder="Enter Jabatan"
                                name="jabatan" required />
                        </div>
                        <div class="col-6 form-group">
                            <label for="akses-select">Role</label>
                            <select class="form-control" id="akses-select" name="role" required>
                                <option value="" selected>-- pilih role --</option>
                                @foreach ($list_role as $role)
                                    <option value="{{ $role }}">{{ $role }}</option>
                                @endforeach
                            </select>
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
