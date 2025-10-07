<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf; // 👈 mueve esto aquí

class CollectionController extends Controller
{
    // Mostrar todas las recolecciones del usuario autenticado
    public function index()
    {
        $collections = Collection::where('user_id', Auth::id())->orderBy('collection_date', 'desc')->get();
        return view('collections.index', compact('collections'));
    }

    // Mostrar el formulario para programar una nueva recolección
    public function create()
    {
        return view('collections.create');
    }

    // Guardar una nueva recolección
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'collection_date' => 'required|date',
            'collection_time' => 'required',
        ]);

        Collection::create([
            'user_id' => Auth::id(),
            'company_id' => 1, // temporal, luego agregaremos selección de empresa
            'type' => $request->type,
            'collection_date' => $request->collection_date,
            'collection_time' => $request->collection_time,
            'status' => 'Programada',
            'weight' => 0,
            'points' => 0,
        ]);

        return redirect()->route('collections.index')->with('success', 'Recolección programada exitosamente.');
    }

    // Mostrar el detalle de una recolección
    public function show($id)
    {
        $collection = Collection::findOrFail($id);
        return view('collections.show', compact('collection'));
    }

    // Mostrar el reporte visual
    public function reporte()
    {
        $collections = Collection::where('user_id', Auth::id())->get();

        $totalRecolecciones = $collections->count();
        $totalPuntos = $collections->sum('points');

        $porTipo = $collections->groupBy('type')->map->count();

        return view('collections.reporte', compact('totalRecolecciones', 'totalPuntos', 'porTipo'));
    }

    // Descargar el reporte en PDF
    public function reportePDF()
    {
        $collections = Collection::where('user_id', Auth::id())->get();

        $totalRecolecciones = $collections->count();
        $totalPuntos = $collections->sum('points');
        $porTipo = $collections->groupBy('type')->map->count();

        $pdf = Pdf::loadView('collections.reporte_pdf', compact('totalRecolecciones', 'totalPuntos', 'porTipo'));

        return $pdf->download('Reporte_Recolecciones.pdf');
    }
}

