<?php

namespace App\Http\Controllers;
use App\Models\Sarees;
use Illuminate\Http\Request;

class SareesController extends Controller
{
    protected $sareess;
    public function __construct(){
        $this->sarees = new Sarees();
    }
    public function index()
    {
        $response['sarees'] = $this->sarees->all();
        return view('categories.indexsarees')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->sarees->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['sarees'] = $this->sarees->all();
        return view('categories.showsarees')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['sarees'] = $this->sarees->find($id);
        
        return view('categories.editsarees')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sarees = $this->sarees->find($id);
        $sarees->update(array_merge($sarees->toArray(), $request->toArray()));
        return redirect('sarees');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sarees = $this->sarees->find($id);
        $sarees->delete();
        return redirect('sarees');
    }
}
