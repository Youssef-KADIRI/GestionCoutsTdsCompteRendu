@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{url('tds/'.$td->id)}}" method="POST" enctype="multipart/form-data">
                <input type=hidden name=_method value=put />
                {{csrf_field()}}
                <div class="form-group">
                    <label class="form-label mt-4">Numéro</label>
                    <input type="text" class="form-control" name="num" value="{{$td->num}}" />
                </div>
                <div class="form-group">
                    <label class="form-label mt-4">Titre</label>
                    <input type="text" class="form-control" name="title" value="{{$td->title}}" />
                </div>
                <div class="form-group">
                    <label class="form-label mt-4">Td sous format pdf</label>
                    <input class="form-control" type="file" name="pdf" />
                </div>
                <input type="submit" class="btn btn-primary mt-3" value="Modifier" />
            </form>
        </div>
    </div>
</div>
@endsection