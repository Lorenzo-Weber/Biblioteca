@extends('layouts.main')

@section('title', 'Biblioteca - Editar ' . ucwords($livro->title))  

@section('content')

    <h1>Editar livro</h1>
    <form action="/editado/{{$livro->id}}" method="POST" class="addBookForm">
        @csrf
        @method('PUT')
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" class="addBookFormInput" value="{{$livro->title}}">
        <label for="Author">Autor</label>
        <input type="text" name="author" id="author" class="addBookFormInput" value="{{$livro->author}}">
        <label for="rating">Nota</label>
        <input type="number" name="rating" id="rating" class="addBookFormInput" value="{{$livro->rating}}">
        <label for="review">Resenha</label>
        <textarea name="review" id="review" cols="30" rows="10" >{{$livro->review}}</textarea>
        <input type="submit" value="Enviar" class="subBtn">
    </form>

@endsection