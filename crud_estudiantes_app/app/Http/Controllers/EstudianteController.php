<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Usuario;
use Illuminate\Http\Request;
use PDF;

/**
 * Class EstudianteController
 * @package App\Http\Controllers
 */
class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::paginate();

        return view('estudiante.index', compact('estudiantes'))
            ->with('i', (request()->input('page', 1) - 1) * $estudiantes->perPage());
    }

    public function pdf()
    {
        $estudiantes = Estudiante::paginate();
        $pdf =PDF::loadView('estudiante.pdf',['estudiantes'=>$estudiantes]);
        return $pdf->stream();

       


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudiante = new Estudiante();
        $usuarios=Usuario::pluck('nombre','id');
        return view('estudiante.create', compact('estudiante','usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Estudiante::$rules);

        $estudiante = Estudiante::create($request->all());

        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiante = Estudiante::find($id);

        return view('estudiante.show', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        $usuarios=Usuario::pluck('nombre','id');
        return view('estudiante.edit', compact('estudiante','usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Estudiante $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        request()->validate(Estudiante::$rules);

        $estudiante->update($request->all());

        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante editado exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id)->delete();

        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante eliminado exitosamente');
    }
}
