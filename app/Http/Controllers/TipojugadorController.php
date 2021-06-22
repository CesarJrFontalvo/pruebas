<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipojugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return DB::table('tipojugador')
        ->join('users','users.id_user', '=', 'tipojugador.id_user_tipojugador')
        ->select('id_user','users.name','users.email', 'city', 'direction','fotos','tipojugador.edad','genero','frecu_juego','posicion','pierna_habil','caracteristicas')
        ->get();
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
        return DB::table('tipojugador')->insert($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_user_tipojugador)
    {
        //
        return DB::table('tipojugador')
        ->join('users','users.id_user', '=', 'tipojugador.id_user_tipojugador')
        ->select('id_user','users.name','users.email', 'city', 'direction','fotos','tipojugador.edad','genero','frecu_juego','posicion','pierna_habil','caracteristicas')
        ->where('id_user_tipojugador',$id_user_tipojugador)
        ->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tipojugador)
    {
        //
        return DB::table('tipojugador')->where('id_user_tipojugador',$tipojugador)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($tipojugador)
    {
        //
        return DB::table('tipojugador')->where('id_user_tipojugador',$tipojugador)->delete();
    }
}
