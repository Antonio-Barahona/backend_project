@extends('base')
@section('title') Post @endsection
@section('content')
    <form action="{{ route('post.store') }}" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="title" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Imagen</label>
            <input type="text" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Resumen</label>
            <textarea name="summary" id="summary" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripcion</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
        </div>        
        <div class="mb-3">
            <label for="author" class="form-label">Autor</label>
            <input name="author" id="author" class="form-control" type="text"></input>
        </div>        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection