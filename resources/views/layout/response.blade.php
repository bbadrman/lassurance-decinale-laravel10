@if (session()->has('status'))

@extends('master')
@section('contentresponse')

    <section id="monsection">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="jumbotron jumbotron-fluid jumbotronresilie ">
                        <div class="container">
                            <img src="{{ asset('image/sucess.png') }}" class="img-fluid" alt="Responsive image"
                                width="40px">
                            <p class="sucessmsg">Votre demande de tarif est prise en compte,vous recevez notre offre
                                rapidement</p>
                            <p class="msgre"><a href="https://lassurance-garantie-decennale.fr/">Revenir à l'accueil</a></p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    @include('layout.bas-page')


@endsection

@else
    <script>
        window.location = "https://lassurance-garantie-decennale.fr/";

    </script>
@endif
