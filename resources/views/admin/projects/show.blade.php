@extends('layouts.app')

@section('title', $project->title)

@section('content')
    <header>
        <h1 class="my-5">{{$project->title}}</h1>
    </header>
    <div class="clearfix">
        @if ($project->image)
        <img class="me-4 mb-4 float-start" src="{{$project->image}}" alt="{{$project->slug}}">            
        @endif
        <p>{{$project->description}}</p>
    </div>
    <hr>
    <div class="d-flex justify-content-end">
        <a class="btn btn-secondary" href="{{route('admin.projects.index')}}">Indietro</a>
    </div>
    
@endsection