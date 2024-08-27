<?php

namespace App\Http\Controllers;
use App\Models\Dishes;
use Illuminate\Http\Request;

class DishesController extends Controller
{
    protected $dishess;
    public function __construct(){
        $this->dishes = new Dishes();
    }
    public function index()
    {
        $response['dishes'] = $this->dishes->all();
        return view('categories.indexdishes')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->dishes->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['dishes'] = $this->dishes->all();
        return view('categories.showdishes')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['dishes'] = $this->dishes->find($id);
        
        return view('categories.editdishes')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dishes = $this->dishes->find($id);
        $dishes->update(array_merge($dishes->toArray(), $request->toArray()));
        return redirect('dishes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dishes = $this->dishes->find($id);
        $dishes->delete();
        return redirect('dishes');
    }
}
