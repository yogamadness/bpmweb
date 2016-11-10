<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ptk;
use App\Mill;
use App\File;
use App\Ro;

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
                        'employee_before' => $requests->employee_before,
                        'info' => $requests->description,
                        'mpe_total' => $requests->mpe_total,
                        'candidat_recommended' => $requests->employee_recommendation,
                        'employee_replaced' => $requests->employee_from,
                        'reason_recommendation' => $requests->reason_recommendation
                    )
                );
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
