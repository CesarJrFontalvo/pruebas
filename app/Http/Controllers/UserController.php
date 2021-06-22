<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return DB::table('users')
        ->select('id_user as Identificación' ,'users.name as Nombre','users.email as Email', 'city as Ciudad', 'direction as Direciión','fotos as Fotos')
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
        return DB::table('users')->insert($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_user)
    {
        //
        return DB::table('users')
        ->select('id_user as Identificación' ,'users.name as Nombre','users.email as Email', 'city as Ciudad', 'direction as Direciión','fotos as Fotos')
        ->where('id_user',$id_user)
        ->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_user)
    {
        //
        return DB::table('users')->where('id_user',$id_user)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_user)
    {
        //
        return DB::table('users')->where('id_user',$id_user)->delete();
    }
}
