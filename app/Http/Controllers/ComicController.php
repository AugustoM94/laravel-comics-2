<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           //prendo i dati del form dalla request
        $request->validate([
            'title' => 'required|min:5|max:255',
            'price' => 'required|max:50',
/*             'sale_date' => 'required|max:30',
            'series' => 'required|max:30',
            'type' => 'required|max:20',
 */
        ]);
        $formData = $request->all();
        /* $newcomic = new Comic();
        $newcomic->title = $formData['title'];
        $newcomic->description = $formData['description'];
        $newcomic->image = $formData['image'];
        $newcomic->price = $formData['price'];
        $newcomic->series = $formData['series'];
        $newcomic->sale_date = $formData['sale_date'];
        $newcomic->type = $formData['type'];
        $newcomic->save(); */
        $newcomic = Comic::create($formData);
        //reindirizzo l'utente alla pagina del nuovo prodotto appena creato
        return redirect()->route('comics.show', ['comic' => $newcomic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $formData = $request->all();
        $comic->title = $formData['title'];
        $comic->description = $formData['description'];
        $comic->image = $formData['image'];
        $comic->price = $formData['price'];
        $comic->series = $formData['series'];
        $comic->sale_date = $formData['sale_date'];
        $comic->type = $formData['type'];
   
       $comic->fill($formData);
       $comic->update();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
   
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('message', "Il prodotto $comic->title è stato eliminato");
    }
}
