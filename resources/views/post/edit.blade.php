@extends('base')
@section('title') Post Edit @endsection
@section('content')
    <form action="{{ route('post.update', $post->$id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field("PATCH") }}
        <div class="mb-3">
            <label for="title" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post ?? ''->title }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Imagen</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ $post ?? ''->image }}">
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Resumen</label>
            <textarea name="summary" id="summary" class="form-control" cols="30" rows="10">
                {{ $post ?? ''->summary }}
            </textarea>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripcion</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10">
                {{ $post ?? ''->description }}
            </textarea>
        </div>        
        <div class="mb-3">
            <label for="author" class="form-label">Autor</label>
            <input name="author" id="author" class="form-control" type="text" value="{{ $post ?? ''->author }}"></input>
        </div>        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection