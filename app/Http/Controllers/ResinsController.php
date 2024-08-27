<?php

namespace App\Http\Controllers;
use App\Models\Resins;
use Illuminate\Http\Request;

class ResinsController extends Controller
{
    protected $resinsss;
    public function __construct(){
        $this->resins = new Resins();
    }
    public function index()
    {
        $response['resins'] = $this->resins->all();
        return view('categories.indexresins')->with($response);
    }

    public function store(Request $request)
    {
        
        $this->resins->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['resins'] = $this->resins->all();
        return view('categories.showresins')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['resins'] = $this->resins->find($id);
        
        return view('categories.editresins')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $resins = $this->resins->find($id);
        $resins->update(array_merge($resins->toArray(), $request->toArray()));
        return redirect('resins');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $resins = $this->resins->find($id);
        $resins->delete();
        return redirect('resins');
        
    }
}
