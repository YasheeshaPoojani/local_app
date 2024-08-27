<?php

namespace App\Http\Controllers;
use App\Models\Ingredients;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    protected $ingredientss;
    public function __construct(){
        $this->ingredients = new Ingredients();
    }
    public function index()
    {
        $response['ingredients'] = $this->ingredients->all();
        return view('categories.indexingredients')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->ingredients->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['ingredients'] = $this->ingredients->all();
        return view('categories.showingredients')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['ingredients'] = $this->ingredients->find($id);
        
        return view('categories.editingredients')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ingredients = $this->ingredients->find($id);
        $ingredients->update(array_merge($ingredients->toArray(), $request->toArray()));
        return redirect('ingredients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ingredients = $this->ingredients->find($id);
        $ingredients->delete();
        return redirect('ingredients');
    }
}
