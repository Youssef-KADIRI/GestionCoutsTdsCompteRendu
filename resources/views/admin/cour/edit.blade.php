@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{url('cours/'.$cour->id)}}" method="POST" enctype="multipart/form-data">
                <input type=hidden name=_method value=put />
                {{csrf_field()}}
                <div class="form-group">
                    <label class="form-label mt-4">Chapiter</label>
                    <input type="text" class="form-control" name="chap" value="{{$cour->chap}}" />
                </div>
                <div class="form-group">
                    <label class="form-label mt-4">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$cour->title}}" />
                </div>
                <div class="form-group">
                    <label class="form-label mt-4">Course in pdf format</label>
                    <input class="form-control" type="file" name="pdf" />
                </div>
                <input type="submit" class="btn btn-primary mt-3" value="Modifier" />
            </form>
        </div>
    </div>
</div>
@endsection