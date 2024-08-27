<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poruwas;
class PoruwasController extends Controller
{
    protected $poruwass;
    public function __construct(){
        $this->poruwas = new Poruwas();
    }
    public function index()
    {
        $response['poruwas'] = $this->poruwas->all();
        return view('categories.indexporuwas')->with($response);
    }

    public function store(Request $request)
    {
        
        $this->poruwas->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['poruwas'] = $this->poruwas->all();
        return view('categories.showporuwas')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['poruwas'] = $this->poruwas->find($id);
        
        return view('categories.editporuwas')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $poruwas = $this->poruwas->find($id);
        $poruwas->update(array_merge($poruwas->toArray(), $request->toArray()));
        return redirect('poruwas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $poruwas = $this->poruwas->find($id);
        $poruwas->delete();
        return redirect('poruwas');
        
    }
}
