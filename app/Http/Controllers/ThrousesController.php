<?php

namespace App\Http\Controllers;
use App\Models\Throuses;
use Illuminate\Http\Request;

class ThrousesController extends Controller
{
    protected $throusess;
    public function __construct(){
        $this->throuses = new Throuses();
    }
    public function index()
    {
        $response['throuses'] = $this->throuses->all();
        return view('categories.indexthrouses')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->throuses->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['throuses'] = $this->throuses->all();
        return view('categories.showthrouses')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['throuses'] = $this->throuses->find($id);
        
        return view('categories.editthrouses')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $throuses = $this->throuses->find($id);
        $throuses->update(array_merge($throuses->toArray(), $request->toArray()));
        return redirect('throuses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $throuses = $this->throuses->find($id);
        $throuses->delete();
        return redirect('throuses');
    }
}
