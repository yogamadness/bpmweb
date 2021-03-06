<!-- confirmation -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal-confirmation">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Konfirmasi</h4>
      </div>
      <div class="modal-body">
      
        <div class="row">
          <div class="col-xs-12">
@if($form_type === 'approve')
            <div class="form-group">
            <label class="col-sm-3">No Dokumen </label> <p class="col-sm-9">: <span id="cAgreeDocType"></span></p>
            </div>
            <div class="form-group">
            <label class="col-sm-3">NIK </label> <p class="col-sm-9">: <span id="cAgreeNikSap"></span></p>
            </div>
            <div class="form-group">
              <label class="col-sm-3">Nama </label> <p class="col-sm-9">: <span id="cAgreeNama"></span></p>
            </div>
            <div class="form-group">
              <label class="col-sm-3">Keterangan </label> <p class="col-sm-9">: <span id="cAgreeCatatan"></span></p>
            </div>
@else
            <div class="form-group">
            <label class="col-sm-3">NIK </label> <p class="col-sm-9">: <span id="cSubmitNikSap"></span></p>
            </div>
            <div class="form-group">
              <label class="col-sm-3">Nama </label> <p class="col-sm-9">: <span id="cSubmitNama"></span></p>
            </div>
            <div class="form-group">
              <label class="col-sm-3">Keterangan </label> <p class="col-sm-9">: <span id="cSubmitKeterangan"></span></p>
            </div>
@endif 
          </div>
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="submit">Ajukan (validasi ok)</button>
        <button type="button" class="btn btn-success" id="submit1">Ajukan (validasi gagal)</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- end confirmation -->