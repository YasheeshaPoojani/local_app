<?php

namespace App\Http\Controllers;
use App\Models\Cards;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    protected $cardss;
    public function __construct(){
        $this->cards = new Cards();
    }
    public function index()
    {
        $response['cards'] = $this->cards->all();
        return view('categories.indexcards')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->cards->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['cards'] = $this->cards->all();
        return view('categories.showcards')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['cards'] = $this->cards->find($id);
        
        return view('categories.editcards')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cards = $this->cards->find($id);
        $cards->update(array_merge($cards->toArray(), $request->toArray()));
        return redirect('cards');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cards = $this->cards->find($id);
        $cards->delete();
        return redirect('cards');
    }
}
