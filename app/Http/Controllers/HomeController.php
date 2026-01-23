<?php
//lassurance-garantie-decennale.fr
namespace App\Http\Controllers;

use App\Models\Automobile;
use App\Models\Fiche;
use App\Models\Professionel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function store(Request $request)
    {


        $auto = new Professionel();


        $auto->nom = $request->input('nom');
        $auto->prenom = $request->input('prenom');
        $auto->raison = $request->input('demarrage');
        $auto->activite = $request->input('activite');
        $auto->ancienne = $request->input('assure');
        $auto->ancien_resil = $request->input('ancienne');
        $auto->motif = $request->input('motif');
        $auto->email = $request->input('email');
        $auto->telephone = $request->input('tele');
        $auto->date_prospect = date("Y-m-d H:i:s");


        if ($auto->ancienne == "NON")
            $auto->motif = "pas de motif";

        $auto->save();

        $request->session()->flash('status', 'formulaire');

        // Ajouter le préfixe '+33' au téléphone
        $telephone = $request->input('tele');
        if (substr($telephone, 0, 1) === '0') {
            $telephone = '+33' . substr($telephone, 1);
        }



        // Envoyer les données à l'API
        $data = [

            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'phone' =>  $telephone,
            'email' => $request->input('email'),
             
            // 'assurer' => $request->input('assure'),
            // 'gender' => (string) $request->input('gender'),
            'lastAssure' => $request->input('ancienne'),
            
             'raisonSociale' => $request->input('raison_sociale'),

            //'name' => $request->input('nom'),
            //'lastname' => $request->input('prenom'),
             
           
            'typeProspect' => "2",
            'source' => "3",
            'activites' => "4",
            'url' => "6",
             'product'       => '/api/products/11',   //produit consruction
        ];

        // Convertir les données en JSON
        $jsonData = json_encode($data);

        // Initialisation de cURL
        $curl = curl_init();

        // Options de cURL
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://aksam.azurewebsites.net/api/prospects',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $jsonData,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonData)
            ],
        ]);

        // Exécution de la requête cURL
        $response = curl_exec($curl);

        // Fermer la session cURL
        curl_close($curl); 
        // Redirection après traitement 
        return redirect('/reponse');
    }

    public function index()
    {
        return view('layout.form');
    }
}
