@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="w-50 card text-white bg-secondary mx-auto">
                <div class="card-body">
                    <h3 class="w-75 card-title mx-auto">Créer un nouveau Td</h3>
                    <form action="{{url('tds')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="form-label mt-4">Numéro</label>
                            <input type="text" class="form-control" name="num" />
                        </div>
                        <div class="form-group">
                            <label class="form-label mt-4">Titre</label>
                            <input type="text" class="form-control" name="title" />
                        </div>
                        <div class="form-group">
                            <label class="form-label mt-4">Td sous format pdf</label>
                            <input class="form-control" type="file" name="pdf" />
                        </div>
                        <input type="submit" class="btn btn-primary mt-3" value="Ajouter" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection