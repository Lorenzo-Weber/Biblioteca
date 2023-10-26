@extends('layouts.main')

@section('content')

    @if(!empty($livro->title))

        @section('title', 'Biblioteca - ' . ucwords($livro->title))

        <h1>{{ucwords($livro->title)}}</h1>

        <div class="infobar">
            <div class="author">
                <i class="fa-regular fa-user"></i>
                <p>{{ucwords($livro->author)}}</p>
            </div>
            <div class="info">
                <i class="fa-regular fa-star"></i>
                <p>{{$livro->rating}}</p>
                <i class="fa-regular fa-calendar"></i>
                <p>{{$livro->date}}</p>
            </div>
        </div>

        @if($livro->review != "")

            <div class="review">
                <p>{{ucfirst($livro->review)}}</p>
            </div>
        @else
            <div class="empty">
                <p>Não existe uma resenha ainda!</p>
                <p>Adicione <a href="/editar/{{$livro->id}}"><span class="sweet-blue navoption">clicando aqui</span></a></p>
            </div>
        @endif


        <div class="CRUD">
            <a href="/editar/{{$livro->id}}" class='edit'><i class="fa-regular fa-edit"></i> Editar</a>
            <a href="/apagar/{{$livro->id}}" class='delete'><i class="fa-regular fa-trash-can"></i> Apagar</a>
        </div>
    
    @else
                
        <div class="empty">
            <p>Não existe esse livro ainda!</p>
            <p>Adicione <a href="/adicionar"><span class="sweet-blue navoption">clicando aqui</span></a></p>
        </div>

    @endif
@endsection

