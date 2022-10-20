<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\EncuestasExcelImport;
use App\Imports\HojaExcelImport;
use App\Models\Admin\Encuesta;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelController extends Controller
{
    public function index()
    {
        $encuestas = Encuesta::all();
        return view('excels.index')->with(compact('encuestas'));
    }

    public function subirExcel($encuesta_id)
    {
        $encuesta = Encuesta::find($encuesta_id);
        return view('excels.subir_excel')->with(compact('encuesta'));
    }

    public function validar(Request $request)
    {
        // Excel::import(new EncuestasExcelImport, request()->file('fileExcel'));
        // dd($request->all());
        $nombreSheet = $request->get('nameHoja');
        $encuesta = Encuesta::find($request->get('encuesta_id'));
        Excel::import(new HojaExcelImport($nombreSheet, $encuesta->id), request()->file('fileExcel'));
        return redirect()->route('admin.excel.index');
    }


}
