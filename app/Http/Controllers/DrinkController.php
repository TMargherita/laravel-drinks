<?php

namespace App\Http\Controllers;

use App\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $drink = Drink::all();

       return view ('drink.index', compact('drink'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('drink.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'name'=>"required|max:40",
            'gradation'=>"required",
            'category'=>"required|max:100",
            'glass'=>"required|max:20",
            'ingredients'=>"required",
            'price'=>"required",
            'garnish'=>"required|max:100",
            'preparation'=>"required"
        ]);

        $drink =  new Drink;
        $drink->fill($data);
        $drink->save;

        return redirect()->route('drink.show', $drink);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Drink $drink)
    {
        $drink = Drink::find($id);
        return view('drink.show',compact('drink'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Drink $drink)
    {
        return view('drink.edit', compact('drink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $request->validate([
            'name'=>"required|max:40",
            'gradation'=>"required",
            'category'=>"required|max:100",
            'glass'=>"required|max:20",
            'ingredients'=>"required",
            'price'=>"required",
            'garnish'=>"required|max:100",
            'preparation'=>"required"
        ]);
        
        $drink = Food::find($id);
        
        $drink->update($data);

        return redirect()->route('drink.show', $drink);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
