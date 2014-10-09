@extends('layouts.master')

@section('sidebar')
    <p>home's side bar item</p>
@stop

@section('content')
    <h1>Welcome home!</h1>

    <p>from here you can:</p>

    <ul>
    	<li><a href="<?php echo URL::to('/login'); ?>">Login</a></li>
    	<li><a href="<?php echo URL::to('/install_db'); ?>">Install database</a></li>
    	<li><a href="<?php echo URL::to('/check_auth'); ?>">Check login state</a></li>
    	<li><a href="<?php echo URL::to('/environment'); ?>">Check environment</a></li>
    </ul>
@stop