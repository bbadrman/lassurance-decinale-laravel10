<?php

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
        // Ajouter le préfixe '+33' au téléphone
        $telephone = $request->input('tele');
        if (substr($telephone, 0, 1) === '0') {
            $telephone = '+33' . substr($telephone, 1);
        }



        // Envoyer les données à l'API
        $data = [
            'name' => $request->input('nom'),
            'lastname' => $request->input('prenom'),
            'phone' =>  $telephone,
            'email' => $request->input('email'),
            'raisonSociale' => $request->input('raison_sociale'),
            'assure' => $request->input('assure'),
            'lastAssure' => $request->input('ancienne'),
            'typeProspect' => "2",
            'source' => "3",
            'activites' => "4",
            'url' => "6",
            'product_id' => 5
        ];

        // Convertir les données en JSON
        $jsonData = json_encode($data);

        // Initialisation de cURL
        $curl = curl_init();

        // Options de cURL
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://aksama-assurance.azurewebsites.net/api/prospects',
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
        $request->session()->flash('status', 'formulaire');
        return redirect('/assurance/professionel');
    }

    public function index()
    {
        return view('layout.form');
    }
}
