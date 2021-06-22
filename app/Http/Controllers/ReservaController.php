<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return DB::table('reservas')->get();
        return DB::table('reservas')
        ->join('users','users.id_user', '=', 'reservas.id_user_reserva')
        ->join('canchas','canchas.id_cancha', '=', 'reservas.id_cancha_reserva')
        ->select('id_reserva as Reserva','users.name as Nombre' ,'canchas.name as Cancha', 'canchas.lugar as Lugar', 'reservas.fecha', 'reservas.hora')
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
        return DB::table('reservas')->insert($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_user_reserva)
    {
        //
        return DB::table('reservas')
        ->join('users','users.id_user', '=', 'reservas.id_user_reserva')
        ->join('canchas','canchas.id_cancha', '=', 'reservas.id_cancha_reserva')
        ->select('id_reserva as Reserva','users.name as Nombre' ,'canchas.name as Cancha','canchas.lugar as Lugar',  'reservas.fecha', 'reservas.hora')
        ->where('id_user_reserva', $id_user_reserva)
        ->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_reserva)
    {
        //
        return DB::table('reservas')->where('id_reserva',$id_reserva)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_reserva)
    {
        //
        return DB::table('reservas')->where('id_reserva',$id_reserva)->delete();
    }
}
