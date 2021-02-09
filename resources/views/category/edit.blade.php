@extends('base')
@section('title') Post @endsection
@section('content')
    <form action="{{ route('category.update') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="name" class="form-label">Nombre de Categoria</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripcion</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ $category->description }}</textarea>
        </div>       
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection