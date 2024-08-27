<?php

namespace App\Http\Controllers;
use App\Models\Caterings;
use Illuminate\Http\Request;

class CateringsController extends Controller
{
    protected $cateringss;
    public function __construct(){
        $this->caterings = new Caterings();
    }
    public function index()
    {
        $response['caterings'] = $this->caterings->all();
        return view('categories.indexcaterings')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->caterings->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['caterings'] = $this->caterings->all();
        return view('categories.showcaterings')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['caterings'] = $this->caterings->find($id);
        
        return view('categories.editcaterings')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $caterings = $this->caterings->find($id);
        $caterings->update(array_merge($caterings->toArray(), $request->toArray()));
        return redirect('caterings');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $caterings = $this->caterings->find($id);
        $caterings->delete();
        return redirect('caterings');
    }
}
