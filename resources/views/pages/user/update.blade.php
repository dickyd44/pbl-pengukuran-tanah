<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $i }}" tabindex="-1" role="dialog"
    aria-labelledby="formUpdate{{ $i }}Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('user.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdate{{ $i }}Label">
                        Update User
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
                                name="email" required value="{{ $item->email }}" />
                        </div>
                        <div class="col-6 form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password"
                                placeholder="Input Password untuk mengganti password" name="password" />
                        </div>
                        <div class="col-6 form-group">
                            <label for="namalengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="namalengkap" placeholder="Enter Nama Lengkap"
                                name="nama" required value="{{ $item->nama }}" />
                        </div>
                        <div class="col-6 form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" placeholder="Enter NIP"
                                name="nip" required value="{{ $item->nip }}" />
                        </div>
                        <div class="col-6 form-group">
                            <label for="no_hp">Telepon (wa)</label>
                            <input type="text" class="form-control" id="no_hp" placeholder="Enter Nomor WA"
                                name="no_hp" required value="{{ $item->no_hp }}" />
                        </div>
                        <div class="col-6 form-group">
                            <label for="pangkat">Pangkat</label>
                            <input type="text" class="form-control" id="pangkat" placeholder="Enter pangkat"
                                name="pangkat" required value="{{ $item->pangkat }}" />
                        </div>
                        <div class="col-6 form-group">
                            <label for="golongan">Golongan</label>
                            <input type="text" class="form-control" id="golongan" placeholder="Enter golongan"
                                name="golongan" required value="{{ $item->golongan }}" />
                        </div>
                        <div class="col-6 form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" placeholder="Enter Jabatan"
                                name="jabatan" required value="{{ $item->jabatan }}" />
                        </div>
                        <div class="col-6 form-group">
                            <label for="akses-select">Role</label>
                            <select class="form-control" id="akses-select" name="role" required>
                                <option value="">-- pilih role --</option>
                                @foreach ($list_role as $role)
                                    <option value="{{ $role }}"
                                        @if ($role == $item->role) selected @endif>
                                        {{ $role }}
                                    </option>
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
