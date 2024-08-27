<?php

namespace App\Http\Controllers;
use App\Models\Photos;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    protected $photoss;
    public function __construct(){
        $this->photos = new Photos();
    }
    public function index()
    {
        $response['photos'] = $this->photos->all();
        return view('categories.indexphotos')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->photos->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['photos'] = $this->photos->all();
        return view('categories.showphotos')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['photos'] = $this->photos->find($id);
        
        return view('categories.editphotos')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $photos = $this->photos->find($id);
        $photos->update(array_merge($photos->toArray(), $request->toArray()));
        return redirect('photos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $photos = $this->photos->find($id);
        $photos->delete();
        return redirect('photos');
    }
}
