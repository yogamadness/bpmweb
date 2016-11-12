<?php

namespace App\Http\Controllers;

//common
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

//controllers
use App\Http\Controllers\ApiController;

//models
use App\Http\Models\DemosiHeader;
use App\Http\Models\DemosiDetail;
use App\Http\Models\DemosiHeaderHistory;
use App\Http\Models\DemosiDetailHistory;
use App\Http\Models\ProcessStatusHistory;

class DemosiController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('ceklogin');
    }

    public function index($notifData = null)
    {
    	$data = DemosiHeader::all();
        return view('demosi.index', ['data' => $data, 'notification' => $notifData] );
    }

    public function create($input = null)
    {
    	$form_type = 'create';
    	$input['doc_code'] = '';

    	$field_rules = [
        				'iNikNasional'=>'',
        				'iTanggalMasukKerja'=>'readonly',
        				'iNikSap'=>'',
        				'iTanggalEfektifBerlaku'=>'',
        				'iNama'=>'readonly',
        				'iNomorPtk'=>'',
        				'iJenisPerubahan'=>'',
        				'iJenisPerubahanEmpWorkStatus'=>'',
        				'iPeriodePengangkatanKaryawanKontrak'=>'',
        				'iTanggalLahir'=>'readonly',
        				'iUmur'=>'readonly',
        				'iAtt3yAgo'=>'readonly',
        				'iAtt2yAgo'=>'readonly',
        				'iAtt1yAgo'=>'readonly',
        				'iProd3yAgo'=>'readonly',
        				'iProd2yAgo'=>'readonly',
        				'iProd1yAgo'=>'readonly',
        				'iIpe3yAgo'=>'',
        				'iIpe2yAgo'=>'',
        				'iIpe1yAgo'=>'',
        				'iSuratTeguran'=>'disabled', //masuk detail
        				'iMasaBerlaku'=>'readonly',
        				'iPerusahaanOld'=>'disabled',
        				'iPerusahaanNew'=>'',
        				'iBisnisAreaOld'=>'disabled',
        				'iBisnisAreaNew'=>'',
        				'iAfdelingOld'=>'disabled',
        				'iAfdelingNew'=>'',
        				'iJabatanOld'=>'disabled',
        				'iJabatanNew'=>'',
        				'iGolonganOld'=>'disabled',
        				'iGolonganNew'=>'',
        				'iStatusKaryawanOld'=>'disabled',
        				'iStatusKaryawanNew'=>'',
        				'iKeterangan'=>'',
        			];

        return view('demosi.create',[
            'getEmpWorkStatus' => ApiController::GetEmpWorkStatus(),
            'getOptEmpWorkStatus' => ApiController::GetOptEmpWorkStatus(),
            'getOptCompany' => ApiController::GetOptCompany(),
            'getOptBusinessArea' => ApiController::GetOptBusinessArea(),
            'getOptAfdeling' => ApiController::GetOptAfdeling(),
            'getOptJobCode' => ApiController::GetOptJobCode(),
            'getOptJobType' => ApiController::GetOptJobType(),
            'getEmpProductivity' => ApiController::GetEmpProductivity(),
            'input' => $input,
            'field_rules' => $field_rules,
            'form_type' => $form_type,
        	'urlGetEmpAutoComplete' => 'http://tap-flowdev.tap-agri.com/api/GetEmpAutoComplete',
            'job_code' => '',
        ]);
    }

    public function create_pemanen()
    {
    	$form_type = 'create';
    	$input['doc_code'] = '';

    	$field_rules = [
        				'iNikNasional'=>'',
        				'iTanggalMasukKerja'=>'readonly',
        				'iNikSap'=>'',
        				'iTanggalEfektifBerlaku'=>'',
        				'iNama'=>'readonly',
        				'iNomorPtk'=>'',
        				'iJenisPerubahan'=>'',
        				'iJenisPerubahanEmpWorkStatus'=>'',
        				'iPeriodePengangkatanKaryawanKontrak'=>'',
        				'iTanggalLahir'=>'readonly',
        				'iUmur'=>'readonly',
        				'iAtt3yAgo'=>'readonly',
        				'iAtt2yAgo'=>'readonly',
        				'iAtt1yAgo'=>'readonly',
        				'iProd3yAgo'=>'readonly',
        				'iProd2yAgo'=>'readonly',
        				'iProd1yAgo'=>'readonly',
        				'iIpe3yAgo'=>'',
        				'iIpe2yAgo'=>'',
        				'iIpe1yAgo'=>'',
        				'iSuratTeguran'=>'disabled', //masuk detail
        				'iMasaBerlaku'=>'readonly',
        				'iPerusahaanOld'=>'disabled',
        				'iPerusahaanNew'=>'',
        				'iBisnisAreaOld'=>'disabled',
        				'iBisnisAreaNew'=>'',
        				'iAfdelingOld'=>'disabled',
        				'iAfdelingNew'=>'',
        				'iJabatanOld'=>'disabled',
        				'iJabatanNew'=>'',
        				'iGolonganOld'=>'disabled',
        				'iGolonganNew'=>'',
        				'iStatusKaryawanOld'=>'disabled',
        				'iStatusKaryawanNew'=>'',
        				'iKeterangan'=>'',
        			];

        return view('demosi.create',[
            'getEmpWorkStatus' => ApiController::GetEmpWorkStatus(),
            'getOptEmpWorkStatus' => ApiController::GetOptEmpWorkStatus(),
            'getOptCompany' => ApiController::GetOptCompany(), //GetOptCompany
            'getOptBusinessArea' => ApiController::GetOptBusinessArea(), //GetOptBusinessArea
            'getOptAfdeling' => ApiController::GetOptAfdeling(), //GetOptAfdeling
            'getOptJobCode' => ApiController::GetOptJobCode(), //GetOptJobCode
            'getOptJobType' => ApiController::GetOptJobType(), //GetOptJobType
            'getEmpProductivity' => ApiController::GetEmpProductivity(),
            'input' => $input,
            'field_rules' => $field_rules,
            'form_type' => $form_type,
        	'urlGetEmpAutoComplete' => 'http://tap-flowdev.tap-agri.com/api/GetEmpAutoCompletePemanen',
            'job_code' => 'pemanen',
        ]);
    }

    public function create_non_pemanen()
    {
    	$form_type = 'create';
    	$input['doc_code'] = '';

    	$field_rules = [
        				'iNikNasional'=>'',
        				'iTanggalMasukKerja'=>'readonly',
        				'iNikSap'=>'',
        				'iTanggalEfektifBerlaku'=>'',
        				'iNama'=>'readonly',
        				'iNomorPtk'=>'',
        				'iJenisPerubahan'=>'',
        				'iJenisPerubahanEmpWorkStatus'=>'',
        				'iPeriodePengangkatanKaryawanKontrak'=>'',
        				'iTanggalLahir'=>'readonly',
        				'iUmur'=>'readonly',
        				'iAtt3yAgo'=>'readonly',
        				'iAtt2yAgo'=>'readonly',
        				'iAtt1yAgo'=>'readonly',
        				'iProd3yAgo'=>'readonly',
        				'iProd2yAgo'=>'readonly',
        				'iProd1yAgo'=>'readonly',
        				'iIpe3yAgo'=>'',
        				'iIpe2yAgo'=>'',
        				'iIpe1yAgo'=>'',
        				'iSuratTeguran'=>'disabled', //masuk detail
        				'iMasaBerlaku'=>'readonly',
        				'iPerusahaanOld'=>'disabled',
        				'iPerusahaanNew'=>'',
        				'iBisnisAreaOld'=>'disabled',
        				'iBisnisAreaNew'=>'',
        				'iAfdelingOld'=>'disabled',
        				'iAfdelingNew'=>'',
        				'iJabatanOld'=>'disabled',
        				'iJabatanNew'=>'',
        				'iGolonganOld'=>'disabled',
        				'iGolonganNew'=>'',
        				'iStatusKaryawanOld'=>'disabled',
        				'iStatusKaryawanNew'=>'',
        				'iKeterangan'=>'',
        			];

        return view('demosi.create',[
            'getEmpWorkStatus' => ApiController::GetEmpWorkStatus(),
            'getOptEmpWorkStatus' => ApiController::GetOptEmpWorkStatus(),
            'getOptCompany' => ApiController::GetOptCompany(),
            'getOptBusinessArea' => ApiController::GetOptBusinessArea(),
            'getOptAfdeling' => ApiController::GetOptAfdeling(),
            'getOptJobCode' => ApiController::GetOptJobCode(),
            'getOptJobType' => ApiController::GetOptJobType(),
            'getEmpProductivity' => ApiController::GetEmpProductivity(),
            'input' => $input,
            'field_rules' => $field_rules,
            'form_type' => $form_type,
        	'urlGetEmpAutoComplete' => 'http://tap-flowdev.tap-agri.com/api/GetEmpAutoCompleteNonPemanen',
            'job_code' => 'non_pemanen',
        ]);
    }

    public function approve($id)
    {
    	$input['h_id'] = $id;

    	$form_type = 'approve';

    	$field_rules = [
        				'iNikNasional'=>'disabled',
        				'iTanggalMasukKerja'=>'disabled',
        				'iNikSap'=>'disabled',
        				'iTanggalEfektifBerlaku'=>'disabled',
        				'iNama'=>'disabled',
        				'iNomorPtk'=>'disabled',
        				'iJenisPerubahan'=>'disabled',
        				'iJenisPerubahanEmpWorkStatus'=>'disabled',
        				'iPeriodePengangkatanKaryawanKontrak'=>'disabled',
        				'iTanggalLahir'=>'disabled',
        				'iUmur'=>'disabled',
        				'iAtt3yAgo'=>'disabled',
        				'iAtt2yAgo'=>'disabled',
        				'iAtt1yAgo'=>'disabled',
        				'iProd3yAgo'=>'disabled',
        				'iProd2yAgo'=>'disabled',
        				'iProd1yAgo'=>'disabled',
        				'iIpe3yAgo'=>'disabled',
        				'iIpe2yAgo'=>'disabled',
        				'iIpe1yAgo'=>'disabled',
        				'iSuratTeguran'=>'disabled',
        				'iMasaBerlaku'=>'disabled',
        				'iPerusahaanOld'=>'disabled',
        				'iPerusahaanNew'=>'disabled',
        				'iBisnisAreaOld'=>'disabled',
        				'iBisnisAreaNew'=>'disabled',
        				'iAfdelingOld'=>'disabled',
        				'iAfdelingNew'=>'disabled',
        				'iJabatanOld'=>'disabled',
        				'iJabatanNew'=>'disabled',
        				'iGolonganOld'=>'disabled',
        				'iGolonganNew'=>'disabled',
        				'iStatusKaryawanOld'=>'disabled',
        				'iStatusKaryawanNew'=>'disabled',
        				'iKeterangan'=>'disabled',
        				'iHistoryPersetujuan'=>'disabled',
        				'iCatatanOld'=>'disabled',
        				'iCatatan'=>'',
        			];


    	$dHeader = DemosiHeader::where('h_id',$id)->first();

    	$emp = ApiController::GetEmpByNIK($dHeader->nik_sap);

    	if($emp) {
    		$dHeader->employee_name = $emp[0]['EMPLOYEE_NAME'];
    		$dHeader->dob = $emp[0]['DOB'];
    		$dHeader->comp_code = $emp[0]['COMP_CODE'];
    		$dHeader->comp_name = $emp[0]['COMP_NAME'];
    		$dHeader->est_code = $emp[0]['EST_CODE'];
    		$dHeader->est_name = $emp[0]['EST_NAME'];
    		$dHeader->afd_code = $emp[0]['AFD_CODE'];
    		$dHeader->afd_name = $emp[0]['AFD_NAME'];
    		$dHeader->join_date = $emp[0]['JOIN_DATE'];
    		$dHeader->age = $emp[0]['AGE'];
        }

    	$data = DemosiDetail::where('h_id',$id)->get();
    	foreach($data as $row) {
        	if($row->param_id == 1) $dDetail['iIpe3yAgo'] = $row->new_value; //Penilaian Karya / IPE 3 Tahun yg lalu
        	if($row->param_id == 2) $dDetail['iIpe2yAgo'] = $row->new_value; //Penilaian Karya / IPE 2 Tahun yg lalu
        	if($row->param_id == 3) $dDetail['iIpe1yAgo'] = $row->new_value; //Penilaian Karya / IPE 1 Tahun yg lalu
        	if($row->param_id == 4) $dDetail['iSuratTeguran'] = $row->new_value; //ST
        	if($row->param_id == 5) $dDetail['iSuratTeguran'] = $row->new_value; //SP1
        	if($row->param_id == 6) $dDetail['iSuratTeguran'] = $row->new_value; //SP2
        	if($row->param_id == 7) $dDetail['iSuratTeguran'] = $row->new_value; //SP3
        	if($row->param_id == 8) $dDetail['iSuratTeguran'] = $row->new_value; //Tidak Ada
        	if($row->param_id == 9) $dDetail['iPerusahaanNew'] = $row->new_value; //Perusahaan
        	if($row->param_id == 10) $dDetail['iBisnisAreaNew'] = $row->new_value; //Business Area / Estate / Divisi
        	if($row->param_id == 11) $dDetail['iAfdelingNew'] = $row->new_value; //Afdeling / Departemen
        	if($row->param_id == 12) $dDetail['iJabatanNew'] = $row->new_value; //Jabatan
        	if($row->param_id == 13) $dDetail['iGolonganNew'] = $row->new_value; //Golongan
        	if($row->param_id == 14) $dDetail['iStatusKaryawanNew'] = $row->new_value; //Status Karyawan
        	if($row->param_id == 15) $dDetail['iGajiPokokNew'] = $row->new_value; //Gaji Pokok
        	if($row->param_id == 16) $dDetail['iCatuBerasNew'] = $row->new_value; //Catu Beras
        	if($row->param_id == 17) $dDetail['iKeterangan'] = $row->new_value; //Keterangan
        }

        return view('demosi.approve',[
            'getEmpWorkStatus' => ApiController::GetEmpWorkStatus(),
            'getOptEmpWorkStatus' => ApiController::GetOptEmpWorkStatus(),
            'getOptCompany' => ApiController::GetOptCompany(),
            'getOptBusinessArea' => ApiController::GetOptBusinessArea(),
            'getOptAfdeling' => ApiController::GetOptAfdeling(),
            'getOptJobCode' => ApiController::GetOptJobCode(),
            'getOptJobType' => ApiController::GetOptJobType(),
            'getEmpProductivity' => ApiController::GetEmpProductivity(),
        	'urlGetEmpAutoComplete' => 'http://tap-flowdev.tap-agri.com/api/GetEmpAutoCompletePemanen',
            'job_code' => 'pemanen',
            'input' => $input,
            'dHeader' => $dHeader,
            'dDetail' => $dDetail,
            'field_rules' => $field_rules,
            'form_type' => $form_type,
        ]);
    }

    public function store(Request $request)
    {
      //notes: save juga ke TR_HC_PDM_PROC_STAT_HIST
    	$input = $request->all();
    	if($input) {
        	//validation
        	if($this->validation($input)) {
            	$demosiHeader = $this->saveDemosiHeader('insert', $input);
            	if($demosiHeader->h_id) {
                	$input['h_id'] = $demosiHeader->h_id;
                	$input['version_code'] = '';
                	$this->saveAllDemosiDetail('insert', $input);
            	}

            	//return success
    			return redirect()->route('demosi.index')
        					->with('form_type', 'create')
        					->with('notification', 1)
        					->with('status', 1)
        					->with('no_doc', $demosiHeader->doc_code)
        					->with('nik', $demosiHeader->nik_sap)
        					->with('name', $input['iNama'])
        					->with('notes', $demosiHeader->notes);
            } else {
            	//return failed
            	$val_error = ['iNikSap'=>'val-error'];
    			return redirect()->to('demosi/create_pemanen')->withInput($input);

            /*
    			return redirect()->route('demosi.index')
        					->with('val_error', $val_error)
        					->with('form_type', 'create')
        					->with('notification', 1)
        					->with('status', 0);
            */
            } // validation
        } // $input
    }

    public function store_approve(Request $request)
    {
    	$input = $request->all();
    	if($input) {
        	//validation
        	if($input['iCatatan']) {
            	$input['proc_stat_code'] = 'PSL';
            	$proc_stat = $this->saveProcessStatusHistory($input);
            	//return success
            	$dHeader = DemosiHeader::where('h_id',$input['h_id'])->first();

    			return redirect()->route('demosi.index')
        					->with('notification', 1)
        					->with('status', 1)
        					->with('form_type', 'approve')
        					->with('no_doc', $dHeader->doc_code)
        					->with('nik', $dHeader->nik_sap)
        					->with('name', $input['iNama'])
        					->with('notes', $dHeader->notes);
            } else {
            	//return failed
    			return redirect()->route('demosi.create', $input);
            } // validation
        } // $input
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
    	$form_type = 'edit';
    	$field_rules = [
        				'iNikNasional'=>'',
        				'iTanggalMasukKerja'=>'readonly',
        				'iNikSap'=>'',
        				'iTanggalEfektifBerlaku'=>'',
        				'iNama'=>'readonly',
        				'iNomorPtk'=>'',
        				'iJenisPerubahan'=>'',
        				'iJenisPerubahanEmpWorkStatus'=>'',
        				'iPeriodePengangkatanKaryawanKontrak'=>'',
        				'iTanggalLahir'=>'readonly',
        				'iUmur'=>'readonly',
        				'iAtt3yAgo'=>'readonly',
        				'iAtt2yAgo'=>'readonly',
        				'iAtt1yAgo'=>'readonly',
        				'iProd3yAgo'=>'readonly',
        				'iProd2yAgo'=>'readonly',
        				'iProd1yAgo'=>'readonly',
        				'iIpe3yAgo'=>'readonly',
        				'iIpe2yAgo'=>'readonly',
        				'iIpe1yAgo'=>'readonly',
        				'iSuratTeguran'=>'disabled',
        				'iMasaBerlaku'=>'readonly',
        				'iPerusahaanOld'=>'disabled',
        				'iPerusahaanNew'=>'',
        				'iBisnisAreaOld'=>'disabled',
        				'iBisnisAreaNew'=>'',
        				'iAfdelingOld'=>'disabled',
        				'iAfdelingNew'=>'',
        				'iJabatanOld'=>'disabled',
        				'iJabatanNew'=>'',
        				'iGolonganOld'=>'disabled',
        				'iGolonganNew'=>'',
        				'iStatusKaryawanOld'=>'disabled',
        				'iStatusKaryawanNew'=>'',
        				'iKeterangan'=>'',
        			];

    	$dHeader = DemosiHeader::where('h_id',$id)->first();

    	$emp = ApiController::GetEmpByNIK($dHeader->nik_sap);

    	if($emp) {
    		$dHeader->employee_name = $emp[0]['EMPLOYEE_NAME'];
    		$dHeader->dob = $emp[0]['DOB'];
    		$dHeader->comp_code = $emp[0]['COMP_CODE'];
    		$dHeader->comp_name = $emp[0]['COMP_NAME'];
    		$dHeader->est_code = $emp[0]['EST_CODE'];
    		$dHeader->est_name = $emp[0]['EST_NAME'];
    		$dHeader->afd_code = $emp[0]['AFD_CODE'];
    		$dHeader->afd_name = $emp[0]['AFD_NAME'];
    		$dHeader->join_date = $emp[0]['JOIN_DATE'];
    		$dHeader->age = $emp[0]['AGE'];
        }

    	$data = DemosiDetail::where('h_id',$id)->get();
    	foreach($data as $row) {
        	if($row->param_id == 1) $dDetail['iIpe3yAgo'] = $row->new_value; //Penilaian Karya / IPE 3 Tahun yg lalu
        	if($row->param_id == 2) $dDetail['iIpe2yAgo'] = $row->new_value; //Penilaian Karya / IPE 2 Tahun yg lalu
        	if($row->param_id == 3) $dDetail['iIpe1yAgo'] = $row->new_value; //Penilaian Karya / IPE 1 Tahun yg lalu
        	if($row->param_id == 4) $dDetail['iSuratTeguran'] = $row->new_value; //ST
        	if($row->param_id == 5) $dDetail['iSuratTeguran'] = $row->new_value; //SP1
        	if($row->param_id == 6) $dDetail['iSuratTeguran'] = $row->new_value; //SP2
        	if($row->param_id == 7) $dDetail['iSuratTeguran'] = $row->new_value; //SP3
        	if($row->param_id == 8) $dDetail['iSuratTeguran'] = $row->new_value; //Tidak Ada
        	if($row->param_id == 9) $dDetail['iPerusahaanNew'] = $row->new_value; //Perusahaan
        	if($row->param_id == 10) $dDetail['iBisnisAreaNew'] = $row->new_value; //Business Area / Estate / Divisi
        	if($row->param_id == 11) $dDetail['iAfdelingNew'] = $row->new_value; //Afdeling / Departemen
        	if($row->param_id == 12) $dDetail['iJabatanNew'] = $row->new_value; //Jabatan
        	if($row->param_id == 13) $dDetail['iGolonganNew'] = $row->new_value; //Golongan
        	if($row->param_id == 14) $dDetail['iStatusKaryawanNew'] = $row->new_value; //Status Karyawan
        	if($row->param_id == 15) $dDetail['iGajiPokokNew'] = $row->new_value; //Gaji Pokok
        	if($row->param_id == 16) $dDetail['iCatuBerasNew'] = $row->new_value; //Catu Beras
        	if($row->param_id == 17) $dDetail['iKeterangan'] = $row->new_value; //Keterangan
        }

        return view('demosi.edit',[
            'getEmpWorkStatus' => ApiController::GetEmpWorkStatus(),
            'getOptEmpWorkStatus' => ApiController::GetOptEmpWorkStatus(),
            'getOptCompany' => ApiController::GetOptCompany(),
            'getOptBusinessArea' => ApiController::GetOptBusinessArea(),
            'getOptAfdeling' => ApiController::GetOptAfdeling(),
            'getOptJobCode' => ApiController::GetOptJobCode(),
            'getOptJobType' => ApiController::GetOptJobType(),
            'getEmpProductivity' => ApiController::GetEmpProductivity(),
        	'urlGetEmpAutoComplete' => 'http://tap-flowdev.tap-agri.com/api/GetEmpAutoCompletePemanen',
            'job_code' => 'pemanen',
            'dHeader' => $dHeader,
            'dDetail' => $dDetail,
            'field_rules' => $field_rules,
            'form_type' => $form_type,
        ]);
    }

    public function update(Request $request, $id)
    {
    	$input = $request->all();
    	if($input) {

        	if($input['form_type']=='approve') return $this->store_approve($request);

        	//validation
        	if($this->validation($input)) {
            	$input['h_id'] = $id;
            	$demosiHeader = $this->saveDemosiHeader('update', $input);
            	if($demosiHeader->version_code) {
                	$input['version_code'] = $demosiHeader->version_code;
                	$input['h_id'] = $demosiHeader->h_id;
                	$this->saveAllDemosiDetail('update', $input);
            	}

            	//return success
    			return redirect()->route('demosi.index')
        					->with('notification', 1)
        					->with('status', 1)
        					->with('no_doc', $demosiHeader->doc_code)
        					->with('nik', $demosiHeader->nik_sap)
        					->with('name', $input['iNama'])
        					->with('notes', $demosiHeader->notes);
            } else {
            	//return failed
    			return redirect()->route('demosi.index')
        					->with('notification', 1)
        					->with('status', 0);
            } // validation
        } // $input
    }

    public function destroy($id)
    {
        //
    }

	function saveDemosiHeader($type, $input)
    {
    	if($type == 'insert') $data = new DemosiHeader;
    	if($type == 'update') {
        	$data = DemosiHeader::where('h_id',$input['h_id'])->first();
        	$history = $this->saveDemosiHeaderHistory($data);
        }
    	$data->doc_code = ( $type == 'update' ? $input['iNikSap'] : date('y').'.'.date('m').'/HC/PDM-NS/'.str_pad($this->nextnumber(),5,"0",STR_PAD_LEFT) );
    	$data->type_doc = '1';//non staff pemanen ato non staff non pemanen
    	$data->effective_date = date('Y/m/d', strtotime($input['iTanggalEfektifBerlaku']));
    	$data->nik_national = $input['iNikNasional'];
    	$data->nik_sap = $input['iNikSap'];
    	$data->notes = $input['iKeterangan']; // notes disimpan di TR_HC_PDM_PROC_STAT_HIST di kolom  APPROV_REV_NOTES
    	$data->comp_code = 1;
    	$data->bpm_code = 1;
    	if($type == 'insert') $data->created_by = 1;
    	if($type == 'insert') $data->created_at = date('Y/m/d H:i:s');
    	$data->update_by = 1;
    	$data->update_at = date('Y/m/d H:i:s');
    	$data->sync_by = 1;
    	$data->sync_at = date('Y/m/d H:i:s');
    	$data->cr_remote_addr = ' ';
    	$data->cr_client_browser = ' ';
    	$data->up_remote_addr = ' ';
    	$data->up_client_browser = ' ';
    	$data->trans_type_id = '1';
    	$data->save();

        if($type == 'update') $data->version_code = $history->version_code;

    	return $data;
    }

	function saveDemosiHeaderHistory($input)
    {
    	$data = new DemosiHeaderHistory;
    	$data->h_hist_id = $input['h_id'];
    	$data->doc_code = $input['doc_code'];
    	$data->type_doc = $input['type_doc'];
    	$data->effective_date = date('Y/m/d', strtotime($input['effective_date']));
    	$data->nik_national = $input['nik_national'];
    	$data->nik_sap = $input['nik_sap'];
    	$data->notes = $input['notes'];
    	$data->comp_code = $input['comp_code'];
    	$data->bpm_code = $input['bpm_code'];
    	$data->created_by = $input['created_by'];
    	$data->created_at = date('Y/m/d H:i:s', strtotime($input['created_at']));
    	$data->update_by = $input['update_by'];
    	$data->update_at = date('Y/m/d H:i:s', strtotime($input['update_at']));
    	$data->sync_by = $input['sync_by'];
    	$data->sync_at = date('Y/m/d H:i:s', strtotime($input['sync_at']));
    	$data->cr_remote_addr = $input['cr_remote_addr'];
    	$data->cr_client_browser = $input['cr_client_browser'];
    	$data->up_remote_addr = $input['up_remote_addr'];
    	$data->up_client_browser = $input['up_client_browser'];
    	$data->trans_type_id = $input['trans_type_id'];
    	$data->save();

    	return $data;
    }

	function saveDemosiDetail($type, $input)
    {
    	if($type == 'update') {
        	$data = DemosiDetail::where('h_id',$input['h_id'])->where('param_id',$input['param_id'])->first();
        	$data->version_code = $input['version_code'];
        	$this->saveDemosiDetailHistory($data);
    		unset($data->version_code);
        } else {
        	$data = new DemosiDetail;
        }

    	$data->current_value = $type == 'insert' ? ' ' : ($data->new_value ? $data->new_value : ' ');
    	$data->new_value = $input['new_value'] ? $input['new_value'] : ' ';
    	if($type == 'insert') $data->created_by = '1';
    	if($type == 'insert') $data->created_at = date('Y/m/d H:i:s');
    	$data->update_by = '1';
    	$data->update_at = date('Y/m/d H:i:s');
    	if($type == 'insert') $data->param_id = $input['param_id'];
    	if($type == 'insert') $data->h_id = $input['h_id'];
    	$data->save();

    	return $data;
    }

	function saveDemosiDetailHistory($input)
    {
    	$data = new DemosiDetailHistory;
    	$data->version_code = $input['version_code'];
    	$data->current_value = $input['current_value'] ? $input['current_value'] : ' ';
    	$data->new_value = $input['new_value'] ? $input['new_value'] : ' ';
    	$data->created_by = $input['created_by'];
    	$data->created_at = date('Y/m/d H:i:s', strtotime($input['created_at']));
    	$data->update_by = $input['update_by'];
    	$data->update_at = date('Y/m/d H:i:s', strtotime($input['update_at']));
    	//$data->param_id = $input['param_id'];
    	//$data->h_id = $input['h_id'];
    	$data->save();

    	return $data;
    }

	function saveAllDemosiDetail($type, $input)
    {
      //Mulai Periode pengangkatan karyawan
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>1, 'new_value'=>(isset($input['iIpe3yAgo']) ? $input['iIpe3yAgo'] : ''));
    	$this->saveDemosiDetail($type,$i);

      //Berakhir Periode pengangkatan karyawan
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>2, 'new_value'=>(isset($input['iIpe3yAgo']) ? $input['iIpe3yAgo'] : ''));
    	$this->saveDemosiDetail($type,$i);

      //Penilaian Karya / IPE 3 Tahun yg lalu
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>3, 'new_value'=>(isset($input['iIpe3yAgo']) ? $input['iIpe3yAgo'] : ''));
    	$this->saveDemosiDetail($type,$i);

    	//Penilaian Karya / IPE 2 Tahun yg lalu
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>4, 'new_value'=>(isset($input['iIpe2yAgo']) ? $input['iIpe2yAgo'] : ''));
    	$this->saveDemosiDetail($type,$i);

    	//Penilaian Karya / IPE 1 Tahun yg lalu
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>5, 'new_value'=>(isset($input['iIpe1yAgo']) ? $input['iIpe1yAgo'] : ''));
    	$this->saveDemosiDetail($type,$i);

    	//ST
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>6, 'new_value'=>(isset($input['iSuratTeguran']) ? $input['iSuratTeguran'] : ''));
    	$this->saveDemosiDetail($type,$i);

    	//SP1
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>7, 'new_value'=>(isset($input['iSuratTeguran']) ? $input['iSuratTeguran'] : ''));
    	$this->saveDemosiDetail($type,$i);

    	//SP2
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>8, 'new_value'=>(isset($input['iSuratTeguran']) ? $input['iSuratTeguran'] : ''));
    	$this->saveDemosiDetail($type,$i);

    	//SP3
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>9, 'new_value'=>(isset($input['iSuratTeguran']) ? $input['iSuratTeguran'] : ''));
    	$this->saveDemosiDetail($type,$i);

    	//Tidak Ada
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>10, 'new_value'=>(isset($input['iSuratTeguran']) ? $input['iSuratTeguran'] : ''));
    	$this->saveDemosiDetail($type,$i);

      //Masa berlaku surat
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>11, 'new_value'=>(isset($input['iMasaBerlaku']) ? $input['iMasaBerlaku'] : ''));
    	$this->saveDemosiDetail($type,$i);

    	//Perusahaan
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>12, 'new_value'=>(isset($input['iPerusahaanNew']) ? $input['iPerusahaanNew'] : ''));
    	$this->saveDemosiDetail($type,$i);

    	//Business Area / Estate / Divisi
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>13, 'new_value'=>(isset($input['iBisnisAreaNew']) ? $input['iBisnisAreaNew'] : ''));
    	$this->saveDemosiDetail($type,$i);

    	//Afdeling / Departemen
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>14, 'new_value'=>(isset($input['iAfdelingNew']) ? $input['iAfdelingNew'] : ''));
    	$this->saveDemosiDetail($type,$i);

    	//Jabatan
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>15, 'new_value'=>(isset($input['iJabatanNew']) ? $input['iJabatanNew'] : ''));
    	$this->saveDemosiDetail($type,$i);

    	//Golongan
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>16, 'new_value'=>(isset($input['iGolonganNew']) ? $input['iGolonganNew'] : ''));
    	$this->saveDemosiDetail($type,$i);

    	//Status Karyawan
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>17, 'new_value'=>(isset($input['iStatusKaryawanNew']) ? $input['iStatusKaryawanNew'] : ''));
    	$this->saveDemosiDetail($type,$i);

    	//Gaji Pokok
    	//$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>15, 'new_value'=>$input['iGajiPokokNew']);
    	//$this->saveDemosiDetail($type,$i);

    	//Catu Beras
    	//$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>16, 'new_value'=>$input['iCatuBerasNew']);
    	//$this->saveDemosiDetail($type,$i);

    	//Keterangan
    	$i = array('h_id'=>$input['h_id'], 'version_code'=>$input['version_code'], 'param_id'=>17, 'new_value'=>(isset($input['iKeterangan']) ? $input['iKeterangan'] : ''));
    	$this->saveDemosiDetail($type,$i);

            	/*
				//Tanggal Surat
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>18, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Masa berlaku surat
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>19, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Jenis Pelanggaran
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>20, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Deskripsi sanksi yang diberikan
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>21, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Keterangan/Penjelasan
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>22, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Komentar Atasan
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>23, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Tanggal Surat
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>24 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Masa berlaku surat
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>25, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Jenis Pelanggaran
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>26, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Deskripsi sanksi yang diberikan
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>27, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Keterangan/Penjelasan
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>28, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Komentar Atasan
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>29, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Tanggal Surat Panggilan
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>30, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Tanggal Absen
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>31, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Tanggal Masuk
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>32, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Tempat Masuk
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>33, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Jam Masuk
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>34, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Nama KTU
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>35, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Kontak KTU
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>36, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Keterangan/Penjelasan
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>37, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Tanggal Surat
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>38, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Tanggal Resaign
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>39, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Keterangan/Penjelasan
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>40, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Penjelasan Persitiwa
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>41, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Tanggal Peristiwa
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>42, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Tanggal Putusan
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>43, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Tempat Pembuataan Surat
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>44, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Tanggal Pembuatan Surat
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>45, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);

				//Keterangan/Penjelasan
            	$i = array('h_id'=>$demosiHeader->h_id, 'param_id'=>46, 'new_value'=>$input['iIpe1yAgo']);
				$this->addDemosiDetail($i);
            	*/
    }

	function saveProcessStatusHistory($input)
    {
    	$data = new ProcessStatusHistory;
    	$data->process_status_code = $input['proc_stat_code'];
    	$data->approv_rev_notes = $input['iCatatan'];
    	$data->doc_h_id = $input['h_id'];
    	$data->created_by = 1;
    	$data->created_at = date('Y/m/d H:i:s');
    	$data->update_by = 1;
    	$data->update_at = date('Y/m/d H:i:s');
    	$data->cr_remote_addr = ' ';
    	$data->cr_client_browser = ' ';
    	$data->up_remote_addr = ' ';
    	$data->up_client_browser = ' ';
    	$data->save();

    	return $data;
    }



	function nextnumber() {
    	$sequence = DB::getSequence();
    	if($sequence->exists('SEQ_TR_HC_DOC_H')) {
        	$sequence->nextValue('SEQ_TR_HC_DOC_H');
        	$nn = $sequence->currentValue('SEQ_TR_HC_DOC_H');
        } else {
         $nn = 0;
        }

    	return $nn;
    }

	function validation($input)
    {
    	if($input['iNikSap'] == '') return false;
      if(!preg_match("/(\d{2})\/(\d{4})\/(\d{4})\/(\d{2})/", $input['iNikSap'])) return false;
        return true;
    }
}
