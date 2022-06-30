<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vendeur;
use App\Http\Resources\vendeursResource;
class vendeursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  vendeursResource::collection(vendeur::paginate(5));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$vendeur = vendeur::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'telephone'=>$request->telephone,
    ]);*/
    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'telephone'=>'required',
        'pos_id'=>'required',

    ]);

    $vendeur = new vendeur([

        'name' =>$request->get('name'),
        'email' => $request->get('email'),
        'telephone' => $request->get('telephone'),
        'pos_id' => $request->get('pos_id'),

    ]);
    //$probleme->User()->auth();
    $vendeur->save();
    return new vendeursResource($vendeur);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(vendeur $vendeur)
    {
        return new vendeursResource($vendeur);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vendeur $vendeur)
    {

        $vendeur->update([
            'name'=>($request->name) ? $request->name : $vendeur->name,
            'email'=>($request->email) ? $request->email : $vendeur->email,
            'telephone'=>($request->telephone) ? $request->telephone : $vendeur->telephone,
            'pos_id'=>($request->pos_id) ? $request->pos_id : $vendeur->pos_id,
    ]);

    return new vendeursResource($vendeur);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(vendeur $vendeur)
    {
        $vendeur->delete();
        return response('delete',200);
    }
}