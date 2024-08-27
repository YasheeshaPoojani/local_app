<?php

namespace App\Http\Controllers;
use App\Models\Kids;
use Illuminate\Http\Request;

class KidsController extends Controller
{
    protected $kidss;
    public function __construct(){
        $this->kids = new Kids();
    }
    public function index()
    {
        $response['kids'] = $this->kids->all();
        return view('categories.indexkids')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->kids->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['kids'] = $this->kids->all();
        return view('categories.showkids')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['kids'] = $this->kids->find($id);
        
        return view('categories.editkids')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kids = $this->kids->find($id);
        $kids->update(array_merge($kids->toArray(), $request->toArray()));
        return redirect('kids');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kids = $this->kids->find($id);
        $kids->delete();
        return redirect('kids');
    }
}
