<?php

namespace App\Http\Controllers;
use App\Models\Blouses;
use Illuminate\Http\Request;

class BlousesController extends Controller
{
    protected $blousess;
    public function __construct(){
        $this->blouses = new Blouses();
    }
    public function index()
    {
        $response['blouses'] = $this->blouses->all();
        return view('categories.indexblouses')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->blouses->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['blouses'] = $this->blouses->all();
        return view('categories.showblouses')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['blouses'] = $this->blouses->find($id);
        
        return view('categories.editblouses')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blouses = $this->blouses->find($id);
        $blouses->update(array_merge($blouses->toArray(), $request->toArray()));
        return redirect('blouses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blouses = $this->blouses->find($id);
        $blouses->delete();
        return redirect('blouses');
    }
}
