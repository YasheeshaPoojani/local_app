<?php

namespace App\Http\Controllers;
use App\Models\Hots;
use Illuminate\Http\Request;

class HotsController extends Controller
{
    protected $hotss;
    public function __construct(){
        $this->hots = new Hots();
    }
    public function index()
    {
        $response['hots'] = $this->hots->all();
        return view('categories.indexhots')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->hots->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['hots'] = $this->hots->all();
        return view('categories.showhots')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['hots'] = $this->hots->find($id);
        
        return view('categories.edithots')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hots = $this->hots->find($id);
        $hots->update(array_merge($hots->toArray(), $request->toArray()));
        return redirect('hots');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hots = $this->hots->find($id);
        $hots->delete();
        return redirect('hots');
    }
}
