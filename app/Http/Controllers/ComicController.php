<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\StoreComicRequests;
use App\Http\Requests\UpdateComicRequests;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
         if (!empty($request->query('search'))) {
            $search = $request->query('search');
            $comics = Comic::where('type', $search)->get();

        } else {
                   $comics = Comic::all();

        }

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
     * 
     */
    public function store(StoreComicRequests  $request)
    {
 
        $formData = $request->validated();
        $newcomic = Comic::create($formData);

        // reindirizzo l'utente alla pagina del nuovo prodotto appena creato
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
    public function update(UpdateComicRequests  $request, Comic $comic)
    {
       // $formData = $this->validation($request->all());
/*         $comic->title = $formData['title'];
        $comic->description = $formData['description'];
        $comic->image = $formData['image'];
        $comic->price = $formData['price'];
        $comic->series = $formData['series'];
        $comic->sale_date = $formData['sale_date'];
        $comic->type = $formData['type'];
 */
        $formData = $request-validated();
        $comic->fill($formData);
        $comic->update();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index')->with('message', "Il prodotto $comic->title è stato eliminato");
    }

    // prendo i dati del form dalla request per convalidare
/*     private function validation($data)
    {
        $validator = Validator::make($data, [
            'title' => 'required|min:5|max:255',
            'image' => 'url',
        ],[
            'title.required' => 'Il campo titolo è obbligatorio',
            'title.min' => 'Il campo deve avere almeno :min caratteri',
            'title.max' => 'Il campo deve avere almeno :max caratteri'

        ])->validate();

        return $validator;
    } */
}
