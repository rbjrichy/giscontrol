<?php

namespace App\Http\Controllers;

use App\Models\Admin\Encuesta;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class EncuestaController extends Controller
{
    public function index()
    {
        $encuestas = Encuesta::all();
        return view('encuestas.index')->with(compact('encuestas'));
    }

    public function create()
    {
        return view('encuestas.create');
    }

    public function store(Request $request)
    {
        Encuesta::create($request->all());
        return redirect()->route('admin.encuesta.index');
    }

    public function edit(Encuesta $encuesta)
    {
        return view('encuestas.edit')->with(compact('encuesta'));
    }

    public function update(Request $request, Encuesta $encuesta)
    {
        $encuesta->update($request->all());
        return redirect()->route('admin.encuesta.index');
    }

    public function destroy(Encuesta $encuesta)
    {
        try {
            $encuesta->delete();
        } catch (\Throwable $th) {
            session(['msj-danger' => "No sep puede borrar el archivo si tiene datos relacionados"]);
        }
        return redirect()->route('admin.encuesta.index');
    }
}
