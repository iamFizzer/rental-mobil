<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use function Ramsey\Uuid\v1;

class MobilController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobil = Mobil::all();
        return view('dashboard.mobil',compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.tambah.mobil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            
            'merek' => 'nullable',
            'model' => 'nullable',
            'no_plat' => 'nullable',
            'perhari' => 'nullable',
            'banyaknya' => 'nullable',
            
        ]);
        $mobil = new Mobil();

        $mobil->merek = $request->merek;
        $mobil->model = $request->model;
        $mobil->no_plat = $request->no_plat;
        $mobil->perhari = $request->perhari;
        $mobil->banyaknya = $request->banyaknya;

        $mobil->save();

        return route('mobil.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
