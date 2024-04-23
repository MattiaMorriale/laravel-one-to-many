@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Bentornato {{Auth::user()->name}}</h1>
        <p>cosa vuoi fare oggi?</p>

        <a href="{{route('admin.projects.index')}}" class="btn btn-primary my-5 mx-2">Vai alla index</a>
    </div>
    

@endsection