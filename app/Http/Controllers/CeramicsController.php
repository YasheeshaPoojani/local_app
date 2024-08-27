<?php

namespace App\Http\Controllers;
use App\Models\Ceramics;
use Illuminate\Http\Request;

class CeramicsController extends Controller
{
    protected $ceramicss;
    public function __construct(){
        $this->ceramics = new Ceramics();
    }
    public function index()
    {
        $response['ceramics'] = $this->ceramics->all();
        return view('categories.indexceramics')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->ceramics->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['ceramics'] = $this->ceramics->all();
        return view('categories.showceramics')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['ceramics'] = $this->ceramics->find($id);
        
        return view('categories.editceramics')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ceramics = $this->ceramics->find($id);
        $ceramics->update(array_merge($ceramics->toArray(), $request->toArray()));
        return redirect('ceramics');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ceramics= $this->ceramics->find($id);
        $ceramics->delete();
        return redirect('ceramics');
    }
}
