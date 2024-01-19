@extends('client.defualtlayout.clientlayout')
@section('content')
    <div class="container">
        <header>
            <h1>Electric Bill Management System</h1>
        </header>
        <main>
            <section class="user-details">
                <form action="{{ route('login.post') }}" method="post">
                    @csrf
                    <h2>Admin Details</h2>
                    @if (session('message'))
                        <span>{{session('message')}}</span>
                    @endif
                    <label for="name">Username:</label>
                    @if ($errors->has('name'))
                        <span>{{$errors->first('name')}}</span>
                    @endif
                    <input name="name" type="text" id="name" placeholder="Enter your username">
                    <label for="password">Password:</label>
                    @if ($errors->has('password'))
                    <span>{{$errors->first('password')}}</span>
                    @endif
                    <input  name="password" type="password" id="password" placeholder="Enter your password">
                    
                    <a href="{{ route('loginuser')}}">Login as User</a>
                    <button type="submit" id="loginBtn">Login</button>
                    <a href="{{ route('view.signup') }}" style="margin-left: 20px; text-decoration: none; font-weight: 600;">Create an Account</a>
                </form>
            </section>
        </main>
        <footer>
            <div>
                <p>&copy; 2023 Electric Bill Management System. All rights reserved.</p>
            </div>
        </footer>
    </div>
@stop
