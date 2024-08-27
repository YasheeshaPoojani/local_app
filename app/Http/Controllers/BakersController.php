<?php

namespace App\Http\Controllers;
use App\Models\Bakers;
use Illuminate\Http\Request;

class BakersController extends Controller
{
    
    protected $bakerss;
    public function __construct(){
        $this->bakers = new Bakers();
    }
    public function index()
    {
        $response['bakers'] = $this->bakers->all();
        return view('categories.indexbakers')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->bakers->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['bakers'] = $this->bakers->all();
        return view('categories.showbakers')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['bakers'] = $this->bakers->find($id);
        
        return view('categories.editbakers')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bakers = $this->bakers->find($id);
        $bakers->update(array_merge($bakers->toArray(), $request->toArray()));
        return redirect('bakers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bakers= $this->bakers->find($id);
        $bakers->delete();
        return redirect('bakers');
    }
}
