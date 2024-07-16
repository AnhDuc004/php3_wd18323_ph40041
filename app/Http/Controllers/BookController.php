<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{

    const PATH_VIEW = 'books.';
    const PATH_UPLOAD = 'books';
    public function index()
    {
        $books = DB::table('books')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->select('books.*', 'name')
            ->orderByDesc('id')
            ->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact('books'));
    }

    public function create()
    {
        $categories = DB::table('categories')->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact('categories'));
    }

    public function store(Request $request)
    {
        $data = [
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'publication' => $request['publication'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'category_id' => $request['category_id'],

        ];


        DB::table('books')->insert($data);

        return redirect()->route('book.index');
    }

    public function edit($id)
    {
        $book = DB::table('books')->where('id', $id)->first();

        $categories = DB::table('categories')->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact('book', 'categories'));
    }

    public function update(Request $request)
    {
        $data = [
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'publication' => $request['publication'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'category_id' => $request['category_id'],

        ];

        DB::table('books')->where('id', $request['id'])->update($data);
        return redirect()->route('book.index');
    }

    public function destroy($id)
    {
        DB::table('books')->where('id', $id)->delete();
        return redirect()->route('book.index');
    }
}