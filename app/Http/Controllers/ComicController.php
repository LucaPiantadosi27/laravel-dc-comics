<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function PHPSTORM_META\map;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $comics = Comic::all();
        // dd($comics);
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        // $this->validation($request->all());
        $request->validated();


        $newComic = new Comic();

        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;
        $newComic->artists = $request->artists;
        $newComic->writers = $request->writers;

        $newComic->save();

        // dd($newComic);

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
       
        return view('comics.show', compact('comic'));




    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {

        // $comic = Comic::find($id);


        // dd($comic);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreComicRequest $request, Comic $comic)
    {   
        $request->validated();


        $this->validation($request->all());
        // codice per modificare la riga del database


        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->artists = $request->artists;
        $comic->writers = $request->writers;

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

}

    // Validation
    // public function validation($data) {


    // $validator = Validator::make($data,[
    //     'title' => 'required|string|max:255',
    //     'description' => 'required|max:5000',
    //     'thumb' => 'required|max:5000',
    //     'price' => 'required|numeric',
    //     'series' => 'required|string|max:255',
    //     'sale_date' => 'required|date',
    //     'type' => 'required|string|max:100',
    //     'artists' => 'nullable|string',
    //     'writers' => 'nullable|string',
    // ],
    // [
    //     'title.required' => "Devi inserire un titolo",
    //     'title.max' => "Il titolo può avere massimo :max caratteri",
    //     'description.required' => 'Devi inserire una descrizione',

    //     'max' => 'Il campo :attribute deve avere massimo :max caratteri',
    //     'required' => ':attribute deve essere compilato',

    //     'price.required' => 'Devi inserire un prezzo per il fumetto.',
    //     'price.numeric' => 'Il prezzo deve essere un valore numerico.',

    //     'sale_date.required' => 'Devi inserire la data di vendita del fumetto.',
    //     'sale_date.date' => 'Il formato della data di vendita non è valido.',

    //     'type.required' => 'Devi specificare il tipo di fumetto.',

    // ],[
    //     'title' => 'titolo',
    //     'description' => 'descrizione',
    //     'thumb' => 'immagine',
    //     'price' => 'prezzo',
    //     'series' => 'serie',
    //     'sale_date' => 'data di pubblicazione',
    //     'type' => 'tipologia',
    //     'artists' => 'artisti',
    //     'writers' => 'scrittori',
    // ])->validate();
    // }


