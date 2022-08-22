<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Pointage;
use App\Models\Pointage;
// use App\Http\Controllers\PointageController;

use Illuminate\Http\Request;

class PointageController extends Controller
{
    //
    public function index(){
        $pointage= Pointage::all();
        return view('pointage',$pointage);
    
    }
    public function store(Request $request)
    {
        

        $pointage = new \App\Models\Pointage;
        $pointage->nom = $request->nom;
        $pointage->prenom = $request->prenom;
        $pointage->tel = $request->tel;
        $pointage->email = $request->email;
        $pointage->jour = $request->jour;
        $pointage->heureArrive = $request->heureArrive;
        $pointage->heureDepart = $request->heureDepart;
        $pointage->save();

       
         
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