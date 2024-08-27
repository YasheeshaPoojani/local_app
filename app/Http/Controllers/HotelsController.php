<?php

namespace App\Http\Controllers;
use App\Models\Hotels;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    protected $hotelss;
    public function __construct(){
        $this->hotels = new Hotels();
    }
    public function index()
    {
        $response['hotels'] = $this->hotels->all();
        return view('categories.indexhotels')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->hotels->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['hotels'] = $this->hotels->all();
        return view('categories.showhotels')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['hotels'] = $this->hotels->find($id);
        
        return view('categories.edithotels')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hotels = $this->hotels->find($id);
        $hotels->update(array_merge($hotels->toArray(), $request->toArray()));
        return redirect('hotels');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hotels = $this->hotels->find($id);
        $hotels->delete();
        return redirect('hotels');
    }
}
