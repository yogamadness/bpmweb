<?php

namespace App\Http\Controllers;

//common
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
//controllers
use App\Http\Controllers\ApiController;
//models
use App\Http\Models\ProcessStatusHistory;

class SanksiController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('ceklogin');
    }
    public function index()
    {
        $data = SanksiHeader::all();
        return view('sanksi.index', ['data' => $data, 'notification' => $notifData] );
    }

    public function create()
    {
        //
        return view('sanksi.create',[
            'getEmpWorkStatus' => ApiController::GetEmpWorkStatus(),
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
