@extends('layouts.app')
<script src="https://kit.fontawesome.com/1b235fbc4a.js" crossorigin="anonymous"></script>
<style>
    .card-box {
        margin-right:20px;
        width: 150px;
        height: 150px;
    }
    .new-game-header {
        background: darkslategrey;
    }
    a > fas {
        text-decoration: none !important;
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
                        <div class="card-body text-center">
                            <a style="text-decoration: none; color:inherit; !important;"href="">
                                <i class="fas fa-plus fa-5x"></i>
                            </a>
                        </div>
                    </div>

                    <div class="card card-box">
                        <div class="card-header"><strong><strong>Game #1</strong></strong></div>
                        <div class="card-body text-center">
                            <a style="text-decoration: none; color:inherit; !important;" href="">
                                <i class="far fa-lightbulb fa-5x"></i>
                            </a>
                        </div>
                    </div>


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
