<?php

namespace App\Http\Controllers;
use App\Models\Woods;
use Illuminate\Http\Request;

class WoodsController extends Controller
{
    protected $woodss;
    public function __construct(){
        $this->woods = new Woods();
    }
    public function index()
    {
        $response['woods'] = $this->woods->all();
        return view('categories.indexwoods')->with($response);
    }

    public function store(Request $request)
    {
        
        $this->woods->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['woods'] = $this->woods->all();
        return view('categories.showwoods')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['woods'] = $this->woods->find($id);
        
        return view('categories.editwoods')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $woods = $this->woods->find($id);
        $woods->update(array_merge($woods->toArray(), $request->toArray()));
        return redirect('woods');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $woods = $this->woods->find($id);
        $woods->delete();
        return redirect('woods');
        
    }
}
