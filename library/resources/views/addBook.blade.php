@extends('layouts.main')

@section('title', 'Biblioteca - Adicionar Livros')

@section('content')

    <h1>Adicionar livro</h1>
    <form action="/adicionado" method="POST" class="addBookForm">
        @csrf
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" class="addBookFormInput">
        <label for="Author">Autor</label>
        <input type="text" name="author" id="author" class="addBookFormInput">
        <label for="rating">Nota</label>
        <input type="number" name="rating" id="rating" class="addBookFormInput">
        <label for="review">Resenha</label>
        <textarea name="review" id="review" cols="30" rows="10"></textarea>
        <input type="submit" value="Enviar" class="subBtn">
    </form>

@endsection