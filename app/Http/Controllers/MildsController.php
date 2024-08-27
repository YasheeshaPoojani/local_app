<?php

namespace App\Http\Controllers;
use App\Models\Milds;
use Illuminate\Http\Request;

class MildsController extends Controller
{
    protected $mildss;
    public function __construct(){
        $this->milds = new Milds();
    }
    public function index()
    {
        $response['milds'] = $this->milds->all();
        return view('categories.indexmilds')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->milds->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['milds'] = $this->milds->all();
        return view('categories.showmilds')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['milds'] = $this->milds->find($id);
        
        return view('categories.editmilds')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $milds = $this->milds->find($id);
        $milds->update(array_merge($milds->toArray(), $request->toArray()));
        return redirect('milds');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $milds = $this->milds->find($id);
        $milds->delete();
        return redirect('milds');
    }
}
