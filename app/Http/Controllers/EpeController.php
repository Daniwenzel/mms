<?php

namespace App\Http\Controllers;

use App\Torres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EpeController extends Controller
{
    public function index() {
        $torres = DB::select("SELECT cli.razaosocial,sit.DESSITE,sit.CODIGO
FROM SITE sit join CLIENTE cli on sit.clicodigo=cli.codigo order by cli.razaosocial ASC, sit.dessite ASC");

//        dd($torres);

        return view('epe-report', compact('torres'));
    }
}
