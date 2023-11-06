<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $i }}" tabindex="-1" role="dialog"
    aria-labelledby="formUpdate{{ $i }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('surat-tugas.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdate{{ $i }}Label">
                        Input Hasil Ukur
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col form-group">
                            <label for="volume">Volume</label>
                            <input type="text" class="form-control" id="volume" placeholder="Enter Volume"
                                name="volume" required />
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
