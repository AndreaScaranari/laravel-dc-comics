<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
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
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'price' => 'required|numeric',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string',
            'thumb' => 'required|string',
            'description' => 'required|string',
            'slug' => 'nullable|string'
        ]);

        $data = $request->all();

        $comic = new Comic();
        // $comic->title = $data['title'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->price = $data['price'];
        // $comic->type = $data['type'];
        // $comic->artists = $data['artists'];
        // $comic->writers = $data['writers'];
        // $comic->thumb = $data['thumb'];
        // $comic->description = $data['description'];

        $comic->fill($data);

        $comic->slug = Str::slug($comic->title);

        $comic->save();

        return to_route('comics.show', $comic->id);
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
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        // $comic->fill($data);
        // $comic->slug = Str::slug($comic->title);
        
        $comic->update($data);
        $data['slug'] = Str::slug($data['title']);

        // $comic->save();
        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
