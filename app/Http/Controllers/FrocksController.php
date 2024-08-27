<?php

namespace App\Http\Controllers;
use App\Models\Frocks;
use Illuminate\Http\Request;

class FrocksController extends Controller
{
    protected $frockss;
    public function __construct(){
        $this->frocks = new Frocks();
    }
    public function index()
    {
        $response['frocks'] = $this->frocks->all();
        return view('categories.indexfrocks')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->frocks->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['frocks'] = $this->frocks->all();
        return view('categories.showfrocks')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['frocks'] = $this->frocks->find($id);
        
        return view('categories.editfrocks')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $frocks = $this->frocks->find($id);
        $frocks->update(array_merge($frocks->toArray(), $request->toArray()));
        return redirect('frocks');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $frocks = $this->frocks->find($id);
        $frocks->delete();
        return redirect('frocks');
    }
}
