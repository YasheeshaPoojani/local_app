<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    protected $foods;
    public function __construct(){
        $this->food = new Food();
    }
    public function index()
    {
        $response['food'] = $this->food->all();
        return view('categories.indexfood')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->food->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['food'] = $this->food->all();
        return view('categories.showfood')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['food'] = $this->food->find($id);
        
        return view('categories.editfood')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $food = $this->food->find($id);
        $food->update(array_merge($food->toArray(), $request->toArray()));
        return redirect('food');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $food = $this->food->find($id);
        $food->delete();
        return redirect('food');
    }
}
