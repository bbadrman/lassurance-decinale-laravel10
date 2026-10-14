<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*
| Table des prospects (modèle App\Models\Professionel).
| Elle existe déjà en production : la migration ne fait rien si la table est présente,
| elle sert à créer la table dans les environnements locaux.
*/
return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('lassurance-garantie-decennal')) {
            return;
        }

        Schema::create('lassurance-garantie-decennal', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('raison')->nullable();
            $table->string('activite')->nullable();
            $table->string('ancienne')->nullable();
            $table->string('ancien_resil')->nullable();
            $table->string('motif')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone', 20)->nullable();
            $table->dateTime('date_prospect')->nullable();
        });
    }

    public function down(): void
    {
        // Ne jamais supprimer la table de production par un rollback
        if (app()->environment('local')) {
            Schema::dropIfExists('lassurance-garantie-decennal');
        }
    }
};
