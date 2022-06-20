<?php

namespace App\Http\Controllers;

use App\Models\Pos;

use App\Models\Rapports;
use Illuminate\Http\Request;


class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        
    $poss = Pos::all();
    return view('poss.index', compact('poss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    return view('poss.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    $data = $request->validate([
        'num' => 'required|max:10',
        'nom' => 'required|max:100',
        'adress' => 'required|max:500',
        'etat' => 'required|max:100',
    ]);
    $pos = new Pos;
    $pos->num = $request->num;
    $pos->nom = $request->nom;
    $pos->adress = $request->adress;
    $pos->etat = $request->etat;

    $pos->save();
    
  //  return back()->with('message', "Le Pos a bien ete creer !");
  return redirect()->route('poss.index')
  ->with('success','User deleted successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pos $pos)
    {
        return view('poss.show', compact('pos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $pos)
     
    {
        $pos = Pos::find($pos); 
        return view('poss.edit', compact('pos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
 
        $request->validate([
            'num'=>'required',
            'nom'=> 'required',
            'adress' => 'required',
            'etat' => 'required',
        ]);
 
 
        $pos = POS::find($id);
        $pos->num = $request->get('num');
        $pos->nom = $request->get('nom');
        $pos->adress = $request->get('adress');
        $pos->etat = $request->get('etat');
        $pos->save();
 
        $pos->update();
      //  return back()->with('message', "Pos a bien  été modifié !"); 
      return redirect()->route('poss.index')
      ->with('success','User deleted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            Pos::find($id)->delete();
            return redirect()->route('poss.index')
                            ->with('success','User deleted successfully');
        }
     
      
    }
    public function search(Request $request)
    {
        $key = trim($request->get('a'));

        $poss = Pos::query()
            ->where('nom', 'like', "%{$key}%")
            ->orWhere('adress', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->get();

        $rapports = Rapport::all();

     

        $recent_poss = Pos::query()
            ->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('search', [
            'key' => $key,
            'poss' => $poss,
            'rapports' => $rapports,
        
            'recent_posts' => $recent_posts
        ]);
    }
    }

