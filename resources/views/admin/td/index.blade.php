@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-success m-2" href="{{url('tds/create')}}">Ajouter un nouveau Td</a>
            <a class="btn btn-light m-2" href="{{url('admin')}}">Retour à l'acceuil</a>
        </div>

        @foreach($tds as $td)
        <div class="col-md-4">
            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Td {{$td->num}} : {{$td->title}}</div>
                <div class="card-body">
                    <a type="button" class="btn btn-info" href="storage/{{$td->pdf}}" download>Télécharger le Td</a><br>
                    <a type="button" class="btn btn-warning mt-1" href="{{url('tds/'.$td->id.'/edit')}}"> Modifier</a><br>
                    <form action="{{url('tds/'.$td->id)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <input type="submit" class="btn btn-danger mt-1" value="Supprimer" />
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection