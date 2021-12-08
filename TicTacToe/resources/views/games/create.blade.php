@extends('layouts.app')
<script src="https://kit.fontawesome.com/1b235fbc4a.js" crossorigin="anonymous"></script>
<style>
    .game-box {
        border:1px solid black;
        width:400px;
        height:400px;
    }
</style>
@section('content')
<div class="container justify-content-center">

    <div class="col-md-6 offset-3 ">
        <form action="/game" enctype="multipart/form-data" method="post">
            @csrf
        <div class="card">

            <div class="card-header"><strong>Game Title: </strong>
                <!--INPUT TITLE -->
                <input id="title"
                       type="text"
                       class="form-control @error('title') is-invalid @enderror"
                       name="title" value="{{ old('title') }}"
                       required autocomplete="title" autofocus>

                @error('title')
                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                @enderror
                <button class="btn btn-primary"
                style="margin-left:80%;
                margin-top:1%;">Create game
                </button>



            </div>

            <!-- Game Box -->
            <div class="card-body d-flex justify-content-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Tic_tac_toe.svg/220px-Tic_tac_toe.svg.png"
                width="350px" height="350px">


            </div>
            </div>

            </form>
        </div>


    </div>

</div>
@endsection



