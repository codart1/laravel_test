@extends('layouts.master')

@section('sidebar')
    <p>Login result's side bar item</p>
@stop

@section('content')
    <h1>YEAHHHHHH!</h1>
    <?php if($isValid) {?>
        <h2>Logged in :3</h2>      
    <?php } else { ?>
        <h2>Fail :( </h2>
    <?php } ?>
@stop