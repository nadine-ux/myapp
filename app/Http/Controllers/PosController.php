<?php

namespace App\Http\Controllers;

use App\Models\Pos;
use App\Models\user;
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
        $users = user::all();
    return view('poss.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    /*$data = $request->validate([
        'Nom_POS' => 'required|max:10',
        'Adresse' => 'required|max:100',
        'Statut' => 'required|max:500',
        'telephone' => 'required|max:100',
    ]);
    $pos = new Pos;
    $pos->Nom_POS = $request->Nom_POS;
    $pos->Adresse = $request->Adresse;
    $pos->Statut = $request->Statut;
    $pos->telephone = $request->telephone;

    $pos->save();

  //  return back()->with('message', "Le Pos a bien ete creer !");
  return redirect()->route('poss.index')
  ->with('success','pos Has Been created successfully');*/
  $input = $request->all();
  pos::create($input);
  return redirect('poss')->with('flash_message', 'pos Has Been created successfully');
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
            'Nom_POS'=>'required',
            'Adresse'=> 'required',
            'Statut' => 'required',
            'telephone' => 'required',
        ]);


        $pos = POS::find($id);
        $pos->Nom_POS = $request->get('Nom_POS');
        $pos->Adresse = $request->get('Adresse');
        $pos->Statut = $request->get('Statut');
        $pos->telephone = $request->get('telephone');
        $pos->save();

        $pos->update();
      //  return back()->with('message', "Pos a bien  été modifié !");
      return redirect()->route('poss.index')
      ->with('success','pos Has Been updated successfully');
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
                            ->with('success','pos deleted successfully');
        }


    }
    public function search(Request $request)
    {
        $key = trim($request->get('a'));

        $poss = Pos::query()
            ->where('Nom_POS', 'like', "%{$key}%")
            ->orWhere('Adresse', 'like', "%{$key}%")
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