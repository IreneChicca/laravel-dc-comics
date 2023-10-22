<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Fumetti";
        // $comics = Comic::all();
        $comics = Comic::paginate(10);
        return view('comics.index', compact('title','comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Aggiungi un nuovo fumetto alla libreria";
        return view('comics.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();
        
        $this->validation($data);

        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $title = 'Dettagli';
        return view('comics.show', compact('title','comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $title = 'Modifica';
        return view('comics.edit', compact('title', 'comic'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */###
    
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('message','Hai eliminato ');
    }


    private function validation($data){
        
        Validator::make(
            $data, 
            [
                'title'=> 'required|string|max:50',
                'series'=> 'required|string|max:50',
                'price' => 'required',
                'sale_date'=> 'required',
                'type'=> 'required|string|max:50',
                'thumb'=> 'required|url|max:400',
                'description'=> 'string',
                
            

            ],
            [
                'title.required'=> 'Il titolo è obbligatorio',
                'title.string'=> 'Il titolo deve essere una stringa',
                'title.max'=> 'Il titolo può essere massimo di 50 caratteri',

                'series.required'=> 'La serie è obbligatoria',
                'series.string'=> 'La serie deve essere una stringa',
                'series.max'=> 'La serie può essere massimo di 50 caratteri',

                'series.required'=> 'Il prezzo è obbligatorio',
                
                'price.required'=> 'La data di uscita è obbligatoria',

                'type.required'=> 'Il tipo è obbligatorio',
                'type.string'=> 'Il tipo deve essere una stringa',
                'type.max'=> 'Il tipo può essere massimo di 50 caratteri',

                'thumb.required'=> 'L\'immagine è obbligatoria',
                'thumb.string'=> 'L\'immagine deve essere un url',
                'thumb.max'=> 'L\'immagine può essere massimo di 400 caratteri',

                'description.string'=> 'La descrizione deve essere una stringa',


            ]

        )->validate();



    }



}