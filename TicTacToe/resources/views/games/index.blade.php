@extends('layouts.app')
<script src="https://kit.fontawesome.com/1b235fbc4a.js" crossorigin="anonymous"></script>
<style>
    .card-box {
        margin-right:20px;
        width: 150px;
        height: 150px;
    }
    .card-body-class:hover {
        border: 2px solid black;
    }

</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><strong>{{ __('Game log') }}</strong></div>

                <!-- GAME LOG CONTAINER -->
                <div class="card-body d-flex">

                    <!-- NEW GAME CARD -->
                    <div class="card card-box">
                        <div class="card-header new-game-header"><strong>New game</strong></div>

                        <a style="text-decoration: none; color:inherit; !important;"href="/game/create">
                            <div class="card-body text-center card-body-class" style="background:#F4FFF3;">

                                    <i class ="fas fa-plus fa-5x new-game"
                                       style="color:#257321;">


                                    </i>

                            </div>
                        </a>
                    </div>

                    <!-- CREATED GAMES -->
                    @foreach($games as $games)
                    <div class="card card-box">
                        <div class="card-header text-center"><strong><strong>{{$games->title}}</strong></strong></div>
                        <a style="text-decoration: none; color:inherit; !important;" href="">
                            <div class="card-body text-center card-body-class">

                                    <i class="far fa-lightbulb fa-5x"></i>

                            </div>
                        </a>
                    </div>
                    @endforeach





                </div>


            </div>
        </div>
    </div>
</div>
@endsection


<!--

<div class="card-body">
                    @if (session('status'))
    <div class="alert alert-success" role="alert">
{{ session('status') }}
        </div>
@endif

{{ __('You are logged in!') }}
</div>

-->
