<?php

namespace App\Http\Controllers;

use App\Models\BooksCategories;
use Illuminate\Http\Request;

class BooksCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = BooksCategories::all();
        return view('admin.category.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'name'=> 'max:50'
        ]);

        BooksCategories::create([
            'name'=> $request->name
        ]);

        return redirect()->route('admin.category.list')->with('success', 'Kategori  Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(BooksCategories $bookCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BooksCategories $bookCategory)
    {
        return view('admin.category.update', compact('bookCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BooksCategories $bookCategory)
    {
        $request->validate([
            'name'=> 'required'
        ]);
        $bookCategory->update(['name' => $request->name]);
        return redirect()->route('admin.category.list')->with('success', 'Kategori Buku berhasil diedit');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BooksCategories $bookCategory)
    {
        $bookCategory->delete();
        return redirect()->route('admin.category.list')->with('success', 'Kategori Buku berhasil dihapus');
    }
}
