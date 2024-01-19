@extends('client.defualtlayout.clientlayout')
@section('content')
    <div class="container">
        <header>
            <h1>Electric Management System</h1>
        </header>
        <main>
            <section class="user-details">
                <form action="{{ route('userchecklogin') }}" method="post">
                    @csrf
                    <h2>User Details</h2>
                    @if (session('message'))
                        <span>{{session('message')}}</span>
                    @endif
                    <label for="AccountNo">Account Number:</label>
                    <input name="AccountNo" type="text" id="AccountNo" placeholder="Enter your Account Number">
                    @if ($errors->has('AccountNo'))
                        <span>{{$errors->first('AccountNo')}}</span>
                    @endif
                    {{-- <label for="password">Password:</label>
                    <input  name="password" type="password" id="password" placeholder="Enter your password">
                    @if ($errors->has('password'))
                        <span>{{$errors->first('password')}}</span>
                    @endif --}}
                    <button type="submit" id="loginBtn">Login</button>
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
