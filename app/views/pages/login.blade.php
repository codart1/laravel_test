@extends('layouts.master')

@section('sidebar')
    <p>Login's side bar item</p>
@stop

@section('content')
    <h1>Login</h1>
    <?php echo Form::open(array('url' => '/auth', 'class' => 'box login')); ?>
        <ul>  
            <li>
            <label for="email">Email</label>  
            <input type="email" name="email" placeholder="yourname@email.com" required></li>  
            <li><label for="password">Password</label>  
            <input type="password" name="password" placeholder="password" required></li>  
            <li>  
            <input type="submit" value="Login"></li>  
        </ul>  
    </form>
@stop