<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Models\Cancha;
use Illuminate\Http\Request;

class CanchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Cancha::all();
         return DB::table('canchas')->get();
        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return Cancha::create($request->all());
        return DB::table('canchas')->insert($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_cancha)
    {
        //return Cancha::find($id_cancha);
        
        return DB::table('canchas')->where('id_cancha',$id_cancha)->get();
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_cancha)
    {
        //return Cancha::find($id_cancha)->update($request->all());

        return DB::table('canchas')->where('id_cancha',$id_cancha)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response                                                    
     */
    public function destroy($id_cancha)
    {
        return DB::table('canchas')->where('id_cancha',$id_cancha)->delete();
        
    }
}
