<?php

namespace App\Http\Controllers;

use App\Models\BookShelf;
use Illuminate\Http\Request;

class BookShelfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shelves = BookShelf::all();
        return view('officer.bookshelf.list', compact('shelves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('officer.bookshelf.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required'
        ]);

        BookShelf::create([
            'name'=> $request->name
        ]);

        return redirect()->route('officer.bookshelf.list')->with('success', 'Kategori  Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(BookShelf $bookShelf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookShelf $bookShelf)
    {
        return view('officer.bookshelf.update', compact('bookShelf'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookShelf $bookShelf)
    {
        $request->validate([
            'name'=> 'required'
        ]);

        $bookShelf->update(['name' => $request->name]);
        return redirect()->route('officer.bookshelf.list')->with('success', 'Rak Buku berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookShelf $bookShelf)
    {
        $bookShelf->delete();
        return redirect()->route('officer.bookshelf.list')->with('success', 'Rak Buku berhasil dihapus');
    }
}
