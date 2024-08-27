<?php

namespace App\Http\Controllers;
use App\Models\Sounds;
use Illuminate\Http\Request;

class SoundsController extends Controller
{
    protected $soundss;
    public function __construct(){
        $this->sounds = new Sounds();
    }
    public function index()
    {
        $response['sounds'] = $this->sounds->all();
        return view('categories.indexsounds')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->sounds->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['sounds'] = $this->sounds->all();
        return view('categories.showsounds')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['sounds'] = $this->sounds->find($id);
        
        return view('categories.editsounds')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sounds = $this->sounds->find($id);
        $sounds->update(array_merge($sounds->toArray(), $request->toArray()));
        return redirect('sounds');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sounds = $this->sounds->find($id);
        $sounds->delete();
        return redirect('sounds');
    }
}
