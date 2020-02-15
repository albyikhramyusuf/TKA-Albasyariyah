<div class="modal fade bd-example-modal-md" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalTitle2">Tambah Data Tag</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tag.store') }}" method="POST">
                        {{ csrf_field() }}

                    <div class="form-group">
                        <label class="bmd-label-floating">Nama Tag</label>
                        <input class="form-control" type="text" style="color:black;" name="nama_tag" required="true">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" title="Tutup" class="btn btn-danger btn-outline" data-dismiss="modal"><i class="material-icons">close</i></button>
                    <button type="submit" title="Simpan" class="btn btn-success" onclick="return confirm('Apa kamu yakin mau menyimpannya?')"><i class="material-icons">save</i></button>
                </div>
            </form>
            </div>
        </div>
    </div>
