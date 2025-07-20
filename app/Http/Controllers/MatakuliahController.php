<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index(Request $request)
    {
        $query = Matakuliah::query();

        if ($request->filled('search')) {
            $s = $request->search;
            $query->where('kode', 'like', "%$s%")
                  ->orWhere('nama', 'like', "%$s%");
        }

        $matakuliah = $query->paginate(10);
        return view('matakuliah.index', compact('matakuliah'));
    }
}
