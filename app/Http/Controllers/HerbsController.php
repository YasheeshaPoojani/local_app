<?php

namespace App\Http\Controllers;
use App\Models\Herbs;
use Illuminate\Http\Request;

class HerbsController extends Controller
{
    protected $herbss;
    public function __construct(){
        $this->herbs = new Herbs();
    }
    public function index()
    {
        $response['herbs'] = $this->herbs->all();
        return view('categories.indexherbs')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->herbs->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['herbs'] = $this->herbs->all();
        return view('categories.showherbs')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['herbs'] = $this->herbs->find($id);
        
        return view('categories.editherbs')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $herbs = $this->herbs->find($id);
        $herbs->update(array_merge($herbs->toArray(), $request->toArray()));
        return redirect('herbs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $herbs = $this->herbs->find($id);
        $herbs->delete();
        return redirect('herbs');
    }
}
