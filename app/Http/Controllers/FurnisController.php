<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Furnis;

class FurnisController extends Controller
{
    protected $furniss;
    public function __construct(){
        $this->furnis = new Furnis();
    }
    public function index()
    {
        $response['furnis'] = $this->furnis->all();
        return view('categories.indexfurnis')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->furnis->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['furnis'] = $this->furnis->all();
        return view('categories.showfurnis')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['furnis'] = $this->furnis->find($id);
        
        return view('categories.editfurnis')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $furnis = $this->furnis->find($id);
        $furnis->update(array_merge($furnis->toArray(), $request->toArray()));
        return redirect('furnis');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $furnis = $this->furnis->find($id);
        $furnis->delete();
        return redirect('furnis');
    }
}
