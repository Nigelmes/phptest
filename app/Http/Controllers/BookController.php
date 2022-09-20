<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }

    public function create() {
        return view('book.create');
    }

    public function store() {
        $data = \request()->validate([
            'uuid' => "integer",
            'title' => "string",
        ]);
        Book::create($data);
        return redirect()->route('book.index');
    }

}
