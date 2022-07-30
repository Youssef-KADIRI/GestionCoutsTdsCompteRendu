@extends('layouts.app')


@section('content')


<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mb-2 mx-auto">
            <a class="btn btn-light mx-auto" href="{{url('elevesa')}}">Retour</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card mb-4">
                <div class="card-header text-center">
                    <img src="{{asset('storage/'.$eleve->photo)}}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                    <h5 class="my-3">{{$eleve->nom}} {{$eleve->prenom}}</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Nom</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{$eleve->nom}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Prénom</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{$eleve->prenom}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Genre</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{$eleve->genre}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Cin</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{$eleve->cin}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Cne</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{$eleve->cne}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Date de naissance</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{$eleve->dateNaissance}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Lieu de naissance</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{$eleve->lieuNaissance}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Adresse email</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{$eleve->email}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Téléphone</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{$eleve->telephone}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Adresse</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{$eleve->adresse}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection