<!-- confirmation -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal-rejection">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">ALASAN PENOLAKAN DOKUMEN	</h4>
      </div>
      <div class="modal-body">
      
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
            <label class="col-sm-3">No Dokumen </label> <p class="col-sm-9">: <span id="cRejectDocType"></span></p>
            </div>
            <div class="form-group">
            <label class="col-sm-3">NIK </label> <p class="col-sm-9">: <span id="cRejectNikSap"></span></p>
            </div>
            <div class="form-group">
              <label class="col-sm-3">Nama </label> <p class="col-sm-9">: <span id="cRejectNama"></span></p>
            </div>
            <div class="form-group">
              <label class="col-sm-3">Keterangan </label> <p class="col-sm-9">: <span id="cRejectCatatan"></span></p>
            </div>
            <div class="form-group">
              <label class="col-sm-3">Alasan Penolakan * </label> 
              	<p class="col-sm-9"><textarea class="form-control" rows="3" placeholder="Enter ..." id="iCatatan" name="iCatatan" {{ $field_rules['iCatatan'] }}></textarea>
              	</p>
            </div>
          </div>
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="submit">Kirim</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- end confirmation -->