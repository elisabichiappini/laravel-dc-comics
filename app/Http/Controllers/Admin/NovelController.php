<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//importo il modello Novel
use App\Models\Novel;

class NovelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $novels = Novel::all();
        
        return view('novels.index', compact('novels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //richiamo tutte le novels 
        $data = $request->all();
        // istanzio la classe Novel
        $novel = new Novel();
        //collego i campi input ai nomi tabella
        $novel->title = $data['title'];
        $novel->price = $data['price'];
        $novel->series = $data['series'];
        $novel->sale_date = $data['sale_date'];
        $novel->type = $data['type'];
        $novel->writers = $data['writers'];
        $novel->artists = $data['artists'];
        $novel->thumb = $data['thumb'];
        $novel->description = $data['description'];
        //salvo la novella caricata
        $novel->save();

        //reindirizzo al dettaglio della nuova novel creata
        return redirect()->route('novels.show', $novel->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Novel $novel)
    {
        return view('novels.show', compact('novel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Novel $novel)
    {
        return view('novels.edit', compact('novel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Novel $novel)
    {
        $data = $request->all();
        // 1 method to update edit
        // setting input changes
        // $novel->title = $data['title'];
        // $novel->price = $data['price'];
        // $novel->series = $data['series'];
        // $novel->sale_date = $data['sale_date'];
        // $novel->type = $data['type'];
        // $novel->writers = $data['writers'];
        // $novel->artists = $data['artists'];
        // $novel->thumb = $data['thumb'];
        // $novel->description = $data['description'];

        // $novel->save();

        // 2 method to update edit
        $novel->update($data);
        // return redirect()->route('novels.show', $novel->id);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
