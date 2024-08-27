<?php

namespace App\Http\Controllers;
use App\Models\Bags;
use Illuminate\Http\Request;

class BagsController extends Controller
{
    protected $bagss;
    public function __construct(){
        $this->bags = new Bags();
    }
    public function index()
    {
        $response['bags'] = $this->bags->all();
        return view('categories.indexbags')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->bags->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['bags'] = $this->bags->all();
        return view('categories.showbags')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['bags'] = $this->bags->find($id);
        
        return view('categories.editbags')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bags = $this->bags->find($id);
        $bags->update(array_merge($bags->toArray(), $request->toArray()));
        return redirect('bags');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bags= $this->bags->find($id);
        $bags->delete();
        return redirect('bags');
    }
}
