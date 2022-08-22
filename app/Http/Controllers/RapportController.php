<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RapportController extends Controller
{
    //
    public function index(){
        $rapport= Rapport::all();
        return view('rapport',$rapport);
    
    }
    public function store(Request $request)
    {
        

        $rapport = new \App\Models\Rapport;
        $rapport->nom = $request->nom;
        $rapport->prenom = $request->prenom;
        $rapport->tel = $request->tel;
        $rapport->email = $request->email;
        $pointage->jour = $request->jour;
        $rapport->save();

       
         
        return redirect()->back();

    }

    public function show(Pointage $pointage)
    {
        return $pointage;
    }

    public function update(Request $request, $id)
    {
        $pointage->update($request->all());
    }

    public function destroy($id)
    {
        $pointage->delete();
    }
}
