<!-- notification -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal-notification">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Notifikasi</h4>
      </div>
      <div class="modal-body">
@if (Session::get('status') == 1)
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
            <label class="col-sm-3">No Dokumen </label> <p class="col-sm-9">: <span id="nNoDokumen">{{ Session::get('no_doc') }}</span></p>
            </div>
            <div class="form-group">
            <label class="col-sm-3">NIK </label> <p class="col-sm-9">: <span id="cNikSap">{{ Session::get('nik') }}</span></p>
            </div>
            <div class="form-group">
              <label class="col-sm-3">Nama </label> <p class="col-sm-9">: <span id="nNama">{{ Session::get('name') }}</span></p>
            </div>
            <div class="form-group">
              <label class="col-sm-3">Keterangan </label> <p class="col-sm-9">: <span id="nKeterangan">{{ Session::get('notes') }}</span></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="alert alert-success">
            	<i class="icon fa fa-check"></i> PROSES @if(Session::get('form_type') === 'approve') PERSETUJUAN @else PENGAJUAN @endif  DOKUMEN BERHASIL
            </div>
          </div>
        </div>
@else
        <div class="row">
          <div class="col-xs-12">
            <div class="alert alert-danger">
            	<i class="icon fa fa-check"></i> PROSES PERSETUJUAN DOKUMEN GAGAL. MOHON ULANGI LAGI.
            </div>
          </div>
        </div>
@endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- end notification -->
