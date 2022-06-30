<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pos;
use App\Models\user;

use App\Http\Resources\posRresoure;

class posController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=auth()->user()->id;
        $pos=pos::where('user_id',$user_id)->get();
        return $pos;

        return  posRresoure::collection(pos::paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nom_POS'=>'required',
            'Adresse'=>'required',
            'Statut'=>'required',
            'telephone'=>'required',
            //'user_id'=>'required',

        ]);

        $pos = new pos([
            'Nom_POS' => $request->get('Nom_POS'),
            'Adresse' => $request->get('Adresse'),
            //'user_id' => auth()->user()->id,
            'Statut' => $request->get('Statut'),
            'telephone' => $request->get('telephone'),
            'user_id' => (int)auth()->user()->id,
            //'user_id' => (int)$request->get('user_id'),

        ]);
        //$probleme->User()->auth();
        $pos->save();
        return new posRresoure($pos);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pos)
    {

        return new posRresoure($pos);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pos)
    {
        $pdv->update([
            'Nom_POS'=>($request->Nom_POS) ? $request->Nom_POS : $pos->Nom_POS,
            'Adresse'=>($request->Adresse) ?  $request->Adresse : $pos->Adresse,
            'Statut'=>($request->Statut) ?  $request->Statut : $pos->Statut,

            'telephone'=>($request->telephone) ?  $request->telephone : $pos->telephone,
            'user_id'=>($request->user_id) ?  $request->user_id : $pos->user_id,
            //'user_id' => auth()->user()->id,
    ]);
    return new posRresoure($pos);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pos)
    {
        $pos->delete();
        return response('delete',200);
    }
}