<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Buku::all();
        // return redirect('home');
        return view('welcome',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createBook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Buku::create([
            //nama dari model => nama di form(harusnya)
            'NamaMahasiswa' =>$request ->NamaMahasiswa,
            'DateOfBirth'=>$request ->DateOfBirth,
            'Semester'=>$request ->Semester,
            'Nim'=>$request ->Nim
        ]);
        $books = Buku::all();
        // return redirect('home');
        return view('welcome',compact('books'));
        // return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Buku::findOrFail($id);
        return view('showbook',compact('book'));
    }

    /**
     *
     * @param  int  $id
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //        $book = Buku::findOrFail($id);

        return view('editBook', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $extension = $request->file('image')->getClientOriginalExtension();
        // $filename = $request->file('image')->getClientOriginalName();
        $filename = $request->Judul.'_'.$request->Author.'.'.$extension;
        $request->file('image')->storeAs('/public/Book/', $filename);

        Buku::findOrFail($id)->update([
            'Judul' => $request->title,
            'PublishDate' => $request->publishDate,
            'Stock' => $request->stock,
            'Penulis' => $request->author,
            'image' => $filename
        ]);

        return redirect('/home');
    }
    /**
     * Remove the specified resource from storage.

     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // https://tlx.toki.id/problems/inc-2022
        Buku::destroy($id);

        return redirect('/home');
        //
    }
}
