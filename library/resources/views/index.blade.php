@extends('layouts.main')

@section('title', 'Biblioteca - Página inicial')

@section('content')

    <h1>Livros</h1>

    @if (!isset($livros[0]))
        <div class="empty">
            <p>Não existe nenhum livro ainda!</p>
            <p>Adicione <a href="/adicionar"><span class="sweet-blue navoption">clicando aqui</span></a></p>
        </div>
    @else
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Nota</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livros as $livro)
                    <tr>
                        <td><a href="/livro/{{$livro->id}}">{{ucwords($livro->title)}}</a></td>
                        <td><a href="/livro/{{$livro->id}}">{{ucwords($livro->author)}}</a></td>
                        <td><a href="/livro/{{$livro->id}}">{{$livro->rating}}</a></td>
                        <td><a href="/livro/{{$livro->id}}">{{$livro->date}}</a></td>
                    </tr>
                @endforeach
            </tbody>    
        </table>
    @endif
@endsection