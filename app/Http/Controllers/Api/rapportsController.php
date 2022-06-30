<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\rapport;
use App\Models\User;
use App\Http\Resources\rapportsResource;

class rapportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  rapportsResource::collection(rapport::paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /*$rapport = rapport::create([
                'Etat'=>$this->Etat,
                //'Date_rapport'=>$this->Date_rapport,
                'description'=>$this->description,
                //'user_id' => auth()->user()->id,
    ]);*/
     //echo $probleme.'hello';
       /* $probleme = probleme::create([
            'type'=>$this->type,
            'Etat'=>(bool)$this->Etat,
            'user_id' => auth()->user()->id,
]);*/
  $request->validate([
    'Etat'=>'required',
    'Date_rapport'=>'required',
    'description'=>'required',
    'pos_id'=>'required',

]);

$rapport = new rapport([

    'Etat' =>(bool) $request->get('Etat'),
    'Date_rapport' => $request->get('Date_rapport'),
    'description' => $request->get('description'),
    'user_id' => auth()->user()->id,
    'pos_id' => $request->get('pos_id'),

]);
//$probleme->User()->auth();
$rapport->save();
    return new rapportsResource($rapport);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(rapport $rapport)
    {
      return new rapportsResource($rapport);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rapport $rapport)
    {
        $rapport->update([
            'Etat'=>($request->Etat) ? $request->Etat : $rapport->Etat,
            //'Date_rapport'=>($request->Date_rapport) ? $request->Date_rapport : $rapport->Date_rapport,
            'description'=>($request->description) ? $request->description : $rapport->description,
            //'user_id' => auth()->user()->id,

    ]);
    return new rapportsResource($rapport);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(rapport $rapport)
    {
        $rapport->delete();
        return response('delete',200);
    }
}