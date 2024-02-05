<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNovelRequest;
use Illuminate\Http\Request;
//importo il modello Novel
use App\Models\Novel;
use Illuminate\Validation\Rule;
//importo classe validator 
use Illuminate\Support\Facades\Validator;

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
    public function store(StoreNovelRequest $request)
    {
        // //validation
        // $request->validate([
        //     'title'=>'required|max:400|min:10',
        //     'price' => 'required|max:7|min:4',
        //     'series' => 'required|max:200|min:40',
        //     'sale_date' => 'required|date_format:date',
        //     'type'=>'required', Rule::in(['comic book', 'comic sans']),
        //     'artists' => 'required|max:800|min:4',
        //     'writers' => 'required|max:800|min:4',
        //     'thumb'=> 'required|url|ends_with: jpg, png, webp|max:400',
        //     'description' => 'required|max:1200|min:50',
        // ]);

        // //richiamo tutte le novels 
        // $data = $request->all();

        // variabile che richiama una funzione validation a cui passiamo tutti i dati
        // $data = $this->validation($request->all());

        $data = $request->validate();

        //istanzio la classe Novel
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
        $data = $this->validation($request->all());
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
        return redirect()->route('novels.show', $novel->id);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Novel $novel)
    {
        $novel->delete();
        return redirect()-> route('novels.index');
    }

    //funzione di cui classe in alto a cui passo tutti i dati ricevuti per la validazione
    private function validation($data) 
    {
        $validator = Validator::make($data, [
            'title'=>'required|max:400|min:10',
            'price' => 'required|max:7|min:4',
            'series' => 'required|max:200|min:40',
            'sale_date' => 'required|date_format:date',
            'type' => ['required', Rule::in(['comic book', 'comic sans'])],
            'artists' => 'required|max:800|min:4',
            'writers' => 'required|max:800|min:4',
            'thumb'=> 'required|url|ends_with: jpg, png, webp|max:400',
            'description' => 'required|max:1200|min:50',
        ], [
            //personalizzazione di alcuni messaggi
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo non può essere inferiore a :min caratteri',
            'price.required' => 'Il prezzo è obbligatorio',
            'type.rule' => 'La scelta di tipo è tra "comic book" e "comic sans"',
            'thumb.url' => 'Thumb è un valore URL'
            //esecuzione metodo validate
        ])->validate();

        return $validator;
    }
}
