<?php

namespace App\Http\Controllers;
use App\Models\paints;
use Illuminate\Http\Request;

class PaintsController extends Controller
{
    protected $paintss;
    public function __construct(){
        $this->paints = new Paints();
    }
    public function index()
    {
        $response['paints'] = $this->paints->all();
        return view('categories.indexpaints')->with($response);
    }

    public function store(Request $request)
    {
        
        $this->paints->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['paints'] = $this->paints->all();
        return view('categories.showpaints')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['paints'] = $this->paints->find($id);
        
        return view('categories.editpaints')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paints = $this->paints->find($id);
        $paints->update(array_merge($paints->toArray(), $request->toArray()));
        return redirect('paints');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paints = $this->paints->find($id);
        $paints->delete();
        return redirect('paints');
        
    }
}
