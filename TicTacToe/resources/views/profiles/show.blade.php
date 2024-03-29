@extends('layouts.app')
<script src="https://kit.fontawesome.com/1b235fbc4a.js" crossorigin="anonymous"></script>

@section('content')
<div class="container justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header"><strong>Profile page</strong></div>


            <div class="card-body d-flex">
                <i class="fas fa-user-tie fa-10x" style="color:#3A5067;"></i>
                <ul style="list-style-type: none;" class="ps-5">
                    <li>Username: <strong>{{$user->username}}</strong></li>
                    <hr>
                    <li>Played games: <strong>{{$user->games->count()}}</strong> </li>
                    <hr>
                    <li>Winning percentage: <strong>{{round($user->games->count()/$games->count(),2)*100}}%</strong> </li>
                    <hr>
                </ul>
            </div>


         </div>
    </div>
</div>
@endsection



