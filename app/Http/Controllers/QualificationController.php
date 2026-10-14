<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFicheRequest;
use App\Models\Professionel;

class QualificationController extends Controller
{
    // Identifiant "url" (source) envoyé au CRM pour les prospects de la page qualification
    private const CRM_URL_ID = '46';

    // Page /qualification-certification-btp
    public function index()
    {
        return view('layout.qualification-btp', [
            'nomenclature' => config('qualibat'),
        ]);
    }

    // Formulaire "Être rappelé" pour une qualification choisie dans les selects
    public function store(StoreFicheRequest $request)
    {
        $qualification = $this->findQualification((string) $request->input('qualification'));

        if (!$qualification) {
            return back()->withInput()->withErrors(['qualification' => 'Veuillez choisir une qualification.']);
        }

        $subject = 'Qualification ' . $qualification['code'] . ' – ' . $qualification['label'];

        $prospect = new Professionel();
        $prospect->nom = $request->input('nom');
        $prospect->prenom = $request->input('prenom');
        $prospect->email = $request->input('email');
        $prospect->telephone = $request->input('tele');
        // $prospect->motif = mb_substr($subject, 0, 255);
        $prospect->date_prospect = date("Y-m-d H:i:s");
        $prospect->save();

        $telephone = $request->input('tele');
        if (substr($telephone, 0, 1) === '0') {
            $telephone = '+33' . substr($telephone, 1);
        }

        $jsonData = json_encode([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'phone' => $telephone,
            'email' => $request->input('email'),
            'typeProspect' => "2",
            'source' => "3",
            'activites' => "4",
            'url' => self::CRM_URL_ID,
            'product' => '/api/products/11',
        ]);
        $curl = curl_init();
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
        curl_exec($curl);
        curl_close($curl);

        return redirect()->route('qualification.response')
            ->with('status', 'formulaire')
            ->with('qualification_topic', $subject);
    }

    // Retrouve une qualification par son code (ex. "1111") dans la nomenclature
    private function findQualification(string $code): ?array
    {
        foreach (config('qualibat') as $family) {
            foreach ($family['activities'] as $activity) {
                foreach ($activity['specialities'] as $speciality) {
                    foreach ($speciality['qualifications'] as $qualification) {
                        if ($qualification['code'] === $code) {
                            return $qualification;
                        }
                    }
                }
            }
        }

        return null;
    }

     // Page /qualification-certification-btp/merci : confirmation après envoi du formulaire
    public function response()
    {
        if (!session()->has('status')) {
            return redirect()->route('qualification.index');
        }

        return view('layout.qualification.response', [
            'topicTitle' => session('qualification_topic'),
        ]);
    }
}
