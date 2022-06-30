<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\probleme;
use App\Models\User;

use App\Http\Resources\problemesResource;

class problemesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  problemesResource::collection(probleme::paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //echo $probleme.'hello';
       /* $probleme = probleme::create([
            'type'=>$this->type,
            'Etat'=>(bool)$this->Etat,
            'user_id' => auth()->user()->id,
]);*/
  $request->validate([
    'type'=>'required',
    'Etat'=>'required',
    //'pdv_id'=>'required',
]);

$probleme = new probleme([
    'type' => $request->get('type'),
    'Etat' =>(bool) $request->get('Etat'),
    'user_id' => auth()->user()->id,
    'pos_id' => $request->get('pos_id'),


]);
//$probleme->User()->auth();
$probleme->save();
      return new problemesResource($probleme);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(probleme $probleme)
    {
        return new problemesResource($probleme);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, probleme $probleme)
    {
        $probleme->update([
            'type'=>($request->type) ? $request->type : $probleme->type,
            'Etat'=>(bool)($request->Etat) ? (bool) $request->Etat : (bool)$probleme->Etat,
            'user_id' => auth()->user()->id,
            'pos_id'=>($request->pos_id) ? $request->pos_id : $probleme->pos_id,
    ]);
    return new problemesResource($probleme);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(probleme $probleme)
    {
        $probleme->delete();
        return response('delete',200);
    }
}