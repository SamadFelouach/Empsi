<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\Http\Requests\Modulerequest;
use Auth;
class ModuleController extends Controller
{

 public function __construct(){
   $this->middleware('auth');
 }


public function index() {
  //afficher les action : editer /supprimer 

      $listmodules = Module::where('user_id' , Auth::user()->id)->get();
      return view('index', ['modules'=> $listmodules]);
}



public function create() {
   //afficher le formulaire de creation d'un module .

    return view('create');


 }


public function store(Modulerequest $request){
       $module = new Module();

         $module->titre=$request->input('titre');
         $module->element=$request->input('element'); 
         $module->professeur=$request->input('professeur'); 
         $module->date_seance=$request->input('date_seance'); 
         $module->heure_debut=$request->input('heure_debut'); 
         $module->heure_fin=$request->input('heure_fin');
         $module->sommaire=$request->input('sommaire'); 
         $module->user_id = Auth::user()->id;       //affectation 



         $module->save();
 return redirect('action');

  }
 

public function edite($id){

    $module=Module::find($id);
    $this->authorize('update' , $module);
    return view('edite', compact('module','id'));  //equivalent a ['module'=>$mudule']

 }



public function update(Modulerequest $request , $id){

   $module=Module::find($id);
   
         $module->titre=$request->input('titre');
         $module->element=$request->input('element'); 
         $module->professeur=$request->input('professeur'); 
         $module->date_seance=$request->input('date_seance'); 
         $module->heure_debut=$request->input('heure_debut'); 
         $module->heure_fin=$request->input('heure_fin');
         $module->sommaire=$request->input('sommaire'); 
         $module->save();

   return redirect('action');

}

public function delete(Request $request, $id){

  $module=Module::find($id);
  $module ->delete();

  return redirect('action');

}

public function dash(){
  return view('dash');
}






}
