@extends('layouts.app')
<script src="https://kit.fontawesome.com/1b235fbc4a.js" crossorigin="anonymous"></script>
<style>
    .current-user {
        color:#0FE000;
        transition: 1s;
    }

    .current-user:active {
        color: white;
        transition: 0s;
    }
</style>
@section('content')
<div class="container justify-content-center">
    <div class="col-md-10 offset-1">
        <div class="card align-content-between">
            <div class="card-header text-center"><h2>{{$game->title}}</h2></div>
            <div class="card-body d-flex justify-content-center">
                <div class="text-center">
                <i class="fas fa-user-tie fa-10x current-user" style="color:#0FE000;"></i>
                <h3><strong>{{Auth::user()->username}}</strong></h3>
                </div>
                <strong><h2 class="p-5">VS.</h2></strong>
                <div class="text-center">
                <i class="fas fa-user-tie fa-10x" style="color:#A8A8A8;"></i>
                <h3><strong>{{$game->user->username}}</strong></h3>
                </div>
            </div>


         </div>
    </div>
</div>
@endsection



