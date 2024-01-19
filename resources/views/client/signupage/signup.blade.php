@extends('client.defualtlayout.clientlayout')
@include('client.css.client_signup')
@section('content')
    <div class="container">
        <header>
            <h1>Electric Bill Management System</h1>
        </header>
        <main>
            <form action="{{ route('register.post')}}" method="post">
                @csrf
                <section class="user-details">
                    <h2 class="word-h2">Register Account</h2>
                    <h2 class="word-h2">Admin</h2>
                    <label for="email">Email:</label>
                    @if ($errors->has('email'))
                        <span>{{$errors->first('email')}}</span>
                    @endif
                    <input name="email" type="text" id="email" placeholder="Enter your email">
                    <label for="name">Name:</label>
                    @if ($errors->has('name'))
                        <span>{{$errors->first('name')}}</span>
                    @endif
                    <input name="name" type="text" id="email" placeholder="Enter your name">
                    <label for="type">type:</label>
                    @if ($errors->has('user_type'))
                        <span>{{$errors->first('user_type')}}</span>
                    @endif
                    <input name="type" type="text" id="type" value="Admin">
                    <label for="password">Password:</label>
                    @if ($errors->has('password'))
                        <span>{{$errors->first('password')}}</span>
                    @endif
                    <input name="password" type="password" id="password" placeholder="Enter your password">
                    
                    <button type="submit" id="loginBtn">Confirm</button>
                </section>
            </form>
        </main>
        <footer>
            <div>
                <p>&copy; 2023 Electric Bill Management System. All rights reserved.</p>
            </div>
        </footer>
    </div>
@stop
