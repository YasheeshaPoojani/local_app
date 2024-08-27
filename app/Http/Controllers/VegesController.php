<?php

namespace App\Http\Controllers;
use App\Models\Veges;
use Illuminate\Http\Request;

class VegesController extends Controller
{
    protected $vegess;
    public function __construct(){
        $this->veges = new Veges();
    }
    public function index()
    {
        $response['veges'] = $this->veges->all();
        return view('categories.indexveges')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->veges->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['veges'] = $this->veges->all();
        return view('categories.showveges')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['veges'] = $this->veges->find($id);
        
        return view('categories.editveges')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $veges = $this->veges->find($id);
        $veges->update(array_merge($veges->toArray(), $request->toArray()));
        return redirect('veges');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $veges = $this->veges->find($id);
        $veges->delete();
        return redirect('veges');
    }
}
