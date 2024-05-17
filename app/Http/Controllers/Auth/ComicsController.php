<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;
use App\Functions\Helpers;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $data = Comic::all();
      return view('comics.index', compact('data'));
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
        $comic = $request->all();

        $artists_str = str_replace(',', '|', $comic['artists']);
        $writers_str = str_replace(',', '|', $comic['writers']);

        $new_comic = new Comic();

        $new_comic->title = $comic['title'];
        $new_comic->slug = Helpers::generateSlug($comic['title'], new Comic());
        $new_comic->description = $comic['description'];
        $new_comic->thumb = $comic['thumb'];
        $new_comic->price = $comic['price'];
        $new_comic->series = $comic['series'];
        $new_comic->sale_date = $comic['sale_date'];
        $new_comic->type = $comic['type'];
        $new_comic->artists = $artists_str;
        $new_comic->writers = $writers_str;

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
