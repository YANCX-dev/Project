@extends('layouts.app')

@section('title',"posts")

@section('content')
    <div class="card mb-3 wrapper">
        <div class="row">
            <div class="col">
                <img src="{{$post->image}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->content}}</p>
                    <p class="card-text"><small class="text-muted">{{$post->stand_date}}</small></p>
                </div>
                <div class="d-flex justify-content-end p-3 ">
                    <a href="{{URL::previous()}}" class="btn btn-info">Назад</a>
                    <a href="{{ route("posts.edit",$post->id) }}" type="button" class="btn btn-warning">Изменить</a>
                    <a href="{{ route("posts.destroy",$post->id) }}" type="button" class="btn btn-success">Удалить</a>
                </div>
            </div>
        </div>
    </div>
@endsection
