@extends('layouts.main')

@section('title', 'Biblioteca - Pesquisar Livros')

@section('content')

    <form action="/encontrado" method="GET" class="searchArea">
        <div class="searchBar">
            <label for="title"><i class="fa-solid fa-magnifying-glass searchIcon"></i></label>
            <textarea name="title" id="title" class="bookSearch" ></textarea>
        </div>
        <input type="submit" value="Pesquisar" class="subBtn">
    </form>

@endsection