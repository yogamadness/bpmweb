<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ptk;
use App\Mill;
use App\File;
use App\Ro;
use App\Estate;

include 'Soap/nusoap.php';
use nusoap_client;

use DB;
use App\Http\Controllers\DataMasterController;
use Response;


class FptkController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('ceklogin');    
    // }

    public function index()
    {
        $data['gender']= (new DataMasterController)->getGender();
        $data['levelJabatan']= (new DataMasterController)->getLevelJabatan();
        $data['statusKaryawan']= (new DataMasterController)->getStatusKaryawan();
        $data['alasanPermintaan']= (new DataMasterController)->getAlasanPermintaan();
        return view('master/fptk', $data);
        // return view('master-content/fptk', $data);
    }

    public function index2()
    {
        $data['gender']= (new DataMasterController)->getGender();
        $data['levelJabatan']= (new DataMasterController)->getLevelJabatan();
        $data['statusKaryawan']= (new DataMasterController)->getStatusKaryawan();
        // return view('master/fptk', $data);
        return view('master-content/fptk', $data);
    }

    public function fptkms(Request $requests){
        $data['alasanPermintaan']= (new DataMasterController)->getAlasanPermintaan();
        return view('master-content/fptkms', $data);
    }

    public function fptkro(Request $requests){
        $data['alasanPermintaan']= (new DataMasterController)->getAlasanPermintaan();
        return view('master-content/fptkro', $data);
    }

    public function fptkes(Request $requests){
        $data['alasanPermintaan']= (new DataMasterController)->getAlasanPermintaan();
        return view('master-content/fptkes', $data);
    }

    public function fptkensfm(Request $requests){
        $data['alasanPermintaan']= (new DataMasterController)->getAlasanPermintaan();
        return view('master-content/fptkensfm', $data);
    }

    public function save(Request $requests)
    {
        // $file = $requests->file('lampiran');
        // // $file->filename = $file->originalName;
        // $contents = file_get_contents($_FILES[$file][$file->getClientOriginalName()]);
        // dd($contents);
        // // DB::transaction(function()
        // // {
            //insert PTK
            $seq = DB::table('dual')->select((DB::raw("SUBSTR('00000',0, 5-LENGTH(SEQ_TR_PTK.NEXTVAL)) || SEQ_TR_PTK.NEXTVAL || '/HC/PTK-RO/08.16' as doc_code")))->get()->first();
            $data = Ptk::create(
                array('doc_code' => $seq->doc_code,
                    'ba_code' => $requests->ba_code,
                    'department' => $requests->department,
                    'emp_status' => $requests->emp_status,
                    'facult' => $requests->facult,
                    'gender' => $requests->gender,
                    'head' => $requests->head,
                    'skill' => $requests->skill,
                    'last_education' => $requests->last_education,
                    'level_jbt' => $requests->level_jbt,
                     'jbt' => $requests->jbt,
                    'needs_date' => $requests->needs_date,
                    'number_of_needs' => $requests->number_of_needs,
                    'request_date' => $requests->request_date,
                    'spec_requirment' => $requests->spec_requirment,
                    'start_contract' => $requests->start_contract,
                    'end_contract' => $requests->end_contract,
                    'min_age' => $requests->min_age,
                    'max_age' => $requests->max_age,
                    'experience' => $requests->experience,
                    'company' => $requests->company
                )
            );

            if($requests->tipePtk == 'millStaff'){
                //insert Mill Staff
                $dataDetail = Mill::create(
                    array('no_document_ptk' => $data->doc_code,
                        'reason_request' => $requests->reason_request,
                        'employee_before' => $requests->employee_before,
                        'description' => $requests->description,
                        'mpe_total' => $requests->mpe_total,
                        'employee_recommendation' => $requests->employee_recommendation,
                        'employee_from' => $requests->employee_from,
                        'reason_recommendation' => $requests->reason_recommendation
                    )
                );
            }
            elseif($requests->tipePtk == 'millNonStaff'){
                //insert Mill Non Staff
                $dataDetail = Mill::create(
                    array('no_document_ptk' => $data->doc_code,
                        'employee_recommendation' => $requests->employee_recommendation,
                        'employee_from' => $requests->employee_from,
                        'reason_recommendation' => $requests->reason_recommendation,
                        'atended' => $requests->atented,
                        'all_overtime_by_job' => $requests->all_overtime_by_job,
                        'all_overtime' => $requests->all_overtime
                    )
                );
            }
            elseif($requests->tipePtk == 'regionalOffice'){
                //insert Regional Office
                $dataDetail = Ro::create(
                    array('no_document_ptk' => $data->doc_code,
                        'reason_request' => $requests->reason_request,
                        'employee_replaced' => $requests->employee_replaced,
                        'info' => $requests->info,
                        'mpe_total' => $requests->mpe_total,
                        'candidat_recommended' => $requests->employee_recommendation,
                        'employee_before' => $requests->employee_before,
                        'reason_recommendation' => $requests->reason_recommendation
                    )
                );
            }
            elseif($requests->tipePtk == 'estateStaff'){
                //insert Regional Office
                $dataDetail = Estate::create(
                    array('no_document_ptk' => $data->doc_code,
                        'reason_for_request' => $requests->reason_for_request,
                        'employee_replaced' => $requests->employee_replaced,
                        'information' => $requests->information,
                        'pba_ha_tm' => $requests->pba_ha_tm,
                        'pba_ha_panen' => $requests->pba_ha_panen,
                        'pba_ha_tbm' => $requests->pba_ha_tbm,
                        'pba_ha_tanam' => $requests->pba_ha_tanam,
                        'pmp_mpe' => $requests->pmp_mpe,
                        'candidate' => $requests->candidate,
                        'candidate_from' => $requests->candidate_from,
                        'reason_recommendation' => $requests->reason_recommendation
                    )
                );
            }
            elseif($requests->tipePtk == 'estateNonStaffPemanen'){
                //insert Regional Office
                $dataDetail = Estate::create(
                    array('no_document_ptk' => $data->doc_code,
                        'pba_ha_tm' => $requests->pba_ha_tm,
                        'pba_ha_panen' => $requests->pba_ha_panen,
                        'pba_ha_tm' => $requests->pba_ha_tm,
                        'pba_ha_tanam' => $requests->pba_ha_tanam,
                        'pba_produksi' => $requests->pba_produksi,
                        'pba_bbc_b1' => $requests->pba_bbc_b1,
                        'pba_bbc_b2' => $requests->pba_bbc_b2,
                        'pba_bbc_b3' => $requests->pba_bbc_b3,
                        'pba_bbc_b4' => $requests->pba_bbc_b4,
                        'estimate_ha_panen_m1' => $requests->estimate_ha_panen_m1,
                        'estimate_ha_panen_m2' => $requests->estimate_ha_panen_m2,
                        'estimate_ha_panen_m3' => $requests->estimate_ha_panen_m3,
                        'estimate_ha_panen_m4' => $requests->estimate_ha_panen_m4,
                        'estimate_ha_panen_m5' => $requests->estimate_ha_panen_m5,
                        'estimate_ha_panen_m6' => $requests->estimate_ha_panen_m6,
                        'estimate_prod_m1' => $requests->estimate_prod_m1,
                        'estimate_prod_m2' => $requests->estimate_prod_m2,
                        'estimate_prod_m3' => $requests->estimate_prod_m3,
                        'estimate_prod_m4' => $requests->estimate_prod_m4,
                        'estimate_prod_m5' => $requests->estimate_prod_m5,
                        'estimate_prod_m6' => $requests->estimate_prod_m6,
                        'pmp_mpe' => $requests->pmp_mpe,
                        'pmp_attendance' => $requests->pmp_attendance,
                        'pmp_kk_kt' => $requests->pmp_kk_kt,
                        'pmp_kk_kt_attendance' => $requests->pmp_kk_kt_attendance,
                        'pmp_kl' => $requests->pmp_kl,
                        'pmp_kl_attendance' => $requests->pmp_kl_attendance,
                        'pmp_productivitas' => $requests->pmp_productivitas,
                        'mp_active' => $requests->mp_active
                    )
                );
                dd($dataDetail);
            }
            elseif($requests->tipePtk == 'estateNonStaffRawat'){
                //insert Regional Office
                $dataDetail = Estate::create(
                    array('no_document_ptk' => $data->doc_code,
                        'pba_ha_tm' => $requests->pba_ha_tm,
                        'pba_ha_tbm' => $requests->pba_ha_tbm,
                        'pba_ha_tanam' => $requests->pba_ha_tanam,
                        'pmp_mpe' => $requests->pmp_mpe,
                        'pmp_attendance' => $requests->pmp_attendance,
                        'pmp_kk_kt' => $requests->pmp_kk_kt,
                        'pmp_kk_kt_attendance' => $requests->pmp_kk_kt_attendance,
                        'pmp_kl' => $requests->pmp_kl,
                        'pmp_kl_attendance' => $requests->pmp_kl_attendance,
                        'mp_active' => $requests->mp_active
                    )
                );
                dd($dataDetail);
            }
            elseif($requests->tipePtk == 'estateNonStaffMandor'){
                //insert Regional Office
                $dataDetail = Estate::create(
                    array('no_document_ptk' => $data->doc_code,
                        'pba_ha_tm' => $requests->pba_ha_tm,
                        'pba_ha_panen' => $requests->pba_ha_panen,
                        'pba_ha_tm' => $requests->pba_ha_tm,
                        'pba_ha_tanam' => $requests->pba_ha_tanam,
                        'pba_produksi' => $requests->pba_produksi,
                        'pba_bbc_b1' => $requests->pba_bbc_1,
                        'pba_bbc_b2' => $requests->pba_bbc_2,
                        'pba_bbc_b3' => $requests->pba_bbc_3,
                        'pba_bbc_b4' => $requests->pba_bbc_4,
                        'estimate_ha_panen_m1' => $requests->estimate_ha_panen_m1,
                        'estimate_ha_panen_m2' => $requests->estimate_ha_panen_m2,
                        'estimate_ha_panen_m3' => $requests->estimate_ha_panen_m3,
                        'estimate_ha_panen_m4' => $requests->estimate_ha_panen_m4,
                        'estimate_ha_panen_m5' => $requests->estimate_ha_panen_m5,
                        'estimate_ha_panen_m6' => $requests->estimate_ha_panen_m6,
                        'estimate_prod_m1' => $requests->estimate_prod_m1,
                        'estimate_prod_m2' => $requests->estimate_prod_m2,
                        'estimate_prod_m3' => $requests->estimate_prod_m3,
                        'estimate_prod_m4' => $requests->estimate_prod_m4,
                        'estimate_prod_m5' => $requests->estimate_prod_m5,
                        'estimate_prod_m6' => $requests->estimate_prod_m6,
                        'pmp_mpe' => $requests->pmp_mpe,
                        'mpe_mandor_panen' => $requests->mpe_mandor_panen,
                        'mpe_mandor_rawat' => $requests->mpe_mandor_rawat,
                        'mpe_mandor_umum' => $requests->mpe_mandor_umum,
                        'mpe_mandor_mandor1' => $requests->mpe_mandor_mandor1,
                        'mpe_mandor_total' => $requests->mpe_mandor_total,
                        'mpe_karyawan_panen' => $requests->mpe_karyawan_panen,
                        'mpe_karyawan_rawat' => $requests->mpe_karyawan_rawat,
                        'mpe_karyawan_umum' => $requests->mpe_karyawan_umum,
                        'mpe_karyawan_total' => $requests->mpe_karyawan_total,
                        'rasio_panen' => $requests->rasio_panen,
                        'rasio_rawat' => $requests->rasio_rawat,
                        'rasio_umum' => $requests->rasio_umum,
                        'candidate' => $requests->candidate,
                        'candidate_from' => $requests->candidate_from,
                        'reason_recommendation' => $requests->reason_recommendation
                    )
                );
                dd($dataDetail);
            }

            $client = new nusoap_client('https://10.20.1.243:9443/teamworks/webservices/TAPHC/WS_PTK.tws?WSDL', true);
            $error  = $client->getError();
         
            $result = $client->call("createPTK", array("idUser" => Session::get('user_id'), "docCode" => $data->doc_code, "areaCode" => Session::get('area_code')));

            // //insert file 
            // $file = $requests->file('lampiran');
            // $data3 = File::create(
            //     array('file_id' => '1',
            //         'blob_content' => file_get_contents($file->getRealPath())
            //         // 'doc_size' => $file->getSize();,
            //         // 'file_name' => $file->getContentName
            //     )
            // );
        

        return $result;
    }
}
