<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Costumer;

class CostumersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $costumers = Costumer::all();

        return view('costumers.index',['costumers'=>$costumers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('costumers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        Costumer::create($request->all());

        return redirect('/costumers');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Costumer $costumers)
    {
        //
        
        return view('costumers.edit',compact('costumers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Costumer $costumers)
    {
        //
        
        Costumer::where('id',$costumers->id)->update([
        'id_cost'=> $request-> id_cost,
        'nama'=> $request-> nama,
        'no_tlp'=> $request-> no_tlp,
        'alamat'=> $request-> alamat]);
        // dd($costumers);

        return redirect('/costumers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Costumer $costumers)
    {
        //
        Costumer::destroy($costumers->id);

        return redirect('/costumers');

    }
}
