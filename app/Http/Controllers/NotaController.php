<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Models\Alumno;
use App\Models\Materia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class NotaController
 * @package App\Http\Controllers
 */
class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $notas = Nota::paginate();
        $notas = Nota::where('user_id', auth()->user()->id)->paginate();
        // dd($notas);
        return view('nota.index', compact('notas'))
            ->with('i', (request()->input('page', 1) - 1) * $notas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nota = new Nota();
        $alumnos = Alumno::pluck('name', 'id');
        $materias = Materia::pluck('name', 'id');
        return view('nota.create', compact('nota', 'alumnos', 'materias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(auth()->user()->id);
        request()->validate(Nota::$rules);

        // $nota = Nota::create($request->all());

        Nota::create([
            'nota_1' => $request->nota_1,
            'nota_2' => $request->nota_2,
            'nota_3' => $request->nota_3,
            'promedio' => ($request->nota_1 + $request->nota_2 + $request->nota_3) / 3,
            'alumno_id' => $request->alumno_id,
            'materia_id' => $request->materia_id,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('notas.index')
            ->with('success', 'Nota created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nota = Nota::find($id);

        return view('nota.show', compact('nota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nota = Nota::find($id);
        $alumnos = Alumno::pluck('name', 'id');
        $materias = Materia::pluck('name', 'id');
        return view('nota.edit', compact('nota', 'alumnos', 'materias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Nota $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nota $nota)
    {
        // dd($nota->id);
        request()->validate(Nota::$rules);

        // $data = $request->all();

        // $nota->update($request->all());

        DB::table('notas')->where('id', $nota->id)->update([
            'nota_1' => $request->nota_1,
            'nota_2' => $request->nota_2,
            'nota_3' => $request->nota_3,
            'promedio' => ($request->nota_1 + $request->nota_2 + $request->nota_3) / 3,
            'alumno_id' => $request->alumno_id,
            'materia_id' => $request->materia_id,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('notas.index')
            ->with('success', 'Nota updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $nota = Nota::find($id)->delete();

        return redirect()->route('notas.index')
            ->with('success', 'Nota deleted successfully');
    }
}
