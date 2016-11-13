<?php

namespace App\Http\Controllers;

//common
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
//controllers
use App\Http\Controllers\ApiController;
//models
use App\Http\Models\ProcessStatusHistory;
use App\Http\Models\SanksiHeader;

class SanksiController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('ceklogin');
    }
    public function index($notifData = null)
    {
        $data = SanksiHeader::all();
        return view('sanksi.index', ['data' => $data, 'notification' => $notifData] );
    }

    public function create()
    {
        //
        return view('sanksi.create',[
            'getOptEmpWorkStatus' => ApiController::GetOptEmpWorkStatus(),
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
