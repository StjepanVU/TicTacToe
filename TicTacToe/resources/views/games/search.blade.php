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
                <h4 class="pt-2"><strong>{{ __('Search result') }}</strong></h4>

            </div>
            <div class="col-md-12">

                <div class="row shadow-lg p-3 mb-5 bg-body rounded">


                        <div class="col-3 p-4">

                            <div class="card card-box">
                                <div class="card-header text-center"><strong>{{$game->title}}</strong></div>
                                <a style="text-decoration: none; color:inherit; !important;" href="/game">
                                    <div class="card-body text-center card-body-class">
                                        <i class="fas fa-dice fa-5x" style="color:#3A5067;"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection



