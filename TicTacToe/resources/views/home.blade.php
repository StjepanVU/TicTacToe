@extends('layouts.app')
<style>

</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Game log') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--{{ __('You are logged in!') }}-->
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
