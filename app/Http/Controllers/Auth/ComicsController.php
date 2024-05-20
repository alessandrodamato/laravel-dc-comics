<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;
use App\Functions\Helpers;
use App\Http\Requests\ComicsRequest;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $data = Comic::all()->sortDesc();
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
    public function store(ComicsRequest $request)
    {
        $form_data = $request->all();

        $new_comic = new Comic();

        $form_data['slug'] = Helpers::generateSlug($new_comic->title, new Comic());

        $new_comic->fill($form_data);

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
    public function edit(Comic $comic)
    {
      return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

      $form_data = $request->all();

      if($form_data['title'] === $comic->title){
        $form_data['slug'] = $comic->slug;
      } else {
        $form_data['slug'] = Helpers::generateSlug($comic->title, new Comic());
      }

      $comic->update($form_data);

      return redirect()->route('comics.show', $comic);

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
