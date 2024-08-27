<?php

namespace App\Http\Controllers;
use App\Models\Musics;
use Illuminate\Http\Request;

class MusicsController extends Controller
{
    protected $musicss;
    public function __construct(){
        $this->musics = new Musics();
    }
    public function index()
    {
        $response['musics'] = $this->musics->all();
        return view('categories.indexmusics')->with($response);
    }

    public function store(Request $request)
    {
        
        $this->musics->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['musics'] = $this->musics->all();
        return view('categories.showmusics')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['musics'] = $this->musics->find($id);
        
        return view('categories.editmusics')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $musics = $this->musics->find($id);
        $musics->update(array_merge($musics->toArray(), $request->toArray()));
        return redirect('musics');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $musics = $this->musics->find($id);
        $musics->delete();
        return redirect('musics');
        
    }
}
