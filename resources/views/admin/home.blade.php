@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <a href="{{url('cours')}}" class="text-decoration-none">
                <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                    <div class="card-body">
                        <h2>Gestion des Cours</h2>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-md-3">
            <a href="{{url('tds')}}" class="text-decoration-none">
                <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
                    <div class="card-body">
                        <h2>Gestion des Travaux Dirigés</h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="" class="text-decoration-none">
                <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                    <div class="card-body">
                        <h2>Les comptes rendus</h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{url('elevesa')}}" class="text-decoration-none">
                <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
                    <div class="card-body">
                        <h2>La liste des étudiants</h2>
                    </div>
                </div>
            </a>
        </div>


    </div>
</div>
@endsection