<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comicsArray = config('comics.comic');
        $arrayComic = Comic::All();
    
        return view('pages.crud.index', compact('comicsArray', 'arrayComic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'title' => 'required |max:50 |unique:comics',
                'description' => 'required |unique:comics',
                'thumb' => 'required |unique:comics',
                'price' => 'required |unique:comics',
                'series' => 'required |unique:comics',
                'sale_date' => 'required |unique:comics',
                'type' => 'required |unique:comics',

            ],
            [
                'title.max' => 'il campo Title non deve superare i 50 carratteri',
                'title.required' => 'il campo title è richiesto',
                'title.unique' => 'il titolo deve essere unico',
                'description.required' => 'il campo Description è richiesto',
                'thumb'  => 'il campo thumb è richiesto',
                'price'  => 'il campo price è richiesto',
                'series'  => 'il campo series è richiesto',
                'sale_date'  => 'il campo sale_date è richiesto',
                'type'  => 'il campo type è richiesto',
            ]);

        $form_data = $request->all();

        $new_comic = new Comic();
        $new_comic->fill( $form_data );
        $new_comic->save();

        return redirect()->route('comics.index')->with('success', 'hai creato un nuovo fumetto !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //$comicId = Comic::findOrFail($id);

        return view('pages.crud.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {

        return view( 'pages.crud.edit', compact('comic') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        $request->validate(
            [
                'title' => 'required |max:50 |unique:comics',
                'description' => 'required |unique:comics',
                'thumb' => 'required |unique:comics',
                'price' => 'required |unique:comics',
                'series' => 'required |unique:comics',
                'sale_date' => 'required |unique:comics',
                'type' => 'required |unique:comics',

            ],
            [
                'title.max' => 'il campo Title non deve superare i 50 carratteri',
                'title.required' => 'il campo title è richiesto',
                'title.unique' => 'il titolo deve essere unico',
                'description.required' => 'il campo Description è richiesto',
                'thumb'  => 'il campo thumb è richiesto',
                'price'  => 'il campo price è richiesto',
                'series'  => 'il campo series è richiesto',
                'sale_date'  => 'il campo sale_date è richiesto',
                'type'  => 'il campo type è richiesto',
            ]);

        $form_data = $request->all();
        $comic->update($form_data);
        
        return redirect()->route('comics.index')->with('success', 'hai modificato il fumetto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
