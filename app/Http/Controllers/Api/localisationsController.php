<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\localisation;
use App\Http\Resources\localisationsResource;

class localisationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  localisationsResource::collection(localisation::paginate(5));//localisationsResource
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$localisation = localisation::create([
            'lattitude'=>$this->lattitude,
            'longetude'=>$this->longetude,
            //'user_id' => auth()->user()->id,
]);*/
$request->validate([
    'lattitude'=>'required',
    'longetude'=>'required',
    'pos_id'=>'required',

]);

$localisation = new localisation([
    'lattitude' => $request->get('lattitude'),
    'longetude' =>(double) $request->get('longetude'),
    //'user_id' => auth()->user()->id,
    'pos_id' => $request->get('pos_id'),

]);
//$probleme->User()->auth();
$localisation->save();
return new localisationsResource($localisation);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(localisation $localisation)
    {
        return new localisationsResource($localisation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, localisation $localisation)
    {
        $localisation->update([
            'lattitude'=>($request->lattitude) ? $request->lattitude : $localisation->lattitude,
            'longetude'=>($request->longetude) ? $request->longetude : $localisation->longetude,
            'pos_id'=>($request->pos_id) ? $request->pos_id : $localisation->pos_id,
            //'user_id' => auth()->user()->id,'pos_id' => $request->get('pos_id'),

    ]);
    return new localisationsResource($localisation);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(localisation $localisation)
    {
        $localisation->delete();
        return response('delete',200);
    }
}
