<?php

namespace App\Http\Controllers;
use App\Models\Flowers;
use Illuminate\Http\Request;

class FlowersController extends Controller
{

    protected $flowerss;
    public function __construct(){
        $this->flowers = new Flowers();
    }
    public function index()
    {
        $response['flowers'] = $this->flowers->all();
        return view('categories.indexflowers')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->flowers->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['flowers'] = $this->flowers->all();
        return view('categories.showflowers')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['flowers'] = $this->flowers->find($id);
        
        return view('categories.editflowers')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $flowers = $this->flowers->find($id);
        $flowers->update(array_merge($flowers->toArray(), $request->toArray()));
        return redirect('flowers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flowers = $this->flowers->find($id);
        $flowers->delete();
        return redirect('flowers');
    }
    
    
}
