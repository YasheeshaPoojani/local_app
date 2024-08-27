<?php

namespace App\Http\Controllers;
use App\Models\Aromatics;
use Illuminate\Http\Request;

class AromaticsController extends Controller
{
    protected $aromaticss;
    public function __construct(){
        $this->aromatics = new Aromatics();
    }
    public function index()
    {
        $response['aromatics'] = $this->aromatics->all();
        return view('categories.indexaromatics')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->aromatics->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['aromatics'] = $this->aromatics->all();
        return view('categories.showaromatics')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['aromatics'] = $this->aromatics->find($id);
        
        return view('categories.editaromatics')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aromatics = $this->aromatics->find($id);
        $aromatics->update(array_merge($aromatics->toArray(), $request->toArray()));
        return redirect('aromatics');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aromatics = $this->aromatics->find($id);
        $aromatics->delete();
        return redirect('aromatics');
    }
}
