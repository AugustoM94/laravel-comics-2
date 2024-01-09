<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
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
        $formData = $request->all();
        $newcomic = new Comic();
        $newcomic->title = $formData['title'];
        $newcomic->description = $formData['description'];
        $newcomic->image = $formData['image'];
        $newcomic->price = $formData['price'];
        $newcomic->series = $formData['series'];
        $newcomic->sale_date = $formData['sale_date'];
        $newcomic->type = $formData['type'];
        $newcomic->artists = $formData['artists'];
        $newcomic->writers = $formData['writers'];
        $newcomic->save();

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
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
    }
}
