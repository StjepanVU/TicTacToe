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
    <div class="col-md-6 offset-3">
        <div class="card">
            <div class="card-header"><strong>Game</strong></div>


            <div class="card-body d-flex justify-content-center">
                <div class="game-box">

                </div>

                <button class="btn btn-primary">Add New Post</button>
            </div>
         </div>
    </div>
</div>
@endsection



