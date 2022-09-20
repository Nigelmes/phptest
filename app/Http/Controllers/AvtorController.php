<?php

namespace App\Http\Controllers;

use App\Models\Avtor;
use Illuminate\Http\Request;

class AvtorController extends Controller
{
    public function index()
    {
        $avtors = Avtor::all();
        return view('avtor.index', compact('avtors'));
    }

    public function create() {
        return view('avtor.create');
    }

    public function store() {
        $data = \request()->validate([
            'title' => "string"
        ]);
        Avtor::create($data);
        return redirect()->route('avtor.index');
    }
}
