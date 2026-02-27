<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Use static sample data since migrations are skipped
        $obats = Obat::getSampleData();

        return view('obat.index', compact('obats'));
    }
}
