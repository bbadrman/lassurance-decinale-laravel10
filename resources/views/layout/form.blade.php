@extends('master')
@section('contentform')

<br><br>
<div class="container containerjumbotron">
    <div class="row">

        <div class="col-12 col-lg-8 order-lg-1 order-2 mypadding0 mypadding1">
            <span class="titrePage">Assurance décennale</span>
            <br><br>
            <div class="overlay"></div>
            <img src="{{ asset('image/photo.jpeg') }}" class="imageform" width="100%">

        </div>
        <div class="col-12 col-lg-4 order-lg-2 order-1  mypadding2">
            <div class="card">
                <div class="card-header">
                    Complétez ce formulaire pour obtenir un tarif
                </div>
                <div class="card-body">

                    <form action="/" method="POST">

                        @csrf
                        <div class="form-row">
                            <div class="col-12">
                                <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom...">
                            </div>
                            <div class="col-12">
                                <input type="text" name="prenom" class="form-control" id="prenom"
                                    placeholder="Prénom...">
                            </div>
                            <div class="col-12">
                                <input type="text" name="raison_sociale" class="form-control" id="raison_sociale"
                                    placeholder="Raison sociale...">
                            </div>
                            <div class="col-12 ">
                                <select id="myselect001" name="demarrage" class="form-control">
                                    <option value="">Démarrage activité </option>
                                    <option value="OUI">OUI</option>
                                    <option value="NON">NON</option>
                                </select>
                            </div>





                            <div class="col-12 colhiden0">
                                <select id="myselect0" name="assure" class="form-control">
                                    <option value="" selected>Activité assurée actuellement </option>
                                    <option value="OUI">OUI</option>
                                    <option value="NON">NON</option>
                                </select>
                            </div>


                            <div class="col-12 colhiden0">
                                <select id="myselect1" name="ancienne" class="form-control">
                                    <option value="" selected>Ancienne Assurance résilié </option>
                                    <option value="OUI">OUI</option>
                                    <option value="NON">NON</option>
                                </select>
                            </div>


                            <div class="col-12 colhiden">
                                <select id="myselect2" name="motif" class="form-control">
                                    <option class="optionvalue" value="" selected>Motif résiliation</option>
                                    <option value="Sinistre">Sinistre</option>
                                    <option value="Non paiement">Non paiement</option>
                                    <option value="Amiable">Amiable</option>
                                    <option value="Echéance">Echéance</option>
                                </select>
                            </div>


                            <div class="col-12">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email...">
                            </div>

                            <div class="col-12">
                                <input type="text" id="tele" name="tele" maxlength="10" class="form-control"
                                    placeholder="Téléphone...">
                            </div><br><br>
                            <p class="formtext">En cliquant sur ‘Comparer’, vous acceptez de transmettre vos
                                informations à AKSAM ASSURANCES, qui accepte de les utiliser conformément
                                à sa politique de confidentialité dans le but de vous fournir des
                                propositions de devis d’assurances adapté à votre recherche</p>
                            <input type="submit" name="confirmer" id="bt1" class="mybutton"
                                value="Comparer maintenant" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


</div>

<br><br>
@include('layout.bas-page')


@stop