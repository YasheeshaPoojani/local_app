<?php

namespace App\Http\Controllers;
use App\Models\Shirts;
use Illuminate\Http\Request;

class ShirtsController extends Controller
{
    protected $shirtss;
    public function __construct(){
        $this->shirts = new Shirts();
    }
    public function index()
    {
        $response['shirts'] = $this->shirts->all();
        return view('categories.indexshirts')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->shirts->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['shirts'] = $this->shirts->all();
        return view('categories.showshirts')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['shirts'] = $this->shirts->find($id);
        
        return view('categories.editshirts')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $shirts = $this->shirts->find($id);
        $shirts->update(array_merge($shirts->toArray(), $request->toArray()));
        return redirect('shirts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shirts = $this->shirts->find($id);
        $shirts->delete();
        return redirect('shirts');
    }
}
