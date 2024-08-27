<?php

namespace App\Http\Controllers;
use App\Models\Dresses;
use Illuminate\Http\Request;

class DressesController extends Controller
{
    protected $dressess;
    public function __construct(){
        $this->dresses = new Dresses();
    }
    public function index()
    {
        $response['dresses'] = $this->dresses->all();
        return view('categories.indexdresses')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->dresses->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['dresses'] = $this->dresses->all();
        return view('categories.showdresses')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['dresses'] = $this->dresses->find($id);
        
        return view('categories.editdresses')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dresses = $this->dresses->find($id);
        $dresses->update(array_merge($dresses->toArray(), $request->toArray()));
        return redirect('dresses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dresses = $this->dresses->find($id);
        $dresses->delete();
        return redirect('dresses');
    }
}
