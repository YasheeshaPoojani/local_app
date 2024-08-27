<?php

namespace App\Http\Controllers;
use App\Models\Decoras;
use Illuminate\Http\Request;

class DecorasController extends Controller
{
    protected $decorass;
    public function __construct(){
        $this->decoras = new Decoras();
    }
    public function index()
    {
        $response['decoras'] = $this->decoras->all();
        return view('categories.indexdecoras')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->decoras->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['decoras'] = $this->decoras->all();
        return view('categories.showdecoras')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['decoras'] = $this->decoras->find($id);
        
        return view('categories.editdecoras')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $decoras = $this->decoras->find($id);
        $decoras->update(array_merge($decoras->toArray(), $request->toArray()));
        return redirect('decoras');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $decoras = $this->decoras->find($id);
        $decoras->delete();
        return redirect('decoras');
    }
}
