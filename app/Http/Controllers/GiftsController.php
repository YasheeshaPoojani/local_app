<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gifts;

class GiftsController extends Controller
{
    protected $giftss;
    public function __construct(){
        $this->gifts = new Gifts();
    }
    public function index()
    {
        $response['gifts'] = $this->gifts->all();
        return view('categories.indexgifts')->with($response);
    }

    


    public function store(Request $request)
    {
        
        $this->gifts->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response['gifts'] = $this->gifts->all();
        return view('categories.showgifts')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['gifts'] = $this->gifts->find($id);
        
        return view('categories.editgifts')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gifts = $this->gifts->find($id);
        $gifts->update(array_merge($gifts->toArray(), $request->toArray()));
        return redirect('gifts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gifts = $this->gifts->find($id);
        $gifts->delete();
        return redirect('gifts');
    }
}
