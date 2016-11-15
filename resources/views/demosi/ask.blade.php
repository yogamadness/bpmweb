<!-- confirmation -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal-ask">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f39c12; color: #fff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Pertanyaan</h4>
      </div>
      <div class="modal-body">
        <div class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-3 control-label" for="cAskDocType">
              <span class="pull-left">
                No Dokumen
              </span>
            </label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-8">
              <span id="cAskDocType"></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="cAskNikNasional">
              <span class="pull-left">
                NIK Nasional
              </span>
            </label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-8">
              <span id="cAskNikNasional"></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="cAskNikSap">
              <span class="pull-left">
                NIK SAP
              </span>
            </label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-8">
              <span id="cAskNikSap"></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="cAskNama">
              <span class="pull-left">
                Nama Karyawan
              </span>
            </label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-8">
              <span id="cAskNama"></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="cAskCatatan">
              <span class="pull-left">
                Keterangan
              </span>
            </label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-8">
              <span id="cAskCatatan"></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="iTanyaKe">
              <span class="pull-left">
                Bertanya Kepada *
              </span>
            </label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" placeholder="" id="iTanyaKe" name="iTanyaKe" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="iPertanyaan">
              <span class="pull-left">
                Pertanyaan *
              </span>
            </label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-8">
               <textarea class="form-control" id="iPertanyaan" name="iPertanyaan"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="submitt">Kirim</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- end confirmation -->
