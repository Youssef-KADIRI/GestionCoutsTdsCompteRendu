@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-light m-2" href="{{url('user')}}">Retour à l'acceuil</a>
        </div>
        @foreach($cours as $cour)
        <div class="col-md-4">
            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Chapite {{$cour->chap}} : {{$cour->title}}</div>
                <div class="card-body">
                    <a type="button" class="btn btn-info" href="storage/{{$cour->pdf}}" download>Télécharger le cours</a><br>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection