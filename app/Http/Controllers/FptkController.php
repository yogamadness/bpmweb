<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ptk;
use App\Mill;
use App\File;
use App\Ro;
use App\Estate;

use DB;
use App\Http\Controllers\DataMasterController;
use Response;


class FptkController extends Controller
{

    public function __construct()
    {
        $this->middleware('ceklogin');    
    }

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
                        'pba_bcc_b1' => $requests->pba_bcc_b1,
                        'pba_bcc_b2' => $requests->pba_bcc_b2,
                        'pba_bcc_b3' => $requests->pba_bcc_b3,
                        'pba_bcc_b4' => $requests->pba_bcc_b4,
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
                        'pmp_mpe_attendance' => $requests->pmp_mpe_attendance,
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

            // //insert file 
            // $data3 = File::cerate(
            //     array('file_id' => '1',
            //         'blob_content' => $contents
            //         // 'doc_size' => $file->getSize();,
            //         // 'file_name' => $file->getContentName
            //     )
            // );

        // // });
        

        return 'true';
    }
}
