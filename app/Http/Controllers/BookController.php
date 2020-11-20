<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    protected function validateRequest($request) {
        return $request->validate([
            'name' => 'required',
        ]);
    }
    public function store(Request $request)
    {
        $response = Book::create($this->validateRequest($request));

        return response()->json($response, 201);
    }

    public function update(Book $book, Request $request)
    {
        $book->update($this->validateRequest($request));
    }
}
