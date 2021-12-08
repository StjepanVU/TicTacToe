@extends('layouts.app')
<script src="https://kit.fontawesome.com/1b235fbc4a.js" crossorigin="anonymous"></script>
<style>
    .card-box {
        margin-right:20px;
        width: 250px;
        height: 150px;
    }
    .card-body-class:hover {
        border: 2px solid black;
    }
    .games-container {
        border:1px solid black;
    }

</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="card-header d-flex text-center">
            <h4 class="pt-3"><strong>{{ __('Active Games') }}</strong></h4>
            <div class="offset-8 pt-2">

                <form class="d-flex" action="/" method="get">
                    @csrf
                    <input id="title"
                           type="text"
                           class="form-control @error('title') is-invalid @enderror"
                           name="search" value="{{ old('title') }}"
                           required autocomplete="title" autofocus>

                    <button class="btn btn-primary"
                    style="margin-left:5px;">Search</button>
                </form>
            </div>
        </div>
        <div class="col-md-12">

            <div class="row shadow-lg p-3 mb-5 bg-body rounded">

                <!-- NEW GAME CARD -->
                <div class="col-3 p-4">
                    <div class="card card-box">
                        <div class="card-header new-game-header"><strong>New game</strong></div>
                            <a style="text-decoration: none; color:inherit; !important;"href="/game/create">
                                <div class="card-body text-center card-body-class" style="background:#F4FFF3;">
                                        <i class ="fas fa-plus fa-5x new-game"
                                       style="color:#257321;"></i>
                                </div>
                            </a>
                </div>
                </div>
                <!-- NEW GAMES -->
                @foreach($games as $games)
                <div class="col-3 p-4">

                        <div class="card card-box">
                            <div class="card-header text-center"><strong><strong>{{$games->title}}</strong></strong></div>
                            <a style="text-decoration: none; color:inherit; !important;" href="/game/{{$games->id}}">
                                <div class="card-body text-center card-body-class">
                                    <i class="fas fa-dice fa-5x" style="color:#3A5067;"></i>
                                </div>
                            </a>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection



