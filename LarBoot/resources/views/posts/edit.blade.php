@extends('layouts.app')



@section("content")

<div class="card p-3 wrapper">
    <form action="{{route('posts.update'),$post->id}}" method="post" enctype="multipart/form-data" class="create-form">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Введите название статьи</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Название статьи" name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Текст статьи</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Давай, наполни меня полностью!" name="content"></textarea>
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Multiple files input example</label>
            <input class="form-control" type="file" id="formFileMultiple" name="image" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
    <img src="https://imgholder.ru/1500x1500/8493a8/adb9ca&text=IMAGE+HOLDER&font=kelson" class="img-fluid" alt="...">
</div>

@endsection
