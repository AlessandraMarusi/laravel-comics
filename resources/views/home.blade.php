@extends('layouts.base')

@section('pageTitle')
    Fumetti
@endsection

@section('mainContent')
    <div class="jumbotron">
        <img src="./img/jumbotron.jpg" alt="Jumbotron">
    </div>
    <div class="container">
        <div class="title">
            <h2>Current series</h2>
        </div>
    </div>
    <div class="container cardContainer">
        @foreach ($comics as $comic)
        <a href="">
            <div class="card">
                <div class="imgContainer">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
    
                <h5>{{$comic['title']}}</h5>
            </div>
        </a>
        @endforeach
       
    </div>
    <button>Load more</button>
@endsection