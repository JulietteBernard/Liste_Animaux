<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Animal;

class AnimalController extends Controller

{
/**
* la fonction index nous permet de récupéré les valeurs de la base de donnée
* @param  la requête $request
* @return tableau animals
*/
    public function index(Request $request)

    {

        // On recupère tous les animaux, qu'on stocke dans la variable $animals
        $animals= Animal::all();
        // On amène utilisateur sur la vue index en retournant les valeurs de animals
        return view('animals.index',compact('animals'));

    }
/**
* la fonction nous permet d'accéder à la vue crée
* @return la vue create
*/
     
    public function create()

    {

        return view('animals.create');

    }
/**
* la fonction va vérifier si quand on crée un animal les différents élements demandée sont bien rentré.
* @param la requête $requests
* @return la fonction index et le message de sucess
*/

    public function store(Request $request)

    {

        $this->validate($request, [

            'nom' => 'required',

            'type_animaux' => 'required',
            
            'caracteristique' => 'required',

        ]);

        Animal::create($request->all());

        return redirect()->route('animals.index')

                        ->with('success',"L'animal a été ajouté !");

    }
/**
* la fonction va permettre acceder à la vue edit 
* @param  $id 
* @return l'animal qui possède l'id du parametre
*/


    public function edit($id)

    {

        $animal= Animal::find($id);

        return view('animals.edit',compact('animal'));

    }
/**
* la fonction va permet de mettre à jour les élement modifier de la view edit
* @param la requête $requests et $id
* @return fonction index
*/

    public function update(Request $request, $id)

    {

        Animal::find($id)->update($request->all());

        return redirect()->route('animals.index');

    }

/**
* la fonction permet de supprimer l'élement selectionné
* @param $id
* @return fonction index
*/
    public function destroy($id)

    {

        Animal::find($id)->delete();

        return redirect()->route('animals.index');

    }

}