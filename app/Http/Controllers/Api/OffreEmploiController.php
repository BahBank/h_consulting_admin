<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Emploi;
use App\Models\Type;
use App\Models\Ville;
use App\Models\Secteur;
use App\Models\Grade;
use App\Models\Formation;
use App\Models\Domaine;
use App\Models\Entreprise;


class OffreEmploiController extends Controller
{

    public function getListeOffreEmploi(){
        $offresEmplois = Emploi::orderBy('id', 'DESC')->get();
        $offresEmplois[0]->type_id = Type::find($offresEmplois[0]->type_id)->nom;
        $offresEmplois[0]->secteur_id = Secteur::find($offresEmplois[0]->secteur_id)->nom;
        $offresEmplois[0]->entreprise_id = Entreprise::find($offresEmplois[0]->entreprise_id)->raison_sociale;
        $offresEmplois[0]->grade_id = Grade::find($offresEmplois[0]->grade_id)->nom;

        $domaines ;
        foreach (json_decode($offresEmplois[0]->domaine_id) as $domaine){
             $domaines []= Domaine::find($domaine)->nom;
        }
        $offresEmplois[0]->domaine_id = $domaines;

        $villes ;
        foreach (json_decode($offresEmplois[0]->ville_id) as $ville){
             $villes []= Ville::find($ville)->nom;
        }
        $offresEmplois[0]->ville_id = $villes;
        $offresEmplois[0]->image = asset('assets/img/offres-emplois').'/'.$offresEmplois[0]->image;
        $offresEmplois[0]->date_publication = Emploi::nombreDejourDuPoste($offresEmplois[0]->date_publication);

        $types         = Type::orderBy('id', 'DESC')->get();
        $villes        = Ville::orderBy('id', 'DESC')->get();
        $secteurs      = Secteur::orderBy('id', 'DESC')->get();
        $grades        = Grade::orderBy('id', 'DESC')->get();
        $formations    = Formation::orderBy('id', 'DESC')->get();
        $domaines      = Domaine::orderBy('id', 'DESC')->get();

        $listOffreEmploies['offresEmplois'] = $offresEmplois;
        $listOffreEmploies['types']         = $types;
        $listOffreEmploies['villes']        = $villes;
        $listOffreEmploies['secteurs']      = $secteurs;
        $listOffreEmploies['grades']        = $grades;
        $listOffreEmploies['formations']    = $formations;
        $listOffreEmploies['domaines']      = $domaines;


        return response()->json($listOffreEmploies,200);
    }
}
