@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-2">
            <a class="btn btn-light mx-auto" href="{{url('admin')}}">Retour</a>
        </div>
    </div>
    <div class="row">
        @foreach($eleves as $eleve)
        <div class="col-md-4">
            <div class="card">
                <img src="{{asset('storage/'.$eleve->photo)}}" alt="" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">{{$eleve->nom}} {{$eleve->prenom}}</h4>
                    <a class="btn btn-primary" href="{{url('eleves/'.$eleve->id)}}">Voir plus de détails</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection