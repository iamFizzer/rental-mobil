<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class tambahan extends Controller
{
    public function indexing()
    {
        $katalog = Mobil::all();
        return view('index',compact('katalog'));
    }
}
