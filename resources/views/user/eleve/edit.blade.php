@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="w-50 card text-white bg-secondary mx-auto">
                <div class="card-body">
                    <h3 class="w-50 card-title mx-auto">Editer votre profil</h3>
                    <form action="{{url('eleves/'.$eleve->id)}}" method="POST" enctype="multipart/form-data">
                        <input type=hidden name=_method value=put />
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="form-label mt-4">Nom</label>
                            <input name="nom" class="form-control" value="{{$eleve->nom}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label mt-4">Prénom</label>
                            <input name="prenom" class="form-control" value="{{$eleve->prenom}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label mt-4">Photo</label>
                            <input class="form-control" type="file" name="photo" />
                        </div>
                        <div class="form-group">
                            <label class="form-label mt-4">Genre</label><br>
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="genre" id="homme" autocomplete="off" value="Homme" {{ $eleve ->genre == "Homme" ?'checked' :'' }}>
                                <label class="btn btn-outline-primary" for="homme">Homme</label>
                                <input type="radio" class="btn-check" name="genre" id="femme" autocomplete="off" value="Femme" {{ $eleve ->genre == "Femme" ?'checked' :'' }}>
                                <label class="btn btn-outline-primary" for="femme">Femme</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label mt-4">Cin</label>
                            <input name="cin" class="form-control" value="{{$eleve->cin}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label mt-4">Cne</label>
                            <input name="cne" class="form-control" value="{{$eleve->cne}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label mt-4">Date de naissance</label>
                            <input name="dateNaissance" class="form-control" type="date" value="{{$eleve->dateNaissance}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label mt-4">Lieu de naissance</label>
                            <input name="lieuNaissance" class="form-control" value="{{$eleve->lieuNaissance}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label mt-4">Adresse e-mail</label>
                            <input name="email" class="form-control" type="email" value="{{$eleve->email}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label mt-4">Numéro de téléphone</label>
                            <input name="telephone" class="form-control" value="{{$eleve->telephone}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label mt-4">Adresse</label>
                            <input name="adresse" class="form-control" value="{{$eleve->adresse}}">
                        </div>
                        <input type="submit" class="btn btn-primary mt-3" value="Terminer" />
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection